<?php

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['idCliente1'];
    $Nome= $_POST['nome'];
    $NIF= $_POST['nif'];
    $CAE= $_POST['cae'];
    $Estabelecimento= $_POST['estabelecimento'];
    $Endereco= $_POST['endereco'];
    $CodigoPostal= $_POST['codpostal'];
    $Telefone= $_POST['tlf'];
    $Localidade= $_POST['localidade'];
    $Email= $_POST['email'];
    $NomeFun= $_POST['NomeF'];
    $NumFun= $_POST['NumF'];

    $sql = "UPDATE clientes SET Nome = '$Nome', NIF = '$NIF', CAE = '$CAE', Estabelecimento = '$Estabelecimento', Endereco = '$Endereco', CodPostal = '$CodigoPostal', Tlf = '$Telefone', Localidade = '$Localidade', Email = '$Email', NomeFuncionario = '$NomeFun', NFuncionario = '$NumFun' WHERE ID_cliente = '$ID'";
   
    if(!mysqli_query($con,$sql)){
        printf("Connect failed: %s\n", mysqli_error($con));
        exit();
    }
    else{
        echo'Actualizado';
    }

    header("refresh:1; url=CriarCliente.php");
?>