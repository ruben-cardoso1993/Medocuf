<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Página Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }

  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#">ADMINISTRADOR</a></li>
        <li><a href='Logout.php'>SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- 1º Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Medocuf</h3>
  <img src="Medico.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Medico" width="250" height="250">
  <h3>Bem-vindo</h3>
</div>


<!-- 2º Container -->
<div class="container-fluid bg-3 text-center" >    
  <div class="margin">
    <div class="col-sm-4">
     <ul class="nav navbar bg-3">
      <li><a href='CriarUtilizador.php'>Adicionar Utilizador</a></li>
      </ul>
      <img src="Adicionar.jpg" style="display:inline" alt="Medico" width="50" height="50">
    </div>
    <div class="col-sm-4"> 
      <ul class="nav navbar bg-3">
      <li><a href="ApagarUtilizador.php">Remover Utilizador</a></li>
      </ul>
      <img src="Remover.jpg" style="display:inline" alt="Medico" width="50" height="50">
    </div>
    <div class="col-sm-4">
      <ul class="nav navbar bg-3">
      <li><a href="ListarUtilizadores.php">Listar Utilizadores</a></li>
      </ul>
      <img src="Listar.jpg"  style="display:inline" alt="Medico" width="50" height="50">
    </div>
  </div>
</div>
</body>
</html>
