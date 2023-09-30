<?php
include("../../helpers/database.php");
session_start();
if(!isset($_SESSION["admin"])){
    header("Location: ../index.php");
} else {
    $query = $pdo -> prepare("INSERT INTO works(frenchName,englishName,category,frenchDescription,englishDescription, softwares) VALUES (?,?,?,?,?,?)") -> execute([$_POST["frenchName"],$_POST["englishName"],$_POST["category"],$_POST["frenchDescription"],$_POST["englishDescription"],$_POST["softwares"]]);
    $id = $pdo -> lastInsertId();
    if(isset($_POST["link"])){
        $pdo -> prepare("UPDATE works SET link = ? WHERE id = ?") -> execute([$_POST["link"],$id]);
    }
    mkdir("../../assets/imgs/projects/$id");
    for($i=0;$i<count($_FILES["images"]["name"]);$i++){
        move_uploaded_file($_FILES["images"]["tmp_name"][$i],"../../assets/imgs/projects/$id/".$_FILES["images"]["name"][$i]);
    }
    header("Location: ../index.php");
}
?>