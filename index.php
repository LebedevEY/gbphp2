<?php

require 'config.php';
$sql = "select * from images";
$res = mysqli_query($connect, $sql);
$images = [];
while ($data = mysqli_fetch_assoc($res)) {
    $images[] = $data;
}


include 'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('gallery.tmpl');
    echo $template->render(array(
        'images' => $images
    ));
}catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}