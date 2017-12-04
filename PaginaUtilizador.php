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
.notification-container {
    position: relative;
    width: 16px;
    height: 16px;
    top: 15px;
    left: 15px;
    
    i {
        color: #fff;
    }
}

.notification-counter {   
    position: right;
    top: -2px;
    left: 12px;
    
    background-color: rgba(212, 19, 13, 1);
    color: #fff;
    border-radius: 3px;
    padding: 7px 7px;
    font: 8px Verdana;
}




        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}

        .margin {margin-bottom: 20px;}

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
            padding-top: 15px;
            padding-bottom: 15px;
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
                        <li><a href="#">UTILIZADOR</a></li>
                        <li><a href='Logout.php'>SAIR</a></li>
                    </ul>
                </div>
            </nav>

        <!-- 1º Container -->
            <div class="container-fluid bg-1 text-center">
                <h3 class="margin">Bem-vindo</h3>
                <img src="logoFim.png" class="img-responsive  margin" style="display:inline" alt="Medico" width="250" height="250">
            </div>

        <!-- 2º Container -->
            <div class="container-fluid bg-3 text-center" >    
                <div class="margin">
                    <div class="col-sm-4">
                        <ul class="nav navbar bg-3">
                            <li><a href='CriarCliente.php'>Gestão de Clientes</a></li>
                        </ul>
                        <img src="Adicionar.jpg" style="display:inline" alt="Medico" width="50" height="50">
                    </div>

                    <div class="col-sm-4">
                        <ul class="nav navbar bg-3">
                            <li><a href="GestaoColaboradores.php">Gestão de Colaboradores</a></li>
                        </ul>
                        <img src="Editar.jpg"  style="display:inline" alt="Medico" width="50" height="50">
                    </div>

                    <div class="col-sm-4"> 
                        <ul class="nav navbar bg-3">
                            <li><a href="Dir_Agendamentos.php">Agendamentos Periódicos &nbsp<i class="icon-globe"></i><span id="counterNotif" class="notification-counter">0</span></a></li>
                        </ul>
                        <img src="Agendar.jpg" style="display:inline" alt="Medico" width="50" height="50">
                    </div>

                    <div class="col-sm-4">
                        <br>
                        <ul class="nav navbar bg-3">
                            <li><a href="FichasAptidao.php">Fichas de Aptidão</a></li>
                        </ul>
                        <img src="Fichas.jpg"  style="display:inline" alt="Medico" width="50" height="50">
                    </div>
        
                    <div class="col-sm-4">
                        <br>
                        <ul class="nav navbar bg-3">
                            <li><a href="AnexosD.php">Anexos D</a></li>
                        </ul>
                        <img src="folder.jpg"  style="display:inline" alt="Medico" width="50" height="50">
                    </div>

                    <div class="col-sm-4"> 
                        <br>
                        <ul class="nav navbar bg-3">
                            <li><a href="GestaoAgendamentosPeriodicos.php">Agendamentos Ocasionais &nbsp<i class="icon-globe"></i><span id="counterNotif2" class="notification-counter">0</span></a></li>
                        </ul>
                        <img src="Agendar.jpg" style="display:inline" alt="Medico" width="50" height="50">
                    </div>
                </div> 
            </div>
    </body>
    <script>
        $.ajax({ url: 'loadPaginaUtilizador.php',
            type: 'get',
            dataType: 'json',
            success: function(output) {
                //alert(output);
                $("#counterNotif").text(output.Contador),
                $("#counterNotif2").text(output.ContadorOcasional);
                

            },
            error: function(e){
               alert(e);
            }
            
        });
    </script>
</html>