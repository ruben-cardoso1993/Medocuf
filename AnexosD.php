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
      <li><a href="PaginaUtilizador.php"><span class="glyphicon glyphicon-log-in"></span> VOLTAR</a></li>
    </ul>
  </div>
</nav>

<br>

<?php
$flag = false;
if(isset($_POST['Procura'])){

    $valueToSearch = $_POST['nomedocliente'];
    $query = "SELECT * FROM `clientes` WHERE CONCAT(`Nome`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
     $flag = true;

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

<div clas="container-fluid bg-3 text-center">
    <div class="container" id="AnexosD">
        <form class="form-horizontal" align=center  method="post" action="AnexosD.php">
            <div class="form-group">
                </br>
                <label class="control-label col-sm-2" name="NomeCliente">Nome do cliente :</label>      
                    <div class="col-sm-8">
                        <input type="text" name="nomedocliente" class="form-control" placeholder=""require>
                    </div>
            </div>

            <input type="submit" name="Procura" class="btn bg-1"  value="Pesquisar"> 
            <input class="btn bg-1" type="submit" name="Limpar" value="Limpar"/>
            <br>
            <br>
            <br>

            <div class="container bg-3" align="center">        
                    <table class="table" id="myTable">
                        <tr class="header">
                            <th>Designação</th>
                            <th>Gerar Tabela</th>
                        </tr>
                        <?php
				            $con = mysqli_connect("localhost","root","");

				            if(!$con){
				                echo"Not connect to Server";
				            }
				            if(!mysqli_select_db($con,'newusers')){
				                echo 'Database not select';
				            }

				            $sql ="SELECT c.Nome FROM clientes c";
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
							 <button type="button" name="<?php echo"{$row['ID_cliente']}";?>" id="btnGerarPDFCliente" class="glyphicon glyphicon-floppy-save" method="post"  onclick="window.location.href= 'TotalTrabalhadores.php?idCliente=<?php echo"{$row['ID_cliente']}";?>','_blank'"></button>
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
							<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" id="btnGerarPDFCliente" class="glyphicon glyphicon-floppy-save" method="post" onclick="window.location.href= 'TotalTrabalhadores.php?idCliente=<?php echo"{$row['ID_cliente']}";?>','_blank'"></button>
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
</html>