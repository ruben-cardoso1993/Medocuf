<?php

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['idClienteAdd'];
    $Nome= $_POST['nome'];
    $Sexo= $_POST['sexo'];
    $DatNasc= $_POST['datnasc'];
    $Nacionalidade= $_POST['nacionalidade'];
    $DAE= $_POST['dae'];
    $CatProf= $_POST['catprof'];
    $Funcao= $_POST['funcao'];
    $Risco= $_POST['risco'];
    $DAAF= $_POST['daaf'];
	
	if(date($dateToday) - date($dataNascimento)<=49){
                        $DataLimite = date("Y-m-d", strtotime(date("Y-m-d", strtotime($DAAF)) . "+25 months"));
                    }
                        else{
                            if(date($dateToday) - date($dataNascimento)>49){
                                $DataLimite = date("Y-m-d", strtotime(date("Y-m-d", strtotime($DAAF)) . "+13 months"));
						}}
	
	
    
    
	
	
	$DC='1980-01-01';
    $HC='00:00';
    $DCO='1980-01-01';
    $HCO='00:00';

    

    $sql ="INSERT INTO colaboradores (Nome,ID_cliente,Sexo,DataNasc,Nacionalidade,DAE,CatProf,Funcao,Risco,DAAF,DataLimite) VALUES ('$Nome','$ID','$Sexo','$DatNasc','$Nacionalidade','$DAE','$CatProf','$Funcao','$Risco','$DAAF','$DataLimite')";

    if(!mysqli_query($con,$sql)){
         printf("Connect failed: %s\n", mysqli_error($con));
        exit();
    }
    else{
        echo'Inserted';
    }

    header("refresh:0; url=CriarCliente.php");
?>