<?php

    require_once '../../php/db/mysql.php';    

    function insertUser($username, $address, $phoneNO, $email, $password, $usertype){
        global $mysqli;

        $sql = "INSERT INTO users (name, address, phone_no, email, password, user_type) 
                 VALUES ('$username', '$address', '$phoneNO', '$email', '$password', '$usertype')";

        $result = mysqli_query($mysqli, $sql);

        return $result;
    }

    function checkEmail($email){
        global $mysqli;

        $check_query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($mysqli, $check_query);

        return mysqli_num_rows($result) > 0;                
    }   
    
?>