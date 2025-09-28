<?php include_once "../_header.php" ?>
<link rel="stylesheet" href="<?= asset('css/tai_khoan.css') ?>">

<h2>Đăng ký tài khoản</h2>
<form action="insert.php" method="POST">
  <label for="username">Tên đăng nhập:</label><br>
  <input type="text" id="username" name="username" required><br><br>

  <label for="password">Mật khẩu:</label><br>
  <input type="password" id="password" name="password" required><br><br>

  <label for="role">Vai trò:</label><br>
  <select id="role" name="role" required>
    <option value="">-- Chọn vai trò --</option>
    <option value="admin">Quản trị</option>
    <option value="staff">Nhân viên</option>
  </select><br><br>

  <button style="background-color: black; color: white; border: 1px solid black; border-radius: 5px; padding: 2px 4px;">Thêm Tài Khoản</button>
</form>

<?php include_once "../_footer.php" ?>