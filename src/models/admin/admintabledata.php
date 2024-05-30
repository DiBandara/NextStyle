<?php

    require_once '../../php/db/mysql.php';    

    function tabledat(){
        global $mysqli;

        $sql = "SELECT proId, proName, proQty, unitPrice, img FROM productdetails";
        $result = mysqli_query($mysqli, $sql);
        return $result;
    }

    function ordersdata(){
        global $mysqli;

        $sql = "SELECT orders.orderId, orders.orderDate, orders.totalAmount, users.name AS userName, users.address, orderitem.itemQty, orderpayment.status, productdetails.proName 
        FROM orders
        INNER JOIN users ON orders.user_id = users.user_id
        INNER JOIN orderitem ON orders.orderId = orderitem.orderId
        INNER JOIN orderpayment ON orders.orderId = orderpayment.orderId
        INNER JOIN productdetails ON orderitem.proId = productdetails.proId";
        
        $result = mysqli_query($mysqli, $sql);
        return $result;
        

    }

?>