<?php

include_once 'autoloader.php';

$action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

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
    default:
        $controller = new IndexC();
}

echo $controller->request($action);
