<?php


include("db_connect.php");
$id =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM voiture WHERE id =$id");

echo ("<script LANGUAGE='JavaScript'>
        window.alert('Voiture Supprimer');
        window.location.href='voiture.php';
        </script>");

?>