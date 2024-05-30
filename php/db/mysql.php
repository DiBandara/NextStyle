<?php

    $host = 'localhost';
    $dbname = 'nextstyle';
    $username = 'root';
    $password = '';     
    
    try{
        $mysqli = new mysqli($host, $username, $password, $dbname); 
        if ($mysqli->connect_error) {
            throw new Exception("Connection failed: " . $mysqli->connect_error);
        }      
    }catch (Exception $e) {
        echo "Connection failed: " . $e->getMessage();
    }    
?>