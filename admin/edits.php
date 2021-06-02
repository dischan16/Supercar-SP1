<?php
include("db_connect.php");

$civilite= '';
$nom='';
$prenom='';
$email='';
$num_tel='';
$selection='';
$statue='';
$schedule_date='';
$c_email='';
$c_sms='';
$c_tel='';
$license='';
$idclient='';

if(isset($_POST['update'])){
$idclient=$_POST['id'];
$civilite=$_POST["civilite"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$num_tel=$_POST["num_tel"];
$selection=$_POST["selection"];
$statue=$_POST["statue"];
$schedule_date=$_POST["schedule_date"];
$c_email=$_POST["c_email"];
$c_sms=$_POST["c_sms"];
$c_tel=$_POST["c_tel"];
$license=$_POST["license"];

$result= mysqli_query($bdd, "UPDATE schedule SET  civilite = '$civilite',nom = '$nom',prenom = '$prenom',email = '$email',num_tel= '$num_tel',selection = '$selection',statue='$statue', schedule_date = '$schedule_date', c_email = '$c_email',c_sms = '$c_sms',c_tel = '$c_tel',license = '$license' where idclient=$idclient ");


echo ("<script LANGUAGE='JavaScript'>
        window.alert('Demande Modifier');
        window.location.href='de.php';
        </script>");
}

?>
<?php

$idclient=$_GET['id'];
$result=mysqli_query($bdd,"SELECT * FROM schedule WHERE idclient=$idclient");

while( $row = mysqli_fetch_array($result)){

$civilite= $row['civilite'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$email=$row['email'];
$num_tel=$row['num_tel'];
$selection=$row['selection'];
$statue=$row['statue'];
$schedule_date=$row['schedule_date'];
$c_email=$row['c_email'];
$c_sms=$row['c_sms'];
$c_tel=$row['c_tel'];
$license=$row['license'];

}

?>
<!DOCTYPE html>
<html>
<head>
<title> Mise a jour </title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

</head>
<body>

<!-- New Form -->

<br>
<h3 class="text-center"><a href="de.php"> Retour Demande d'essai</a></h3> 
<br>

<form action="" method="POST">

<div class="container">
    <div class="row">
        <div class="col">

      
            <div class="form-group">
                <label>Civilité</label>
                <input type="text" name="civilite" class="form-control" placeholder="Entrer votre prénom" value="<?php echo $civilite;?>">
            </div>

            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom" value="<?php echo $nom;?>">
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prénom" value="<?php echo $prenom;?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Entrer votre email" value="<?php echo $email;?>">
                <small class="error_email" style="color: red;"></small>
            </div>
         
            <div class="form-group">
                <label>Numero télephone </label>
                <input type="text" name="num_tel" class="form-control" placeholder="Entrer votre numero télephone" value="<?php echo $num_tel;?>">
            </div>

            <!-- <div class="form-group">
                <label>Sélectionez votre vehicule</label>
                <select class="form-control" name="selection">
                    <option value="BMW 3.0CSL" >BMW 3.0CSL</option>
                    <option value="BMW 2002">BMW 2002</option>
                    <option value="BMW 2002 A">BMW 2002 A</option>
                    <option value="BMW E3 3.3LIA">BMW E3 3.3LIA</option>
                    <option value="BMW E30 M3">BMW E30 M3</option>
                    <option value="ALPINE GTA V6 TURBO">ALPINE GTA V6 TURBO</option>
                    <option value="FORD CAPRI STAMPEDE">FORD CAPRI STAMPEDE</option>
                    <option value="PORCHE 968 COUPE">PORCHE 968 COUPE</option>
                    <option value="PORCHE 356B 1600S">PORCHE 356B 1600S</option>
                    <option value="PORCHE 930 TURBO">PORCHE 930 TURBO</option>
                    <option value="PORCHE 944 S2">PORCHE 944 S2</option>
                    <option value="PORCHE 964 3.6 TURBO">PORCHE 964 3.6 TURBO</option>
                    <option value="PORCHE 964 C2 CAB WTL">PORCHE 964 C2 CAB WTL</option>
                    <option value="PORCHE 993 GT2 EVO">PORCHE 993 GT2 EVO</option>
                    <option value="FERRARI DINO 246/GT">FERRARI DINO 246/GT</option>
                    <option value="FERRARI MARANELLO">FERRARI MARANELLO</option>
                    <Option value="RENAULT CLIO WILLIAMS 2">RENAULT CLIO WILLIAMS 2</Option>
                    <option value="ALFA ROMEO S.Z">ALFA ROMEO S.Z</option>
                    <option value="ALFA ROMEO S.Z A">ALFA ROMEO S.Z A</option>
                    <option value="MERCEDES SL 320">MERCEDES SL 320</option>
                </select>
            </div> -->

             <div class="uk-margin uk-margin-left uk-margin-right uk-form-width-large">
                <label class="uk-form-label" type="selection" for="form-horizontal-select">Sélectionez votre vehicule</label>
                <div class="form-group">
                    <?php
                    require "db_connect.php";
                    $resultSet = $bdd->query("SELECT m_make, couleur  FROM voiture WHERE Status = 'active'");
                    ?>

                    <select class="form-control" id="form-horizontal-select" name="selection" required name="info">
                        <?php
                        while ($rows = $resultSet->fetch_assoc()) {
                            $m_make = $rows['m_make'];
                            $couleur = $rows['couleur'];
                            echo "<option value='$m_make'>$m_make ($couleur)";
                        }
                        ?>
                    </select>
                </div>
            </div>




            <div class="form-group">
                <label>Statue Demande D'essai</label>
                <select class="form-control" name="statue">
                    <option value="Reservé">Reservé</option>
                    <option value="En cours">En cours</option>
                    <option value="Terminé">Terminé</option>
                </select>
            </div>
            
    </div>

        <div class="col">

            <div class="form-group">
                <label>Date </label>
                <input type="date" name="schedule_date" class="datepicker form-control" placeholder="Select Date" id="datepicker" class="form-control" placeholder="Selecter une date" value="<?php echo $schedule_date;?>">
            </div>
              
            <br>

            <div class="form-check-inline">
            <label class="form-check-label" for="radio2" > Contactez moi par Email <br>
                <input type="radio" class="form-check-input" id="oui"  name="c_email" <?php if (isset($c_email) && $c_email=="oui") echo "checked";?> value="oui">Oui <br>
                <input type="radio" class="form-check-input" id="non" name="c_email" <?php if (isset($c_email) && $c_email=="non") echo "checked";?> value="non">Non <br><br>
            </label>
            </div>

            <br>

            <div class="form-check-inline">
            <label class="form-check-label" for="radio2"> Contactez moi par Message <br>
                <input type="radio" class="form-check-input" id="oui" name="c_sms" <?php if (isset($c_sms) && $c_sms=="oui") echo "checked";?> value="oui">Oui <br>
                <input type="radio" class="form-check-input" id="non" name="c_sms" <?php if (isset($c_sms) && $c_sms=="non") echo "checked";?> value="non">Non <br><br>
            </label>
            </div>

            <br>    

            <div class="form-check-inline">
            <label class="form-check-label" for="radio2"> Contactez moi par Télephone <br>
                <input type="radio" class="form-check-input" id="oui" name="c_tel" <?php if (isset($c_tel) && $c_tel=="oui") echo "checked";?> value="oui">Oui <br>
                <input type="radio" class="form-check-input" id="non"  name="c_tel" <?php if (isset($c_tel) && $c_tel=="non") echo "checked";?> value="non">Non <br> <br>
            </label>
            </div>

            <br>

            <div class="form-check-inline">
            <label class="form-check-label" for="radio2">  Agé de 18 ans + permis de conduire <br>
                <input type="radio" class="form-check-input" id="oui" name="license" <?php if (isset($license) && $license=="oui") echo "checked";?> value="oui">Oui <br>
                <input type="radio" class="form-check-input" id="non" name="license" <?php if (isset($license) && $license=="non") echo "checked";?> value="non">Non <br><br>
            </label>
            </div>
             

     
        </div>
    </div>
</div>

</div>

    <Input type="hidden" name="id" value=<?php echo $_GET['id'];?>></Input>
    <p class="text-center"><Input type="submit" class="btn btn-dark" name="update" value="update"></Input></p>

</form>

</div>

</body>
</html>

