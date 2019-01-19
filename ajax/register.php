<?php 

    // allow to config
    define('__CONFIG__', true);
    // require the config
    require_once '../inc/config.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Always return json file
        header('Content-Type: application/json');
        $return= [];
        // check if user does not exist
        // $return['redirect'] = 'dasboard';
        // make sure user can AND is added
        $return['name'] = 'Moshe Ufnik';

        // Return proper information back to js to redirect
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        // Kill script, redirect user do simthing regardless.
        exit('Fuck off');
    }


    
?>