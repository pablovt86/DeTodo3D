<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Perfil de usuario</title>
  </head>
  <body>

    <?php
      $a=4;
      include 'include/navbar.php';
    ?>
    <!-- DATOS DE LA EMPRESA -->
    <section id="datos">
    <div class="container col-md-12">
      <div class="row text-center">

        <div class="col-md-4">
          <img src="../fuentes/imagenes/modelado.jpg" alt="Logo del diseñador" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
        </div>

        <div class="text-center col-md-4 texto">
          <h1> COOLMODEL3D </h1> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
        </div>
        <div class="col-md-4" align:right;>
        <img src="../fuentes/imagenes/modelado.jpg" alt="Logo del diseñador" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
        </div>

      </div>
    </div>
    </section>

    <!-- DESCRIPCION DE LA EMPRESA -->
<br><br>
  <section id="descripcion">
    <div class="container col-md-12">
      <div class="row text-center">
        <div class="col-md-12 descripcion texto">
          <h2>ACERCA DE COOLMODEL3D:</h2>  <!-- PHP EMBEBIDO NOMBRE EMPRESA -->
        </div>
      </div>
      <div class="row text-center texto">
        <div class="col-md-12">
            <p>COOLMODEL3D<br> Es una  estudio  que  realiza  modelado en 3D de todo  tipo de uso,  piezas, herramientas y ect.</p> <!-- PHP EMBEBIDO DONDE SE MUESTREN LOS DETALLES -->
        </div>
    </div>
    </div>
  </section>

    <!-- IMAGENES DE LA EMPRESA -->
<br><br>
    <section id="imagenes">
      <div class="container col-md-12">
        <div class="row text-center">

        <div class="col-md-3 imagenes">
          <img src="../fuentes/imagenes/modelado1.jpg" alt="diseñador" width="200" height="200">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
    
        </div>

        <div class="col-md-3 imagenes">
          <img src="../fuentes/imagenes/modelado2.jpg" alt="diseñador" width="200" height="200">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
  
        </div>

        <div class="col-md-3 imagenes">
          <img src="../fuentes/imagenes/modelado3.jpg" alt="diseñador" width="200" height="200">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
  
        </div>

        <div class="col-md-3 imagenes">
          <img src="../fuentes/imagenes/modelado4.png" alt="diseñador" width="200" height="200">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
  
        </div>

        </div>
      </div>
    </section>
