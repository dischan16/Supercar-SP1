<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Veuillez entrer un nom d’utilisateur.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users_admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($bdd, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ce nom d’utilisateur est déjà pris.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Quelque chose s’est mal passé. S’il vous plaît essayer à nouveau plus tard.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "S’il vous plaît entrer un mot de passe.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Le mot de passe doit avoir au moins 6 caractères.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer le mot de passe.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Mot de passe ne correspondait pas.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users_admin (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($bdd, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page

                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='index.php';
                 </script>");
                 
            } else{
                echo "Quelque chose s’est mal passé. S’il vous plaît essayer à nouveau plus tard.";
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
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<h2 class="uk-modal-title uk-text-small uk-alert-danger" style="text-align: center" uk-alert>REMPLIR LE FORMULAIRE D’INSCRIPTION</h2>
    <div class="uk-container">
        <h2 class="text-center">S'enregistrer</h2>
        <p class="text-center">Veuillez remplir ce formulaire pour créer un compte Admin</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text"  style="text-align:center">Nom d'utilisateur</label><br>
                <input type="text" name="username" class="form-control uk-input uk-form-width-medium" style="text-align: center" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text"  style="text-align:center">Mot de passe</label><br>
                <input type="password" name="password" class="form-control uk-input uk-form-width-medium" style="text-align: center" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text"  style="text-align:center">Confirmer le mot de passe</label><br>
                <input type="password" name="confirm_password" class="form-control uk-input uk-form-width-medium" style="text-align: center" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <p class="text-center">
                <button type="submit" class="uk-button uk-button-secondary">Envoyer</button> 
                <button type="reset"  class="uk-button uk-button-danger">Réinitialiser</button>
            </p>

            <p class="text-center">Vous avez déjà un compte ? <a href="index.php">Connectez-vous ici</a></p>
        </form>
    </div>    
</body>
</html>