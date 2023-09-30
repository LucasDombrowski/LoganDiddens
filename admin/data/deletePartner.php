<?php
include("../../helpers/database.php");
session_start();
if(!isset($_SESSION["admin"]) or !isset($_GET["id"])){
    header("Location: ../index.php");
} else {
    $query = $pdo -> prepare("SELECT * FROM partners WHERE id = ?");
    $query -> execute([$_GET["id"]]);
    if($query->fetch()){
        $pdo -> prepare("DELETE FROM partners WHERE id = ?") -> execute([$_GET["id"]]);
    }
    header("Location: ../addPartner.php");
}
?>