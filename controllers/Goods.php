<?php

include_once "../model/CatalogM.php";

$goods = new CatalogM();
$catalog = $goods->getCatalog();
$index_catalog = $goods->getIndexCatalog();