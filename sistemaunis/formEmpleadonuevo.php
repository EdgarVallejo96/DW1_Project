<?php  
 $message = '';  
 $error = '';  

 if(isset($_POST["submit"])){
switch(empty($POST)) {
    case empty($_POST["carne"]):
    $error = "<label class='text-danger'>Ingrese carné</label>";
    break;

    case empty($_POST["nombres"]):
    $error = "<label class='text-danger'>Ingrese nombres</label>";
    break;

    case empty($_POST["apellidos"]):
    $error = "<label class='text-danger'>Ingrese apellidos</label>";  
    break;

    case empty($_POST["dpi"]):
    $error = "<label class='text-danger'>Indique dpi</label>";
    break;

    case empty($_POST["nit"]):
    $error = "<label class='text-danger'>Indique nit</label>";
    break;

    case empty($_POST["fecha_nacimiento"]):
    $error = "<label class='text-danger'>Indique fecha</label>";
    break;

    case empty($_POST["profesion"]):
    $error = "<label class='text-danger'>Ingrese profesion</label>";
    break;

    case empty($_POST["numero_colegiado"]):
    $error = "<label class='text-danger'>Indique colegiado</label>";
    break;

    case empty($_POST["colegio_profesional"]):
    $error = "<label class='text-danger'>ndique colegio</label>";
    break;

    case empty($_POST["estado_civil"]):
    $error = "<label class='text-danger'>ndique estado</label>";
    break;

    case empty($_POST["nacionalidad"]):
    $error = "<label class='text-danger'>ndique nacionalidad</label>";
    break;

    case empty($_POST["es_asesor"]):
    $error = "<label class='text-danger'>ndique asesor</label>";
    break;

    case empty($_POST["es_catedratico"]):
    $error = "<label class='text-danger'>ndique catedratico</label>";
    break;

    case empty($_POST["tipo_correo1"]):
    $error = "<label class='text-danger'>Ingrese correo</label>";
    break;

    case empty($_POST["tipo_correo2"]):
    $error = "<label class='text-danger'>Ingrese correo</label>";
    break;

    case empty($_POST["Address"]):
    $error = "<label class='text-danger'>Ingrese correo</label>";
    break;

    case empty($_POST["tipo_telefono1"]):
    $error = "<label class='text-danger'>Ingrese telefono</label>";
    break;

    case empty($_POST["tipo_telefono2"]):
    $error = "<label class='text-danger'>Ingrese telefono</label>";
    break;
}
    $json_array = array(
        'carne'                 =>     $_POST['carne'],  
        'nombres'               =>     $_POST["nombres"],  
        'apellidos'             =>     $_POST["apellidos"],
        'dpi'                   =>     $_POST["dpi"],  
        'nit'                   =>     $_POST["nit"],  
        'fecha_nacimiento'      =>     $_POST["fecha_nacimiento"],
        'profesion'             =>     $_POST["profesion"],  
        'numero_colegiado'      =>     $_POST["numero_colegiado"],  
        'colegio_profesional'   =>     $_POST["colegio_profesional"],
        'estado_civil'          =>     $_POST["estado_civil"],
        'nacionalidad'          =>     $_POST["nacionalidad"],  
        'es_asesor'             =>     $_POST["es_asesor"],  
        'es_catedratico'        =>     $_POST["es_catedratico"],
        'tipo_correo1'          =>     $_POST["tipo_correo1"],  
        'tipo_correo2'          =>     $_POST["tipo_correo2"],  
        'Address'               =>     $_POST["Address"],
        'tipo_telefono1'        =>     $_POST["tipo_telefono1"],
        'tipo_telefono2'        =>     $_POST["tipo_telefono2"],
    );
   
    $json_format = json_encode($json_array, JSON_PRETTY_PRINT);  
    
                $json_file = '../sistemaunis/json/EmpleadoNuevo.json';
    
                if(file_put_contents($json_file, $json_format)){
                    echo "Archivo JSON creado.";
                } else {
                    echo "Error creando arhivo JSON.";
                }
    
                include '../sistemaunis/controlador/c_EmpleadoNuevo.php';
     }

/*
    if(file_exists('empleado.json'))  
    {  
        
         $current_data = file_get_contents('empleado.json');  
         $array_data = json_decode($current_data, true);  
         $extra = array( 
            'carne'     =>     $_POST["carne"],
              'nombres'               =>     $_POST["nombres"],  
              'apellidos'          =>     $_POST["apellidos"],                
              'dpi'               =>     $_POST["dpi"],  
              'nit'          =>     $_POST["nit"],  
              'fecha_nacimiento'     =>     $_POST["fecha_nacimiento"],
              'profesion'               =>     $_POST["profesion"],  
              'numero_colegiado'          =>     $_POST["numero_colegiado"],  
              'colegio_profesional'     =>     $_POST["colegio_profesional"],
              'estado_civil'               =>     $_POST["estado_civil"], 
              'nacionalidad'               =>     $_POST["nacionalidad"], 
              'es_asesor'               =>     $_POST["es_asesor"], 
              'es_catedratico'               =>     $_POST["es_catedratico"], 
              'tipo_correo1'               =>     $_POST["tipo_correo1"],  
              'tipo_correo2'          =>     $_POST["tipo_correo2"],  
              'Address'     =>     $_POST["Address"],
              'tipo_telefono1'     =>     $_POST["tipo_telefono1"],
              'tipo_telefono2'          =>     $_POST["tipo_telefono2"],
              
              
            );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data, JSON_PRETTY_PRINT); 
             
            if(file_put_contents('empleado.json', $final_data))  
            {  
                 $message = "<label class='text-success'>Datos enviados con exito</p>";  
            }  
       }  
       else  
       {  
            $error = 'JSON File not exits';  
       } 
       
   } */

  
 ?> 


 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Empleado Nuevo</title>
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
                      <li class="active"><a href="mantenimiento.html">Mantenimiento</a></li>
                      <li><a href="firmas.html">Firmas</a></li>
                      <li><a href="ayuda.html">Ayuda</a></li>
                      <li><a href="index.html">Cerrar Sesión</a></li>
                      
                    </ul>
                   
                  </div><!--/.nav-collapse -->
                </div>
              </nav>
<header>
    <div class="title-bar">
            <div class="container">
                <h1>AGREGAR EMPLEADO</h1>
                
            </div>
        </div>
</header>
<main>
   <div class="main">
       <div class="container formulariosGenerales">
           <div class="row">
               <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">FORMULARIO</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post">
                             <div class="form-group">
                                <label>CARNÉ</label>
                                <input type="number" name="carne" class="form-control" placeholder="ingrese carne" required="required">
                            </div>
                            <div class="form-group">
                                <label>NOMBRES</label>
                                <input type="text" name="nombres" class="form-control" placeholder="ingrese nombre" required="required">
                            </div>
                            <div class="form-group">
                                <label>APELLIDOS</label>
                                <input type="text" name="apellidos" class="form-control" placeholder="ingrese apellido" required="required">
                            </div>
                            <div class="form-group">
                                    <label>DPI</label>
                                    <input type="number" name="dpi" class="form-control" placeholder="ingrese DPI" required="required">
                            </div>
                            <div class="form-group">
                                <label>NIT</label>
                                <input type="text" name="nit" class="form-control" placeholder="ingrese NIT" required="required">
                            </div>
                            <div class="form-group">
                                <label>FECHA DE NACIMIENTO</label>
                                <input type="date" name="fecha_nacimiento" class="form-control" placeholder="ingrese fecha" required="required">
                            </div>
                            <div class="form-group">
                                <label>PROFESION</label>
                                <input type="text" name="profesion" class="form-control" placeholder="ingrese preofesion" required="required">
                            </div>
                            <div class="form-group">
                                <label>NUMERO DE COLEGIADO</label>
                                <input type="number" name="numero_colegiado" class="form-control" placeholder="ingrese numero" required="required">
                            </div>
                            <div class="form-group">
                                <label>COLEGIO PROFESIONAL DE EGRESO</label>
                                <input type="text" name="colegio_profesional" class="form-control" placeholder="ingrese" required="required">
                            </div>
                            <label>ESTADO CIVIL</label><br>
                           <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="estado_civil" id="estado_civil" value="casado/a" class="sr-only" required>CASADO</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="estado_civil" id="estado_civil" value="soltero/a" class="sr-only" required>SOLTERO</label>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label>NACIONALIDAD</label>
                                <input type="text" name="nacionalidad" class="form-control" placeholder="ingrese nacionalidad" required="required">
                            </div>
                            <label>ES ASESOR</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="es_asesor" id="es_asesor" value="1" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="es_asesor" id="es_asesor" value="0" class="sr-only" required>NO</label>
                                </div>
                            </div><br>
                            <label>ES CATEDRÁTICO</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="es_catedratico" id="es_catedratico" value="1" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="es_catedratico" id="es_catedratico" value="0" class="sr-only" required>NO</label>
                                </div>
                            </div><br>
                            

                           <!--info de todos-->
                            <div class="form-group">
                                    <label>EMAIL PERSONAL</label>
                                    <input type="email" name="tipo_correo1" class="form-control" placeholder="ingrese email" required="required">
                                </div>
                            <div class="form-group">
                                <label>EMAIL DE LA UNIVERSIDAD</label>
                                <input type="email" name="tipo_correo2" class="form-control" placeholder="ingrese email" required="required">
                            </div>
                            <div class="form-group">
                                <label>DIRECCIÓN DE VIVIENDA</label>
                                <input type="text" name="Address" class="form-control" placeholder="ingrese direccion" required="required">
                            </div>
                            <div class="form-group">
                                <label>TELEFONO CELULAR</label>
                                <input type="number" name="tipo_telefono1" class="form-control" placeholder="ingrese numero" required="required">
                            </div>
                            <div class="form-group">
                                <label>TELEFONO DE CASA</label>
                                <input type="number" name="tipo_telefono2" class="form-control" placeholder="ingrese numero" required="required">
                            </div>                                             

                            <input type="submit" name="submit" value="Agregar" class="btn btn-primary" /><br />    
                            
                            <?php  
                                if(isset($message))  
                                {  
                                    echo $message;  
                                }  
                                ?>
                        </form>

                        
                        </div>
                        
                    </div>
               </div>
              
               
           </div>
       </div>
   </div>

                            </main>

  


    <footer>
        <div class="container">
            <p>Copyright &copy; 2017 unis-sitemas</p>
        </div>

    </footer>


    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>
