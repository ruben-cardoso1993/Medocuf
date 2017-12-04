<?php
    $id=$_POST['id_Cliente'];
    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $sql ="SELECT * from clientes where ID_cliente=$id";
    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
    
    while($row=mysqli_fetch_assoc($result)){
        $array = array(
            "Designacao" => $row["Nome"],
            "NIF" => $row["NIF"],
            "CAE" => $row["CAE"],
            "Estabelecimento" => $row["Estabelecimento"],
            "Endereco" => $row["Endereco"],
            "CodPostal" => $row["CodPostal"],
            "Tlf" => $row["Tlf"],
            "Localidade" => $row["Localidade"],
            "Email" => $row["Email"],
            "NomeFunc" => $row["NomeFuncionario"],
            "NumFunc" => $row["NFuncionario"]  
        );
    }
    echo json_encode($array);
?>