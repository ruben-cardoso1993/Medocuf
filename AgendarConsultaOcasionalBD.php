<?php

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['idColaborador'];
    $DatC= $_POST['dataConsultaO'];
    $HoraC= $_POST['horaConsultaO'];
    
    

    $sql ="UPDATE colaboradores SET DCO = '$DatC', DCOH ='$HoraC' WHERE ID_colaborador = '$ID'";

    if(!mysqli_query($con,$sql)){
        echo'Not inserted';
    }
    else{
        echo'Inserted';
    }

    header("refresh:0; url=GestaoColaboradores.php");
?>