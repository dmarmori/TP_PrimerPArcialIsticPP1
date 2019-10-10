<?php 
 if (isset($_GET['login']))
  {        
    session_start(); 
  }
  
  ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Marmori/img/IconoEsta.png" sizes="16x16" type="image/png">

    <title>Ok - Marmori Est.</title>

    <!-- Bootstrap core CSS -->
    <link href="/Marmori/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/Marmori/css/sticky-footer-navbar.css" rel="stylesheet">
    
  </head>

  <body>
        

    <header>
       
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/Marmori/index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              
        <?php 
        
        if (isset($_SESSION['IdLogin']))
        {    
            echo "<a class='nav-link'>".$_SESSION['IdLogin']."</a>";
        }
         
        ?>
          </li>
          </ul>
          
        </div>
      </nav>


    </header>
    

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5"style="color:hsl(0,100%,50%);"><em>Ingreso OK<em></h1>
      <p><a href="/Marmori/login.php">Probar con otro usuario</a></p>
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
    <script src="/Marmori/js/popper.min.js"></script>
    <script src="/Marmori/js/bootstrap.min.js"></script>
  </body>
</html>
