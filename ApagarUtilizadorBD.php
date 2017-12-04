<?php

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $Name= $_POST['username'];
    
    $sql ="DELETE FROM utilizadores where Username='$Name'";
 
    if(!mysqli_query($con,$sql)){
        echo'Not deleted';
    }
    else{
        echo'Deleted';
    }

    header("refresh:0; url=ApagarUtilizador.php");
?>