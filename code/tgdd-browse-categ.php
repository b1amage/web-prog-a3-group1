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
    <title>Browse Category-TheGioiDiDong</title>
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
        <label for="details" class="category">Phones<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details">

        <div class="product-container pd1">
            <div class="product">
                <!-- <div class="overlay">
                    <p>$1434.78</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/iphone12pro.jpg" alt="IPhone 12 Pro" width="200" height="200"></a>
                <h3><a href="./product-detail.php">IPhone 12 Pro</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>$364.78</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/opporeno5.jpg" alt="Oppo Reno 5" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Oppo Reno 5</a></h3>
            </div>
    
            <div class="product lst">
                <!-- <div class="overlay">
                    <p>$913.04</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/xiaomi_mi_11_5G.jpg" alt="Xiaomi Mi 11 5G" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Xiaomi Mi 11 5G</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>$296.55</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/vivoY12s.jpg" alt="Vivo Y12s" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Vivo Y12s</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>$120</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/nokia5.4.jpg" alt="Nokia 5.4" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Nokia 5.4</a></h3>
            </div>
            
        </div>


        <label for="details-2" class="category">Laptops<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-2">

        <div class="product-container pd2">
            <div class="product">
                <!-- <div class="overlay">
                    <p>$1980</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/macbook_pro.jpeg" alt="Macbook Pro" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Macbook Pro 13-inch</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>1029$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/asus_vivobook15.jpg" alt="Asus Vivobook 15" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Asus Vivobook 15</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>1828$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/xps_13_9370.jpg" alt="Dell XPS 13" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Dell XPS 13 9370</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>975$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/dell_vostro_3500.jpg" alt="Dell Vostro 3500" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Dell Vostro 3500</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>1529$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/hpenvy.jpg" alt="HP Envy 13" width="200" height="200"></a>
                <h3><a href="./product-detail.php">HP Envy 13</a></h3>
            </div>
        </div>

        <label for="details-3" class="category">Tablets<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-3">

        <div class="product-container pd3">
            <div class="product">
                <!-- <div class="overlay">
                    <p>120$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/galaxy_tab_A.jpg" alt="Samsung Galaxy Tab A10" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Samsung Galaxy Tab A10</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>679$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/ipad-pro-2018.jpg" alt="Ipad Pro 2018" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Ipad Pro 2018</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>468$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/ipad_air_4.jpg" alt="Ipad Air 4" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Ipad Air 4</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>298$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/lenovo_tab.jpg" alt="Lenovo Tab" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Lenovo Tab</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>312$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/huawei_mate.jpg" alt="Huawei Mate" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Huawei Mate</a></h3>
            </div>
        </div>

        <label for="details-4" class="category">Accessories<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-4">

        <div class="product-container pd4">
            <div class="product">
                <!-- <div class="overlay">
                    <p>12$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/usb_type_c.jpg" alt="Usb Type C Wire" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Usb Type C Wire</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>$450</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/airpod_pro.jpg" alt="Airpod Pro" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Airpod Pro</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>$89</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/anker_powercore.jpg" alt="Anker Powercore Battery" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Anker Powercore Battery</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>25$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/sandisk_microsd_128gb.jpg" alt="Micro Usb 128GB Sandisk" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Micro Usb 128GB Sandisk</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>9$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/iphone_case.jpg" alt="Iphone Case" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Iphone Case</a></h3>
            </div>
        </div>
        
        <label for="details-5" class="category">Others<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-5">

        <div class="product-container pd5">
            <div class="product">
                <!-- <div class="overlay">
                    <p>18$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/jetflash_300_8GB.jpg" alt="Jet Flash 300 8GB" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Jet Flash 300 8GB</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>489$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/xiaomi_bud.jpg" alt="Xiaomi Bud True Wireless" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Xiaomi Bud True Wireless</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>218$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/router_wifi_mesh_3.jpg" alt="Router Wifi Mesh 3" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Router Wifi Mesh 3</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>715$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/galaxy_watch_active.jpg" alt="Samsung Galaxy Watch Active" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Samsung Galaxy Watch Active</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>124$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/technology_stores/tgdd/nokia5.4.jpg" alt="Nokia 5.4" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Nokia 5.4</a></h3>
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