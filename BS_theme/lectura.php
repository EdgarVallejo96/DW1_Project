<!DOCTYPE html>
<html>
<head>
    <title>Lecturas</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <div class="container">
  </div>
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
              <li class="active"><a href="lectura.php">Lectura</a></li>
              <li><a href="mantenimiento.html">Mantenimiento</a></li>
              <li><a href="firmas.html">Firmas</a></li>
              <li><a href="ayuda.html">Ayuda</a></li>
              <li><a href="index.html">Cerrar Sesión</a></li>
              
            </ul>
           
          </div><!--/.nav-collapse -->
        </div>
      </nav>

<div class="container containerLectu">
      <h1 class="lecturas_prueba page-header">Lecturas</h1>

<!-- 
<div class="col-md-offset-5 col-md-8 col-sm-offset-8 col-sm-6">
<div class="btn-group btncenter">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tabla a leerse <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#">Exámenes Privados</a></li>
        <li><a href="#">Exámenes Privados Intermedios</li>
        <li><a href="#">Documentos Estudiante</a></li>
        <li><a href="#">Documentos Estudiante</a></li>
        <li><a href="#">Estudiantes</a></li>
        <li><a href="#">Actualizaciones de Estado</a></li>
        <li><a href="#">Proceso Graduación</a></li>
        <li><a href="#">Graduación Completada</a></li>
        <li><a href="#">Beneficios Alumno</a></li>
        <li><a href="#">Estados de Alumnos</a></li>
        <li><a href="#">Correspondencia</a></li>
        <li><a href="#">Teléfonos</a></li>
        <li><a href="#">Correos</a></li>
        <li><a href="#">Direcciones</a></li>
        <li><a href="#">Catedráticos Postulado</a></li>
        <li><a href="#">Empleados Laborando</a></li>
        <li><a href="#">Asesores</a></li>
        <li><a href="#">Catedráticos</a></li>
        <li><a href="#">Carreras</a></li>
        <li><a href="#">Facultad</a></li>
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Roles De Sistema</a></li>
        <li><a href="#">Bitácora Old Data</a></li>
        <li><a href="#">Bitácora New Data</a></li>
        <li><a href="#">Asignación Asesor</a></li>
        <li><a href="#">Asignación Catedrático</a></li>
        <li><a href="#">Firmas Catedrácticos</a></li>
    </ul>
  </div></div>
  <hr> -->

    <form action="" method="post">
    <select name="tablas">
      <option value="documentos_estudiante">Documentos Estudiante</option>
      <option value="catedratico_postulado">Catedrático Postulado</option>
      <option value="empleado_laborando">Empleados Laborando</option>
      <option value="asesores">Asesores</option>
      <option value="catedraticos">Catedráticos</option>
      <option value="asignacion_asesor">Asignación Asesor</option>
      <option value="asignacion_catedratico">Asginación Catedrático</option>
    </select>
      <input type="submit" name="submitted" value="Submit">
    </form>

    <?php
    try 
    {
        $db = new PDO('mysql:host=localhost;dbname=proyecto_db;charset=utf8','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Established";
    }
    catch(Exception $e)
    {
        echo "An error ocurred.";
    }
?>
  <?php
    //require_once("../db/connection.php");
  
    if(isset($_POST['submitted'])){

      $value = $_POST['tablas']; 

      switch($value){
        case "documentos_estudiante": echo "<b>Tabla Seleccionada: </b> Documentos Estudiante<br>"; break;
        case "catedratico_postulado": echo "<b>Tabla Seleccionada: </b> Catedratico Postulado<br>"; break;
        case "empleado_laborando": echo "<b>Tabla Seleccionada: </b> Empleados Laborando<br>"; break;
        case "documentos_estudiante": echo "<b>Tabla Seleccionada: </b> Documentos Estudiante<br>"; break;
      }
      
      //echo "<b>Tabla Seleccionada: </b>" . $value . "<br>";

      $stmt = $db->query("select * from $value");
      
      while($row = $stmt->fetchAll())
      {
          $rows[] = $row;
      }


      $data = json_encode($rows); 
      echo '<pre>' . var_export($data) . '</pre>'; 
      echo "<br><br>";
      $to_normal = json_decode($data, true);
      echo $to_normal . "<br><br>";
      

      
      $stmt = null;
      $db = null;
    }   
  ?>
  </div>

  <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

</body>

</html>