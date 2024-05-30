<?php

    require_once '../../src/models/cart.php';   

    function cart($username, $proId, $qty, $name, $price, $img){
    
        $cart = insertOrUpdateCart($username, $proId, $qty, $name, $price, $img);

        if($cart){
            ob_start();
            sleep(2);
            echo "<script>window.location.href='/public/client/cart.php';</script>";
            exit; 
        }
        else {
            ob_start();
            sleep(2);
            echo "<script>window.location.href='/public/client/home.php';</script>";
            exit; 
        }
    }
    

    function cartList($userId){       

        global $itemCount;
        global $totalPrice;
        
        $cartList = getcartList($userId);
        $index = 0 ;

        foreach ($cartList as $item){
                      
            ?>           
                <div class="item">
                    <img src="<?php echo $item['img']?>" style="width: 120px; height: 120px;"/>
                    <div class="item-details">
                        <h3><?php echo $item['Name']?></h3>                        
                        <p>Price: $ <?php echo $item['Price'] ?></p>
                        <div class="quantity-selector">
                            <button class="quantity-button minus">-</button>
                            <input type="number" class="quantity-input" value=<?php echo $item['quantity'] ?>>
                            <button class="quantity-button plus">+</button>
                        </div>
                    </div>                    
                        <div class="item-actions">
                            <a href="../../src/controllers/removeitem.php?uid=<?php echo $userId?>&indx=<?php echo $index?>">
                                <button>Remove</button>
                            </a>
                        </div>
                </div>            
            <?php
            $index++;  
            $itemCount += intval($item['quantity']);              
            $totalPrice += intval($item['quantity']) * intval($item['Price']);
            
        } 
        
        ?>
            <div class="cart-summary">
                <h3>Cart Summary</h3>
                <p>Total Items: <?php echo $itemCount ?></p>
                <p>Total Price: $ <?php echo $totalPrice ?></p>
                <button><a href="../../public/client/pay.php?tpric=<?php echo $totalPrice?>&uid=<?php echo $userId?>" style="text-decoration: none; color: black;">CheckOut</a></button>
            </div>
        <?php
    }
?>