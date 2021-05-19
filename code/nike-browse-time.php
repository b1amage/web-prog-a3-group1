<?php
    session_start();
    // if (!isset($_SESSION["page"])) {
    //     $_SESSION["page"] = 0;
    // }

    $temp_page = $_SESSION["page"];
    // echo $_SESSION["page"];
    include('../backend/check_login.php');
    $my_account_link = check_login();
?>

<?php
include '../backend/get-data.php';
include '../backend/display-store-product.php';
include '../backend/product_by_store.php';
include '../backend/display_store_by_categories.php';
include '../backend/arrray_product_by_store.php';

// print_r_with_lines($product_by_store_array);
// echo $_SESSION["page"];
?>

<?php 

$product_count = 0;
$id_store = $_GET["store_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Created Time-Nike</title>
    <link rel="stylesheet" href="./css/product-browse.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
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
        <!-- <label for="details" class="category">Newest Products<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details">

        <div class="product-container pd1">
        <a href="">Previous</a>

            <div class="product">
                <a href="./product-detail.php" ><img src="./images/stores-image/nike-images/airzoom.jpg" alt="airzoom" width="200" height="200"></a>
                <h3><a href="./product-detail.php">/a></h3>
            </div>

                    <?php 
                    // };
                    // endforeach;
                    ?>
        <a href="">Next</a>


            
        </div> -->


        <label for="details-5" class="category">Newest products<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-5">

        <div class="product-container pd5">

        <?php 
                     if ($temp_page === -1) { ?>
                            <form action="../backend/page-create.php?store_id=<?=$id_store;?>" method="post">
                                <input type="submit" value="Previous" name="previous-btn" disabled>
                            </form>
                     <?php 
                     } else { ?>
                            <form action="../backend/page-create.php?store_id=<?=$id_store;?>" method="post">
                                <input type="submit" value="Previous" name="previous-btn">
                            </form>
                     <?php }
                     ?>
        </form>
            <?php 
                // echo $temp_page;
                // print_r_with_lines($product_by_store_array[$_GET["store_id"]]);
                
                $length = count($product_by_store_array[$_GET["store_id"]]);
                foreach($product_by_store_array[$_GET["store_id"]] as $product):

                    if ($temp_page === $length - 1) {
                        break;
                    }

                    if ($display_count == 2) {
                        break;
                    } else {
                        $display_count++;
                        // print_r_with_lines($product_by_store_array[$_GET["store_id"]][$temp_page][$field_name_products["name"]]);
                        // echo $temp_page;
                        $temp_page++;
                        // echo $temp_page;
                        ?>

                <div class="product">
                    <a href="./product-detail.php?product_id=<?=$product[$field_name_products["id"]];?>" ><img src="./images/stores-image/nike-images/aj1.jpg" alt="air jordan" width="200" height="200"></a>
                    <h3><a href="./product-detail.php?product_id=<?=$product[$field_name_products["id"]];?>"><?=$product_by_store_array[$_GET["store_id"]][$temp_page][$field_name_products["name"]]; ?></a></h3>
                </div>

                    <?php 

                    }
                    endforeach;
                    ?>
                     <?php 
                     if ($temp_page >= count($product_by_store_array[$_GET["store_id"]]) - 1) { ?>
                            <form action="../backend/page-create.php?store_id=<?=$id_store;?>" method="post">
                                <input type="submit" value="Next" name="next-btn" disabled>
                            </form>
                     <?php 
                     } else { ?>
                            <form action="../backend/page-create.php?store_id=<?=$id_store;?>" method="post">
                                <input type="submit" value="Next" name="next-btn">
                            </form>
                     <?php }
                     ?>

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