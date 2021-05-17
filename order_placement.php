<?php
    session_start();
    if(isset($_POST["submit_placement"])){
        $_SESSION["submit_order_placement"] = true;
        if(!isset($_SESSION["login"])){
            header("location: login-box.php");
        }else {
            header("location: thanks.php");
        }
    }
?>

<?php
    session_start();
    if (isset($_SESSION["login"])) {
        $my_account_link = "./user-information.php";
    } else {
        $my_account_link ="./login-box.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placement</title>
    <link rel="stylesheet" href="./css/order-placement.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/add-to-cart.css">
</head>
<body>
    <div id="overlay-cookies"></div>
    <div class="cookie-container">
        <h1>I use cookie</h1>
        <p>My website uses cookies necessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>
    <header>
        <main>
            <nav class="first-nav">
                <h1 class="logo"><a href="./index.php">RETAILEZ</a></h1>
                <!-- Nav PC -->
                <nav class="nav__pc">
                    <ul class="nav__list">
                        <li><a href="./index.php" class="nav__link push" id="underline">Home</a></li>
                        <li><a href="./about.php" class="nav__link" id="underline">About Us</a></li>
                        <li><a href="./fee.php" class="nav__link" id="underline">Fees</a></li>
                        <li><a href=<?=$my_account_link?> class="nav__link my-account">My Account</a></li>
                        <li>
                            <a href="#" class="nav__link">Browse<i class="ti-angle-double-down"></i></a>
                            <ul class="subnav">
                                <li><a href="./store-browse-name.php">Store By Name</a></li>
                                <li><a href="./store-browse-categ.php">Store By Category</a></li>
                            </ul>
                        </li>
                        <li><a href="./faqs.php" class="nav__link">FAQs</a></li>
                        <li><a href="./contact.php" class="nav__link">Contact</a></li>
                        <li><a href="./order_placement.php" class="nav__link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
    
                
                <!-- Nav responsive -->
                <label for="nav-mobile-input" class="nav__bars-btn">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                </label>
                
                <input type="checkbox" hidden name="" id="nav-mobile-input" class="nav__input">
                
    
                <label for="nav-mobile-input" class="nav__overlay">
    
                </label>
    
                <nav class="nav__mobile">
                    <label for="nav-mobile-input" class="nav__mobile-close">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                    </label>
                    <ul class="nav__mobile-list">
                        <li><a href="./index.php" class="nav__mobile-link">Home</a></li>
                        <li><a href="./about.php" class="nav__mobile-link">About us</a></li>
                        <li><a href="./fee.php" class="nav__mobile-link">Fees</a></li>
                        <li>
                            <a class="my-account" href=<?=$my_account_link?>><label for="subnav-mobile-check-account" class="nav__mobile-link hover-account">My Account</label></a>
                        </li>
                        <li>
                            <label for="subnav-mobile-check-browse" class="nav__mobile-link hover-browse">Browse<i class="ti-angle-double-down"></i></label>
                            <input type="checkbox" id="subnav-mobile-check-browse" class="check-subnav-browse">
                                <ul class="subnav-mobile-browse">
                                    <li><a href="./store-browse-name.php">By Name</a></li>
                                    <li><a href="./store-browse-categ.php">By Category</a></li>
                                </ul>
                        </li>
                        <li><a href="./faqs.php" class="nav__mobile-link">FAQs</a></li>
                        <li><a href="./contact.php" class="nav__mobile-link">Contact</a></li>
                        <li><a href="./order_placement.php" class="nav__mobile-link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
                
            </nav>
        </main>
    </header>

    <main class="grid-container">
        <div class="your-cart">
            <h1>Your Cart</h1>
        </div>
        <div class="product-1">
            <img src="./images/index-img/jd1.jpg" alt="product1" width="200" height="200" id="img-1">
            <div class="info">
                <h6 id="product-name1">Ultra Boost 5.0</h6>
                <p id="price1">$200</p>
            </div>
            <div class="quantity-box">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity1" min="0" value="0" required>
            </div>
        </div>
        <div class="product-2">
            <img src="./images/stores-image/nike-images/airzoom.jpg" alt="product2" width="200" height="200">
            <div class="info">
                <h6 id="product-name2">KFC Fried Chicken</h6>
                <p id="price2">$10</p>
            </div>
            <div class="quantity-box">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity2" min="0" value="0" required>
            </div>
        </div>
        <div class="product-3">
            <img src="./images/stores-image/nike-images/football1.jpg" alt="product3" width="200" height="200">
            <div class="info">
                <h6 id="product-name3">Airking Rolex III</h6>
                <p id="price3">$3100</p>
            </div>
            <div class="quantity-box">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity3" min="0" value="0" required>
            </div>
        </div>
        
        <div class="ship-cod">
            <div class="first-line">
                <h4>Discount code</h4>
                <input type="text" name="discount" id="discount">
                <input type="submit" value="Use" id="submit-discount-btn">
            </div>
            <h5>Nguyen Luu Quoc Bao  |  0913981323</h5>
            <p>181/78 Au Duong Lan, ward 2, District 8, Ho Chi Minh city</p>
        </div>
        <div class="cash">
            <div class="money">
                <h3 class="sub-title">Price</h3>
                <h3 id="product-price">6270$</h3>
            </div>
            <div class="ship">
                <h4 class="sub-title">Ship fee</h4>
                <h4 id="ship-price">60$</h4>
            </div>
            <div class="total">
                <h2 class="sub-title">Total</h2>
                <h2 id="total-price">6330$</h2>
            </div>
            <div class="button-container">
                <form method = "post">
                <button type ="submit" name= "submit_placement" class="push">Check Out</button></a>
                </form>
                <a href="./product-detail.php"><button>Continue Shopping</button></a>
            </div>
        
        </div>
    </main>
    <footer>
        <nav>
            <h3 class="left">All Rights Reserved. © 2021 RETAILEZ.</h3>
            <ul>
                <li><a href="./copyright.php">Copyright</a></li>
                <li><a href="./tos.php">ToS</a></li>
                <li><a href="./policy.php">Privacy Policy</a></li>
            </ul>
            <h3 class="right">Design by developer team</h3>
        </nav>
    </footer>
    <script src="./script/cookies.js" defer></script>
    <script src="./script/check_login.js" defer></script>
    <script src="./script/calculate_price_and_discount.js"></script>
</body>
</html>