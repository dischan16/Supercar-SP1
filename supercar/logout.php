<?php
// Initialize the session
session_start();

 
unset($_SESSION["loggedin"]);
unset($_SESSION["id"]);
unset($_SESSION["username"]); 
 
// Redirect to login page

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='index.php';
        </script>");

exit;
?>