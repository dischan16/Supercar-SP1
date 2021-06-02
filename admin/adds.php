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

        include("config.php");

        $civilite = "";
        $nom = "";
        $prenom = "";
        $email = "";
        $num_tel = "";
        $selection = "";
        $statue = "";
        $schedule_date = "";
        $c_email = "";
        $c_sms = "";
        $c_tel = "";
        $license = "";



        $civilite = $_POST["civilite"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $num_tel = $_POST["num_tel"];
        $selection = $_POST["selection"];
        $statue = $_POST["statue"];
        $schedule_date = $_POST["schedule_date"];
        $c_email = $_POST["c_email"];
        $c_sms = $_POST["c_sms"];
        $c_tel = $_POST["c_tel"];
        $license = $_POST["license"];



        $ajouter = "INSERT into schedule (civilite,nom,prenom,email,num_tel,selection,statue,schedule_date,c_email,c_sms,c_tel,license)
			VALUES ('$civilite','$nom','$prenom','$email','$num_tel','$selection','$statue','$schedule_date','$c_email','$c_sms','$c_tel','$license')";
        mysqli_query($bdd, $ajouter);

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Demande Ajouter');
        window.location.href='de.php';
        </script>");

        mysqli_close($bdd);


        ?>

</body>

</html>