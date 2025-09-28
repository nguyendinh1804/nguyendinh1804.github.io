<?php include_once "../_header.php";

// Tổng số sách
$total_books = db_select("SELECT COUNT(*) AS total FROM books")[0]['total'];

// Tổng số lượt đang mượn
$total_borrowing = db_select("SELECT COUNT(*) AS total FROM borrows WHERE status = 'Đang mượn'")[0]['total'];

// Tổng số lượt đã trả
$total_returned = db_select("SELECT COUNT(*) AS total FROM borrows WHERE status = 'Đã trả'")[0]['total'];

// Độc giả mượn nhiều nhất
$top_reader_data = db_select("
    SELECT readers.name, COUNT(*) AS total
    FROM borrows
    JOIN readers ON borrows.reader_id = readers.id
    WHERE borrows.status = 'Đang mượn'
    GROUP BY reader_id
    ORDER BY total DESC
    LIMIT 1
");

$top_reader = $top_reader_data[0] ?? null;
?>

<h2 style="text-align:center;">Thống kê thư viện</h2>
<ul style="max-width:600px; margin:auto; font-size:18px;">
    <li>Tổng số sách: <strong><?= $total_books ?></strong></li>
    <li>Số lượt đang mượn: <strong><?= $total_borrowing ?></strong></li>
    <li>Số lượt đã trả: <strong><?= $total_returned ?></strong></li>
    <?php if ($top_reader): ?>
        <li>Độc giả mượn nhiều nhất: <strong><?= htmlspecialchars($top_reader['name']) ?></strong> (<?= $top_reader['total'] ?> lượt)</li>
    <?php else: ?>
        <li>Độc giả mượn nhiều nhất: <strong>Chưa có dữ liệu</strong></li>
    <?php endif; ?>
</ul>

<?php include_once "../_footer.php"; ?>