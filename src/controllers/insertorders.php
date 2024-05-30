<?php

    require_once '../models/insertorders.php';

    if(isset($_GET['uid']) && ($_SERVER["REQUEST_METHOD"] == "POST")){
        $uid = $_GET['uid'];
        $tprice = $_GET['tprc']; 
        
        if (isset($_POST["payment"]) && !empty($_POST["payment"])) {
            $selectedPayment = $_POST["payment"];
            
            $result = insertorders($uid, $tprice); 
            
            if($result > 0 ){
                $orderID = mysqli_insert_id($mysqli);    
                
                $cartproductlist = Cartproductlist($uid);

                $productIds = $cartproductlist['productIds'];
                $quantities = $cartproductlist['quantities'];

                foreach($productIds as $index => $productId){
                    $quantity = $quantities[$index];
                    $orderItemResult  =  order_Item($orderID, $productId, $quantity);  
                }
            
                $orderPayments = orderPayments($orderID, $selectedPayment);

                if($orderPayments > 0){
                    echo "<script>alert('Payment is Success...');";
                    echo "window.location.href='../../public/client/home.php';</script>";
                    exit;                    
                }
                else{
                    echo "<script>alert('Payment is Fail !');";
                    echo "window.location.href='../../public/client/pay.php';</script>";
                    exit;
                }
            
        
            }
        }
    }
?>
