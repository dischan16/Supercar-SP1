<?php
include("db_connect.php");


$image = '';
$make = '';
$prix = '';
$m_make = '';
$modele = '';
$type = '';
$annee = '';
$couleur = '';
$moteur = '';
$transmission = '';
$cyclindre = '';
$capacite = '';
$jante = '';
$interieur = '';
$km = '';
$descrip_s = '';
$descrip_e = '';
$descrip_i = '';
$descrip_m = '';
$detail = '';
$status = '';
$img_1 = '';
$img_2 = '';
$img_3 = '';
$img_4 = '';
$img_5 = '';
$img_6 = '';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $image = $_FILES["image"]['name'];
    $make = $_POST["make"];
    $prix = $_POST["prix"];
    $m_make = $_POST["m_make"];
    $modele = $_POST["modele"];
    $type = $_POST["type"];
    $annee = $_POST["annee"];
    $couleur = $_POST["couleur"];
    $moteur = $_POST["moteur"];
    $transmission = $_POST["transmission"];
    $cyclindre = $_POST["cyclindre"];
    $capacite = $_POST["capacite"];
    $jante = $_POST["jante"];
    $interieur = $_POST["interieur"];
    $km = $_POST["km"];
    $descrip_s = $_POST["descrip_s"];
    $descrip_s = str_replace("'", "\'", $descrip_s);
    $descrip_e = $_POST["descrip_e"];
    $descrip_e = str_replace("'", "\'", $descrip_e);
    $descrip_i = $_POST["descrip_i"];
    $descrip_i = str_replace("'", "\'", $descrip_i);
    $descrip_m = $_POST["descrip_m"];
    $descrip_m = str_replace("'", "\'", $descrip_m);
    $detail = $_POST["detail"];
    $detail = str_replace("'", "\'", $detail);
    $status = $_POST["status"];
    $img_1 = $_FILES["img_1"]['name'];
    $img_2 = $_FILES["img_2"]['name'];
    $img_3 = $_FILES["img_3"]['name'];
    $img_4 = $_FILES["img_4"]['name'];
    $img_5 = $_FILES["img_5"]['name'];
    $img_6 = $_FILES["img_6"]['name'];

    $result = mysqli_query($bdd, "UPDATE voiture SET image='$image',make='$make',prix = '$prix',m_make='$m_make',modele='$modele',type='$type',annee='$annee',couleur='$couleur',moteur='$moteur',transmission='$transmission',cyclindre='$cyclindre',capacite='$capacite',jante='$jante',interieur='$interieur',km='$km',descrip_s='$descrip_s',descrip_e='$descrip_e',descrip_i='$descrip_i',descrip_m='$descrip_m',detail='$detail',status='$status',img_1='$img_1',img_2='$img_2',img_3='$img_3',img_4='$img_4',img_5='$img_5',img_6='$img_6' WHERE id='$id' ");
    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    move_uploaded_file($_FILES["img_1"]["tmp_name"], "upload/" . $_FILES["img_1"]["name"]);
    move_uploaded_file($_FILES["img_2"]["tmp_name"], "upload/" . $_FILES["img_2"]["name"]);
    move_uploaded_file($_FILES["img_3"]["tmp_name"], "upload/" . $_FILES["img_3"]["name"]);
    move_uploaded_file($_FILES["img_4"]["tmp_name"], "upload/" . $_FILES["img_4"]["name"]);
    move_uploaded_file($_FILES["img_5"]["tmp_name"], "upload/" . $_FILES["img_5"]["name"]);
    move_uploaded_file($_FILES["img_6"]["tmp_name"], "upload/" . $_FILES["img_6"]["name"]);

    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Voiture Modifier');
        window.location.href='voiture.php';
         </script>");
}

?>
<?php

$id = $_GET['id'];
$result = mysqli_query($bdd, "SELECT * FROM voiture WHERE id=$id");

while ($_row = mysqli_fetch_array($result)) {

    $image = $_row['image'];
    $make = $_row['make'];
    $prix = $_row['prix'];
    $m_make = $_row['m_make'];
    $modele = $_row['modele'];
    $type = $_row['type'];
    $annee = $_row['annee'];
    $couleur = $_row['couleur'];
    $moteur = $_row['moteur'];
    $transmission = $_row['transmission'];
    $cyclindre = $_row['cyclindre'];
    $capacite = $_row['capacite'];
    $jante = $_row['jante'];
    $interieur = $_row['interieur'];
    $km = $_row['km'];
    $descrip_s = $_row['descrip_s'];
    $descrip_e = $_row['descrip_e'];
    $descrip_i = $_row['descrip_i'];
    $descrip_m = $_row['descrip_m'];
    $detail = $_row['detail'];
    $status = $_row['status'];
    $img_1 = $_row['img_1'];
    $img_2 = $_row['img_2'];
    $img_3 = $_row['img_3'];
    $img_4 = $_row['img_4'];
    $img_5 = $_row['img_5'];
    $img_6 = $_row['img_6'];
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
    <h3 class="text-center"><a href="voiture.php"> Retour Voiture</a></h3>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="container">

            <div class="modal-body">
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="image" name="image" class="form-control" value="<?php echo $image; ?>">
                </div>
                <div class="form-group">
                    <label>Make</label>
                    <input type="text" name="make" class="form-control" placeholder="Enter make" value="<?php echo $make; ?>">
                </div>

                <div class="form-group">
                    <label>Prix</label>
                    <input type="text" name="prix" class="form-control" placeholder="Enter Prix" value="<?php echo $prix; ?>">
                </div>

                <div class="form-group">
                    <label>Main Make</label>
                    <input type="text" name="m_make" class="form-control" placeholder="Enter Main Make" value="<?php echo $m_make; ?>">
                </div>
                <div class="form-group">
                    <label>Modele</label>
                    <input type="text" name="modele" class="form-control" placeholder="Enter modele" value="<?php echo $modele; ?>">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Enter type" value="<?php echo $type; ?>">
                </div>
                <div class="form-group">
                    <label>Annee</label>
                    <input type="text" name="annee" class="form-control" placeholder="Enter annee" value="<?php echo $annee; ?>">
                </div>
                <div class="form-group">
                    <label>Couleur</label>
                    <input type="text" name="couleur" class="form-control" placeholder="Enter couleur" value="<?php echo $couleur; ?>">
                </div>
                <div class="form-group">
                    <label>Moteur</label>
                    <input type="text" name="moteur" class="form-control" placeholder="Enter moteur" value="<?php echo $moteur; ?>">
                </div>
                <div class="form-group">
                    <label>Transmission</label>
                    <input type="text" name="transmission" class="form-control" placeholder="Enter transmission" value="<?php echo $transmission; ?>">
                </div>

                <div class="form-group">
                    <label>Cyclindre</label>
                    <input type="text" name="cyclindre" class="form-control" placeholder="Enter cyclindre" value="<?php echo $cyclindre; ?>">
                </div>

                <div class="form-group">
                    <label>Capacite</label>
                    <input type="text" name="capacite" class="form-control" placeholder="Enter capacite" value="<?php echo $capacite; ?>">
                </div>
                <div class="form-group">
                    <label>Jante</label>
                    <input type="text" name="jante" class="form-control" placeholder="Enter jante" value="<?php echo $jante; ?>">
                </div>
                <div class="form-group">
                    <label>Interieur</label>
                    <input type="text" name="interieur" class="form-control" placeholder="Enter interieur" value="<?php echo $interieur; ?>">
                </div>
                <div class="form-group">
                    <label>kilometrage</label>
                    <input type="text" name="km" class="form-control" placeholder="Enter kilometrage" value="<?php echo $km; ?>">
                </div>
                <div class="form-group">
                    <label>D_Sommaire</label>
                    <textarea name="descrip_s" class="form-control" placeholder="Enter descrip_sommaire"> <?php echo $descrip_s; ?> </textarea>
                </div>
                <div class="form-group">
                    <label>D_Exterieur</label>
                    <textarea name="descrip_e" class="form-control" placeholder="Enter descrip_exterieur"><?php echo $descrip_e; ?> </textarea>
                </div>
                <div class="form-group">
                    <label>D_Interieur</label>
                    <textarea name="descrip_i" class="form-control" placeholder="Enter descrip_interieur"><?php echo $descrip_i; ?>  </textarea>
                </div>

                <div class="form-group">
                    <label>D_Moteur</label>
                    <textarea name="descrip_m" class="form-control" placeholder="Enter Description_Moteur"><?php echo $descrip_m; ?>  </textarea>
                </div>

                <div class="form-group">
                    <label>Detail</label>
                    <input type="text" name="detail" class="form-control" placeholder="Enter detail" value="<?php echo $detail; ?>">
                </div>


                <div class="form-group">
                    <label>Status</label>
                    <div class id="status" name="status">

                        <?php if ($status == 'YES') { ?>
                            <label><input class="uk-radio" type="radio" value="Active" name="status"> Active</label><br>
                            <label><input class="uk-radio" type="radio" value="Inactive" name="status" checked> Inactive</label>
                        <?php } else { ?>
                            <label><input class="uk-radio" type="radio" value="Active" name="status" checked> Active</label><br>
                            <label><input class="uk-radio" type="radio" value="Inactive" name="status"> Inactive</label>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="img_1" name="img_1" class="form-control" value="<?php echo $img_1; ?>">
                </div>

                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="img_2" name="img_2" class="form-control" value="<?php echo $img_2; ?>">
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="img_3" name="img_3" class="form-control" value="<?php echo $img_3; ?>">
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="img_4" name="img_4" class="form-control" value="<?php echo $img_4; ?>">
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="img_5" name="img_5" class="form-control" value="<?php echo $img_5; ?>">
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" id="img_6" name="img_6" class="form-control" value="<?php echo $img_6; ?>">
                </div>

                <Input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></Input>
                <p class="text-center"><Input type="submit" class="btn btn-dark" name="update" value="update"></Input></p>

    </form>

    </div>

</body>

</html>