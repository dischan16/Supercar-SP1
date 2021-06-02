<html>
<head>
    <title>Add Contact</title>
</head>
 
<body>
<?php

include ("config.php");

$nom="";
$email="";
$message="";


$nom=$_POST["nom"];
$email=$_POST["email"];
$message=$_POST["message"];


$ajouter = "INSERT into contactn (nom, email, message)
			VALUES ('$nom','$email','$message')";
mysqli_query($bdd, $ajouter);
			
mysqli_close($bdd);

echo ("<script LANGUAGE='JavaScript'>

        window.alert('Message Envoyé');

        window.location.href='contact_c.php';

        </script>");
?>
<br>
</body>
</html>