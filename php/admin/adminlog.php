<?php

    require_once '../../src/controllers/admin/adminlog.php'; 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["Emial"];
        $password = $_POST["Password"];

        $login_result = loginUser($email, $password);
    }    
?>