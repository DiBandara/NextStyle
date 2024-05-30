<?php

    require_once '../../php/db/mysql.php';

    function updateProduct($proName, $qty, $uprc, $img, $proId){
        global $mysqli;

        $sql = "UPDATE productdetails 
        SET proName = '$proName', 
            proQty = $qty, 
            unitPrice = $uprc, 
            img = '$img' 
        WHERE proId = $proId";
        
        $result = mysqli_query($mysqli, $sql);

        return $result;

    }



?>