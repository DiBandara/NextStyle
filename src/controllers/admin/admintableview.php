<?php

    require_once '../../src/models/admin/admintabledata.php';

    function productTableData(){


        $rowdata = tabledat();

        ?>         
            <caption style="font-size: 20px; font-weight: 400; padding-bottom: 50px;">Order List</caption>
            <thead>
                <th>Item Number</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Action</th>
            </thead>                    
        <?php
        
        
        while($row = $rowdata->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['proId'] . "</td>";
            echo "<td>" . $row['proName'] . "</td>";
            echo "<td>" . $row['proQty'] . "</td>";
            echo "<td>" . $row['unitPrice'] . "</td>"; 
            echo "<td>"?>
                            <img src="<?php echo $row['img'] ?>" style="width: 50px; height: 50px;"/>    
                        <?php "</td>";
            echo "<td>" ?>
                            <div style="display:flex; gap:20px;">
                                <button style="background-color: rgb(248, 119, 231);">
                                    <a style="text-decoration:none; color:black;" href="../../src/controllers/admin/productDelete.php?proid=<?php echo $row['proId'] ?>">Delete</a>
                                </button>
                                <button style="background-color: rgb(247, 120, 120);">
                                    <a style="text-decoration:none; color:black;" href="../../../public/admin/edit_product.php?proid=<?php echo $row['proId'] ?>">Edit</a>
                                </button>
                            </div>
                        <?php  
                    "</td>" ;        
            echo "</tr>";
                      
        }        

    }


    function ordersTable(){
        
        $result =  ordersdata(); 
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr>";
                echo "<td>" . $row['orderId'] . "</td>";
                echo "<td>" . $row['orderDate'] . "</td>";
                echo "<td>" . $row['totalAmount'] . "</td>";
                echo "<td>" . $row['userName'] . "</td>"; 
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['itemQty'] . "</td>";
                echo "<td>" . $row['proName'] . "</td>";
                echo "<td>"?>
                            <form action='../../../src/controllers/admin/status.php' method='post'>
                                <input type='hidden' name='orderId' value='<?php echo $row['orderId']?>'>
                                <select name='newStatus'>
                                <option value='Pending' <?php if ($row['status'] == 'Pending') echo 'selected'; ?>>To-ship</option>
                                <option value='Processing' <?php if ($row['status'] == 'Processing') echo 'selected'; ?>>Processing</option>
                                <option value='Completed' <?php if ($row['status'] == 'Completed') echo 'selected'; ?>>Shipped</option>
                                </select>
                                <button type='submit'>Change Status</button>
                            </form>
                        <?php
                    "</td>";
                echo "</tr>";               
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

