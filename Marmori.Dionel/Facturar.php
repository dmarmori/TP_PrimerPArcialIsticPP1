<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/IconoEsta.png" sizes="16x16" type="image/png">

    <title>Facturar - Marmori Est.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link disabled" href="MasInfo.php" target="_blank">Mas info</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <center>
      
        
        <form action="action/HacerFacturar.php">
                <h1>Patente</h1><br>
                <input autocomplete="off" class="navbar-brand" type="text" name="Patente" value="" required>
                <br><br>
        <?php 
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        if (isset($_GET['exito']))
        {        
            echo '<p style="color:green">Vehiculo facturado!</p>'; 
        }
       if (isset($_GET['cobrar'])) 
        { 
          $aPagar = $_GET['cobrar'];
          $ingreso = $_GET['ingreso'];
          $salida = $_GET['salida'];
          echo "<p>Fecha de ingreso: ".date("Y-m-d h:i:sa",$ingreso)."</p><br>";
          echo "<p>Fecha de salida: ".date("Y-m-d h:i:sa",$salida)."</p><br>";
          echo "<p>Se facturo: $".$aPagar."</p><br>";
        }
        else if (isset($_GET['error'])) 
        {
          echo '<p style="color:red">Patente no encontrada, Intente nuevamente!</p>';  
        }
        ?>
                <input class="navbar-brand" type="submit" value="Facturar">
          </form> 
      </center>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">"El arte de estacionar".</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
