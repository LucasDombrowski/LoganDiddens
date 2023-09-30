<?php
include("../../helpers/database.php");
session_start();
if(!isset($_SESSION["admin"])){
    header("Location: ../index.php");
} else {
    $pdo -> prepare("INSERT INTO partners(idWork,name) VALUES (?,?)") -> execute([$_POST["id"],$_POST["name"]]);
    move_uploaded_file($_FILES["logo"]["tmp_name"],"../../assets/imgs/partnership/".$pdo->lastInsertId().".".pathinfo($_FILES["logo"]["name"])["extension"]);
    header("Location: ../index.php");
}