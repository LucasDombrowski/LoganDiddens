<?php
include("../helpers/database.php");
session_start();
if(isset($_POST["login"]) and isset($_POST["password"])){
    $query = $pdo -> prepare("SELECT * FROM admin WHERE login LIKE ? AND password LIKE SHA1(?)");
    $query -> execute([$_POST["login"],$_POST["password"]]);
    if($query ->fetch()){
        $_SESSION["admin"] = true;
    }   
} 
header("Location: index.php");

?>