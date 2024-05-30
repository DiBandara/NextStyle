<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../css/admin/add_product.css" type="text/css">
</head>

<body>
    <nav>
        <div style="display: flex;">
            <label style="font-size: 30px; font-weight: 600;"><a href="../client/home.html" style="color: black;">NextStyle</a></label>
        </div>
        
        <div>
            <a href="../client/login.html">
                <button class="button-59" role="button" style="height: 30px;">LogOut</button>
            </a>
            
        </div>
    </nav>

    <div style="display: flex; flex-direction: column; margin: 50px; align-items: center;">
        <div style="padding: 30px;">
            <label style="font-size: 26px; font-weight: 600;">Edit Product</label>
        </div>

        <div
            style="display: flex; flex-direction: column; background-color: rgb(202, 202, 202); width: 50%; padding: 20px; align-items:start;">
            
            <?php
                
            require_once '../../src/controllers/admin/editeproducts.php';
            editproducts();
                                
            ?>          
        
        </div>
    </div> 
</body>
</html>