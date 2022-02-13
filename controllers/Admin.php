<?php

$user = $_SESSION['user'];

if (!isset($user) || $user['admin'] != 1) {
    header("Location: login.php");
}