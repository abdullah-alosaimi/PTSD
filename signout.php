<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    unset($_SESSION['points']);
    if(session_destroy()){
        header('location: ./index.php');
    }

?>