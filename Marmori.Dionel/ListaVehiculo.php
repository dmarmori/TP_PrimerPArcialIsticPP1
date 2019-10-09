<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/IconoEsta.png" sizes="16x16" type="image/png">

    <title>Ingreso - Marmori Est.</title>

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
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <center>
        <form>

      <h3 style="color:green";>Vechiculos Registrados<h3>
      <br><br>
      <table>
        <tr>
          <th>Patente</th>
          <th>Hora Ingreso</th>
        </tr>  

       <?php 
       date_default_timezone_set('America/Argentina/Buenos_Aires');

        $archivoVehiculo = fopen("action/Vehiculos.txt", "r") or die("Imposible arbrir el archivo");
        while(!feof($archivoVehiculo)) 
        {
            $objetoVehiculo = json_decode(fgets($archivoVehiculo));
            if (!$objetoVehiculo=="")
            {
               echo "<tr>"; 
                echo "<td>".$objetoVehiculo->Patente
                    ."------"
                    ."</td><td>".date("Y-m-d h:i:sa",$objetoVehiculo->Horario).
          "</td></tr>";

            //  echo "<p><li>Patente: ".$objetoVehiculo->Patente."-HoraIng: ".
              //date("Y-m-d h:i:sa",$objetoVehiculo->Horario)."</li></p><br>";
            }
        } 
        ?>
        </form>
      </center> 
         
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">"El arte de estacionar"</span>
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
