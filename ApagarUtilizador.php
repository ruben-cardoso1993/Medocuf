<!DOCTYPE html>
<html lang="en">

<style>
    .btn-teal {
        color: #f8f8f8;
        background-color: #009587;
        border-color: #018175;
    }

    #PagLogin{
        font: 15px Montserrat, sans-serif;
        margin: auto;
        margin-top: 250px; 
    }

  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
 
    p{font-size: 16px;}
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
      color: #1abc9c;
  }
  
    button {
    width: auto;
    background-color: #1abc9c;
    color: "White";
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
   }
   
</style>

<script>
    function goBack(){    
        window.history.back();
    }
</script>

<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Página Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
</div>

<!-- 2º Container -->
<div clas="container-fluid bg-3 text-center">
    <div class="container" id="criarutilizador">
        <form class="form-horizontal" align=center  method="post" action="ApagarUtilizadorBD.php">
            <div class="form-group">
            </br></br></br></br>
                <label class="control-label col-sm-2" name="User" for="username">Nome do Utilizador:</label>      
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control" placeholder="*********"require>
                    </div>
            </div>
            <input type="submit" value="Remover"> 
        </form>
    </div>           
</div>
        <form action="PaginaPrincipal.php"  method="post" align=center name="Voltar" id="votlar" autocomplete="off">
            </br> 
            </br> 
           <input type="submit" value="Voltar">
        </form>      
        <br>
</body>
</html>

