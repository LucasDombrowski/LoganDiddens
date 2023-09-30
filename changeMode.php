<?php
session_start();
if(!isset($_GET["mode"])){
    if(!isset($_SERVER["HTTP_REFERER"])){
        header("Location: index.php");
    } else {
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    
} else {
    if($_GET["mode"]=="light"){
        $_SESSION["mode"] = "light";
    } else if($_GET["mode"]=="dark"){
        $_SESSION["mode"] = "dark";
    }
}
if(!isset($_SERVER["HTTP_REFERER"])){
    header("Location: index.php");
} else {
    header("Location: ".$_SERVER["HTTP_REFERER"]);
}
?>