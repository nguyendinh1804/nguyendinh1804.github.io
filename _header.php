<?php include_once __DIR__ ."/../include/common.php";

//session_start();
//if (empty($_SESSION["ten_dn"])) {
//    redirect_to("/pages/login.php");
//}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset('css/admin.css')?>" >
</head>
<style>
    
</style>
<body>
    <nav class="nav">
        <ul>
            <li><a href="/QLTV/admin/qls"><nav>Tên các loại sách</nav></a></li>
            <li><a href="/QLTV/admin/qldg"><nav>Tên các độc giả</nav></a></li>
            <li><a href="/QLTV/admin/qltg_tl"><nav>Tên các thể loại và tác giả</nav></a></li>
        </ul>
    </nav>
    