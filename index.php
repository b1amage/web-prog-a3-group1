<!DOCTYPE html>
<html lang="en" id="full-html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/cookies.css">
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
                        <li><a href="./login-box.php" class="nav__link my-account">My Account</a></li>
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
                            <a class="my-account" href="./login-box.php"><label for="subnav-mobile-check-account" class="nav__mobile-link hover-account">My Account</label></a>
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
        <div class="container">
            <!-- New Store -->
            <div class="title">
                <h1>New Store</h1>
            </div>
            <div id="scroll" class="store-container">
                <div class="store 1">
                    <!-- <div class="overlay">
                        <p>Shoes & Sport Clothes</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/index-img/nike.jpeg" alt="nike-logo" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">Nike</a></h3>
                </div>

                <div class="store 2">
                    <!-- <div class="overlay">
                        <p>Casual Clothes</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/index-img/uniqlo.jpeg" alt="uniqlo" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">Uniqlo</a></h3>
                </div>

                <div class="store 3">
                    <!-- <div class="overlay">
                        <p>Fried Chicken</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/index-img/kfc.jpeg" alt="kfc" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">KFC</a></h3>
                </div>

                <div class="store 4">
                    <!-- <div class="overlay">
                        <p>Milk Tea</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/index-img/gongcha.jpeg" alt="gongcha-logo" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">Gongcha</a></h3>
                </div>

                <div class="store 5">
                    <!-- <div class="overlay">
                        <p>Luxury Items</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/index-img/lv.jpeg" alt="LV-logo" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">Louis Vuitton</a></h3>
                </div>

                <div class="store 6">
                    <!-- <div class="overlay">
                        <p>Luxury Items</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/stores-image/restaurants/gogi.jpg" alt="gogi" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">GoGi</a></h3>
                </div>

                <div class="store 7">
                    <!-- <div class="overlay">
                        <p>Luxury Items</p>
                    </div> -->
                    <a href="./nike-home.php" ><img src="./images/stores-image/department_stores/circlek.jpg" alt="Circle K" width="200" height="200"></a>
                    <h3><a href="./nike-home.php" class="underline">Circle K</a></h3>
                </div>
            </div>
        </div>
        
        <div class="container">
            <!-- New Product -->
            <div class="title-2">
                <h1>New Product</h1>
            </div>
            <div id="scroll" class="product-container">
                <div class="product 1">
                    <!-- <div class="overlay">
                        <p>2000$</p>
                    </div> -->
                    <a href="./product-detail.php" ><img src="./images/index-img/jd1.jpg" alt="nike-product" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Nike Jordan 1 Dior</a></h3>
                </div>

                <div class="product 2">
                    <!-- <div class="overlay">
                        <p>250$</p>
                    </div> -->
                    <a href="./product-detail2.php" ><img src="./images/index-img/unqilo-product.jpeg" alt="uniqlo-product" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Uniqlo Blazzer</a></h3>
                </div>

                <div class="product 3">
                    <!-- <div class="overlay">
                        <p>10$</p>
                    </div> -->
                    <a href="./product-detail3.php" ><img src="./images/index-img/kfc-product.jpeg" alt="kfc-product" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Fried Spicy Chicken</a></h3>
                </div>

                <div class="product 4">
                    <!-- <div class="overlay">
                        <p>9$</p>
                    </div> -->
                    <a href="./product-detail.php" ><img src="./images/index-img/gongcha-product.jpeg" alt="gongcha-product" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Bubble Milk Tea</a></h3>
                </div>

                <div class="product 5">
                    <!-- <div class="overlay">
                        <p>3100$</p>
                    </div> -->
                    <a href="./product-detail2.php" ><img src="./images/index-img/lv-product.jpeg" alt="lv-product" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">T-Shirt LV</a></h3>
                </div>

                <div class="product 6">
                    <!-- <div class="overlay">
                        <p>3100$</p>
                    </div> -->
                    <a href="./product-detail.php" ><img src="./images/index-img/lebron18.jpg" alt="lebron 18 product" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Lebron 18 shoes</a></h3>
                </div>
            </div>
        </div>
        
        <div class="container">
            <!-- Featured Store -->
            <div class="title-2 no-scroll-first">
                <h1>Featured Stores</h1>
            </div>
            <div id="scroll" class="feature-container first">
                <div class="feature first 1">
                    <!-- <div class="overlay">
                        <i class="ti-location-pin"></i><p>15 Tran Hung Dao, District 1</p>
                    </div> -->
                    <a href="./tgdd-home.php" ><img src="./images/index-img/G _ LAB.jpg" alt="glab-logo" width="200" height="200"></a>
                    <h3><a href="./tgdd-home.php" class="underline">GLAB</a></h3>
                </div>

                <div class="feature first 2">
                    <!-- <div class="overlay">
                        <p>Local Brand Clothes</p>
                    </div> -->
                    <a href="./tgdd-home.php" ><img src="./images/index-img/bobui.jpeg" alt="bobui-logo" width="200" height="200"></a>
                    <h3><a href="./tgdd-home.php" class="underline">BoBui</a></h3>
                </div>

                <div class="feature first 3">
                    <!-- <div class="overlay">
                        <p>Chicken Food</p>
                    </div> -->
                    <a href="./tgdd-home.php" ><img src="./images/index-img/donchicken.jpeg" alt="donchicken-logo" width="200" height="200"></a>
                    <h3><a href="./tgdd-home.php" class="underline">Don Chicken</a></h3>
                </div>

                <div class="feature first 4">
                    <!-- <div class="overlay">
                        <p>Coffees & Freeze</p>
                    </div> -->
                    <a href="./tgdd-home.php" ><img src="./images/index-img/highlands.jpeg" alt="highland-logo" width="200" height="200"></a>
                    <h3><a href="./tgdd-home.php" class="underline">Highlands</a></h3>
                </div>

                <div class="feature first 5">
                    <!-- <div class="overlay">
                        <p>Luxury Watch</p>
                    </div> -->
                    <a href="./tgdd-home.php" ><img src="./images/index-img/rolex.jpeg" alt="rolex-logo" width="200" height="200"></a>
                    <h3><a href="./tgdd-home.php" class="underline">Rolex</a></h3>
                </div>
            </div>
        </div>
        
        <div class="container">
            <!-- Featured Product -->
            <div class="title-2 no-scroll-last">
                <h1>Featured Products</h1>
            </div>
            <div id="scroll" class="feature-container last">
                <div class="feature-last 1">
                    <!-- <div class="overlay">
                        <p>180$</p>
                    </div> -->
                    <a href="./product-detail.php" ><img src="./images/index-img/freak2.jpg" alt="freak2-img" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Yellow T-Shirt</a></h3>
                </div>

                <div class="feature-last 2">
                    <!-- <div class="overlay">
                        <p>130$</p>
                    </div> -->
                    <a href="./product-detail2.php" ><img src="./images/index-img/bobui-product.jpeg" alt="bobui-img" width="200" height="200"></a>
                    <h3><a href="./product-detail2.php" class="underline">Yellow T-Shirt</a></h3>
                </div>

                <div class="feature-last 3">
                    <!-- <div class="overlay">
                        <p>20$</p>
                    </div> -->
                    <a href="./product-detail3.php" ><img src="./images/index-img/donchicken-product.jpeg" alt="bobui-img" width="200" height="200"></a>
                    <h3><a href="./product-detail3.php" class="underline">Cheese Chicken</a></h3>
                </div>

                <div class="feature-last 4">
                    <!-- <div class="overlay">
                        <p>16$</p>
                    </div> -->
                    <a href="./product-detail.php" ><img src="./images/index-img/highlands-product.jpeg" alt="highlands-img" width="200" height="200"></a>
                    <h3><a href="./product-detail.php" class="underline">Freeze Chocolate</a></h3>
                </div>

                <div class="feature-last 5">
                    <!-- <div class="overlay">
                        <p>1300$</p>
                    </div> -->
                    <a href="./product-detail2.php" ><img src="./images/index-img/rolex-product.jpeg" alt="rolex-img" width="200" height="200"></a>
                    <h3><a href="./product-detail2.php" class="underline">Airking Rolex</a></h3>
                </div>

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
    <script src="./script/automatic_scroll.js" defer></script>
    <script src="./script/check_login.js" defer></script>
</body>
</html>