<?php

    require_once '../../src/models/admin/updateProducts.php';   

    function updateProductDetails($name, $quantity, $unitprice, $pathimg, $proId){

        $result = updateProduct($name, $quantity, $unitprice, $pathimg, $proId);
        

        if($result){
            echo "<script>alert('Update Products Succesfull...');";
            echo "window.location.href='/public/admin/adminPage.php';</script>";
            exit; 
        }
        else{
            echo "<script>alert('Product Add Fail...');</script>";
        }

        
    }



?>