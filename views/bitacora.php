<?php

require ('../backend/sesiones/validarsesion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <link href="../open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>NomiTec | Bitacora</title>

    <style>
        body {
            background-image: url('/nomitec/resources/home.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>
<body style="background-color:honeydew">

<?php
include '../layouts/menu.php';
?>

<div class="p-3 mt-3 mx-5 text-center border border-primary rounded" 
     style="background-color:#bcdee2"><h3>Historial</h3></div>  

<div class="jumbotron mx-5">       
    <div class="row justify-content-start">
        <form action="empleados.php">
            <button class="ml-5 btn btn-info" type="submit">Regresar</button>                
        </form>
    </div><br>
    <table class="table table-responsive-md">
        <tr>
            <td>id</td>
            <td>usuario</td>
            <td>accion</td>
            <td>fecha</td>
        </tr>
    <?php
    include ('conexionmysql.php');
    $query = "SELECT * FROM log ORDER BY id";
    $result = mysqli_query($connection,$query);
    $obj=mysqli_fetch_array($result);
    $id=$obj['id'];
    $id_usuario=$obj['id_usuario'];
    $accion=$obj['accion'];
    $fecha=$obj['fecha'];
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
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
    <!--<div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control text-center" value="<?php //echo $id.' '.$id_usuario.' '.$accion' '.$fecha; ?>" >
    </div>   -->
     </table>
</div>




<?php
include '../layouts/footer.php';
?>

</body>
</html>