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
      <li><a href=""><span class="glyphicon glyphicon-user"></span> UTILIZADOR</a></li>
      <li><a href="PaginaUtilizador.php"><span class="glyphicon glyphicon-log-in"></span> VOLTAR</a></li>
    </ul>
  </div>
</nav>

<br>

<div class="modal fade" id="novoscolaboradores" role="dialog">
        <div class="modal-dialog">
       
        <!-- Modal content-->
            <div class="modal-footer bg-3">
             <form role="form" method="post" action="EditarColaboradorBD.php">
                <input type="hidden" name="idColaborador" class="form-control" placeholder="" > 
                <h5>Nome:</h5>
                 <div class="col-sm-12">
                    <input type="text" name="nome" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Sexo:</h5> 
                <div class="col-sm-12">
                    <input type="text" name="sexo" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Data de nascimento: (dd/mm/AAAA)</h5>
                <div class="col-sm-12">
                    <input type="date" name="datnasc" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Nacionalidade:</h5>
                <div class="col-sm-12">
                    <input type="text" name="nacionalidade" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Data de admissão na empresa:</h5>
                <div class="col-sm-12">
                    <input type="date" name="dae" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Categoria profissional:</h5>
                <div class="col-sm-12">
                    <input type="text" name="catprof" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Actividade/Função:</h5>
                <div class="col-sm-12">
                    <input type="text" name="funcao" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Trablho de risco? (Sim/Nao)</h5>
                <div class="col-sm-12">
                    <input type="text" name="risco" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Data de admissão na actividade/função:</h5>
                <div class="col-sm-12">
                    <input type="date" name="daaf" class="form-control" placeholder="">   
                </div>
                <br>
                <br>
                <br>
               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Gravar</button>
           </form>
            </div>

        </div>
</div>


<div class="modal fade" id="AgendarConsulta" role="dialog">
        <div class="modal-dialog">
       
        <!-- Modal content-->
            <div class="modal-footer bg-3">
             <form role="form" method="post" action="AgendarConsultaColaboradorBD.php">
                <input type="hidden" name="idColaborador" class="form-control" placeholder="" > 
                <h5>Data</h5>
                 <div class="col-sm-12">
                    <input type="date" name="dataConsulta" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Hora</h5>
                <div class="col-sm-12">
                    <input type="time" name="horaConsulta" class="form-control" placeholder="">   
                </div>
                <br>
                <br>
                <br>
               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Gravar</button>
            </form>
            </div>
        </div>
</div>

<div class="modal fade" id="AgendarConsultaOcasional" role="dialog">
        <div class="modal-dialog">
       
        <!-- Modal content-->
            <div class="modal-footer bg-3">
             <form role="form" method="post" action="AgendarConsultaOcasionalBD.php">
                <input type="hidden" name="idColaborador" class="form-control" placeholder="" > 
                <h5>Data</h5>
                 <div class="col-sm-12">
                    <input type="date" name="dataConsultaO" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Hora</h5>
                <div class="col-sm-12">
                    <input type="time" name="horaConsultaO" class="form-control" placeholder="">   
                </div>
                <br>
                <br>
                <br>
               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Gravar</button>
            </form>
            </div>
        </div>
</div>

<?php
$flag = false;
if(isset($_POST['Procura'])){

    if($valueToSearch = $_POST['ValorAProcurar']){
        $query = "SELECT * FROM `colaboradores` WHERE CONCAT(`Nome`)LIKE '%".$valueToSearch."%'";
    }
    else{
        if($valueToSearch = $_POST['nomedocliente']){
            $query = "select c.ID_colaborador, c.Nome as Nome from colaboradores c ";
            $query .= "left join clientes cl ";
            $query .= "on c.ID_cliente = cl.ID_cliente ";
            $query .= " Where cl.Nome LIKE '%".$valueToSearch."%' ";

            $flag = true;

        }
    }
    $search_result = filterTable($query);

}
        else{

        $query = "SELECT * FROM `colaboradores`";
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

                                $sql ="SELECT Nome FROM colaboradores";
                                $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
                                  
}


function filterTable($query){

    $connect = mysqli_connect("localhost","root","","newusers");
    $filter_Result = mysqli_query($connect,$query);
    return $filter_Result;

}

?>

<div clas="container-fluid bg-3 text-center">
    <div class="container" id="criarutilizador">
        <form class="form-horizontal" align=center  method="post" action="GestaoColaboradores.php">
            <div class="form-group">
                </br>
                <label class="control-label col-sm-2" name="NomeCliente">Nome do cliente :</label>      
                    <div class="col-sm-8">
                        <input type="text" name="nomedocliente" class="form-control" placeholder=""require>
                    </div>
            </div>
            <div class="form-group">
                </br>
                    <label class="control-label col-sm-2" name="NomeColaborador">Nome do colaborador :</label>
                    <div class="col-sm-8">
                        <input type="text" name="ValorAProcurar" class="form-control" placeholder=""> 
                        </br>
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
                            <th>Editar</th>
                            <th>Agendar Consulta Periódica</th>
                            <th>Agendar Consulta Ocasional</th>
                        </tr>
                        <?php
				            $con = mysqli_connect("localhost","root","");

				            if(!$con){
				                echo"Not connect to Server";
				            }
				            if(!mysqli_select_db($con,'newusers')){
				                echo 'Database not select';
				            }

				            $sql ="SELECT c.Nome FROM colaboradores c";
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
							<button type="button" name="<?php echo"{$row['ID_colaborador']}";?>" id="btnEditarColaborador" class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#novoscolaboradores"></button>
						</td>
                        <td align="center">
                            <button type="button" name="<?php echo"{$row['ID_colaborador']}";?>" id="btnMarcarConsulta" class="glyphicon glyphicon-calendar" data-toggle="modal" data-target="#AgendarConsulta"></button>
                        </td>
                        <td align="center">
                            <button type="button" name="<?php echo"{$row['ID_colaborador']}";?>" id="btnMarcarConsultaOcasional" class="glyphicon glyphicon-list-alt" data-toggle="modal" data-target="#AgendarConsultaOcasional"></button>
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
							<button type="button" name="<?php echo"{$row['ID_colaborador']}";?>" id="btnEditarColaborador" class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#novoscolaboradores"></button>
						</td>
                       <td align="center">
                            <button type="button" name="<?php echo"{$row['ID_colaborador']}";?>" id="btnMarcarConsulta" class="glyphicon glyphicon-calendar" data-toggle="modal" data-target="#AgendarConsulta"></button>
                        </td>
                        <td align="center">
                            <button type="button" name="<?php echo"{$row['ID_colaborador']}";?>" id="btnMarcarConsultaOcasional" class="glyphicon glyphicon-list-alt" data-toggle="modal" data-target="#AgendarConsultaOcasional"></button>
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

<script>
$(".glyphicon-pencil").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idColaborador']");
    inputID[0].value = id;
    var inputName = $("form :input[name='nome']");
    var inputSexo = $("form :input[name='sexo']");
    var inputDataNascimento = $("form :input[name='datnasc']");
    var inputNacionalidade = $("form :input[name='nacionalidade']");
    var inputDataAdmissaoEmpresa = $("form :input[name='dae']");
    var inputCategoriaProfissao = $("form :input[name='catprof']");
    var inputFuncao = $("form :input[name='funcao']");
    var inputRisco = $("form :input[name='risco']");
    var inputDataAdmissaoActividade = $("form :input[name='daaf']");
    
    $.ajax({ url: 'BotaoEditarColaborador.php',

         data: { id_Colaborador:id},
         type: 'post',
         dataType: 'json',
         success: function(output) {
            inputName[0].value = output.Designacao;
            inputSexo[0].value = output.Sexo;
            inputDataNascimento[0].value = output.DataNascimento;
            inputNacionalidade[0].value = output.Nacionalidade;
            inputDataAdmissaoEmpresa[0].value = output.DataAdmissaoEmpresa;
            inputCategoriaProfissao[0].value = output.CategoriaProfissao;
            inputFuncao[0].value = output.Funcao;
            inputRisco[0].value = output.Risco;
            inputDataAdmissaoActividade[0].value = output.DataAdmissaoActividade;
        }
        
    });
});
</script>

<script>
$(".glyphicon-calendar").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idColaborador']");
    inputID[0].value = id;
    inputID[1].value = id;
    inputID[2].value = id;
    var inputDataConsulta = $("form :input[name='dataConsulta']");
    var inputHoraConsulta = $("form :input[name='horaConsulta'");

    $.ajax({ url: 'BotaoMarcarConsulta.php',

         data: { id_Colaborador:id},
         type: 'post',
         dataType: 'json',
         success: function(output) {
            inputDataConsulta[0].value = output.DataDaConsulta;
            inputHoraConsulta[0].value = output.HoraDaConsulta;
        }
        
    });
});
</script>

<script>
$(".glyphicon-list-alt").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idColaborador']");
    inputID[0].value = id;
    inputID[1].value = id;
    inputID[2].value = id;
    var inputDataConsultaOcasional = $("form :input[name='DCO']");
    var inputHoraConsultaOcasional = $("form :input[name='DCOH'");

    $.ajax({ url: 'BotaoMarcarConsulta.php',

         data: { id_Colaborador:id},
         type: 'post',
         dataType: 'json',
         success: function(output) {
            inputDataConsultaOcasional[0].value = output.DataDaConsultaOcasional;
            inputHoraConsultaOcasional[0].value = output.HoraDaConsultaOcasional;
        }
        
    });
});
</script>


</body>
</html>