<?php
    session_start();
    $dbhost="localhost";
    //$dbname="newusers";
    $dbuser="root";
    $dbpass="";
    mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
    mysql_select_db("newusers") or die("MySQL Error: " . mysql_error());
?>