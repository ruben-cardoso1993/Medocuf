<?php
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $ID = $_POST['id_Cliente'];
    $sql = "UPDATE clientes SET Estado = 'Desactivado' WHERE ID_cliente = $ID";
	$sql1 = "INSERT INTO clientes_removidos SELECT * FROM clientes WHERE Estado = 'Desactivado'";
	$sql2 = "DELETE FROM clientes WHERE Estado = 'Desactivado' ";
    if(!mysqli_query($con,$sql)){
        printf("Connect failed: %s\n", mysqli_error($con));
        exit();
    }
    else{
        echo "<script> window.location ='CriarCliente.php';</script>";
    }
	  if(!mysqli_query($con,$sql1)){
        printf("Connect failed: %s\n", mysqli_error($con));
        exit();
    }
	else{
        echo "<script> window.location ='CriarCliente.php';</script>";
    }
	if(!mysqli_query($con,$sql2)){
        printf("Connect failed: %s\n", mysqli_error($con));
        exit();
    }
	else{
        echo "<script> window.location ='CriarCliente.php';</script>";
    }
?>