<?php
$name = $_GET['img'];
include 'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('fullsize.tmpl');
    echo $template->render(array(
        'name' => $name
    ));
} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}
