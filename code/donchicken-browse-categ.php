<?php
if (file_exists("../backend/install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    include('../backend/check_login.php');
    $my_account_link = check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Categories-DonChicken</title>
    <link rel="stylesheet" href="./css/product-browse.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="../code/css/cms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="overlay-cookies"></div>
    <div class="cookie-container">
        <h1>I use cookie</h1>
        <p>My website uses cookies necessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>
    <!-- CMS icon for PC-->
    <div class="cms-icon"><a href="../backend/cms.php"><i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i></a></div>
    <!-- CMS icon for ipad and iphone X -->
    <div class="cms-icon-responsive"><a href="../backend/cms.php"><i class="fa fa-address-card-o fa-2x" aria-hidden="true"></i></a></div>
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
                        <li><a href="./order_placement_2.php" class="nav__link"><i class="ti-shopping-cart"></i></a></li>
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
                        <li><a href="./order_placement_2.php" class="nav__mobile-link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
                
            </nav>
        </main>
    </header>

    <main>
        <label for="details" class="category">Appetizer<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details">

        <div class="product-container pd1">
            <div class="product">
                <!-- <div class="overlay">
                    <p>20$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/app1.jpg" alt="chicken soup" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chicken Soup</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>12$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/app2.jpg" alt="chicken salad" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chicken Salad</a></h3>
            </div>
    
            <div class="product lst">
                <!-- <div class="overlay">
                    <p>25$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/app3.jpg" alt="boiled shrimp" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Boiled Shirmp</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>17$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/app4.jpg" alt="chicken roll" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chicken Roll</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>10$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/app5.jpg" alt="pumpkin soup" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Pumkims Soup</a></h3>
            </div>
        </div>


        <label for="details-2" class="category">Main<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-2">

        <div class="product-container pd2">
            <div class="product">
                <!-- <div class="overlay">
                    <p>35$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/main1.jpg" alt="steak" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Steak</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>25$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/main2.jpg" alt="grilled chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Grilled Chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>18$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/main3.jpg" alt="rice chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Rice Chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>17$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/main4.jpg" alt="steamed chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Steamed Chicken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>19$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/main5.jpg" alt="fried chicken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Fried Chicken</a></h3>
            </div>
        </div>

        <label for="details-3" class="category">Dessert<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-3">

        <div class="product-container pd3">
            <div class="product">
                <!-- <div class="overlay">
                    <p>20$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/des1.jpg" alt="chocolate cake" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Chocolate Cake</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>15$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/des2.jpg" alt="strawber cream" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Strawberry Cream</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>18$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/des3.jpg" alt="cream brulee" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Cream Brulee</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>15$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/des4.jpg" alt="donut" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Donut-</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>12$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/des5.jpg" alt="mango cream" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Mango Cream</a></h3>
            </div>
        </div>
        <label for="details-4" class="category">Drinks<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-4">

        <div class="product-container pd4">
            <div class="product">
                <!-- <div class="overlay">
                    <p>6$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/dri1.jpg" alt="pepsi" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Pepsi</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>7$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/dri2.jpg" alt="7up" width="200" height="200"></a>
                <h3><a href="./product-detail.php">7UP</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>3$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/dri3.jpg" alt="water" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Water</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>5$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/dri4.jpg" alt="yogurt" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Yogurt</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>2$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/dri5.jpg" alt="ice-tea" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Ice-tea</a></h3>
            </div>
        </div>


        <label for="details-5" class="category">Beverages<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-5">

        <div class="product-container pd5">
            <div class="product">
                <!-- <div class="overlay">
                    <p>5$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/bev.jpg" alt="soju chumchurum" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Soju Chumchurum</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>5$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/bev2.jpg" alt="soju chamisul" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Soju Chamisul</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>3$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/bev3.jpg" alt="heniken" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Heniken</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>3-5$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/bev4.jpg" alt="tiger beer" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Tiger</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>2.5$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/don-chicken/bev5.jpg" alt="strong bow" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Strong Bow</a></h3>
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
</body>
</html>
<?php } ?>