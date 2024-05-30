

<?php

    require_once '../../../src/models/admin/updatestatus.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $orderId = $_POST["orderId"];
        $newStatus = $_POST["newStatus"];        
        
        $result = updatestus($orderId, $newStatus);
        

        if ($result>0) {
            echo "<script>alert('Change Succesfull.');</script>";
            
        }
        else{
            echo "<script>alert('Change Faild');</>";             
        }
    }


?>