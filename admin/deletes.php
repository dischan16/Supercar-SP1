<?php


include("db_connect.php");
$idclient =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM schedule WHERE idclient=$idclient");

echo ("<script LANGUAGE='JavaScript'>
        window.alert('Demande Supprimer');
        window.location.href='de.php';
        </script>");
?>