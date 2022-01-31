<?php
require_once "../model/PdoM.php";

$user = $_SESSION['user'];
if (!isset($user)) {
    header("Location: login.php");
}

if ($_POST['action'] == 'exit') {
    $_SESSION['user'] = null;
}