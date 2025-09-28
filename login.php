<?php 
include_once "../include/common.php";
session_start();

if (is_post_method()){
    $ten_dn = $_POST["ten_dn"] ?? "";
    $mk = $_POST["mk"] ?? "";

    $sql = "SELECT ten_dn, mk FROM taikhoan WHERE ten_dn = ?";
    $data = db_select($sql, [$ten_dn] );

    if (count($data) > 0) {
        $data = $data[0];
        $hash =$data["mk"];

        if (password_verify($mk,$hash) === true) {
            $_SESSION["ten_dn"] = $data["ten_dn"];
            redirect_to("/admin");
            // mật khẩu đúng => gắn tên đăng nhập vào session
        }
        else {
            // mật khẩu sai
            js_alert("mật khẩu không đúng ! ");
        }
    }
    else // sai tên đăng nhập 
    {
        js_alert("Tên đăng nhập hoặc mật khẩu không đúng ! ");
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Hệ Thống</title>
    <link rel="stylesheet" href="css/dn.css">
</head>
<body>

    <form action="" method="POST" >
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="ten_dn" />
        <br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="mk" />
        <br><br>

        <button
            style="background-color: black; color: white; border: 1px solid black; border-radius: 5px; padding: 2px 4px;">Đăng Nhập</button>
    </form>
</body>
</html>