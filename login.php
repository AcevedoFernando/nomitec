<?php

  require('backend/sesiones/validacion.php');

?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">     
    <meta name="generator" content="Jekyll v3.8.5">
    <title>NomiTec | Iniciar Sesión</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" background="resources/fondosingin.jpg">

    <form class="form-signin" method="POST">    <!--Inicio del formulario de inicio de sesión-->
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert">
                    <?php echo $fmsg; ?> 
                </div>
                <?php } ?>
        <img class="mb-4" src="resources/logont.png" class="img-thumbnail" alt="" width="130" height="130">
        <h1 class="h3 mb-3 font-weight-normal font-weight-bold">!Bienvenido¡</h1>
        <input type="user" id="user" name="user" class="form-control" placeholder="Usuario" required >
        <input type="password" id="pass" name="pass"class="form-control" placeholder="Contraseña" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
        <p class="mt-5 mb-3 text-muted">© UFO Tecnologies, 2019-2020</p>
    </form>     <!--Fin de formulario de inicio de sesión-->


</body></html>