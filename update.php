<?php
    include_once "../../include/common.php";
   
    $id = $_POST["id"] ?? "";
    $username = $_POST["username"] ?? "";
    $password =$_POST["passwork"]?? "";
   
    if (empty($mk))
    {
        $sql = " UPDATE users SET username = ? ,password = ? WHERE id =?";
    
    db_execute($sql,[$username,$id]);
    }
    else {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = " UPDATE users SET username = ? ,password = ? WHERE id =?";
        db_execute($sql,[$username,$id]);
    }
    
    redirect_to("/admin/tai_khoan");
    ?>