<?php
  require_once 'controlador/redirectToLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Ayuda</title>
    <link rel="stylesheet" href="css/app.css">
    
  </head>

  <body>
      <nav class="navbar navbar-default">
          <div class="">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="lectura.php">Lectura</a></li>
                <li><a href="mantenimiento.php">Mantenimiento</a></li>
                <li><a href="firmas.php">Firmas</a></li>
                <li class="active"><a href="ayuda.php">Ayuda</a></li>
                <li><a href="index.php">Cerrar Sesión</a></li>
                
              </ul>
             
            </div><!--/.nav-collapse -->
          </div>
        </nav>
<article>
    <div class="section-b">
        <div class="container">
            <h4>FAQ</h4>
            <div class="row">
                <div class="col-md-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ¿Cómo inicio sesión?
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        El usuario debe iniciar sesión con las credenciales que le fueron asignadas.
                                        Debe ingresar:
                                        Correo electrónico asignado para el usuario.
                                        Contraseña
                                        Al haber llenado los campos con los datos anteriores, debe dar click en “Iniciar Sesión”.
                                        
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Cómo funciona el mantenimiento?
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        La página de mantenimiento tiene la función de mostrar al encargado las diferentes operaciones que puede efectuar con los catedráticos, asesores, empleados y cursos.
                                        
                                        Se muestra un menú donde se encuentran las operaciones de: registro, asignación, modificación y eliminación.
                                        
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Cómo ver formularios?
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Dar click en la pestaña de mantemiento y seleccionar cualquier opción de asignar o registrar formulario que permite asignar un asesor a un alumno a través de los IDs.
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          ¿Cómo funcionan las firmas?
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                      <div class="panel-body">
                                          Esta página consta de un formulario donde se ingresan los siguientes datos:
                                          ID de la asignación del curso del catedrático
                                          Fecha del período de clase
                                          La hora de la clase impartida
                                          Tema impartido
                                          
                                          Todo con el fin de poder registrarlos como una constancia de la clase impartida por el catedrático.
                                          
                                      </div>
                                    </div>
                                  </div>
                              </div>    
                </div>
               
            </div>
        </div>
    </div>
    
    

  </article>
  
        


    <footer>
        <div class="container">
            <p>Copyright &copy; 2017 unis-sistemas</p>
        </div>

    </footer>


    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>