<?php

    include('backend/conexionmysql.php');

    if(isset($_POST['user']) and isset($_POST['pass'])){
        $user=$_POST['user'];
        $user=strtolower($user);
        $pass=$_POST['pass'];
        $query = "SELECT * FROM users WHERE user='$user' and BINARY pass='$pass'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        if ($count == 1){            
            $obj=mysqli_fetch_array($result);
            $rol=$obj['rol'];
            $id=$obj['id'];
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['rol'] = $rol;
            $_SESSION['id']= $id;
        }else{
            $fmsg="Tus credenciales son invalidas";

        }
        if (isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            $rol = $_SESSION['rol'];
            $id = $_SESSION['id'];
            header('Location: views/home.php');
        }

    }

    mysqli_close($connection);

?>