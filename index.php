<?php include_once "../_header.php";
$sql = "SELECT id, username, created_at FROM  users";
$data = db_select($sql);

?>
<link rel="stylesheet" href="<?= asset('css/bang.css') ?>">
<h2 style="text-align:center;"> Danh sách tài khoản</h2>



    <table>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Ngày tạo</th>
        </tr>
        <?php foreach ($data as $tk): ?>
        <tr>
            <td><?= htmlspecialchars($tk['id']) ?></td>
            <td><?= htmlspecialchars($tk['username']) ?></td>
            <td><?= htmlspecialchars($tk['created_at']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<a href="create.php"
    style="display: inline-block; padding: 5px 10px; background-color: black; color: white; text-decoration: none; border-radius: 5px;">
    Đăng ký thêm tài khoản</a>


<?php include_once "../_footer.php" ?>