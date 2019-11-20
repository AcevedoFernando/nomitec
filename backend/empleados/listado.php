<?php

    require ('../conexionmysql.php');

    $query="SELECT * FROM registroemp";

    $resultado=mysqli_query($connection,$query);    
    
    while($array= mysqli_fetch_array($resultado)){
        
        $id=$array['id'];
        $name=$array['name'];
        $sueldo=$array['sueldo'];
        $horas=$array['horas'];

        echo "<li> ID: ".$id." | ".$name." | $".$sueldo." | Horas: ".$horas."</li><br><hr>";

    }
?>