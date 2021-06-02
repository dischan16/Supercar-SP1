<?php
// Initialize the session
session_start();
 
unset($_SESSION["admin_loggedin"]);
unset($_SESSION["admin_id"]);
unset($_SESSION["admin_username"]);   

// Redirect to login page

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='index.php';
        </script>");

exit;
?>