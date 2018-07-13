<?php
$mysqli = new mysqli("localhost", "root", "", "roma");
$mysqli->set_charset("utf8");
if(mysqli_connect_error()){
    die("ошибка подключения");
}
require_once 'application/bootstrap.php';