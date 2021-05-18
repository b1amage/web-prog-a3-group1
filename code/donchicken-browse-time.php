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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Time-DonChicken</title>
    <link rel="stylesheet" href="./code/css/product-browse.css">
    <link rel="stylesheet" href="./code/css/header.css">
    <link rel="stylesheet" href="./code/css/footer.css">
    <link rel="stylesheet" href="./code/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./code/css/cookies.css">
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

    <main>
        <label for="details" class="category">New arrivals<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details">

        <div class="product-container pd1">
            <div class="product">
                <!-- <div class="overlay">
                    <p>20$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/app1.jpg" alt="chicken soup" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chicken Soup</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>12$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/app2.jpg" alt="chicken salad" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chicken Salad</a></h3>
            </div>
    
            <div class="product lst">
                <!-- <div class="overlay">
                    <p>25$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/app3.jpg" alt="boiled shrimp" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Boiled Shirmp</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>17$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/app4.jpg" alt="chicken roll" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chicken Roll</a></h3>
            </div>
        </div>


        <label for="details-2" class="category">New 2021<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-2">

        <div class="product-container pd2">
            <div class="product">
                <!-- <div class="overlay">
                    <p>35$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/main1.jpg" alt="steak" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Steak</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>25$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/main2.jpg" alt="grilled chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Grilled Chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>18$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/main3.jpg" alt="rice chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Rice Chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>17$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/main4.jpg" alt="steam chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Steamed Chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>19$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/main5.jpg" alt="fried chicken" width="200" height="200"></a>
                <h3><a href="#">Fried Chicken</a></h3>
            </div>
        </div>

        <label for="details-5" class="category">Classic<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-5">

        <div class="product-container pd5">
            <div class="product">
                <!-- <div class="overlay">
                    <p>25$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/class1.jpg" alt="boneless chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Boneless chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>35$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/class2.jpg" alt="beef and cheesy rice" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Beef and cheesy rice</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>28$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/don-chicken/class3.jpg" alt="cheese chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Cheese chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>20$</p>
                </div> -->
                <a href="#" ><img src="./code/images/don-chicken/class4.jpg" alt="french fries" width="200" height="200"></a>
                <h3><a href="#">French fries</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>16$</p>
                </div> -->
                <a href="#" ><img src="./code/images/don-chicken/class5.jpg" alt="pancakes" width="200" height="200"></a>
                <h3><a href="#">Pancakes</a></h3>
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
    <script src="./code/script/cookies.js" defer></script>
    <script src="./code/script/check_login.js" defer></script>
</body>
</html>