<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <!-- style.css -->
  <link rel="stylesheet" href="css/index.css">


</head>
<body>
  
  <div class="container">
      <div class="row">

      <div class="col l4 m4 s12"></div>
      <div class="col l4 m4 s12">
          <h3 class="center">App Links</h3>
          <h6 class="center">Guarda tus paginas web</h6>

          <p class="red-text">
            <?php
             session_start();
             if(isset($_SESSION['error'])){
                 echo $_SESSION['error'];
                 unset($_SESSION['error']);
             }
             if(isset($_SESSION['usuario'])){
                 print_r($_SESSION['usuario']);
                 unset($_SESSION['usuario']);
             }
            ?>
          </p>


          <form action="controllers/LoginController.php" method="POST">
<!-- Email -->
          <div class="input-field">
          <input id="email" type="text" name="email">
          <label for="email">Ingresa tu email</label>
        </div>
<!-- clave -->
        <div class="input-field">
          <input id="clave" type="password" name="clave">
          <label for="clave text-black">Ingresa tu clave</label>
        </div>
<!-- boton -->

    
    <button class="btn black ancho-100">Iniciar sesion</button>
    
    <!-- vinculo -->
    <p class="center">
        <a href="registro.php">¿No tienes cuenta? Registrate aquí</a>
    </p>
          </form>
      </div>
      </div>
  </div>


  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

</body>
</html>