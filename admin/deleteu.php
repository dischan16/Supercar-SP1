<?php


include("db_connect.php");
$id =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM users WHERE id=$id");

echo ("<script LANGUAGE='JavaScript'>
        window.alert('User Supprimer');
        window.location.href='users.php';
        </script>");

?>