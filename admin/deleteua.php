<?php


include("db_connect.php");
$id =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM users_admin WHERE id=$id");


echo ("<script LANGUAGE='JavaScript'>
        window.alert('Admin User Supprimer');
        window.location.href='users_admin.php';
        </script>");

?>