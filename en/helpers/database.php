<?php
$host = "localhost";
$db = "portfolio";
$user = "root";
$passwd = "";
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>