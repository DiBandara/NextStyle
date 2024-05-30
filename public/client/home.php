<!DOCTYPE html>
<html lang="en">
<script src="../js/client/home.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/client/home.css" type="text/css">

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
                <li><a href="cart.php"><img src="../img/shopping-cart.png" alt="cart icon" width="24px" height="24px" /></a>
                </li>
                <li><a href="#"><img src="../img/magnifier.png" alt="magnifier" width="24px" height="24px" /></a></li>
                <li><a href="#"><img src="../img/email.png" alt="email" width="24px" height="24px" /></a></li>
                <li><a href="profile.php"><img src="../img//user.png" alt="user" width="24px" height="24px" /></a></li>
                <a href="../client/login.php">
                    <li><button class="button-59" role="button">LogOut</button></li>
                </a>
            </ul>
        </div>
    </nav>

    <div style="display: flex; flex-direction: column;">
        
        <div style="font-size: 20px; font-weight: 600; margin-left: 20px ">
            <?php
                session_start();
                if(isset($_SESSION['userName'])) {
                    echo "<p>Welcome, " . $_SESSION['userName'] . "!</p>";
                } else {
                    echo "<p>Welcome, Guest!</p>";
                }
            ?>
        </div>

        <div style="display: flex; align-items: center; width: 100%; justify-content: center; margin-top: 70px;">
            <label style="font-size: 36px; font-weight: 600;">Product List</label>
        </div>

        <div style="display: flex; flex-direction: row;">

            <div style="width: 25%;border: 1px solid #000;">
                <div style="width: 100%;  display: flex; justify-content: center; padding-top: 10px;">
                    <label style="font-size: 20px; font-weight: 300;">Filter By Price</label>
                </div>

                <div class="checkbox-wrapper-4">
                    <input class="inp-cbx" id="AllPrice" type="checkbox" />
                    <label class="cbx" for="AllPrice">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span>All Price</span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp-cbx" id="$0-$100" type="checkbox" />
                    <label class="cbx" for="$0-$100">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span>$0-$100</span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp-cbx" id="$100-$200" type="checkbox" />
                    <label class="cbx" for="$100-$200">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span>$100-$200</span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp-cbx" id="$200-$300" type="checkbox" />
                    <label class="cbx" for="$200-$300">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span>$200-$300</span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp-cbx" id="$300-$400" type="checkbox" />
                    <label class="cbx" for="$300-$400">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span>$300-$400</span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>

                <div style="display: flex; justify-content: center; padding: 20px">
                    <label style="font-size: 20px; font-weight: 300;">Filter By Rating</label>
                </div>

                <div class="checkbox-wrapper-4">
                    <input class="inp2-cbx" id="1star" type="checkbox" />
                    <label class="cbx" for="1star">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span><img src="../img/star.png" alt="magnifier" width="20px" height="20px" /></span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp2-cbx" id="2star" type="checkbox" />
                    <label class="cbx" for="2star">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp2-cbx" id="3star" type="checkbox" />
                    <label class="cbx" for="3star">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp2-cbx" id="4star" type="checkbox" />
                    <label class="cbx" for="4star">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
                <div class="checkbox-wrapper-4">
                    <input class="inp2-cbx" id="5star" type="checkbox" />
                    <label class="cbx" for="5star">
                        <span>
                            <svg width="12px" height="10px">
                                <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                        <span style="padding-left: 5px;"><img src="../img/star.png" alt="magnifier" width="20px"
                                height="20px" /></span>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
            </div>

            <div style="display: flex;flex-direction:column; margin: 50px; width: 100%;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="font-size: 20px; font-weight: 300;">viewing 20 of 160 Products</span>
                    <div>
                        <div class="dropdown">
                            <button class="dropbtn">Sort</button>
                            <div class="dropdown-content">
                                <a href="#">All Items</a>
                                <a href="#">Newest Item</a>
                                <a href="#">Most Popular</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-wrap: wrap; justify-content:start; margin-top: 50px; align-items: start; gap:3%">  

                    <?php                    
                        require_once '../../src/controllers/home.php';                         
                        itemlist($_SESSION['userId']);
                    ?>             
                </div>
            </div>

        </div>
    </div>

</body>
<script src="../js/client/home.js"></script>

</html>