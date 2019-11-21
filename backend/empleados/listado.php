<?php

    require ('../conexionmysql.php');

    $query="SELECT * FROM registroemp";

    $resultado=mysqli_query($connection,$query);    
        
?>