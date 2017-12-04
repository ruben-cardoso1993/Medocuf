<?php
    session_start();
    unset($_COOKIE['Login']);
    setcookie('Login',null,-1,'/');
    session_destroy();
    header("location: Login.php");
?>