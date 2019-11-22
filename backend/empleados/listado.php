<?php

    require ('../conexionmysql.php');

    $query="SELECT * FROM empleado";

    $resultado=mysqli_query($connection,$query);    
        
?>