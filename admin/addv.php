<html>

<head>
    <title>Add Voiture</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>


</head>

<body>

    <div class="uk-container">
        <?php

        include("config.php");

        $image = "";
        $make = "";
        $prix = "";
        $m_make = "";
        $modele = "";
        $type = "";
        $annee = "";
        $couleur = "";
        $moteur = "";
        $transmission = "";
        $cyclindre = "";
        $capacite = "";
        $jante = "";
        $interieur = "";
        $km = "";
        $descrip_s = "";
        $descrip_e = "";
        $descrip_i = "";
        $descrip_m = "";
        $detail = "";
        $status = "";
        $img_1 = "";
        $img_2 = "";
        $img_3 = "";
        $img_4 = "";
        $img_5 = "";
        $img_6 = "";




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
        $descrip_s =$_POST["descrip_s"];
        $descrip_s = str_replace("'","\'",$descrip_s);
        $descrip_e =$_POST["descrip_e"];
        $descrip_e = str_replace("'","\'",$descrip_e);
        $descrip_i =$_POST["descrip_i"];
        $descrip_i = str_replace("'","\'",$descrip_i);
        $descrip_m =$_POST["descrip_m"];
        $descrip_m = str_replace("'","\'",$descrip_m);
        $detail =$_POST["detail"];
        $detail = str_replace("'","\'",$detail);
        $status = $_POST["status"];
        $img_1 = $_FILES["img_1"]['name'];
        $img_2 = $_FILES["img_2"]['name'];
        $img_3 = $_FILES["img_3"]['name'];
        $img_4 = $_FILES["img_4"]['name'];
        $img_5 = $_FILES["img_5"]['name'];
        $img_6 = $_FILES["img_6"]['name'];




        $ajouter = "INSERT into voiture (image,make,prix,m_make,modele,type,annee,couleur,moteur,transmission,cyclindre,capacite,jante,interieur,km,descrip_s,descrip_e,descrip_i,descrip_m,detail,status,img_1,img_2,img_3,img_4,img_5,img_6)
			VALUES ('$image','$make','$prix','$m_make','$modele','$type','$annee','$couleur','$moteur','$transmission','$cyclindre','$capacite','$jante','$interieur','$km','$descrip_s','$descrip_e','$descrip_i','$descrip_m','$detail','$status','$img_1','$img_2','$img_3','$img_4','$img_5','$img_6')";
        mysqli_query($bdd, $ajouter);

        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
        move_uploaded_file($_FILES["img_1"]["tmp_name"], "upload/" . $_FILES["img_1"]["name"]);
        move_uploaded_file($_FILES["img_2"]["tmp_name"], "upload/" . $_FILES["img_2"]["name"]);
        move_uploaded_file($_FILES["img_3"]["tmp_name"], "upload/" . $_FILES["img_3"]["name"]);
        move_uploaded_file($_FILES["img_4"]["tmp_name"], "upload/" . $_FILES["img_4"]["name"]);
        move_uploaded_file($_FILES["img_5"]["tmp_name"], "upload/" . $_FILES["img_5"]["name"]);
        move_uploaded_file($_FILES["img_6"]["tmp_name"], "upload/" . $_FILES["img_6"]["name"]);

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Voiture Ajouter');
        window.location.href='voiture.php';
         </script>");

        mysqli_close($bdd);

        ?>
    <div>

</body>
</html>