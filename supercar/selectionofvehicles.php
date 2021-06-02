<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>VOITURE</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }

        h1 {
            font-family: 'Varela Round', sans-serif;
        }

        .form-control {
            box-shadow: none;
            font-weight: normal;
            font-size: 13px;
        }

        .navbar {
            background: #fff;
            padding-left: 16px;
            padding-right: 16px;
            border-bottom: 1px solid #dfe3e8;
            border-radius: 0;
        }

        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }

        .navbar .navbar-brand {
            padding-left: 0;
            font-size: 20px;
            padding-right: 50px;
        }

        .navbar .navbar-brand b {
            color: #33cabb;
        }

        .navbar .form-inline {
            display: inline-block;
        }

        .navbar a {
            color: #888;
            font-size: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-right: 35px;
            border-color: #dfe3e8;
            border-radius: 4px !important;
            box-shadow: none
        }

        .search-box .input-group-text {
            min-width: 35px;
            border: none;
            background: transparent;
            position: absolute;
            right: 0;
            z-index: 9;
            padding: 7px;
            height: 100%;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
        }

        .navbar .sign-up-btn {
            min-width: 110px;
            max-height: 36px;
        }

        .navbar .dropdown-menu {
            color: #999;
            font-weight: normal;
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar a,
        .navbar a:active {
            color: #888;
            padding: 8px 20px;
            background: transparent;
            line-height: normal;
        }

        .navbar .navbar-form {
            border: none;
        }

        .navbar .action-form {
            width: 280px;
            padding: 20px;
            left: auto;
            right: 0;
            font-size: 14px;
        }

        .navbar .action-form a {
            color: #33cabb;
            padding: 0 !important;
            font-size: 14px;
        }

        .navbar .action-form .hint-text {
            text-align: center;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .navbar .btn-primary,
        .navbar .btn-primary:active {
            color: #fff;
            background: #33cabb !important;
            border: none;
        }

        .navbar .btn-primary:hover,
        .navbar .btn-primary:focus {
            color: #fff;
            background: #31bfb1 !important;
        }

        .navbar .social-btn .btn,
        .navbar .social-btn .btn:hover {
            color: #fff;
            margin: 0;
            padding: 0 !important;
            font-size: 13px;
            border: none;
            transition: all 0.4s;
            text-align: center;
            line-height: 34px;
            width: 47%;
            text-decoration: none;
        }

        .navbar .social-btn .facebook-btn {
            background: #507cc0;
        }

        .navbar .social-btn .facebook-btn:hover {
            background: #4676bd;
        }

        .navbar .social-btn .twitter-btn {
            background: #64ccf1;
        }

        .navbar .social-btn .twitter-btn:hover {
            background: #4ec7ef;
        }

        .navbar .social-btn .btn i {
            margin-right: 5px;
            font-size: 16px;
            position: relative;
            top: 2px;
        }

        .or-seperator {
            margin-top: 32px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }

        .or-seperator b {
            color: #666;
            padding: 0 8px;
            width: 30px;
            height: 30px;
            font-size: 13px;
            text-align: center;
            line-height: 26px;
            background: #fff;
            display: inline-block;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            position: relative;
            top: -15px;
            z-index: 1;
        }

        .navbar .action-buttons .dropdown-toggle::after {
            display: none;
        }

        .form-check-label input {
            position: relative;
            top: 1px;
        }

        @media (min-width: 1200px) {
            .form-inline .input-group {
                width: 300px;
                margin-left: 30px;
            }
        }

        @media (max-width: 768px) {
            .navbar .dropdown-menu.action-form {
                width: 100%;
                padding: 10px 15px;
                background: transparent;
                border: none;
            }

            .navbar .form-inline {
                display: block;
            }

            .navbar .input-group {
                width: 100%;
            }
        }

        h1 {

            color: #4d545f;
            font-family: "Segoe UI";
            letter-spacing: 5px;
            font-size: 45px;
            font-weight: lighter;
            margin-top: 10px;

        }
    </style>
    <script>
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".action-buttons .dropdown-menu", function(e) {
            e.stopPropagation();
        });
    </script>
    </style>

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php" class="navbar-brand">Super<b>Car</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Accueil</a>
                <a href="selectionofvehicles.php" class="nav-item nav-link">Voiture</a>
                <a href="login_c.php" class="nav-item nav-link">Demande d'essai</a>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <a href="contact_c.php" class="nav-item nav-link">Contact</a>
            </div>

            <!-- <div class="navbar-nav ml-auto">
                        <a href="login_admin.php" class="nav-item nav-link">Admin</a>	
                    </div> -->
        </div>
        </div>
    </nav>

    <!-- SWITCHES FOR VEHICLES -->
    <div class="uk-section" style="padding-top: 20px;">

        <div class="">
            <h1 style="color:grey; text-align:center;">IN SHOWROOM</h1>
        </div>

        <br>

        <div class="uk-container" style="padding-top:5px;">

            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li><a href="#">BMW</a></li>
                <li><a href="#">MERCEDES</a></li>
                <li><a href="#">PORSCHE</a></li>
                <li><a href="#">FERRARI</a></li>
                <li><a href="#">ALPINE</a></li>
                <li><a href="#">FORD</a></li>
                <li><a href="#">RENAULT</a></li>
            </ul>

            <!-- TABLE BMW -->


            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-container uk-container-medium">

                        <div class="table-responsive">

                            <form class="uk-container">
                                <input class="form-control uk-input uk-width-1-1" id="myInput1" type="text" onkeyup="myFunction1()" placeholder="Search Voiture...">
                            </form> <br>

                            <script>
                                function myFunction1() {
                                    // Declare variables
                                    var input, filter, table, tr, td, i, txtValue;
                                    input = document.getElementById("myInput1");
                                    filter = input.value.toUpperCase();
                                    table = document.getElementById("myTable1");
                                    tr = table.getElementsByTagName("tr");

                                    for (i = 0; i < tr.length; i++) {
                                        td = tr[i].getElementsByTagName("td")[1];
                                        if (td) {
                                            txtValue = td.textContent || td.innerText;
                                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                tr[i].style.display = "";
                                            } else {
                                                tr[i].style.display = "none";
                                            }
                                        }
                                    }
                                }
                            </script>



                            <table class="table" id="myTable1">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql = "SELECT * FROM voiture WHERE make='BMW' AND status='Active';";
                                    $curseur = mysqli_query($bdd, $sql);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $status = $row['status'];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>

                <!-- TABLE Mercedes -->

                <li>
                    <div class="uk-container uk-container-medium">

                        <form class="uk-container">
                            <input class="form-control uk-input uk-width-1-1" id="myInput2" type="text" onkeyup="myFunction2()" placeholder="Search Voiture...">
                        </form>

                        <script>
                            function myFunction2() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput2");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable2");
                                tr = table.getElementsByTagName("tr");

                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>

                        <div class="table-responsive"> <br>
                            <table class="table" id="myTable2">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql2 = "SELECT * FROM voiture WHERE make='Mercedes' AND status='Active';";
                                    $curseur2 = mysqli_query($bdd, $sql2);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur2)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur2);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>


                <!-- TABLE Porche -->

                <li>
                    <div class="uk-container uk-container-medium">

                        <form class="uk-container">
                            <input class="form-control uk-input uk-width-1-1" id="myInput3" type="text" onkeyup="myFunction3()" placeholder="Search Voiture...">
                        </form>

                        <script>
                            function myFunction3() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput3");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable3");
                                tr = table.getElementsByTagName("tr");

                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>

                        <div class="table-responsive"> <br>
                            <table class="table" id="myTable3">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql3 = "SELECT * FROM voiture WHERE make='Porche' AND status='Active';";
                                    $curseur3 = mysqli_query($bdd, $sql3);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur3)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur3);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>

                <!-- TABLE Ferrari -->

                <li>
                    <div class="uk-container uk-container-medium">

                        <form class="uk-container">
                            <input class="form-control uk-input uk-width-1-1" id="myInput4" type="text" onkeyup="myFunction4()" placeholder="Search Voiture...">
                        </form>

                        <script>
                            function myFunction4() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput4");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable4");
                                tr = table.getElementsByTagName("tr");

                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>

                        <div class="table-responsive"> <br>
                            <table class="table" id="myTable4">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql4 = "SELECT * FROM voiture WHERE make='Ferrari' AND status='Active';";
                                    $curseur4 = mysqli_query($bdd, $sql4);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur4)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur4);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>

                <!-- TABLE Alpine -->

                <li>
                    <div class="uk-container uk-container-medium">

                        <form class="uk-container">
                            <input class="form-control uk-input uk-width-1-1" id="myInput5" type="text" onkeyup="myFunction5()" placeholder="Search Voiture...">
                        </form>

                        <script>
                            function myFunction5() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput5");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable5");
                                tr = table.getElementsByTagName("tr");

                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>

                        <div class="table-responsive"> <br>
                            <table class="table" id="myTable5">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql5 = "SELECT * FROM voiture WHERE make='Alpine' AND status='Active';";
                                    $curseur5 = mysqli_query($bdd, $sql5);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur5)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur5);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>

                <!-- TABLE Ford -->

                <li>
                    <div class="uk-container uk-container-medium">


                        <form class="uk-container">
                            <input class="form-control uk-input uk-width-1-1" id="myInput7" type="text" onkeyup="myFunction7()" placeholder="Search Voiture...">
                        </form>

                        <script>
                            function myFunction7() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput7");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable7");
                                tr = table.getElementsByTagName("tr");

                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>


                        <div class="table-responsive"> <br>
                            <table class="table" id="myTable6">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql7 = "SELECT * FROM voiture WHERE make='Ford' AND status='Active';";
                                    $curseur7 = mysqli_query($bdd, $sql7);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur7)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur7);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>

                <!-- TABLE Renault -->

                <li>
                    <div class="uk-container uk-container-medium">

                        <form class="uk-container">
                            <input class="form-control uk-input uk-width-1-1" id="myInput8" type="text" onkeyup="myFunction8()" placeholder="Search Voiture...">
                        </form>

                        <script>
                            function myFunction8() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput8");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable8");
                                tr = table.getElementsByTagName("tr");

                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>

                        <div class="table-responsive"> <br>
                            <table class="table" id="myTable8">
                                <thead style="background-color:#50d0ae;">
                                    <tr>
                                        <th scope="col" style="color:white">PHOTO</th>
                                        <th scope="col" style="color:white">MODÈLE</th>
                                        <th scope="col" style="color:white">ANNÉE</th>
                                        <th scope="col" style="color:white">TRANSMISSION</th>
                                        <th scope="col" style="color:white">PRIX</th>
                                        <th scope="col" style="color:white">OPTION</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql8 = "SELECT * FROM voiture WHERE make='Renault' AND status='Active';";
                                    $curseur8 = mysqli_query($bdd, $sql8);

                                    $id = "";

                                    while ($row = mysqli_fetch_assoc($curseur8)) {
                                        $id = $row["id"];
                                        $image = $row["image"];
                                        $make = $row["make"];
                                        $prix = $row["prix"];
                                        $m_make = $row["m_make"];
                                        $modele = $row["modele"];
                                        $type = $row["type"];
                                        $annee = $row["annee"];
                                        $couleur = $row["couleur"];
                                        $moteur = $row["moteur"];
                                        $transmission = $row["transmission"];
                                        $cyclindre = $row["cyclindre"];
                                        $capacite = $row["capacite"];
                                        $jante = $row["jante"];
                                        $interieur = $row["interieur"];
                                        $km = $row["km"];
                                        $descrip_s = $row["descrip_s"];
                                        $descrip_e = $row["descrip_e"];
                                        $descrip_i = $row["descrip_i"];
                                        $descrip_m = $row["descrip_m"];
                                        $detail = $row["detail"];
                                        $img_1 = $row["img_1"];
                                        $img_2 = $row["img_2"];
                                        $img_3 = $row["img_3"];
                                        $img_4 = $row["img_4"];
                                        $img_5 = $row["img_5"];
                                        $img_6 = $row["img_6"];
                                    ?>


                                        <tr>
                                            <td><?php echo '<img src="upload/' . $row['image'] . '" width="200px" height="150px" alt="Image">' ?></td>
                                            <td><?php echo $m_make; ?></td>
                                            <td><?php echo $annee; ?></td>
                                            <td><?php echo $transmission; ?></td>
                                            <td><?php echo $prix; ?></td>
                                            <td><a href="car.php?id=<?php echo $row['id']; ?>">VOIR</a></td>
                                        </tr>

                                    <?php
                                    }
                                    mysqli_free_result($curseur8);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div uk-alert>
        <p style="text-align: center;">Copyright © Supercar 2020</p>
        <p class="text-center"><a href="mention.php">Mentions légales</a></p>
    </div>
</body>