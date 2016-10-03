<?php
  include 'grafoAsignatura.php';
  session_start();

  if (!isset($_SESSION["grafo"])) {
    $_SESSION["grafo"]= new Grafo();
  }
?>
 <!DOCTYPE html>
 <html>
   <head>
     <!--Importar GoogleIcons -->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons"
           rel="stylesheet">
     <!--Importar materialize.css -->
     <link rel="stylesheet" href="css/materialize.min.css"
           media="screen, projection" type="text/css">
     <link rel="stylesheet" href="css/main.css" media="screen">
     <meta charset="utf-8">
     <title>Pensum</title>
     <meta name="viewport" content="width=device-with, initial-scale=1.0">
   </head>
   <body>
     <nav>
     <div class="nav-wrapper light-green darken-2">
       <a href="#!" class="brand-logo center">Pensum</a>
       <a href="#" data-activates="mobile-demo" class="button-collapse">
         <i class="material-icons">menu</i></a>
       <!--Menu pc-->
       <ul class="right hide-on-med-and-down">
         <li><a href="#">Robinson De La Cruz</a></li>
         <li><a href="#">Daniel Vergara</a></li>
       </ul>
       <!--Menu mobile-->
       <ul class="side-nav" id="mobile-demo">
         <li><a href="#">Robinson De La Cruz</a></li>
         <li><a href="#">Daniel Vergara</a></li>
       </ul>
      </ul>
     </div>
     </nav>

     <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript">
       //Barra de navegacion modo movil
        $(".button-collapse").sideNav();

     </script>

   </body>
 </html>
