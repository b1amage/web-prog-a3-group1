<?php
    session_start();
    if ($_SESSION["login"]) {
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
    <title>Fee</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/fee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="owner-container">
            <div class="title 1">Shoppers</div>
            <div class="content">
                <div class="price-table">
                    <div class="price-header">
                        <div class="price-plan">
                            <h1>Free Member</h1>
                        </div>
                        <div class="line"></div>
                        <div class="price-pay">
                            <h3><span>$</span>0</h3>
                        </div>
                    </div>
                    <div class="price-info">
                        <p><i class="fa fa-check" aria-hidden="true"></i>1. User Account</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>2. Order placement</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Buy Products</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Checkout</p>
                    </div>
                    <button class="btn btn-primary">Select</button>
                    <div class="short-text">7-day money back guarantee</div>
                </div>
                <div class="price-table popular">
                    <div class="price-header">
                        <div class="price-popular">
                            <h4>Popular</h4>
                        </div>
                        <div class="price-plan">
                            <h1>Advanced Member</h1>
                        </div>
                        <div class="line"></div>
                        <div class="price-pay">
                            <h3><span>$</span>20</h3>
                        </div>
                    </div>
                    <div class="price-info">
                        <p><i class="fa fa-check" aria-hidden="true"></i>1. User Account</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>2. Sort and Compare Products</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Some Promotions</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>4. Some Discount Offer</p>
                    </div>
                    <button class="btn btn-primary">Select</button>
                    <div class="short-text">7-day money back guarantee</div>
                </div>
                <div class="price-table">
                    <div class="price-header">
                        <div class="price-plan">
                            <h1>Premium Member</h1>
                        </div>
                        <div class="line"></div>
                        <div class="price-pay">
                            <h3><span>$</span>40</h3>
                        </div>
                    </div>
                    <div class="price-info">
                        <p><i class="fa fa-check" aria-hidden="true"></i>1. User Account</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>2. Sort and Compare Products</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Premium Offers</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>4. Free Ship</p>
                    </div>
                    <button class="btn btn-primary">Select</button>
                    <div class="short-text">7-day money back guarantee</div>
                </div>
            </div>
        </div>
        <div class="shopper-container">
            <div class="title 2">Shop Owners</div>
            <div class="content">
                <div class="price-table">
                    <div class="price-header">
                        <div class="price-plan">
                            <h1>Renting Fee</h1>
                        </div>
                        <div class="line"></div>
                        <div class="price-pay">
                            <h3><span>$</span>15</h3>
                        </div>
                    </div>
                    <div class="price-info">
                        <p><i class="fa fa-check" aria-hidden="true"></i>1. Product Hosted</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>2. Free Services</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Keep Track with Product</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>4. Add/remove Product</p>
                    </div>
                    <button class="btn btn-primary">Select</button>
                    <div class="short-text">7-day money back guarantee</div>
                </div>
                <div class="price-table popular">
                    <div class="price-header">
                        <div class="price-popular">
                            <h4>Popular</h4>
                        </div>
                        <div class="price-plan">
                            <h1>Commission Fee</h1>
                        </div>
                        <div class="line"></div>
                        <div class="price-pay">
                            <h3><span>$</span>20</h3>
                        </div>
                    </div>
                    <div class="price-info">
                        <p><i class="fa fa-check" aria-hidden="true"></i>1. Select product to host</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>2. Organize multiple products</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Keep track of your customers</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>4. Update information for your products</p>
                    </div>
                    <button class="btn btn-primary">Select</button>
                    <div class="short-text">7-day money back guarantee</div>
                </div>
                <div class="price-table">
                    <div class="price-header">
                        <div class="price-plan">
                            <h1>Annual Member</h1>
                        </div>
                        <div class="line"></div>
                        <div class="price-pay">
                            <h3><span>$</span>30</h3>
                        </div>
                    </div>
                    <div class="price-info">
                        <p><i class="fa fa-check" aria-hidden="true"></i>1. Use the website freely</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>2. Free Services</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>3. Update your store info</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>4. Add/remove Product</p>
                    </div>
                    <button class="btn btn-primary">Select</button>
                    <div class="short-text">7-day money back guarantee</div>
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
    <script src="./script/check_login.js" defer></script>
</body>
</html>