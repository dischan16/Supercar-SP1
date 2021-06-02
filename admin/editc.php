<?php
include("db_connect.php");

if(isset($_POST['update'])){
$idclient=$_POST['idclient'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];
$message = str_replace("'","\'",$message);



$result= mysqli_query($bdd, "UPDATE contactn SET  nom='$nom', email='$email' , message='$message' where idclient=$idclient ");

echo ("<script LANGUAGE='JavaScript'>
        window.alert('Contact Modifier');
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Supercar Admin</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">




</head>
<body>


<br><br>


<form  name="form1" method="post" action= "editc.php">
<table  border=0>

<div class="container">
<h3 class="text-center"><a href="contact.php" class="fas fa-long-arrow-alt-right"> Retour Contact</a></h3> <br>
    <div class="row">
        <div class="col">

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" value="<?php echo $nom;?>" placeholder="Entrer votre nom">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control checking_email" value="<?php echo $email;?>" placeholder="Entrer votre email">
            <small class="error_email" style="color: red;"></small>
        </div>

        <div class="form-group">
            <label>Message</label>
            <input type="text" name="message" class="form-control" value="<?php echo $message;?>" placeholder="Entrer votre message">
        </div>


        <tr>
            <td> <Input type="hidden" name="idclient" value=<?php echo $_GET['id'];?>></Input></td>
           <p class="text-center"><button type="submit" name="update" value="update" class="btn btn-dark">Submit</button></p>
        </tr>




        </div>
    </div>
</div>
</table>
</form>

</body>
</html>