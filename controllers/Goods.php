<?php
include_once "../model.php";

$point = $_POST['point']? : 9;

$catalog = getGoods($connect, 'goods', $point);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$index_catalog = getSix($connect, 'goods');
$good = getOne($connect, $id, 'goods');