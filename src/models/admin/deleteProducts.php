<?php

    require_once '../../../php/db/mysql.php';  

    function deleteProducts($proid){
        global $mysqli;

        $deleteOrderItemsQuery = "DELETE FROM orderitem WHERE proId = '$proid'";
        $result = mysqli_query($mysqli, $deleteOrderItemsQuery);

        if (!$result) {
            return $result;
        }
        else {
            $deleteProductQuery = "DELETE FROM productdetails WHERE proId = '$proid'";
            $results = mysqli_query($mysqli, $deleteProductQuery);
            return $results;
        }
        
    }
?>
