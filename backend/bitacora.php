<?php
        include ('conexionmysql.php');
        $query = "SELECT * FROM log ORDER BY id";
        $result = mysqli_query($connection,$query);
                        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

            $idus=$row["id_usuario"];
            $query2 = "SELECT user FROM users WHERE id='$idus'";
            $result2 = mysqli_query($connection,$query2);
            $obj=mysqli_fetch_array($result2);
            $nombreusu=$obj["user"];   
            ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $nombreusu ?></td>
                <td><?php echo $row["accion"] ?></td>
                <td><?php echo $row["fecha"] ?></td>
            </tr>            
<?php   } 
    } 
        mysqli_close($connection);
?>