<?php
if (file_exists("../backend/install.php")) {
    exit("The install.php file is exit");
} else {
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
    include('../backend/check_login.php');
    $my_account_link = check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placement</title>
    <link rel="stylesheet" href="./css/order_placement_new.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/add-to-cart.css">
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

    <main class="wrapper">
    <form action="../backend/coupon.php" method="GET">
        <div class="product-added-container">
            <h1>Your cart</h1>
                <table id="product-order"> 
                    <thead>
                        <th>No</th>
                        <th class="expand">Name</th>
                        <th class="expand">Image</th>
                        <th class="expand">Price</th>
                        <th>Quantity</th>
                    </thead>

                    <?php 

                    // Check if the order exist
                    if (isset($_SESSION["order"])) {
                        // Set index equal to 0
                    $index = 0;
                    // Bring order to super globaL variable $_SESSION
                    $all_order = $_SESSION["order"];
                    // Set price in the session = 0 for further usage
                    $_SESSION["price"] = 0;
                    // Iterate through the order
                    foreach($all_order as $order):
                        // Increase the index by one
                        $index++;
                    ?>

                    <tr>
                        <td><?=$index; ?></td>
                        <input type="hidden" name="<?=$index?>" value="<?=$order["id"]?>">
                        <td><?=$order["name"]; ?></td>
                        <td><img src="./images/index-img/stansmith.jpg" alt="product-img" width="100px" height="100px"></td>
                        <td id="price-<?=$index;?>"><?=$order["price"]; ?></td>
                        <td><input type="number" name="quantity-<?=$index;?>" id="quantity-<?=$index;?>" min="1" value="<?=$order["quantity"];?>" class="quantity" onclick="document.getElementsByTagName('form')[0].submit()"></td>
                    </tr>

                    <?php 
                    // Get the data from the $_SESSION
                    $_SESSION["index"] = $index;
                    $_SESSION["price"] = $_SESSION["price"] + ($order["price"]*$order["quantity"]);
                    endforeach; } ?>
                </table>

                <h1 style="display: none;" id="product-number"><?=$index; ?></h1>
        </div>
        
        <div class="discount-container">
            <h1 class="code-title">Code</h1>
            <input type="text" name="discount-code" id="discount-code">
            <input type="submit" value="Update cart" name="submit-btn" id="submit-btn">
        </div>
        <p style="display: flex; justify-content: center;">
            <?php
                // Check if the error message exist and print out that message if exist
                if(isset($_SESSION["error_message"])){
                    echo $_SESSION["error_message"]; 
                };
                ?>
            </p>
        </form>

        <div class="checkout-info-container">
            <h1 class="total-title">Total price</h1>
            <h2 id="total"><?php if(isset($_SESSION["price"]))
                {if(isset($_SESSION["discount"])){
                    // print out the price with discount
                    echo $_SESSION["price"] * $_SESSION["discount"];
                    }else{
                        // Print the current price
                        echo $_SESSION["price"];
                    }};?></h2>
            <div class="btn-ctn">
                <a href="../backend/validate-checkout.php"><button id="checkout">Checkout</button></a>
                <a href="./index.php"><button id="continue">Continue shopping</button></a>
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
    <!-- <script src="./script/calculate.js" defer></script> -->
</body>
</html>
<?php } ?>