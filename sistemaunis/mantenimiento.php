<?php
  require_once 'controlador/redirectToLogin.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mantenimiento</title>
    <link rel="stylesheet" href="css/app.css">
    <meta charset = "UTF-8"> 
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
      <br>
      <main>
        <section>
      <div  class="container">
      <div class="row">
          
        <div class="col-sm-6 col-md-6">
          <div class="thumbnail">
              <i class="fa fa-user-o"></i>
            <!-- <img src="..." alt="..."> -->
            <div class="caption">
              <h3>Catedráticos Postulados</h3>
              <p>Registrar, modificar o dar de baja a un postulante para catedrático.</p>
              <a href="formCatedraticosPost.php" class="btn btn-primary" role="button">Registrar</a> 
                <a href="modificarFormCat.php" class="btn btn-default" role="button">Modificar</a>
                <a href="borrar.php" class="btn btn-default" role="button">Dar de baja</a>
            
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <i class="fa fa-user"></i>
              <!-- <img src="..." alt="..."> -->
              <div class="caption">
                <h3>Empleados</h3>
                <p>Registrar, modificar o dar de baja a un empleado (Asesor, Catedrático u otro).</p>
                <a href="formEmpleadoNuevo.php" class="btn btn-primary" role="button">Registrar</a> 
                    <a href="modificarFormEmp.php" class="btn btn-default" role="button">Modificar</a>
                    <a href="borrar.php" class="btn btn-default" role="button">Dar de baja</a>
                
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <i class="fa fa-users"></i>
              <!-- <img src="..." alt="..."> -->
              <div class="caption">
                <h3>Asignaciones de Asesores</h3>
                <p>Asignar un asesor a un alumno, dar de baja una asignación o borrar una asignación.</p>
                <a href="formAsesorNuevo.php" class="btn btn-primary" role="button">Asignar</a> 
                    <a href="modificarAsesor.php" class="btn btn-default" role="button">Dar de baja</a>
                    <a href="borrar.php" class="btn btn-default" role="button">Eliminar asignación</a>
                
              </div>
            </div>
          </div>
          
          <div class="col-sm-6  col-md-6">
            <div class="thumbnail">
                <i class="fa fa-user-circle-o fa-3" aria-hidden="true"></i>
              <!-- <img src="..." alt="..."> -->
              <div class="caption">
                <h3>Asignación de Cursos a Catedráticos</h3>
                <p>Asignar, modificar o dar de baja a un catedrático.</p>
                <a href="formCursoNuevo.php  " class="btn btn-primary" role="button">Asignar curso</a> 
                    <a href="modificarCurso.php" class="btn btn-default" role="button">Modificar asignación</a>
                    <a href="borrar.php" class="btn btn-default" role="button">Eliminar asignación</a>
                  
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
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