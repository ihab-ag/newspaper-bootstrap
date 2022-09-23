<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="news";

    $mysqli= new mysqli($host,$user,$pass,$db);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $query= $mysqli->prepare("SELECT * FROM articles");
    $query->execute();
    $array=$query->get_result();

    
?>