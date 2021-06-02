<?php


include("db_connect.php");
$id =$_GET['id'];
$result = mysqli_query($bdd, "DELETE FROM service WHERE id =$id");

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='service_admin.php';
        </script>");

?>