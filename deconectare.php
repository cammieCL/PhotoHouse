<?php
    session_start();
    ///$_SESSION['photo'] = false; $_SESSION['loggedin'] = false;
    unset($_SESSION); session_destroy();
    header("location: index.php");
?>