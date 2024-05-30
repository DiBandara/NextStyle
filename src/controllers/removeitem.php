<?php

    require_once '../../src/models/removecartList.php';  

    if(isset($_GET['uid'])&& isset($_GET['indx']) ){
        $userId = $_GET['uid'];
        $index = $_GET["indx"];
        
        $result = removeitemFromCart($userId, $index);

        if($result){
            echo "<script>window.location.href='/public/client/cart.php';</script>";
        }
        else{
            echo "<script>alert('Remove Fail Try again Later');</script>";
        }

        
    }



?>