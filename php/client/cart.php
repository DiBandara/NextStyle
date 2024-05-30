<?php

    require_once '../../src/controllers/cart.php';     
    require_once '../../src/controllers/pay.php'; 


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submitType"])) {
            if (($_POST["submitType"] === "submitAll") && isset($_GET['proId'])) {
                $proId = $_GET['proId'];
                $qty = $_POST["qty"];
                $name = $_GET['nme'];
                $price = $_GET['prc'];   
                $userId = $_GET["uId"];
                $img = $_GET['img'];       
    
                $crt = cart($userId, $proId, $qty, $name, $price, $img);
                
            }
            elseif ($_POST["submitType"] === "submitBuyButton") {
                $userId = $_GET["uId"];
                $qty = $_POST["qty"];
                $price = $_GET['prc'];   

                $pay = payBuy($userId, $qty, $price);
            }                
        }
    }
    else{
        echo "<script>alert('Try again Later');</script>";
    }
?>