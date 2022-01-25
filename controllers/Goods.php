<?php
include_once "../model/CatalogM.php";

$goods = new CatalogM();
$catalog = $goods->getCatalog();


//
//$catalog = getGoods($connect, 'goods', 0, 10);
//$index_catalog = getGoods($connect, 'goods', 0, 7);
//
//if (isset($_GET['id'])) {
//    $id = $_GET['id'];
//}
//
//$good = getOne($connect, $id, 'goods');