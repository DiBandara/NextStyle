<?php

    function pay(){        

        if(isset($_GET['tpric'])){
            $tprice = $_GET['tpric'];
            $uid = $_GET['uid'];  
            $result = payments($tprice, $uid);         
        }
        
    }
    function payBuy($userId, $qty, $price){

        $tprice = $qty*$price;
        $result = payments($tprice, $userId);
        

    }

    function payments($tprice, $uid){

        ?>
            <div style="display: flex; flex-direction: column; justify-content: start; align-items: center;max-width: 600px;margin: 0 auto;  padding: 20px;" >
                <h2>Checkout</h2>
                <form action="../../src/controllers/insertorders.php?uid=<?php echo $uid?>&tprc=<?php echo $tprice ?>" method="post" name="pay">
                    <div style="margin-bottom: 20px; display: flex; flex-direction: column;">
                        <h3>Select Payment Method:</h3>
                        <label><input type="radio" name="payment" value="Cash On Delivery" checked required> Cash on Delivery</label>
                        <label><input type="radio" name="payment" value="card" required> Card Option</label>
                    </div>            
                    <div style="margin-bottom: 20px;">
                        <h3>Total Amount:</h3>
                        <p>$ <?php echo $tprice?></p> 
                    </div>
                            
                    <button type="submit">pay</button>

                </form>
            </div>
        <?php
    }





?>