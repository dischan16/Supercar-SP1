<?php


include("db_connect.php");
$id =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM accueil WHERE id=$id");

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='accueil.php';
        </script>");
?>