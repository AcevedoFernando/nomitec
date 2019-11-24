<?php
    require ('../../backend/sesiones/validarsesion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/home.css">
    <link href="../../open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Nomitec | Registrar Empleado</title>
    
    <style>
        body {
            background-image: url('/nomitec/resources/fondohome.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed
        }
    </style>

</head>
<body>
    <?php
        include ('../../layouts/menu.php');
    ?>



    <div class="jumbotron mx-5">       
            <div class="row justify-content-end">
                <form action="altas.php">
                    <button class="mr-5 btn btn-success" type="submit">Alta de Empleados</button>                
                </form>
            </div> 
            <br>
            <div class="row justify-content-center border border-primary rounded bg-primary mx-1">            
                <h1>Lista de Empleados</h1>             
            </div>
            <div class="jumbotron justify-content-center border border-primary mx-1">
                                    
                    <ul>
                        <?php 
                    
                        include ('../../backend/empleados/listado.php');
                        while($array= mysqli_fetch_array($resultado)){
        
                            $id=$array['id'];
                            $nombre=$array['nombre'];
                            $ape_pat=$array['ape_pat'];
                            $ape_mat=$array['ape_mat'];
                        ?>
                            <li>     
                                <div class="row">
                                        <div class="col">                                                                            
                                            ID:<?php echo " ".$id." | ".$nombre." ".$ape_pat." ".$ape_mat; ?>
                                        </div>
                                        <div class="col">                                                                            
                                            <button class="btn btn-success text-right" type="button" onclick="location.href='/nomitec/views/empleados/ver.php?id=<?php echo $id; ?>'">
                                                Ver
                                            </button>
                                            <button class="btn btn-primary" type="button" onclick="location.href='/nomitec/views/empleados/editar.php?id=<?php echo $id; ?>'">
                                                Editar
                                            </button>
                                            <button class="btn btn-danger" type="button" onclick="location.href='/nomitec/views/empleados/baja.php?id=<?php echo $id; ?>'">
                                                Dar de Baja
                                            </button>                                            
                                        </div>
                                </div>                                                           
                            </li>
                            <hr>
                        <?php                            
                        }
                        mysqli_close($connection);
                        ?>
                </ul>                                                             
            </div>            
    </div>



    <?php
        include ('../../layouts/footer.php');
    ?>
</body>
</html>