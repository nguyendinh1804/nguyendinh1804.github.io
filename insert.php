<?php 
include_once "../../include/common.php";
// Lấy dữ liệu từ form
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$role = $_POST["role"] ?? "";

// Mã hóa mật khẩu (nếu cần)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Câu lệnh SQL để thêm tài khoản
$sql = "INSERT INTO users (username, password, role, created_at) 
        VALUES (?, ?, ?, now())";

// Thực thi truy vấn
db_execute($sql, [$username, $hashed_password, $role]);

// Quay về trang danh sách tài khoản
redirect_to("/admin/tai_khoan");
?>