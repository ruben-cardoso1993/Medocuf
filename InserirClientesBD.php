<?php
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['idCliente'];
    $Nome= $_POST['Name'];
    $NIF= $_POST['Nif'];
    $CAE= $_POST['Cae'];
    $Estabelecimento= $_POST['Estab'];
    $Endereco= $_POST['Endereco'];
    $CodigoPostal= $_POST['CodigoPostal'];
    $Telefone= $_POST['Tel'];
    $Localidade= $_POST['morada'];
    $Email= $_POST['mail'];
    $NomeFun= $_POST['NomeFuncion'];
    $NumFun= $_POST['NFuncion'];
    $Estado='Activo';

    $sql ="INSERT INTO clientes (Nome,NIF,CAE,Estabelecimento,Endereco,CodPostal,Tlf,Localidade,Email,NomeFuncionario,NFuncionario,Estado) VALUES ('$Nome','$NIF','$CAE','$Estabelecimento','$Endereco','$CodigoPostal','$Telefone','$Localidade','$Email','$NomeFun','$NumFun','$Estado')";

    if(!mysqli_query($con,$sql)){
        //echo'Not inserted';
        printf("Connect failed: %s\n", mysqli_error($con));
        exit();
    }
    else{
        echo'Inserted';
    }
    header("refresh:0; url=CriarCliente.php");
?>