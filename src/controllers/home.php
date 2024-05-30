<?php

    require_once '../../src/models/itemlist.php';

    function itemlist($userId) {

        $itemlist = itemdetails();

        if($itemlist){

            while ($row = mysqli_fetch_assoc($itemlist)) {                

                ?>                    
                    <div class="itemlist" style="margin-top:3%;">
                        <div style="display:flex; height: 200px; justify-content: center;">
                            <img src="<?php echo $row['img'] ?>" style="width: 200px; height: 200px; cover:fit;"/>
                        </div>
                        <form method="post" name="itemdetails" 
                            action="../../php/client/cart.php?proId=<?php echo $row['proId'];?>&prc=<?php echo $row['unitPrice'];?>&nme=<?php echo $row['proName'];?>&uId=<?php echo $userId;?>&img=<?php echo $row['img']?>">
                            <div style="padding:20px; display: flex; flex-direction:column;  justify-content: space-between;">
                                <div style="display: flex; flex-direction: column;">
                                    <label style="font-size: 16px;"><?php echo $row['proName']; ?></label>
                                    <label style="font-size: 16px; font-weight: 600; padding: 20px 0 20px 0;"><?php echo '$ ' . $row['unitPrice']?></label>
                                </div>
                                <div>                                
                                    <div class="quantity-selector">                                    
                                        <input type="number" class="quantity-input" value="1" name="qty" min="1">                                    
                                    </div>
                                </div>
                                
                            </div>                        
                            <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 0 10px 0 10px;">
                                <div class="checkbox-wrapper-30" style="display: flex; flex-direction: column;">
                                    <div>
                                        <span class="checkbox">
                                            <input type="checkbox" />
                                            <svg>
                                                <use xlink:href="#checkbox-30" class="checkbox"></use>
                                            </svg>
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                                            <symbol id="checkbox-30" viewBox="0 0 22 22">
                                                <path fill="none" stroke="currentColor"
                                                    d="M5.5,11.3L9,14.8L20.2,3.3l0,0c-0.5-1-1.5-1.8-2.7-1.8h-13c-1.7,0-3,1.3-3,3v13c0,1.7,1.3,3,3,3h13 c1.7,0,3-1.3,3-3v-13c0-0.4-0.1-0.8-0.3-1.2" />
                                            </symbol>
                                        </svg>
                                    </div>
                                    <div>
                                        <label>Red</label>
                                    </div>
                                </div>
                                <div class="checkbox-wrapper-30" style="display: flex; flex-direction: column;">
                                    <div>
                                        <span class="checkbox">
                                            <input type="checkbox" />
                                            <svg>
                                                <use xlink:href="#checkbox-30" class="checkbox"></use>
                                            </svg>
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                                            <symbol id="checkbox-30" viewBox="0 0 22 22">
                                                <path fill="none" stroke="currentColor"
                                                    d="M5.5,11.3L9,14.8L20.2,3.3l0,0c-0.5-1-1.5-1.8-2.7-1.8h-13c-1.7,0-3,1.3-3,3v13c0,1.7,1.3,3,3,3h13 c1.7,0,3-1.3,3-3v-13c0-0.4-0.1-0.8-0.3-1.2" />
                                            </symbol>
                                        </svg>
                                    </div>
                                    <div>
                                        <label>yellow</label>
                                    </div>
                                </div>
                                <div class="checkbox-wrapper-30" style="display: flex; flex-direction: column;">
                                    <div>
                                        <span class="checkbox">
                                            <input type="checkbox" />
                                            <svg>
                                                <use xlink:href="#checkbox-30" class="checkbox"></use>
                                            </svg>
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                                            <symbol id="checkbox-30" viewBox="0 0 22 22">
                                                <path fill="none" stroke="currentColor"
                                                    d="M5.5,11.3L9,14.8L20.2,3.3l0,0c-0.5-1-1.5-1.8-2.7-1.8h-13c-1.7,0-3,1.3-3,3v13c0,1.7,1.3,3,3,3h13 c1.7,0,3-1.3,3-3v-13c0-0.4-0.1-0.8-0.3-1.2" />
                                            </symbol>
                                        </svg>
                                    </div>
                                    <div>
                                        <label>Green</label>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px 10px 0 10px; display: flex; justify-content: space-between;">
                            <button class="button-32" name="submitType" value="submitAll" style="background-color: #82b53f;" type="submit">Add to cart</button>
                            </div>
                            <div style="padding: 5px 10px 0 10px ; display: flex; ">
                            <button class="button-32" name="submitType" value="submitBuyButton" style="background-color: gray;" type="submit">Buy</button> 
                            </div>
                        </form>
                    </div>
                <?php
            }
        }
        else {
            echo "<script>alert('Error ! Try again Later...');</script>";
        }
        
    }
?>