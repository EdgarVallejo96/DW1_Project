<?php  
$message = '';  
$error = '';  


if(isset($_POST["submit"])){
switch(empty($POST)) {
   case empty($_POST["nombres"]):
   $error = "<label class='text-danger'>Ingrese nombres</label>";
   break;

   case empty($_POST["apellidos"]):
   $error = "<label class='text-danger'>Ingrese apellidos</label>";  
   break;

   case empty($_POST["expediente_completo"]):
   $error = "<label class='text-danger'>Indique expediente</label>";
   break;

   case empty($_POST["entrevista_realizada"]):
   $error = "<label class='text-danger'>Indique entrevista</label>";
   break;

   case empty($_POST["puesto_aspirado"]):
   $error = "<label class='text-danger'>Indique puesto</label>";
   break;

   case empty($_POST["acta_aprobacion"]):
   $error = "<label class='text-danger'>Ingrese acta</label>";
   break;

   case empty($_POST["expedienteVCR"]):
   $error = "<label class='text-danger'>Indique expediente</label>";
   break;

   case empty($_POST["entrevista_VCR"]):
   $error = "<label class='text-danger'>ndique entrevista</label>";
   break;

   case empty($_POST["aprobado_VCR"]):
   $error = "<label class='text-danger'>ndique entrevista</label>";
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
   
   if( file_exists('catedraticos.json'))  
   {  
       
        $current_data = file_get_contents('catedraticos.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array( 
             'nombres'               =>     $_POST['nombres'],  
             'apellidos'          =>     $_POST["apellidos"],  
             'expediente_completo'     =>     $_POST["expediente_completo"],
             'entrevista_realizada'               =>     $_POST["entrevista_realizada"],  
             'puesto_aspirado'          =>     $_POST["puesto_aspirado"],  
             'acta_aprobacion'     =>     $_POST["acta_aprobacion"],
             'expedienteVCR'               =>     $_POST["expedienteVCR"],  
             'entrevista_VCR'          =>     $_POST["entrevista_VCR"],  
             'aprobado_VCR'     =>     $_POST["aprobado_VCR"],
             'tipo_correo1'               =>     $_POST["tipo_correo1"],  
             'tipo_correo2'          =>     $_POST["tipo_correo2"],  
             'Address'     =>     $_POST["Address"],
             'tipo_telefono1'     =>     $_POST["tipo_telefono1"],
             'tipo_telefono2'          =>     $_POST["tipo_telefono2"],
             
             
           );  
           $array_data[] = $extra;  
           $final_data = json_encode($array_data, JSON_PRETTY_PRINT);  
           if(file_put_contents('catedraticos.json', $final_data))  
           {  
                $message = "<label class='text-success'>Datos enviados con exito</p>";  
           }  
      }  
      else  
      {  
           $error = 'JSON File no existe';  
      }
   }

 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Catedrático Postulado</title>
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
                      <li><a href="logout.php">Cerrar Sesión</a></li>
                      
                    </ul>
                   
                  </div><!--/.nav-collapse -->
                </div>
              </nav>

    <div class="title-bar">
<<<<<<< HEAD
            <div class="container formulariosGenerales">
=======
        <div class="container formulariosGenerales">
>>>>>>> Diego
                <h1>REGISTRAR CATEDRÁTICO POSTULADO</h1>
                
            </div>
        </div>

   <div class="main">
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">FORMULARIO</h4>
                        </div>
                        <div class="panel-body">
                            <form>
                            <div class="form-group">
                                <label>NOMBRES</label>
                                <input type="text" class="form-control" placeholder="ingrese nombre" required="required">
                            </div>
                            <div class="form-group">
                                <label>APELLIDOS</label>
                                <input type="text" class="form-control" placeholder="ingrese apellido" required="required">
                            </div>
                            <label>EXPEDIENTE</label><br>
                            <div data-toggle="buttons">
                                    <div class="btn-group">
                                        <label class="btn btn-default"> 
                                        <input type="radio" name="type" id="type" value="completo" class="sr-only" required>COMPLETO</label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="type" id="type" value="incompleto" class="sr-only" required>INCOMPLETO</label>
                                    </div>
                            </div><br>
                            <br><label>ENTREVISTA</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type1" id="type1" value="realizada" class="sr-only" required>RELIZADA</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type1" id="type1" value="no_realizada" class="sr-only" required>NO NO REALIZADA</label>
                                </div>
                            </div><br>     
                            <div class="form-group">
                                <label>PUESTO ASPIRADO</label>
                                <input type="text" class="form-control" placeholder="ingrese puesto" required="required">
                            </div>              
                            <div class="form-group">
                                <label>ACTA DE APROBACIÓN</label>
                                <input type="text" class="form-control" placeholder="ingrese acta de aprobación" required="required">
                            </div>
                            <br><label>EXPEDIENTE EN VICERRECTORÍA</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type2" id="type2" value="si" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type2" id="type2" value="no" class="sr-only" required>NO</label>
                                </div>
                            </div><br>
                            <br><label>ENTREVISTA EN VICERRECTORÍA</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type3" id="type3" value="si" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type3" id="type3" value="no" class="sr-only" required>NO</label>
                                </div>
                            </div><br>
                            <br><label>APROBADO EN VICERRECTORÍA</label><br>
                            <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type4" id="type4" value="si" class="sr-only" required>SI</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type4" id="type4" value="no" class="sr-only" required>NO</label>
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
                                                       
                            
                              <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    AGREGAR
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
    <script>
    $('.dropdown-menu a').on('click', function(){    
        $(this).parent().parent().prev().html($(this).html() + '<span class="caret"></span>');    
    })
    </script>
  </body>
</html>
