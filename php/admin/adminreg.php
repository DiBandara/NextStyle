<?php

    require_once '../../src/controllers/admin/adminreg.php';    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $_POST["name"];
        $address = $_POST["Address"];
        $phoneNo = $_POST["Phone"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $usertype = "admin";        

        $registration_result = registerUser($userName, $address, $phoneNo, $email, $password, $usertype);
                
    }
?>
