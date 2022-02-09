<?php
include_once "../model/CartM.php";

$cart = new CartM();
$goods = $cart->getCart();
$sum = array_values(array_pop($cart->getSum()));
$id = $_POST['id'];

if ($sum[0] == '') {
    $sum[0] = 0;
}

switch ($_POST['action']) {
    case 'add':
        $index = $cart->addGood($id);
        echo $index;
        break;
    case 'count+':
        $value = $_POST['quantity'] + 1;
        $index = $cart->setCount($id, $value);
        break;
    case 'count-':
        if ($_POST['quantity'] > 1) {
            $value = $_POST['quantity'] - 1;
            $index = $cart->setCount($id, $value);
        }
        break;
    case 'delete':
        $index = $cart->delGood($id);
        break;
    case 'clear':
        $index = $cart->clearCart();
        break;
    case 'order':
        $user_id = $_SESSION['user']['id'];
        $query = "SELECT MAX(order_id) FROM `orders` WHERE user_id = $user_id";
        $i = PdoM::Instance()->Select($query);
        $order_id = $i[0]['MAX(order_id)']+1;
        foreach ($goods as $key => $good) {
            $columns = ['`good_id`', '`user_id`', '`count`', '`order_id`'];
            $values = [];
            array_push($values, $good['good_id'], $good['user'], $good['count'], "$order_id");
            $index = $cart->order($columns, $values);
        }
        $cart->clearCart();
        echo $user_id;
        break;
}

if (count($goods) != 0) {
    $_SESSION['cart_empty'] = 0;
} else {
    $_SESSION['cart_empty'] = 1;
}