<?php

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['idColaborador'];
    $DatC= $_POST['dataConsulta'];
    $HoraC= $_POST['horaConsulta'];
    
    

    $sql ="UPDATE colaboradores SET DataConsulta = '$DatC', HoraConsulta ='$HoraC' WHERE ID_colaborador = '$ID'";

    if(!mysqli_query($con,$sql)){
        echo'Not inserted';
    }
    else{
        echo'Inserted';
    }

    header("refresh:0; url=GestaoColaboradores.php");
?>