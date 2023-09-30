<?php
include("../../helpers/database.php");
session_start();
if(!isset($_SESSION["admin"]) or !isset($_GET["id"])){
    header("Location: ../index.php");
} else {
    $query = $pdo -> prepare("SELECT * FROM resume WHERE id = ?");
    $query -> execute([$_GET["id"]]);
    if($query -> fetch()){
        $pdo -> prepare("DELETE FROM resume WHERE id = ?") -> execute([$_GET["id"]]);
    }
    header("Location: ../addExperience.php");
}
?>