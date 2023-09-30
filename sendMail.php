<?php
include("helpers/mailer.php");

if(!isset($_POST["name"]) or !isset($_POST["subject"]) or !isset($_POST["message"]) or !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    if(isset($_SERVER["HTTP_REFERER"])){
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    } else {
        header("Location: index.php");
    }
} else {
    $message = $_POST["message"]."<br>Répondre à cette adresse: ".$_POST["email"];
    sendmail($_POST["name"],$_POST["subject"],$message);
    if(isset($_SERVER["HTTP_REFERER"])){
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    } else {
        header("Location: index.php");
    }
}
?>