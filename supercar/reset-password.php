<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='login_c.php';
        </script>");

    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($bdd, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();

                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Password Reset');

                window.location.href='login_c.php';
                 </script>");

                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
<h2 class="uk-modal-title uk-text-small uk-alert-danger" style="text-align: center" uk-alert>RESET PASSWORD</h2>
    <div class="uk-container">
        <br><br>
        <h2 class="text-center">Réinitialiser le mot de passe</h2>
        <p class="text-center">Veuillez remplir ce formulaire pour réinitialiser votre mot de passe.</p><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text"  style="text-align:center">Nouveau mot de passe</label><br><br>
                <input type="password" name="new_password" class="form-control uk-input uk-form-width-medium" style="text-align: center"  value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
 
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>" style="text-align:center;">
                <label class="uk-form-label uk-text-bold" for="form-stacked-text"  style="text-align:center">Confirmez le mot de passe</label><br><br>
                <input type="password" name="confirm_password" class="form-control uk-input uk-form-width-medium" style="text-align: center" >
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group text-center">
                <input type="submit" class="btn btn-dark" value="Envoyer">
                <p><a href="welcome.php">Retour Demande D'essai</a></p>
            </div>


        </form>
    </div>    
</body>
</html>