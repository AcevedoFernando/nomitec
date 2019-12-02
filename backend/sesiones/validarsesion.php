<?php  
    session_start();
    if (isset($_SESSION['user'])) {

    } else {        
        header("Location: /nomitec/login.php");
    }
    $user=$_SESSION['user'];
?>