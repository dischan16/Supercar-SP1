<?php
// Initialize the session
session_start();

include('config.php');

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Welcome</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>

    <style type="text/css">
        body {
            background-color: #e9ebef;
        }
    </style>

    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
</head>

<body>

    <div class="uk-container-small" style="margin-left:15px; padding-top:15px">
        <h5>Salut <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Bienvenue sur notre page demande d'essaie
            <br>Veuillez remplir le formulaire ci-dessous pour votre connaitre choix
        </h5>
        Outils:
        <p>
            <a href="reset-password.php" class="btn btn-success">Réinitialiser votre mot de passe</a> <br><br>
            <a href="logout.php" class="btn btn-danger">Retour Accueil</a>
        </p>
    </div>



    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div class="uk-width-1-2">
            <div class="uk-container">
                <!-- <h2 class="uk-text-small uk-alert-danger" style="text-align: center" uk-alert>VEUILLEZ REMPLIR LE FORMULAIRE SI DESSOUS</h2> -->
                <form class="uk-form-horizontal" action="schedule.php" method="post" name="form1">
            </div>
        </div>
    </div>

    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div>
            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
                <label class="uk-form-label"><b>Civilité</b></label>
                <div class="uk-form-controls">
                    <select class="uk-select uk-width-1-2" id="form-horizontal-select" name="civilite" required>
                        <option value="Mr">Mr</option>
                        <option value="Mme">Mme</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <label class="uk-form-label"><b>Nom</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="nom" type="text" placeholder="Entrer votre nom" pattern="^[A-Za-z]+[A-Za-z]+" required>
                </div>
            </div>



            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <label class="uk-form-label" for="form-horizontal-text"><b>Prénom</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="prenom" type="text" placeholder="Entrer votre prénom" pattern="^[A-Za-z]+[A-Za-z]+" required>
                </div>
            </div>

            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <label class="uk-form-label" for="form-horizontal-text"><b>Email</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="email" type="email" placeholder="Entrer votre email" required>
                </div>
            </div>


            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <label class="uk-form-label" for="form-horizontal-text"><b>Numero télephone</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="num_tel" type="text" placeholder="Entrer votre numero télephone" pattern="^[+][0-9]{11}" required>
                </div>
            </div>


            <!-- <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <label class="uk-form-label" for="form-horizontal-text"><b>Selection</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="selection" type="text" placeholder="Entrer votre email">

                    <select class="form-control  uk-width-1-2" name="selection" required>

                        <option value="BMW 3.0CSL">BMW 3.0CSL</option>
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
                        <option value="RENAULT CLIO WILLIAMS 2">RENAULT CLIO WILLIAMS 2</option>
                        <option value="MERCEDES SL 320">MERCEDES SL 320</option>
                    </select>
                </div>
            </div> -->

            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <label class="uk-form-label" for="form-horizontal-text"><b>Sélectionez votre vehicule</b></label>
                <div class="uk-form-controls">
                    <?php
                    require "db_connect.php";
                    $resultSet = $bdd->query("SELECT m_make, couleur  FROM voiture WHERE Status = 'active'");
                    ?>

                    <select class=" uk-select uk-width-1-2" name="selection" required>
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


            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-width-large">
                <div class="uk-form-label"><b></b></div>

            </div>
        </div>


        <div>
            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-width-large">
                <label class="uk-form-label" for="schedule_date"><b>Date</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input datepicker uk-width-1-2" type="text" class="datepicker" placeholder="Entrer une date" id="datepicker" name="schedule_date" required>
                </div>
            </div>
            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
                <div class="uk-form-controls">
                    <div class="uk-form-label"><b>Êtes vous agé de 18 ans et titulaire d'un permis de conduire</b></div>
                    <div class="uk-form-controls uk-form-controls-text">

                        <div class="uk-form-controls uk-form-controls-text">

                            <label><input class="uk-radio uk-text-meta" type="radio" name="license" <?php if (isset($license) && $license == "oui") echo "checked"; ?> value="oui" required> Oui</label><br>

                            <label><input class="uk-radio uk-text-meta" type="radio" name="license" <?php if (isset($license) && $license == "non") echo "checked"; ?> value="non" required> Non</label><br>
                        </div>

                    </div>
                </div>
            </div>

            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
                <div class="uk-form-controls">
                    <div class="uk-form-label"><b>Contactez moi par Email</b></div>
                    <div class="uk-form-controls uk-form-controls-text">

                        <label><input class="uk-radio" type="radio" name="c_email" <?php if (isset($c_email) && $c_email == "oui") echo "checked"; ?> value="oui" required> Oui</label><br>

                        <label><input class="uk-radio" type="radio" name="c_email" <?php if (isset($c_email) && $c_email == "non") echo "checked"; ?> value="non" required> Non</label><br>

                    </div>
                </div>
            </div>


            <div class="uk-margin uk-margin-left uk-margin-right">
                <div class="uk-form-label"><b>Contactez moi par Message</b></div>
                <div class="uk-form-controls uk-form-controls-text">


                    <label><input class="uk-radio" type="radio" name="c_sms" <?php if (isset($c_sms) && $c_sms == "oui") echo "checked"; ?> value="oui" required> Oui</label><br>

                    <label><input class="uk-radio" type="radio" name="c_sms" <?php if (isset($c_sms) && $c_sms == "non") echo "checked"; ?> value="non" required> Non</label><br>
                </div>
            </div>


            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
                <div class="uk-form-label"><b>Contactez moi par Télephone</b></div>
                <div class="uk-form-controls uk-form-controls-text">

                    <label><input class="uk-radio" type="radio" name="c_tel" <?php if (isset($c_tel) && $c_tel == "oui") echo "checked"; ?> value="oui" required> Oui</label><br>

                    <label><input class="uk-radio" type="radio" name="c_tel" <?php if (isset($c_tel) && $c_tel == "non") echo "checked"; ?> value="non" required> Non</label><br>
                </div>
            </div>


            <button class="uk-button uk-button-secondary uk-margin uk-margin-xlarge-left uk-margin-bottom" type="submit" value="SUBMIT">Envoyer</button>
        </div>


        </form>


</body>

</html>