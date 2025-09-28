<?php
include_once "../../include/common.php";

$id   = $_GET["id"] ?? "";
$type = $_GET["type"] ?? ""; // 'author' hoặc 'category'

if (empty($id) || !in_array($type, ['author', 'category'])) {
    redirect_to("/admin/qltg_tl/index.php");
}

if ($type === 'author') {
    $sql = "DELETE FROM authors WHERE id = ?";
} else {
    $sql = "DELETE FROM categories WHERE id = ?";
}

db_execute($sql, [$id]);

redirect_to("/admin/qltg_tl/index.php");
?>