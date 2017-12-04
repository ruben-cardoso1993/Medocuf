<?php
    //$con = new mysqli("localhost","root","");
	$conexao=mysqli_connect("localhost","root","","newusers") or die(mysql_error());	
	
    if(!$conexao){
        echo"Error, can't connect";
    }
    /*if(!mysql_select_db($con,'newusers')){
        echo 'Database not select';
    }*/
    $Name= $_POST['username'];
    $Password= $_POST['password'];
	
	echo $Name, $Password;

    $sql ="INSERT INTO utilizadores (Username,Password,Role) VALUES ('$Name','$Password','Utilizador')";

    if(!mysqli_query($conexao,$sql)){
        echo'Não inserido';
    }
    else{
        echo'Inserido';
    }
    
    header("refresh:0; url=CriarUtilizador.php");
?>