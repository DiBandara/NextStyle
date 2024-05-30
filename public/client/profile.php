<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="../css/client/profile.css" type="text/css">
</head>

<body>
    <nav>
        <div style="display: flex;">
            <label style="font-size: 30px; font-weight: 600;"><a href="../client/home.php"
                    style="color: black;">NextStyle</a></label>
        </div>
        <div>
            <ul style="display: flex; flex-direction: row; gap: 50px;">
                <li><a href="#" class="list">Catogory</a></li>
                <li><a href="#" class="list">New Arrival</a></li>
                <li><a href="#" class="list">Popular</a></li>
                <li><a href="#" class="list">Contact</a></li>
            </ul>
        </diV>
        <div style="display: flex; flex-direction: row;">
            <ul style="display: flex; flex-direction: row; gap: 20px;">
                <li><a href="##"><img src="../img/shopping-cart.png" alt="cart icon" width="24px" height="24px" /></a>
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

    <div style="display: flex; flex-direction: column;margin: 100px 100px 0 100px;">
        <div>
            <label style="font-size: 30px; font-weight: 600;">My Acccount</label>
        </div>
        <div style="display: flex; flex-direction: row; padding-top: 50px;">
            <div style="display: flex; flex-direction: column; width: 30%; align-items: start; justify-content: start;">
                <label class="labels"><img src="../img/user.png" alt="user" width="16px" height="16px"
                        style="padding-right: 10px;" />My Details</label>
                <label class="labels"><img src="../img/shopping-cart.png" alt="user" width="16px" height="16px"
                        style="padding-right: 10px;" />My Cart</label>
                <label class="labels"><img src="../img/package.png" alt="user" width="16px" height="16px"
                        style="padding-right: 10px;" />My Orders</label>

                <label class="labels"><img src="../img/setting.png" alt="user" width="16px" height="16px"
                        style="padding-right: 10px;" />Account Setting</label>
            </div>
            <div
                style="display: flex; flex-direction: column; width: 70%; padding: 50px 20px 0 20px; background-color: rgb(235, 235, 235);">
                <div style="display: flex; flex-direction: column; width:100%">
                    <div style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;">
                        <div>
                            <label style="font-size: 26px; font-weight: 600; ">My Details</label>
                        </div>
                        <div>
                            <label class="editdetailsbutton" onclick="editDetails()">Edit Details</label>
                        </div>

                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <label style="font-size:20px; font-weight: 900;padding-top: 20px;">Persional Information</label>
                        <span style="display: block; border-top: 2px solid black; margin: 20px 0;"></span>
                    </div>


                </div>
                <div style="pointer-events:none;" id="details">
                    <?php session_start(); ?>

                    <label>Name</label>
                    <input type="text" class="textbox" name="Name" id="Name"
                        value="<?php echo $_SESSION['userName']; ?>" required />
                    <label>Address</label>
                    <input type="text" class="textbox" name="Address" id="Address"
                        value="<?php echo $_SESSION['userAddress']; ?>" required />
                    <label>Phone Number</label>
                    <input type="text" class="textbox" name="PhoneNo" id="PhoneNO"
                        value="<?php echo $_SESSION['userPhoneNo']; ?>" required />
                    <label>Email</label>
                    <input type="text" class="textbox" name="Email" id="Email" 
                        value="<?php echo $_SESSION['userEmail']; ?>" required />
                </div>
                <div style="padding: 10px; width: 100%; display: flex; justify-content: center;">
                    <button class="button-59" role="button">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/client/profile.js"></script>

</html>