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
  #body {
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
      padding-top: 30px;
      padding-bottom: 30px;
  }
  .navbar {
      padding-left:20px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }

  .modal-footer{
      text-align:center;
  }

  .modal-footer bg-3{
      font-size:15px;
  }
  #myInput {
    background-repeat: no-repeat;
    margin-left:480px;
    width: 50%; 
    font-size: 14px; 
    padding: 12px 20px 12px 40px; 
    border: 1px solid #ddd; 
    border-radius:5px;
    margin-bottom: 12px; 
}

.inputPesquisa[type=text] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
     border: 2px solid black;
    border-radius: 4px;
}
.table{
            width:50%;
        }


  </style>
</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MEDOCUF</a>
    </div>    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="PaginaUtilizador.php"><span class="glyphicon glyphicon-user"></span> UTILIZADOR</a></li>
      <li><a href="PaginaUtilizador.php"><span class="glyphicon glyphicon-log-in"></span> VOLTAR</a></li>
    </ul>
  </div>
</nav>

<br>
<?php
$flag = false;
if(isset($_POST['Procura'])){
    if($valueToSearch = $_POST['nomedocliente']){
            $query = "select c.ID_colaborador, c.Nome as Nome from colaboradores c ";
            $query .= "left join clientes cl ";
            $query .= "on c.ID_cliente = cl.ID_cliente ";
            $query .= " Where cl.Nome LIKE '%".$valueToSearch."%' ";

            $flag = true;

        }
        $search_result = filterTable($query);
}
else{

    $query = "SELECT * FROM `clientes`";
    $search_result = filterTable($query);

}

if(isset($_POST['Limpar'])){
    $con = mysqli_connect("localhost","root","");

                                if(!$con){
                                echo"Not connect to Server";
                                }
                                if(!mysqli_select_db($con,'newusers')){
                                echo 'Database not select';
                                }

                                $sql ="SELECT Nome FROM clientes";
                                $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                                  
}
function filterTable($query){

    $connect = mysqli_connect("localhost","root","","newusers");
    $filter_Result = mysqli_query($connect,$query);
    return $filter_Result;

}

?>
<div class="container-fluid bg-3 text-center"></div>
    
            <br>
            <br>
            <br>

            <div class="container bg-3" align="center">        
                    <table class="table" id="myTable">
                        <tr class="header">
                            <th>Nome Cliente</th>
                            <th>Ver Colaboradores</th>
							<th>Notificações</th>
                        </tr>
                        <?php
				            $con = mysqli_connect("localhost","root","");

				            if(!$con){
				                echo"Not connect to Server";
				            }
				            if(!mysqli_select_db($con,'newusers')){
				                echo 'Database not select';
				            }
							//$idColaborador1 = $_GET["idColaborador"];
				            $sql ="SELECT c.Nome FROM clientes c ";
				            $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
				            if($filter_Result=""){ 
					            while($row=mysqli_fetch_assoc($result)){?>
					    <tr>
						<td>
						    <?php	
							   echo"{$row['Nome']}<br>";
						    ?>
						</td>
						<td>
							 <button type="button" name="<?php echo"{$row['ID_cliente']}";?>" id="btnGerarPDFUtilizador" class="glyphicon glyphicon-search" method="post"  onclick="window.location.href= 'GestaoAgendamentos.php?idColaborador=<?php echo"{$row['ID_cliente']}";?>'"  target="_blank"></button>
							
						</td>
						<td>
							&nbsp<i class="icon-globe"></i><span id="counterNotif" class="notification-counter">0</span>
						</td>
					    </tr>
					    <?php
					        } 
				            }
				            else{
					            while($row=mysqli_fetch_array($search_result)){?>
					    <tr>
						<td>
						    <?php	
                            if($flag == false){
							    echo"{$row['Nome']}<br>";
                            }else{
                                echo"{$row['Nome']}<br>";
                            }
						    ?>
						</td>
						<td>
							<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" id="btnGerarPDFUtilizador" class="glyphicon glyphicon-search" method="post" onclick="window.location.href= 'GestaoAgendamentos.php?idColaborador=<?php echo"{$row['ID_cliente']}";?>'" target="_blank"></button>
						</td>
						<td>
							&nbsp<i class="icon-globe"></i><span id="counterNotif" class="notification-counter">0</span>
						</td>
					    </tr>
					        <?php
					            }
				                }
					        ?>
                </table>
            </div>
        </form>
    </div>          
</div>
</body>
<script>
        $.ajax({ url: 'loadDir_Agendamentos.php',
            type: 'get',
            dataType: 'json',
            success: function(output) {
                //alert(output);
                $("#counterNotif").text(output.Contador),
                //$("#counterNotif2").text(output.ContadorOcasional);
                

            },
            error: function(e){
               alert(e);
            }
            
        });
    </script>
</html>