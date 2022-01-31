<?php
include "../model/ProductM.php";

$id = $_GET['id'];
$product = new ProductM();
$good = $product->getGood($id);