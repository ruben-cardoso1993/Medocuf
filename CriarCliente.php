<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Página Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" 
    href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
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

        .checkbox{
            margin:0;
            font-size: 15px;
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
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }

        .table{
            width:70%;
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

            <div class=" text-center">
                <button type="button" class="btn bg-1" data-toggle="modal" data-target="#CriarCliente">Criar Cliente</button>
				<button type="button" class="btn bg-1" data-toggle="modal" data-target="#CriarClienteHST">Criar Cliente HST</button>
				<!--<button type="button" class="btn bg-1" onclick="location.href='CriarClienteHST.php';">Criar Cliente HST</button>-->
            </div>
			
		<!--Criar Cliente Medicina-->
            <div class="modal fade" id="CriarCliente" role="dialog">
                <div class="modal-dialog">
       
                    <!-- Modal content-->
                    <div class="modal-footer bg-3">
                        <form role="form" method="post" action="InserirClientesBD.php">
                        <input type="hidden" name="idCliente" class="form-control" placeholder="" > 
                        <h5>Nome/Designação Social:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Name" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>NIF:</h5> 
                        <div class="col-sm-12">
                            <input type="text" name="Nif" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>CAE:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Cae" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Estabelecimento:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Estab" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Endereço:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Endereco" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Código-Postal:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="CodigoPostal" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Telefone:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Tel" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Localidade:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="morada" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Email:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="mail" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <div class="checkbox">
                        <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <input type="checkbox"/>Higiene e Segurança no trabalho
                        </label>
                        </div>
  
                        <div id="collapseOne" aria-expanded="false" class="collapse">
                        <h5>Técnico:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="NomeFuncion" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Número:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="NFuncion" class="form-control" placeholder="">   
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                    </form>
                </div>
            </div>
        </div>  
		<!--Criar Cliente HST-->
		<div class="modal fade" id="CriarClienteHST" role="dialog">
                <div class="modal-dialog">
       
                    <!-- Modal content-->
                    <div class="modal-footer bg-3">
                        <form role="form" method="post" action="InserirClientesBD.php">
                        <input type="hidden" name="idCliente" class="form-control" placeholder="" > 
                        <h5>Nome/Designação Social:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Name" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>NIF:</h5> 
                        <div class="col-sm-12">
                            <input type="text" name="Nif" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>CAE:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Cae" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Estabelecimento:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Estab" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Endereço:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Endereco" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Código-Postal:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="CodigoPostal" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Telefone:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="Tel" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Localidade:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="morada" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Email:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="mail" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <div class="checkbox">
                        <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <input type="checkbox"/>Higiene e Segurança no trabalho
                        </label>
                        </div>
  
                        <div id="collapseOne" aria-expanded="false" class="collapse">
                        <h5>Técnico:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="NomeFuncion" class="form-control" placeholder="">   
                        </div>
                        <br>
                        <h5>Número:</h5>
                        <div class="col-sm-12">
                            <input type="text" name="NFuncion" class="form-control" placeholder="">   
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                    </form>
                </div>
            </div>
        </div>
<div class="modal fade" id="Criacao" role="dialog">
    <div class="modal-dialog">
       
        <!-- Modal content-->
            <div class="modal-footer bg-3">
             <form role="form" method="post" action="EditarCliente.php">
                <input type="hidden" name="idCliente1" class="form-control" placeholder="" > 
                <h5>Nome/Designação Social:</h5>
                 <div class="col-sm-12">
                    <input type="text" name="nome" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>NIF:</h5> 
                <div class="col-sm-12">
                    <input type="text" name="nif" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>CAE:</h5>
                <div class="col-sm-12">
                    <input type="text" name="cae" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Estabelecimento:</h5>
                <div class="col-sm-12">
                    <input type="text" name="estabelecimento" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Endereço:</h5>
                <div class="col-sm-12">
                    <input type="text" name="endereco" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Código-Postal:</h5>
                <div class="col-sm-12">
                    <input type="text" name="codpostal" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Telefone:</h5>
                <div class="col-sm-12">
                    <input type="text" name="tlf" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Localidade:</h5>
                <div class="col-sm-12">
                    <input type="text" name="localidade" class="form-control" placeholder="">   
                </div>
                <br>
                <h5>Email:</h5>
                <div class="col-sm-12">
                    <input type="text" name="email" class="form-control" placeholder="">   
                </div>
                <br>
                
               
                <div class="checkbox">
                    <label data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne1">
                        <input type="checkbox"/>Higiene e Segurança no trabalho
                    </label>
                </div>
  
                <div id="collapseOne2" aria-expanded="false" class="collapse">
              
                    <h5>Nome Funcionário:</h5>
                        <div class="col-sm-12">
                    <input type="text" name="NomeF" class="form-control" placeholder="">   
                        </div>
                    <br>
                    <h5>Número:</h5>
                        <div class="col-sm-12">
                    <input type="text" name="NumF" class="form-control" placeholder="">   
                        </div>
                </div>
                <br>
                <br>
                <br>
               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save"></span> Guardar</button>
           </form>
            </div>

    </div>
</div>

<div class="modal fade" id="novoscolaboradores" role="dialog">
        <div class="modal-dialog">
       
        <!-- Modal content-->
            <div class="modal-footer bg-3">
             <form role="form" method="post" action="InserirColaboradoresBD.php">
                <input type="hidden" name="idClienteAdd" class="form-control" placeholder="" > 
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
                <!--
                <div class="col-sm-12">
                    <input type="text" name="datnasc" class="form-control" placeholder="">   
                </div>-->
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
                <h5>Trabalho de risco? (Sim/Nao)</h5>
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
               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Adicionar</button>
           </form>
            </div>

        </div>
</div>


<br>
<br>
<script type="text/javascript">
  $(function () {
    $('glyphicon-calendar').datetimepicker();
    });
</script>

<?php

if(isset($_POST['Procura'])){

    $valueToSearch = $_POST['ValorAProcurar'];
    $query = "SELECT * FROM `clientes` WHERE CONCAT(`Nome`)LIKE '%".$valueToSearch."%'";
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


<form action="CriarCliente.php" method="post" align="center">
        <input class=inputPesquisa type="text"  name="ValorAProcurar"  placeholder="Procurar..."/>
        <input class="btn bg-1" type="submit" name="Procura" value="Pesquisar"/>
        <input class="btn bg-1" type="submit" name="Limpar" value="Limpar"/>

<br>
<br>
<br>


        <div class="container bg-3" align="center">        
            <table class="table" id="myTable">
    
                <tr class="header">
                    <th>Designação</th>
                    <th>Editar</th>
                    <th>Remover</th>
                    <th>Adicionar Colaboradores</th>
                    <th>Estado</th>
                  
                </tr>
                
            <?php
				$con = mysqli_connect("localhost","root","");

				if(!$con){
				echo"Not connect to Server";
				}
				if(!mysqli_select_db($con,'newusers')){
				echo 'Database not select';
				}
				
				$sql ="SELECT Nome FROM clientes";
				$result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
				
				if($filter_Result=""){ 
					while($row=mysqli_fetch_assoc($result)){?>
					<tr>
						<td>
						<?php	
							echo"{$row['Nome']}<br>";
						?>
						</td>
						<td align="center"> 
							<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" id="btnEditar"  class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Criacao"></button>
						</td>
						<td align="center">
							
								<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" class="glyphicon glyphicon-remove" id="btnRemover" action="RemoverCliente.php"></button>
														            
						</td>
						<td align="center">
							<!--if($row['Estado']=='Activo'){-->
								<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#novoscolaboradores"></button>
							<!--}-->
							<!--else{};-->
						</td>
                        <td><?php
                           echo"{$row['Estado']}<br>";
                        ?>
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
							echo"{$row['Nome']}<br>";
						?>
						</td>
						<td align="center">
							<button type="button"  name="<?php echo"{$row['ID_cliente']}"; ?>" id="btnEditar" class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Criacao"></button>
						</td>
						<td align="center">
							<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" class="glyphicon glyphicon-remove" id="btnRemover" action="RemoverCliente.php" ></button>
						</td>
						<td align="center">
							<button type="button" name="<?php echo"{$row['ID_cliente']}";?>" id="btnAdicionar" class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#novoscolaboradores"></button>
						</td>
                        <td><?php
                           echo"{$row['Estado']}<br>";
                        ?>
                        </td>
					</tr>
					<?php
					}
				}
					?>
					 
            </table>
    </div>
</form>
 
</body>
<script>
$(".glyphicon-pencil").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idCliente']");
    inputID[0].value = id;
    var inputName = $("form :input[name='nome']");
    var inputNif = $("form :input[name='nif']");
    var inputCae = $("form :input[name='cae']");
    var inputEstabelecimento = $("form :input[name='estabelecimento']");
    var inputEndereco = $("form :input[name='endereco']");
    var inputCodPostal = $("form :input[name='codpostal']");
    var inputTlf = $("form :input[name='tlf']");
    var inputLocalidade = $("form :input[name='localidade']");
    var inputEmail = $("form :input[name='email']");
    var inputNomeFunc = $("form :input[name='NomeF']");
    var inputNumFunc = $("form :input[name='NumF']");
    
    $.ajax({ url: 'BotaoEditar.php',
         data: { id_Cliente:id },
         type: 'post',
         dataType: 'json',
         success: function(output) {
            inputName[0].value = output.Designacao;
            inputNif[0].value = output.NIF;
            inputCae[0].value = output.CAE;
            inputEstabelecimento[0].value = output.Estabelecimento;
            inputEndereco[0].value = output.Endereco;
            inputCodPostal[0].value = output.CodPostal;
            inputTlf[0].value = output.Tlf;
            inputLocalidade[0].value = output.Localidade;
            inputEmail[0].value = output.Email;
            inputNomeFunc[0].value = output.NomeFunc;
            inputNumFunc[0].value = output.NumFunc;
        }
    });
});
</script>

<script>
$(".glyphicon-pencil").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idCliente1']");
    inputID[0].value = id;
    var inputName = $("form :input[name='nome']");
    var inputNif = $("form :input[name='nif']");
    var inputCae = $("form :input[name='cae']");
    var inputEstabelecimento = $("form :input[name='estabelecimento']");
    var inputEndereco = $("form :input[name='endereco']");
    var inputCodPostal = $("form :input[name='codpostal']");
    var inputTlf = $("form :input[name='tlf']");
    var inputLocalidade = $("form :input[name='localidade']");
    var inputEmail = $("form :input[name='email']");
    var inputNomeFunc = $("form :input[name='NomeF']");
    var inputNumFunc = $("form :input[name='NumF']");
    
    $.ajax({ url: 'EditarCliente.php',
         data: { id_Cliente:id },
         type: 'post',
         dataType: 'json',
         success: function(output) {
            //alert(output);
            inputName[0].value = output.Designacao;
            inputNif[0].value = output.NIF;
            inputCae[0].value = output.CAE;
            inputEstabelecimento[0].value = output.Estabelecimento;
            inputEndereco[0].value = output.Endereco;
            inputCodPostal[0].value = output.CodPostal;
            inputTlf[0].value = output.Tlf;
            inputLocalidade[0].value = output.Localidade;
            inputEmail[0].value = output.Email;
            inputNomeFunc[0].value = output.NomeFunc;
            inputNumFunc[0].value = output.NumFunc;


        }
        
    });
});

</script>


<script>
$(".glyphicon-remove").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idCliente1']");
    inputID[0].value = id;
    var inputName = $("form :input[name='nome']");
    var inputNif = $("form :input[name='nif']");
    var inputCae = $("form :input[name='cae']");
    var inputEstabelecimento = $("form :input[name='estabelecimento']");
    var inputEndereco = $("form :input[name='endereco']");
    var inputCodPostal = $("form :input[name='codpostal']");
    var inputTlf = $("form :input[name='tlf']");
    var inputLocalidade = $("form :input[name='localidade']");
    var inputEmail = $("form :input[name='email']");
    var inputNomeFunc = $("form :input[name='NomeF']");
    var inputNumFunc = $("form :input[name='NumF']");
    
    $.ajax({ url: 'RemoverCliente.php',
         data: { id_Cliente:id },
         type: 'post',
         dataType: 'json',
         success: function(output) {
            //alert(output);
            inputName[0].value = output.Designacao;
            inputNif[0].value = output.NIF;
            inputCae[0].value = output.CAE;
            inputEstabelecimento[0].value = output.Estabelecimento;
            inputEndereco[0].value = output.Endereco;
            inputCodPostal[0].value = output.CodPostal;
            inputTlf[0].value = output.Tlf;
            inputLocalidade[0].value = output.Localidade;
            inputEmail[0].value = output.Email;
            inputNomeFunc[0].value = output.NomeFunc;
            inputNumFunc[0].value = output.NumFunc;


        }
        
    });
     window.location ='CriarCliente.php';
});

</script>

<script>
//$(".glyphicon-plus").click(function(){
    
$(".glyphicon-plus").click(function(){
    var id=this.name;
    var inputID = $("form :input[name='idClienteAdd']");
    inputID[0].value = id;
    
});

</script>

</html>