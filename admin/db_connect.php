<?php
 
$host="localhost";
$login="root";
$pass="";  
$dbname="supercar";

$bdd = mysqli_connect($host, $login, $pass, $dbname);

if(!$bdd)
{
	echo "Connection failed: " . mysqli_connect_error();
}
else
{
	// echo "Connection Successful";
}

mysqli_set_charset($bdd, "utf8");
?>


<!-- Welcomeob$19 -->

<!-- btsmc0_dischana -->