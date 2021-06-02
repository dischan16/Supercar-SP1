<?php


include("db_connect.php");
$idclient =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM contactn WHERE idclient=$idclient");

echo ("<script LANGUAGE='JavaScript'>
        window.alert('Contact Supprimer');
        window.location.href='contact.php';
        </script>");
?>