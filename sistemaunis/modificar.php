<?php
  require_once 'controlador/redirectToLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template PROYECTO DW</title>
    <link rel="stylesheet" href="css/app.css">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
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
            <li class="active"><a href="index.html">Inicio</a></li>
            <li><a href="firmas.php">Firmas</a></li>
            <li><a href="administracion.html">Administración</a></li>
            <li><a href="maspruebas.php">Ayuda</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="main">
            <div class="row">
                <div class="col-md-8">
                     <div class="panel panel-default">
                         <div class="panel-body">
                             <form>
                             <div class="form-group">
                                 <label>ID</label>
                                 <input type="number" class="form-control" placeholder="Ingrese ID">
                             </div>
                             <button type="submit" class="btn btn-default">Modificar Registro</button>
                         </form>
                         </div>
                     </div>
                </div>
            </div>
    </div>
</div>

    <footer>
        <div class="container">
                <p>Copyright &copy; 2017 unis-sistemas</p>
        </div>
    </footer>
    
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>
