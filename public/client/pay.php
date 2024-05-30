<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/client/pay.css" type="text/css">
</head>

<body>
    <nav>
        <div style="display: flex;">
            <label style="font-size: 30px; font-weight: 600;"><a href="../client/home.php" style="color: black;">NextStyle</a></label>
        </div>
        <div>
            <ul style="display: flex; flex-direction: row; gap: 50px;">
                <li><a href="#" class="list">Catogory</a></li>
                <li><a href="#" class="list">New Arrival</a></li>
                <li><a href="#" class="list">Popular</a></li>
                <li><a href="#" class="list">Contact</a></li>
            </ul>
        </div>
        <div style="display: flex; flex-direction: row;">
            <ul style="display: flex; flex-direction: row; gap: 20px;">
                <li><a href="../../public/client/cart.php"><img src="../img/shopping-cart.png" alt="cart icon" width="24px" height="24px" /></a>
                </li>
                <li><a href="#"><img src="../img/magnifier.png" alt="magnifier" width="24px" height="24px" /></a></li>
                <li><a href="#"><img src="../img/email.png" alt="email" width="24px" height="24px" /></a></li>
                <li><a href="profile.php"><img src="../img/user.png" alt="user" width="24px" height="24px" /></a></li>
                <a href="../client/login.php">
                    <li><button class="button-59" role="button">LogOut</button></li>
                </a>
            </ul>
        </div>

    </nav>    
        <?php
            require_once '../../src/controllers/pay.php';
            pay();        
        ?>
    <script src="../js/client/pay.js"></script>
</body>

</html>
