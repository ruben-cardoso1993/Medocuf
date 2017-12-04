<?php 
   $host="localhost";
   $user="root";
   $pass="";
   $BD="newusers";
   
   $conexao=mysqli_connect($host,$user,$pass,$BD) or die(mysql_error());
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $entrar=$_POST['Entrar'];
            
            if(isset($entrar)){
                $sql =mysqli_query($conexao,"SELECT * FROM utilizadores WHERE Username='$username' and Password='$password'")or die("Query incorrecta");
                if(mysqli_num_rows($sql)<=0){
                    echo"<script>alert('Credenciais incorrectas!'); window.location.href='Login.php';</script>";
                    die();
                }
                else{
                   while($row1=mysqli_fetch_assoc($sql)){
                        if($row1["Role"]=="Admin"){
                            setcookie("Login",$username,time()+3600);
                            echo"<script>window.location.href='PaginaPrincipal.php';</script>";
							
                        }
                        else{
                            setcookie("Login",$username,time()+3600);
                            echo"<script>window.location.href='PaginaUtilizador.php';</script>";
							
                        }
                    } 
                }
            }
?> 
