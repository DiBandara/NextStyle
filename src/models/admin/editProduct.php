<?php

    require_once '../../php/db/mysql.php';   

    function editProductsDetails($proid){
        global $mysqli;

        $sql = "SELECT proId, proName, proQty, unitPrice, img FROM productdetails WHERE proId = $proid";
        $result = mysqli_query($mysqli, $sql);
        return $result;        
    }
?>