<?php  
    require_once 'controlador/redirectToLogin.php';
    
 $message = '';  
 $error = '';  

 if(isset($_POST["submit"])){
switch(empty($POST)) {
    case empty($_POST["idcurso"]):
    $error = "<label class='text-danger'>Ingrese el id de curso</label>";
    break;

    case empty($_POST["aniocurso"]):
    $error = "<label class='text-danger'>Ingrese el año</label>";  
    break;

    case empty($_POST["semestre"]):
    $error = "<label class='text-danger'>Ingrese semestre</label>";
    break;

    case empty($_POST["periodos"]):
    $error = "<label class='text-danger'>Ingrese periodos</label>";
    break;
}

   
    if(file_exists('cursos.json'))  
    {  
         $current_data = file_get_contents('cursos.json');  
         $array_data = json_decode($current_data, true);  
         $extra = array(  
              'idcurso'               =>     $_POST['idcurso'],  
              'aniocurso'          =>     $_POST["aniocurso"],  
              'semestre'     =>     $_POST["semestre"],
              'periodos'          =>     $_POST["periodos"]
                
         );  
         $array_data[] = $extra;  
         $final_data = json_encode($array_data, JSON_PRETTY_PRINT);  
         if(file_put_contents('cursos.json', $final_data))  
         {  
              $message = "<label class='text-success'>Datos enviados con exito</p>";  
         }  
    }  
    else  
    {  
         $error = 'JSON File not exits';  
    } 
    
}

  
 ?>  
   
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Asignar Curso</title>
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

    <div class="title-bar">
            <div class="container">
                <h1>ASIGNAR CURSO A CATEDRÁTICO</h1>
                
            </div>
        </div>

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
                            <?php   
                                if(isset($error))  
                                {  
                                    echo $error;  
                                }  
                                ?> 
                            <div class="form-group">
                                <label>ID CURSO</label>
                                <input type="number" name="idcurso" class="form-control" placeholder="ingrese curso" required="required">
                            </div>
                           <div class="form-group">
                                <label>AÑO</label>
                                <input type="date" name="aniocurso" class="form-control" placeholder="ingrese año" required="required">
                            </div>
                            <div class="form-group">
                                <label>SEMESTRE</label>
                                <input type="number" name="semestre" class="form-control" placeholder="ingrese semestre" required="required">
                            </div>
                            <div class="form-group">
                                <label>PERÍODOS SEMANALES</label>
                                <input type="number" name="periodos" class="form-control" placeholder="ingrese cantidad de periodos" required="required">
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


    



  


    <footer>
        <div class="container">
            <p>Copyright &copy; 2017 unis-sitemas</p>
        </div>

    </footer>


    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>