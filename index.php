<?php

include_once 'autoloader.php';

$action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
$user = new ProfileC();


switch ($_GET['c']) {
    case 'index':
        $controller = new IndexC();
        break;
    case 'catalog':
        $controller = new CatalogC();
        break;
    case 'good':
        $controller = new GoodC();
        break;
    case 'cart':
        $controller = new CartC();
        break;
    case 'profile':
        $controller = new ProfileC();
        break;
    case 'admin':
        if ($user->isAdmin()) {
            $controller = new AdminC();
            break;
        }
    default:
        $controller = new IndexC();
}

$cart = new CartM();
$cart_goods = $cart->getCart();
if (count($cart_goods) != 0) {
    $_SESSION['cart_empty'] = 0;
} else {
    unset($_SESSION['cart_empty']);
}

echo $controller->request($action);
