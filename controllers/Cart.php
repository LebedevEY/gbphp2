<?php
include_once "../model/CartM.php";
$cart = new CartM();
$goods = $cart->getCart();

if ($_POST['action'] == 'add') {
    $id = $_POST['id'];
    $index = $cart->addGood($id);
    echo $index;
}

//$count = 1;
//$id = $_POST['id'];
//$cart = Pd($connect, 'cart');
//
//$sum = getSum($connect, 'price', 'count', 'cart');
//
//if ($sum[0] == '') {
//    $sum[0] = 0;
//}
//
//if (count($cart) != 0) {
//    $_SESSION['cart_empty'] = 0;
//} else {
//    $_SESSION['cart_empty'] = 1;
//}
//
//if (isset($_POST['action'])  and $_POST['action'] === 'add') {
//    $good = getOne($connect, $id, 'goods');
//    $cart_sql = "SELECT * FROM `cart` WHERE `good_id` = {$id}";
//    $cart_res = mysqli_query($connect, $cart_sql);
//    $i = mysqli_fetch_assoc($cart_res);
//
//    if (isset($i)){
//        $count = $i['count'];
//        $count++;
//        cartCounter($connect, $id, $count);
//    } else {
//        $sql = "INSERT INTO `cart` (`id`, `good_id`, `name`, `img`, `price`, `count`, `user`) VALUES (NULL, '{$id}', '{$good['name']}', '{$good['img']}', '{$good['price']}', '{$count}', '{$user}');";
//        $res = mysqli_query($connect, $sql);
//    }
//}
//
//if (isset($_POST['action'])  and $_POST['action'] === 'delete') {
//    $sql = "DELETE FROM `cart` WHERE `id` = {$id}";
//    $res = mysqli_query($connect, $sql);
//}
//
//if (isset($_POST['action']) and $_POST['action'] === 'clear') {
//    $sql = "DELETE FROM `cart`";
//    $res = mysqli_query($connect, $sql);
//}
//
//if (isset($_POST['action'])) {
//    $cart_sql = "SELECT * FROM `cart` WHERE `good_id` = {$id}";
//    $cart_res = mysqli_query($connect, $cart_sql);
//    $i = mysqli_fetch_assoc($cart_res);
//    if (isset($i) and $_POST['action'] == 'count+') {
//        $count = $i['count'];
//        $count++;
//        cartCounter($connect, $id, $count);
//    } elseif (isset($i) and $_POST['action'] == 'count-') {
//        if ($count > 0) {
//            $count = $i['count'];
//            $count--;
//            cartCounter($connect, $id, $count);
//        }
//    }
//}