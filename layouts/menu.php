
<header>
       <nav class="navbar navbar-expand-md border border-primary fixed-top" style="background-color:#bcdee2">                                   
               <a class="navbar-brand" href="/nomitec/views/home.php"><img src="/nomitec/resources/logont.png" class="img-thumbnail"alt="" width="90" height="90"></a>                   
               
               <ul class="navbar-nav mr-auto"> 

                   <li class="nav-item dropdown mx-3"> 
                       <a class="nav-link dropdown-toggle border border-primary rounded" data-toggle="dropdown" 
                       href="#" role="button" aria-haspopup="true" aria-expanded="false">Empleados</a>
                       <div class="dropdown-menu">                           
                           <a class="dropdown-item" href="/nomitec/views/empleados/empleados.php">Lista de empleados</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="/nomitec/views/empleados/prestamos/prestamos.php">Prestamos</a>                           
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Nominas</a>
                       </div>
                   </li>
                    
                   <li class="nav-item mx-3">
                       <a class="nav-link border border-primary rounded" href="#">Deducciones y bonificaciones</a>                       
                   </li>

                    <?php if($_SESSION['rol']<=2){?>
                   <li class="nav-item dropdown mx-3">
                       <a class="nav-link dropdown-toggle  border border-primary rounded" data-toggle="dropdown" 
                       href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
                       <div class="dropdown-menu">                                                                               
                           <a class="dropdown-item" href="#">Lista de usuarios</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Aréas o Departamentos</a>
                       </div>
                   </li>
                    <?php } ?>


                    <li class="nav-item mx-3">
                       <a class="nav-link border border-primary rounded" 
                       href="/nomitec/views/bitacora.php" >Bitacora</a>                      
                   </li>

                   <li class="nav-item mx-3">
                       <a class="nav-link border border-primary rounded" 
                       href="#" >Reportes</a>                      
                   </li>

                    <li class="nav-item mx-3 border border-primary rounded">
                        <a class="nav-link" href="/nomitec/backend/sesiones/cerrarsesion.php" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesión"><span class="oi oi-account-logout"></span></a>
                    </li>                   
           </ul>    
           <p class="text-muted mr-3">© UFO Tecnologies</p>       
       </nav>
</header> 
<br><br><br><br><br>