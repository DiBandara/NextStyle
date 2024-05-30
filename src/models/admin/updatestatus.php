<?php

    require_once '../../../php/db/mysql.php'; 

    function updatestus($orderId, $newStatus){
        global $mysqli;

        $sql = "UPDATE orderpayment SET status = '$newStatus' WHERE orderId = '$orderId'";

        $result = mysqli_query($mysqli, $sql);

        return $result;
    }

?>
