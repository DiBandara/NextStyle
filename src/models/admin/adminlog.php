<?php

    require_once '../../php/db/mysql.php';    

    function userLogin($email, $password){
        global $mysqli;

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($mysqli, $query);

        return  $result;
    }
?>