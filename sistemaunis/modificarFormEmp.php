<?php
  require_once 'controlador/redirectToLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Modificar Empleado</title>
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
                      <li class="active"><a href="mantenimiento.php">Mantenimiento</a></li>
                      <li><a href="firmas.php">Firmas</a></li>
                      <li><a href="ayuda.php">Ayuda</a></li>
                      <li><a href="logout.php">Cerrar Sesión</a></li>
                      
                    </ul>
                   
                  </div><!--/.nav-collapse -->
                </div>
              </nav>

    <div class="title-bar">
            <div class="container">
                <h1>MODIFICAR EMPLEADO</h1>
                
            </div>
        </div><br>
        <div class="row container">
                <div class="col-lg-6">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                    <input type="text" class="form-control" placeholder="Ingrese ID...">
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
    </div>

   <div class="main">
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">ID EMPLEADO</h4>
                        </div>
                        <div class="panel-body">
                            <form>
                             <div class="form-group">
                                <label>CARNÉ</label>
                                <input type="number" class="form-control" placeholder="ingrese carne" required="required">
                            </div>
                            <div class="form-group">
                                <label>NOMBRES</label>
                                <input type="text" class="form-control" placeholder="ingrese nombre" required="required">
                            </div>
                            <div class="form-group">
                                <label>APELLIDOS</label>
                                <input type="text" class="form-control" placeholder="ingrese apellido" required="required">
                            </div>
                            <div class="form-group">
                                    <label>DPI</label>
                                    <input type="number" class="form-control" placeholder="ingrese DPI" required="required">
                            </div>
                            <div class="form-group">
                                <label>NIT</label>
                                <input type="text" class="form-control" placeholder="ingrese NIT" required="required">
                            </div>
                            <div class="form-group">
                                <label>FECHA DE NACIMIENTO</label>
                                <input type="date" class="form-control" placeholder="ingrese fecha" required="required">
                            </div>
                            <div class="form-group">
                                <label>PROFESION</label>
                                <input type="text" class="form-control" placeholder="ingrese preofesion" required="required">
                            </div>
                            <div class="form-group">
                                <label>NUMERO DE COLEGIADO</label>
                                <input type="number" class="form-control" placeholder="ingrese numero" required="required">
                            </div>
                            <div class="form-group">
                                <label>COLEGIO PROFESIONAL DE EGRESO</label>
                                <input type="text" class="form-control" placeholder="ingrese" required="required">
                            </div>
                            <label>ESTADO CIVIL</label><br>
                           <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type" id="type" value="casado" class="sr-only" required>CASADO</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type" id="type" value="soltero" class="sr-only" required>SOLTERO</label>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label>NACIONALIDAD</label>
                                <input type="text" class="form-control" placeholder="ingrese nacionalidad" required="required">
                            </div>
                            <label>ES ASESOR</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type1" id="type1" value="si" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type1" id="type1" value="no" class="sr-only" required>NO</label>
                                </div>
                            </div><br>
                            <label>ES CATEDRÁTICO</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type2" id="type2" value="si" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type2" id="type2" value="no" class="sr-only" required>NO</label>
                                </div>
                            </div><br>

                            <!--info de todos-->
                            <div class="form-group">
                                    <label>EMAIL PERSONAL</label>
                                    <input type="email" class="form-control" placeholder="ingrese email" required="required">
                                </div>
                            <div class="form-group">
                                <label>EMAIL DE LA UNIVERSIDAD</label>
                                <input type="email" class="form-control" placeholder="ingrese email" required="required">
                            </div>
                            <div class="form-group">
                                <label>DIRECCIÓN DE VIVIENDA</label>
                                <input type="text" class="form-control" placeholder="ingrese direccion" required="required">
                            </div>
                            <div class="form-group">
                                <label>TELEFONO CELULAR</label>
                                <input type="number" class="form-control" placeholder="ingrese numero" required="required">
                            </div>
                            <div class="form-group">
                                <label>TELEFONO DE CASA</label>
                                <input type="number" class="form-control" placeholder="ingrese numero" required="required">
                            </div>                                                 

                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    MODIFICAR
                            </button>
                        </form>

                        
                        </div>
                        
                    </div>
               </div>
              
               
           </div>
       </div>
   </div>


      
      

  


    <footer>
        <div class="container">
            <p>Copyright &copy; 2017 unis-sitemas</p>
        </div>

    </footer>


    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>