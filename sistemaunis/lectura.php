<!DOCTYPE html>

<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "proyecto_db"

?>

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
              <li><a href="index.php">Cerrar Sesión</a></li>
              
            </ul>
           
          </div><!--/.nav-collapse -->
        </div>
      </nav>

<div class="container containerLectu">
      <h1 class="lecturas_prueba page-header">Lecturas</h1>

 
<!--   ---------------------     DROPDOWN MENU ESTÁTICO --------------------------------------------------------
<div class="col-md-offset-5 col-md-8 col-sm-offset-8 col-sm-6">
<div class="btn-group btncenter">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tabla a leerse <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#">Exámenes Privados</a></li>
        <li><a href="#">Exámenes Privados Intermedios</li>
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
  <hr> 
------------------------------------------------------------------------------ -->

    <form action="" method="post">
      <select name="tablas">
      <option value="documentos_estudiante">Documentos Estudiantes</option>
      <option value="catedratico_postulado">Catedráticos Postulados</option>
      <option value="empleado_laborando">Empleados Laborando</option>
      <option value="asesores">Asesores</option>
      <option value="catedraticos">Catedráticos</option>
      <option value="asignacion_asesor">Asignaciones Asesores</option>
      <option value="asignacion_catedratico">Asignaciones Catedráticos</option>
      </select>
      <input type="submit" name="submitted" value="Submit">
    </form>

  <?php
    require_once("../database/connection.php");

    if(isset($_POST['submitted'])){

      $value = $_POST['tablas']; 

      switch($value){
        case "documentos_estudiante" : echo "<b>Tabla Seleccionada: </b> Documentos Estudiantes <br>"; break;
        case "catedratico_postulado" : echo "<b>Tabla Seleccionada: </b> Catedráticos Postulados <br>"; break;
        case "empleado_laborando"    : echo "<b>Tabla Seleccionada: </b> Empleados Laborando <br>"; break;
        case "asesores"              : echo "<b>Tabla Seleccionada: </b> Asesores <br>"; break;
        case "catedraticos"          : echo "<b>Tabla Seleccionada: </b> Catedráticos <br>"; break;
        case "asignacion_asesor"     : echo "<b>Tabla Seleccionada: </b> Asignaciones Asesores <br>"; break;
        case "asignacion_catedratico": echo "<b>Tabla Seleccionada: </b> Asignaciones Catedráticos <br>"; break;
      }
      
      //echo "<b>Tabla Seleccionada: </b>" . $value . "<br>";

      $stmt = $db->query("select * from $value");
      $rows = "";
      while($row = $stmt->fetchAll())
      {
          $rows[] = $row;
      }
      /*
      //tabla de resultados
      $sql = "SELECT * FROM empleado_laborando;";
      $results = mysqli_query(mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName), $sql);
      $resultCheck = mysqli_num_rows($results);	

      echo '<table class="table table-striped">
        <thead>
          <tr>
            
            <th>ID</th>
            <th>Carné</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DPI</th>
            <th>NIT</th>
            <th>Fecha Nacimiento</th>
            <th>Profesión</th>
            <th>Número Colegiado</th>
            <th>Colegio Profesional</th>
            <th>Estado Civil</th>
            <th>Nacionalidad</th>
            <th>Asesor?</th>
            <th>Activo?</th>
            <th>Catedrático?</th>
          </tr>
        </thead>';

      if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($results)){
          echo '<tbody>
            <tr>
                <th scope="row">'.$row["id_empleado"].'</th>
                <td>'.$row["carne"].'</td>
                <td>'.$row["nombres"].'</td>
                <td>'.$row["apellidos"].'</td>
                <td>'.$row["dpi"].'</td>
                <td>'.$row["nit"].'</td>
                <td>'.$row["fecha_nacimiento"].'</td>
                <td>'.$row["profesion"].'</td>
                <td>'.$row["numero_colegiado"].'</td>
                <td>'.$row["colegio_profesional"].'</td>
                <td>'.$row["estado_civil"].'</td>
                <td>'.$row["nacionalidad"].'</td>
                <td>'.$row["es_asesor"].'</td>
                <td>'.$row["activo"].'</td>
                <td>'.$row["es_catedratico"].'</td>
            </tr>
          </tbody>';
        }
      }

      echo '</table>';
      */

      $data = json_encode($rows, JSON_PRETTY_PRINT);    
      echo "<pre>"; 
      echo var_export($data);
      echo "<br><br>";

      $to_normal = json_decode($data, true);
      print_r($to_normal);
      echo "<br><br></pre>";

      $stmt = null;
      $db = null;
    }   
  ?>
  </div>

  <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

</body>

</html>