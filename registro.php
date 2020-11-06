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
  <link rel="stylesheet" href="css/registro.css">

</head>
<body>
  
  <div class="container">
    <div class="row">
        <div class="col l4 m4 s12"></div>
        <div class="col l4 m4 s12">
            <h3 class="center">App Links</h3>
            <h6 class="center">Guarda tus páginas web</h6>


<p class="red-text">
    <?php 
    session_start();
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</p>

<p class="green-text">
    <?php
    if(isset($_SESSION['respuesta'])){
        echo $_SESSION['respuesta'];
        unset($_SESSION['respuesta']);
    }
    ?>
</p>




            <form action="controllers/RegistroController.php" method="POST">
                    <!-- Email -->
                <div class="input-field">
                 <input id="email" type="email" name="email">
                 <label for="email">Email</label>
                </div>
                <!-- Nombre -->
                <div class="input-field">
                    <input id="nombre" type="text" name="nombre">
                    <label for="nombre">Nombre</label>
                </div>
                <!--Password  -->
                <div class="input-field">
                    <input id="clave" type="password" name="clave">
                    <label for="clave">Clave</label>
                </div>
                <!-- Boton -->
                <button class="btn black ancho-100">registrar</button>
            
                <!-- volver -->
                <p class="center">
                    <a href="index.php">Volver</a>
                </p>
            </form>
        </div>
    </div>
  </div>


  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

</body>
</html>