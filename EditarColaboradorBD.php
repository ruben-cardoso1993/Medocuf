<?php

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['idColaborador'];
    $Nome= $_POST['nome'];
    $Sexo= $_POST['sexo'];
    $DatNasc= $_POST['datnasc'];
    $Nacionalidade= $_POST['nacionalidade'];
    $DAE= $_POST['dae'];
    $CatProf= $_POST['catprof'];
    $Funcao= $_POST['funcao'];
    $Risco= $_POST['risco'];
    $DAAF= $_POST['daaf'];
    

    $sql ="UPDATE colaboradores SET Nome = '$Nome', Sexo = '$Sexo', DataNasc = '$DatNasc', Nacionalidade = '$Nacionalidade', DAE = '$DAE', CatProf = '$CatProf', Funcao = '$Funcao', Risco = '$Risco', DAAF = '$DAAF' WHERE ID_colaborador = '$ID'";

    if(!mysqli_query($con,$sql)){
        echo'Not inserted';
    }
    else{
        echo'Inserted';
    }

    header("refresh:0; url=GestaoColaboradores.php");
?>