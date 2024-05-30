<?php
    
    require_once '../../models/admin/deleteProducts.php';

    if(isset($_GET['proid'])){
        $proId = $_GET['proid'];       

        $result = deleteProducts($proId);

        if($result > 0){
            
            echo "<script>window.location.href='../../../public/admin/adminPage.php';</script>";
            
        }
        else{
            echo "<script>alert('Delete Products Fail Try again Later');</script>";
        }

    }



?>



