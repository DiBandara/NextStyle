<?php

    require_once '../../src/models/admin/insertitem.php';   

    function additem($name, $quantity, $unitprice, $pathimg){        

        $result = inserproduct($name, $quantity, $unitprice, $pathimg);
        
        
        if($result){
            echo "<script>alert('Add Products Succesfull...');";
            echo "window.location.href='/public/admin/add_product.php';</script>";
            exit; 
        }
        else{
            echo "<script>alert('Product Add Fail...');</script>";
        }
        

        
    }


?>