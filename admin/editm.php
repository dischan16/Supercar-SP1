<?php
include("db_connect.php");

if(isset($_POST['update'])){
$idclient=$_POST['idclient'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];


$result= mysqli_query($bdd, "UPDATE contactn SET  nom='$nom', email='$email' , message='$message' where idclient=$idclient ");

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='contact.php';
         </script>");
}

?>
<?php


$idclient=$_GET['id'];
$result=mysqli_query($bdd,"SELECT * FROM contactn WHERE idclient=$idclient");
while( $row = mysqli_fetch_array($result)){

$nom= $row['nom'];
$email=$row['email'];
$message=$row['message'];
}

?>
<!DOCTYPE html>
<html>
<head>
<title> Mise a jour </title>
</head>
<body>
<a href="contact.php"> Acceuil</a>

<br><br>


<form  name="form1" method="post" action= "editc.php">
<table  border=0>
<tr>
<td> Nom</td>
<td> <Input type="text" name="nom" value="<?php echo $nom;?>"/></td>
</tr>

<tr>
<td> Email</td>
<td> <Input type="text" name="email" value="<?php echo $email;?>"></Input></td>
</tr>
<tr>
<td> Message</td>
<td> <Input type="text" name="message" value="<?php echo $message;?>"></Input></td>
</tr>
<tr>
<td> <Input type="hidden" name="idclient" value=<?php echo $_GET['id'];?>></Input></td>
<td> <Input type="submit" name="update" value="update"></Input></td>
</tr>


</table>
</form>

</body>
</html>