<?php
//session_start();
//$_SESSION['user'] = 'guest';

const SERVER = "localhost";
const DB = "images";
const LOGIN = "root";
const PASSWORD = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB);