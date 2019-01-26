<?php

    //force the user to be logged in or redirect
    function ForceLogin() {
        if(isset($_SESSION['user_id'])) {
            //show dashboard
            echo $_SESSION['user_id'] . ' is your user id'; 
        } else {
            //redirect
            header('Location: /login.php'); exit;
        }
    }
    
    function ForceLoggedIn() {
        if(isset($_SESSION['user_id'])) {
            //not allowd redirected to dashboard
            header('Location: /dashboard.php '); exit; 
        }
    }
    
?>