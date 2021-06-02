<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>


</head>
 
<body>

<div class="uk-container">
<?php
  
include ("config.php");

$civilite="";
$nom="";
$prenom="";
$email="";
$num_tel="";
$selection="";
$schedule_date="";
$c_email="";
$c_sms="";
$c_tel="";
$license="";



$civilite=$_POST["civilite"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$num_tel=$_POST["num_tel"];
$selection=$_POST["selection"];
$schedule_date=$_POST["schedule_date"];
$c_email=$_POST["c_email"];
$c_sms=$_POST["c_sms"];
$c_tel=$_POST["c_tel"];
$license=$_POST["license"];



$ajouter = "INSERT into schedule (civilite,nom,prenom,email,num_tel,selection,schedule_date,c_email,c_sms,c_tel,license)
			VALUES ('$civilite','$nom','$prenom','$email','$num_tel','$selection','$schedule_date','$c_email','$c_sms','$c_tel','$license')";
mysqli_query($bdd, $ajouter);
			
mysqli_close($bdd);

echo "<br> Demande envoyer !";

echo "<br> Supercar vous fera la confirmation par mail pour l'heure disponible.";

echo "<br>";

?>
<div>
<br>
<a class="uk-button uk-button-secondary" href="index.php">Retour Accueil</a>

</body>
</html>