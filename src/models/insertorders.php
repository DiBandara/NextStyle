<?php

    require_once '../../php/db/mysql.php';  
    require_once '../../php/db/mongodb.php';  

    function insertorders($uid, $tprice){
        global $mysqli;

        $sql = "INSERT INTO orders (orderDate, user_id, totalAmount) 
                VALUES (NOW(), '$uid', '$tprice')";

        $result = mysqli_query($mysqli, $sql);

        return $result;
    }

    function Cartproductlist($uid){
        global $database;

        $collection = $database->selectCollection('Cart_List');
        $userDocument = $collection->findOne(['userId' => $uid]);        

        $productIds = [];
        $quantities = [];

        if ($userDocument && isset($userDocument['cart_list'])) {
            foreach ($userDocument['cart_list'] as $item) {
                if (isset($item['productId']) && isset($item['quantity'])) {
                    $productIds[] = $item['productId'];
                    $quantities[] = $item['quantity'];
                }
            }
        }        
        return ['productIds' => $productIds, 'quantities' => $quantities];
    }


    function order_Item($orderID, $proid, $qty){
        global $mysqli;

        $sql = "INSERT INTO orderitem (orderId, proId, itemQty) 
            VALUES ('$orderID', '$proid', '$qty')";

        $result = mysqli_query($mysqli, $sql);

        return $result;
    }

    function orderPayments($orderID, $paymthd){
        global $mysqli;

        $sql = "INSERT INTO orderpayment (orderId, paymentDate, PaymentMethod, status) 
            VALUES ('$orderID', NOW(), '$paymthd', 'To-Ship')";

        $result = mysqli_query($mysqli, $sql);

        return $result;
    }
?>