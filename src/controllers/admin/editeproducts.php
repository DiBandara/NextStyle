<?php

    
    require_once '../../src/models/admin/editProduct.php';
    
    function editproducts(){
        
        if(isset($_GET['proid'])){
            $proId = $_GET['proid'];   
        }

        $data = editProductsDetails($proId);
        
        if($data->num_rows > 0){
            $row = $data->fetch_assoc();
            
        }        

        ?>
            <form method="post" action="../../php/admin/edititem.php?proId=<?php echo $proId?>" name="additemform" enctype="multipart/form-data">

                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Enter Product Name</label>
                <input type="text" placeholder="Enter Product Name" class="textbox" name="product Name" id="ProductName"
                    value="<?php echo $row['proName']?>"    required>
                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Enter Product Quantity</label>
                <input type="number" placeholder="Enter Product Quantity" class="textbox" name="Quantity" id="Quantity" 
                    value="<?php echo $row['proQty']?>"    required>

                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Enter Unit Price</label>
                <input type="number" placeholder="Enter Product Price" class="textbox" name="Price" id="Price" 
                    value="<?php echo $row['unitPrice']?>"    required>

                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Product Image</label>
                <input type="file" placeholder="Enter Product Image Path" class="textbox" name="image" id="img"  accept=".jpg, .jpeg, .png" required>

                

                <div style="padding: 10px; width: 100%; display: flex; justify-content: center;">
                    <button class="button-59" role="button" type="submit" name="submit">Update</button>
                </div>   
                
            </form>        
        
        <?php


    }

?>
