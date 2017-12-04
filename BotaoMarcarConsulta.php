<?php

    $id=$_POST['id_Colaborador'];
    
    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }

    $sql ="SELECT * from colaboradores where ID_colaborador=$id";
    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
    
    while($row=mysqli_fetch_assoc($result)){
        $array = array(
            "DataDaConsulta" => $row["DataConsulta"],
            "HoraDaConsulta" => $row["HoraConsulta"]
        );
    }
    echo json_encode($array);
        

?>