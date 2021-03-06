
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SISTEMAUNIS - Login</title>
    <link rel="stylesheet" href="css/app.css">
    
  </head>

  <body>

    <div class="container container-signin">
          <form class="form-signin" action="lectura.php">
            <h2 class="form-signin-heading">Por favor inicie sesión</h2>
            <label for="inputEmail" class="sr-only">correo electrónico</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label> 
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Recuérdame
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">INICIAR SESIÓN</button>
          </form>
    
        </div> <!-- /container -->

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>
