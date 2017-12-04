<?php
    $id=$_POST['id_Cliente'];
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $sql ="SELECT * from colaboradores where ID_cliente=$id";
    $result=mysqli_query($con,$sql) or die("Query incorrecta: $sql");
    
    while($row=mysqli_fetch_assoc($result)){
        $array = array(
            "Designacao" => $row["Nome"],
            "Sexo" => $row["Sexo"],
            "DataNascimento" => $row["DataNasc"],
            "Nacionalidade" => $row["Nacionalidade"],
            "DataAdmissaoEmpresa" => $row["DAE"],
            "CategoriaProfissao" => $row["CatProf"],
            "Funcao" => $row["Funcao"],
            "Risco" => $row["Risco"],
            "DataAdmissaoActividade" => $row["DAAF"], 
        );
    }
    echo json_encode($array);
?>