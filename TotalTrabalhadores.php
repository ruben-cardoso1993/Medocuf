<html>
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
<body>

<!-- Navbar -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MEDOCUF</a>
    </div>    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="PaginaUtilizador.php"><span class="glyphicon glyphicon-user"></span> UTILIZADOR</a></li>
      <li><a href="AnexosD.php"><span class="glyphicon glyphicon-log-in"></span> VOLTAR</a></li>
    </ul>
  </div>
</nav>

<br>
<br>

<div class="container bg-3" align="center">        
    <table class="table" id="myTable">
        <tr class="header">
            <th>Total de Homens</th>
            <th>Total de Mulheres</th>
        </tr>
        <td><?php
                $con = mysqli_connect("localhost","root","");
                if(!$con){
                echo"Not connect to Server";
                }
                if(!mysqli_select_db($con,'newusers')){
                echo 'Database not select';
                }
                $idCliente = $_GET["idCliente"];

                //Contagem de Homens
                $sql ="Select COUNT(ID_colaborador) as homens from colaboradores where Sexo = 'Masculino' and ID_cliente=".$idCliente;
                $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                while($row=mysqli_fetch_assoc($result)){
                    $homens = $row["homens"];
                }
                echo $homens;
            ?>
        </td>
        <td><?php
                $con = mysqli_connect("localhost","root","");
                if(!$con){
                echo"Not connect to Server";
                }
                if(!mysqli_select_db($con,'newusers')){
                echo 'Database not select';
                }
                $idCliente = $_GET["idCliente"];

                //Contagem de Mulheres
                $sql ="Select COUNT(ID_colaborador) as mulheres from colaboradores where Sexo = 'Feminino' and ID_cliente=".$idCliente;
                $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                while($row=mysqli_fetch_assoc($result)){
                    $mulheres = $row["mulheres"];
                }
                echo $mulheres;
            ?>
        </td>
    </table>
</div>


<br>
<br>


<div class="container bg-3" align="center">        
    <table class="table" id="myTable">
        <tr class="header">
            <th>Escalão Etário</th>
            <th>Homens</th>
            <th>Mulheres</th>
        </tr>
        <tr>
            <td>Menos de 18</td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];

                    //Contagem de Homens com menos de 18 anos
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Masculino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff < 18){
                        $cnt ++;
                    }
                    }
                    echo $cnt;
                ?>
            </td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];

                    //Contagem de Mulheres com menos de 18 anos
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Feminino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff < 18){
                            $cnt ++;
                        }
                    }
                    echo $cnt;
                ?>
            </td>
        </tr>
        <tr>
            <td>Entre 18 e 19</td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];

                    //Contagem de Homens com idade entre os 18 e 19
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Masculino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff >= 18 && $diff <= 19){
                        $cnt ++;
                    }
                    }
                    echo $cnt;
                ?>
            </td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];
        
                    //Contagem de Mulheres com idade entre os 18 e 19
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Feminino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff >= 18 && $diff <= 19){
                        $cnt ++;
                        }
                    }
                    echo $cnt;
                ?>
            </td>
        </tr>
        <tr>
            <td>Entre 20 e 49</td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];

                    //Contagem de Homens com idade entre os 20 e 49
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Masculino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff >= 20 && $diff <= 49){
                            $cnt ++;
                        }
                    }
                    echo $cnt;
                ?>
            </td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"]; 

                    //Contagem de Mulheres com idade entre os 20 e 49
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Feminino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff >= 20 && $diff <= 49){
                            $cnt ++;
                        }
                    }
                    echo $cnt;  
                ?>
            </td>
        </tr>
        <tr>
            <td>Mais de 50</td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];

                    //Contagem de Homens com mais de 50 anos
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Masculino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff >= 50){
                            $cnt ++;
                        }
                    }
                    echo $cnt;
                ?>
            </td>
            <td><?php
                    $con = mysqli_connect("localhost","root","");
                    if(!$con){
                        echo"Not connect to Server";
                    }
                    if(!mysqli_select_db($con,'newusers')){
                        echo 'Database not select';
                    }
                    $idCliente = $_GET["idCliente"];

                    //Contagem de Mulheres com mais de 50 anos
                    $dateToday = date("Y-m-d");
                    $cnt = 0;
                    $sql ="Select ID_colaborador, DataNasc as data  from colaboradores where Sexo = 'Feminino' and ID_cliente=".$idCliente;
                    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                    while($row=mysqli_fetch_assoc($result)){
                        $diff = $dateToday - $row["data"];
                        if($diff >= 50){
                            $cnt ++;
                        }
                    }
                    echo $cnt;
                ?>
            </td>
        </tr>


    </table>
</div>
<body>
</html>