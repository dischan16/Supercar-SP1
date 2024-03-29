<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {

    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='welcome.php';
    </script>");

    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Veuillez entrer le nom d’utilisateur.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Veuillez saisir votre mot de passe.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($bdd, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page

                            echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='welcome.php';
                            </script>");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "Le mot de passe que vous avez entré n’était pas valide.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "Aucun compte trouvé avec ce nom d’utilisateur.";
                }
            } else {
                echo "Oops! Quelque chose s’est mal passé. S’il vous plaît essayer à nouveau plus tard.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($bdd);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

</head>

<body>
    <h2 class="uk-modal-title uk-text-small uk-alert-danger" style="text-align: center" uk-alert>VOUS DEVEZ ÊTRE CONNECTÉ POUR ÊTRE EN MESURE DE PLANIFIER UN ESSAI ROUTIER</h2>
    <div class="uk-container">
        <h2 class="text-center">Connectez-vous</h2>
        <p class="text-center">Remplissez vos informations d’identification pour vous connecter</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="uk-form <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text" style="text-align: center">Nom d'utilisateur</label><br>
                <input type="text" name="username" class="form-control uk-input uk-form-width-medium" style="text-align:center" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> <br>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text" style="text-align: center">Mot de passe</label><br>
                <input type="password" name="password" class="form-control uk-input uk-form-width-medium" style="text-align: center">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="uk-button uk-button-secondary uk-align-center" value="Envoyer">
            </div>
            <p class="text-center">Vous n’avez pas de compte? <a href="register_c.php">Inscrivez-vous dès maintenant</a></p>

            <p class="text-center"><a href="index.php">Retour Accueil</a></p>
        </form>
    </div>
    </div>
    </div>
    </div>
</body>

</html>