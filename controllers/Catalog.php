<?php

$start = $_POST['start_point'];
$end = $_POST['end_point'];


$catalog = getGoods($connect, 'goods', $start, $end);

if (is_array($catalog)) {
    foreach ($catalog as $item) {
        include "../templates/good_card.php";
    }
} else {
    echo "<div class='catalog_end'><h3 class='catalog_end-text'>Товаров больше нет...</h3></div>";
}
