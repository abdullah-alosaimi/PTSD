<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    unset($_SESSION['pints']);
    if(session_destroy()){
        header('location: ./index.php');
    }

?>