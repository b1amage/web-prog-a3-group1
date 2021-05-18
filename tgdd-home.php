<?php
    session_start();
    include('./backend/check_login.php');
    $my_account_link = check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-TheGioiDiDong</title>'
    <link rel="stylesheet" href="./css/store-home.css">
    <link rel="stylesheet" href="./css/store-container.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <!-- <link rel="stylesheet" href="./header.css"> -->
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
        <!-- New Product -->
        <div class="title">
            <h1>New Product</h1>
        </div>
        <div class="product-container">
            <div class="product">
                <!-- <div class="overlay">
                    <p>$296.55</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/stores-image/technology_stores/tgdd/vivoY12s.jpg" alt="Vivo Y12S" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Vivo Y12S</a></h3>
            </div>

            <div class="product">
                <!-- <div class="overlay">
                    <p>$125.65</p>
                </div> -->
                <a href="./product-detail2.php" ><img src="./images/stores-image/technology_stores/tgdd/vsmartstar5.jpg" alt="VSmart Star 5" width="200" height="200"></a>
                <h3><a href="./product-detail.php">VSmart Star 5</a></h3>
            </div>

            <div class="product">
                <!-- <div class="overlay">
                    <p>$478.26</p>
                </div> -->
                <a href="./product-detail3.php" ><img src="./images/stores-image/technology_stores/tgdd/samsung_galaxy_m51.jpg" alt="Samsung Galaxy M51" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Samsung Galaxy M51</a></h3>
            </div>

            <div class="product">
                <!-- <div class="overlay">
                    <p>$364.78</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/stores-image/technology_stores/tgdd/opporeno5.jpg" alt="Oppo Reno5" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Oppo Reno5</a></h3>
            </div>

            <div class="product">
                <!-- <div class="overlay">
                    <p>$956.52</p>
                </div> -->
                <a href="./product-detail2.php" ><img src="./images/stores-image/technology_stores/tgdd/oneplus8pro.jpg" alt="Oneplus 8 Pro 5G" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Oneplus 8 Pro 5G</a></h3>
            </div>
        </div>

        <!-- Featured Product -->
        <div class="title-2">
            <h1>Featured Products</h1>
        </div>
        <div class="feature-container ft2">
            <div class="feature">
                <!-- <div class="overlay">
                    <p>$1434.78</p>
                </div> -->
                <a href="./product-detail3.php" ><img src="./images/stores-image/technology_stores/tgdd/iphone12pro.jpg" alt="Iphone 12 Pro" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Iphone 12 Pro</a></h3>
            </div>

            <div class="feature">
                <!-- <div class="overlay">
                    <p>$1130</p>
                </div> -->
                <a href="./product-detail2.php" ><img src="./images/stores-image/technology_stores/tgdd/samsung_galaxy_s21.jpg" alt="Samsung Galaxy S21" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Samsung Galaxy S21</a></h3>
            </div>

            <div class="feature">
                <!-- <div class="overlay">
                    <p>$325.65</p>
                </div> -->
                <a href="./product-detail3.php" ><img src="./images/stores-image/technology_stores/tgdd/opporeno4.jpg" alt="Oppo Reno 4" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Oppo Reno 4</a></h3>
            </div>

            <div class="feature">
                <!-- <div class="overlay">
                    <p>$913.04</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./images/stores-image/technology_stores/tgdd/xiaomi_mi_11_5G.jpg" alt="Xiaomi Mi 11 5G" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Xiaomi Mi 11 5G</a></h3>
            </div>

            <div class="feature">
                <!-- <div class="overlay">
                    <p>$450.65</p>
                </div> -->
                <a href="./product-detail2.php" ><img src="./images/stores-image/technology_stores/tgdd/vivov20_2021.jpg" alt="Vivo 20 (2021)" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Vivo 20 (2021)</a></h3>
            </div>
        </div>
    </main>
    <div class="push"></div>
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