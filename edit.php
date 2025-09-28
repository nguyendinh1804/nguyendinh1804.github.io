<?php include_once "../_header.php" ?>

<?php
include_once "../../include/common.php";
$id = $_GET["id"] ?? "";
if (empty($id) == true) {
    redirect_to("/admin/tai_khoan");
}
$sql = "SELECT id,username, created_at FROM users WHERE id = ?";
$data = db_select($sql,[$id]);

$data= $data[0];

?>

<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?= $id?> ">
<label> Tên Đăng Nhập:</label>
<input type="text" name="username" value ="<?=$data["username"]?>" >
<br>

<label> Mật Khẩu</label>
<input type="password" name="password" />

<button style="background-color: black; color: white;border: 1px solid black; border-radius: 5px; padding: 2px 4px ;">sửa tài khoản</button>
</form>

<?php include_once "../_footer.php" ?>