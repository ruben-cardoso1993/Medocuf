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
                    <li><a href="Dir_Agendamentos.php"><span class="glyphicon glyphicon-log-in"></span> VOLTAR</a></li>
                    </ul>
                </div>
                </nav>

                <div class="container bg-3" align="center">        
                    <table class="table" id="myTable">
                        <br>
                        <br>
                        <tr class="header">
                            <th>Nome</th>
                            <th>Nome do cliente</th>
                            <th>Data limite</th>
                            <th>Hora</th>
                        </tr>

                        <?php
				            $con = mysqli_connect("localhost","root","");
                            $dateToday = date("Y-m-d");
				            if(!$con){
				                echo"Not connect to Server";
				            }
				            if(!mysqli_select_db($con,'newusers')){
				                echo 'Database not select';
				            }
							$idColaborador1 = $_GET["idColaborador"];
				            $sql ="SELECT c.Nome as Nome, cl.Nome as NomeCliente, /*DATE_ADD(DAAF, INTERVAL 1 YEAR) as DAAF*/ DataConsulta, HoraConsulta FROM colaboradores c ";
                            $sql .= " Left join clientes cl on c.ID_cliente = cl.ID_cliente WHERE c.ID_cliente = ".$idColaborador1." Order by DataConsulta ASC";
				            $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
				            //if($filter_Result=""){ 
					            while($row=mysqli_fetch_assoc($result)){
                
                                    $datalimite = $row["DataConsulta"];
                                   // $daaf_1Year =   date("Y-m-d", strtotime(date("Y-m-d", strtotime($daaf)) . "+12 months"));
                                   // $daaf_11Month =   date("Y-m-d", strtotime(date("Y-m-d", strtotime($daaf)) . " +11 months"));
                                    $daaf_notificacao = date("Y-m-d", strtotime(date("Y-m-d", strtotime($datalimite)) . " -1 months"));

                                    if( $dateToday>=$daaf_notificacao && $dateToday<=$datalimite){?>
                                        <tr>
                                        <td>
                                        <strong style="color:red">
                                        <?php	
                                            echo"{$row['Nome']}<br>";
                                        ?>
                                        </strong>
                                        </td> 
                                        <td>
                                        <strong style="color:red">
                                        <?php	
                                            echo"{$row['NomeCliente']}<br>";
                                        ?>
                                        </strong>
                                        </td>
                                        <td>
                                        <strong style="color:red">
                                        <?php	
                                            echo"{$row['DataConsulta']}<br>";
                                        ?>
                                        </strong>
                                        </td>
                                        <td>
                                        <strong style="color:red">
                                        <?php	
                                            echo"{$row['HoraConsulta']}<br>";
                                        ?>
                                        </strong>
                                        </td>
                                        <?php
                                        
                                    }else{
                                        ?>
                                        <tr>
                                        <td>
                                        <?php	
                                            echo"{$row['Nome']}<br>";
                                        ?>
                                        </td> 
                                        <td>
                                        <?php	
                                            echo"{$row['NomeCliente']}<br>";
                                        ?>
                                        </td>
                                        <td>
                                        <?php	
                                            echo"{$row['DataConsulta']}<br>";
                                        ?>
                                        </td>
                                        <td>
                                        <?php	
                                            echo"{$row['HoraConsulta']}<br>";
                                        ?>
                                        </td>
                                        <?php
                                    }
                                }
                                ?>
                    </table>
                </div>
</body>
</html>