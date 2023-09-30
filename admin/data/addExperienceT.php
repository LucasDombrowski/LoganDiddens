<?php
include("../../helpers/database.php");
session_start();
if(!isset($_SESSION["admin"])){
    header("Location: ../index.php");
} else {
    $pdo -> prepare("INSERT INTO resume(type,frenchName,englishName,start,frenchDescription,englishDescription) VALUES(?,?,?,?,?,?)") -> execute([$_POST["type"],$_POST["frenchName"],$_POST["englishName"],$_POST["start"],$_POST["frenchDescription"],$_POST["englishDescription"]]);
    $id = $pdo -> lastInsertId();
    if(isset($_POST["end"])){
        $pdo -> prepare("UPDATE resume SET end = ? WHERE id = ?") -> execute([$_POST["end"],$id]);
    }
    if(isset($_POST["frenchPlace"])){
        $pdo -> prepare("UPDATE resume SET placeFrench = ? WHERE id = ?") -> execute([$_POST["frenchPlace"],$id]);
    }
    if(isset($_POST["englishPlace"])){
        $pdo -> prepare("UPDATE resume SET placeEnglish = ? WHERE id = ?") -> execute([$_POST["englishPlace"],$id]);
    }
    header("Location: ../index.php");

}
?>