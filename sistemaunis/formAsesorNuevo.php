<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"])){
switch(empty($POST)) {
    case empty($_POST["id_alumno"]):
    $error = "<label class='text-danger'>Ingrese apellidos</label>";  
    break;

    case empty($_POST["id_asesor"]):
    $error = "<label class='text-danger'>Ingrese asesor</label>";
    break;

    case empty($_POST["fecha_asignacion"]):
    $error = "<label class='text-danger'>Indique fecha</label>";
    break;

    case empty($_POST["asignacionvigente"]):
    $error = "<label class='text-danger'>Indique asignacion</label>";
    break;
  
}
    if(file_exists('asesor.json'))  
    {  
        
         $current_data = file_get_contents('asesor.json');  
         $array_data = json_decode($current_data, true);  
         $extra = array( 
              'id_alumno'               =>     $_POST['id_alumno'],  
              'id_asesor'          =>     $_POST["id_asesor"],  
              'fecha_asignacion'     =>     $_POST["fecha_asignacion"],
              'asignacionvigente'               =>     $_POST["asignacionvigente"],
              
              
         );  
         $array_data[] = $extra;  
         $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
         
         
         if(file_put_contents('asesor.json', $final_data))  
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


    <title>Asesor Nuevo</title>
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
        <div class="container">
            <h1>AGREGAR ASESOR</h1>
            
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
                        <form>
                        <div class="form-group">
                            <label>ID ALUMNO</label>
                            <input type="number" class="form-control" placeholder="ingrese id" required="required">
                        </div>
                        <div class="form-group">
                            <label>ID ASESOR</label>
                            <input type="number" class="form-control" placeholder="ingrese id" required="required">
                        </div>
                        <div class="form-group">
                                <label>FECHA DE ASIGNACIÓN</label>
                                <input type="date" class="form-control" placeholder="ingrese fecha" required="required">
                        </div>
                        
                        <label>ASIGNACIÓN VIGENTE</label><br>
                        <div data-toggle="buttons">
                                <div class="btn-group">
                                    <label class="btn btn-default"> 
                                    <input type="radio" name="type" id="type" value="vigente" class="sr-only" required>VIGENTE</label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="type" id="type" value="no vigente" class="sr-only" required>NO VIGENTE</label>
                                </div>
                            </div><br>


                        <button type="submit" class="btn btn-primary">
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

</body>
</html>
