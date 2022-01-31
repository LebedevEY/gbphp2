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
    }
}

if ($user['email'] != null) {
    $i = $USER->getUser($user['email'], $user['password']);
    $_SESSION['user'] = $i[0];
}

if ($_SESSION['user']['name'] != null && $_SESSION['user']['admin'] == 1) {
    header("Location: admin.php");
} elseif ($_SESSION['user']['name'] != null) {
    header("Location: profile.php");
}
//var_dump($_SESSION['user']);
//if ($_POST['action'] == 'exit') {
//    $_SESSION['user'] = null;
//}