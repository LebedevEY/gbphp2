<?php

include_once "../model/UserM.php";
$USER = new UserM();
$check = false;

$user = [
    'name' => strip_tags($_POST['name']),
    'surname' => strip_tags($_POST['surname']),
    'email' => strip_tags($_POST['email']),
    'password' => (strrev(md5($_POST['email'])) . md5($_POST['password']))
];

if ($user['name'] != null) {
    $i = $USER->Registration($user, $user['email']);
    if ($i == false) {
        $check = true;
    } else {
        $_SESSION['user'] = $user;
    }
}