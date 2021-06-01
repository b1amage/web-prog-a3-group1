<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    if (!isset($_SESSION["admin-login"])) {
        header("location: ../code/admin-login.php");
    } 
}
    include('./check_login.php');
    $my_account_link = check_login();
    $check_admin = check_admin_login();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../code/css/header.css">
    <link rel="stylesheet" href="../code/css/footer.css">
    <link rel="stylesheet" href="../code/css/about.css">
    <link rel="stylesheet" href="../code/css/member-info.css">
    <link rel="stylesheet" href="../code/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../code/css/cookies.css">
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
    <!-- CMS icon for PC -->
    <div class="cms-icon"><a href="../backend/cms.php"><i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i></a></div>
    <!-- CMS icon for ipad and iphone X -->
    <div class="cms-icon-responsive"><a href="../backend/cms.php"><i class="fa fa-address-card-o fa-2x" aria-hidden="true"></i></a></div>
    <header>
        <main>
            <nav class="first-nav">
                <h1 class="logo"><a href="../code/index.php">RETAILEZ</a></h1>
                <!-- Nav PC -->
                <nav class="nav__pc">
                    <ul class="nav__list">
                        <li><a href="../code/index.php" class="nav__link push" id="underline">Home</a></li>
                        <li><a href="../code/about.php" class="nav__link" id="underline">About Us</a></li>
                        <li><a href="../code/fee.php" class="nav__link" id="underline">Fees</a></li>
                        <li><a href=<?=$my_account_link?> class="nav__link my-account">My Account</a></li>
                        <li>
                            <a href="#" class="nav__link">Browse<i class="ti-angle-double-down"></i></a>
                            <ul class="subnav">
                                <li><a href="../code/store-browse-name.php">Store By Name</a></li>
                                <li><a href="../code/store-browse-categ.php">Store By Category</a></li>
                            </ul>
                        </li>
                        <li><a href="../code/faqs.php" class="nav__link">FAQs</a></li>
                        <li><a href="../code/contact.php" class="nav__link">Contact</a></li>
                        <li><a href="../code/order_placement_2.php" class="nav__link"><i class="ti-shopping-cart"></i></a></li>
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
                        <li><a href="../code/index.php" class="nav__mobile-link">Home</a></li>
                        <li><a href="../code/about.php" class="nav__mobile-link">About us</a></li>
                        <li><a href="../code/fee.php" class="nav__mobile-link">Fees</a></li>
                        <li>
                            <a class="my-account" href=<?=$my_account_link?>><label for="subnav-mobile-check-account" class="nav__mobile-link hover-account">My Account</label></a>
                        </li>
                        <li>
                            <label for="subnav-mobile-check-browse" class="nav__mobile-link hover-browse">Browse<i class="ti-angle-double-down"></i></label>
                            <input type="checkbox" id="subnav-mobile-check-browse" class="check-subnav-browse">
                                <ul class="subnav-mobile-browse">
                                    <li><a href="../code/store-browse-name.php">By Name</a></li>
                                    <li><a href="../code/store-browse-categ.php">By Category</a></li>
                                </ul>
                        </li>
                        <li><a href="../code/faqs.php" class="nav__mobile-link">FAQs</a></li>
                        <li><a href="../code/contact.php" class="nav__mobile-link">Contact</a></li>
                        <li><a href="../code/order_placement_2.php" class="nav__mobile-link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
                
            </nav>
        </main>
    </header>
    <main>
        <div class="cms-container">
            <p>Welcome to the dashboard <b> <?= $_SESSION['admin-username'] ?> </b> </p>
            <br>
            <!-- Place to change content in the copyright.php, tos.php, policy.php pages -->
            <h3>Change content of a page</h3>
            <form name="content-editor" method="post" action="content-management.php">
                <label for="file-name">Choose the page you want to edit:</label>
                <div class="responsive-area">
                    <select name="file-name" id="files">
                        <?php
                            if (isset($_GET['file_name'])) {
                                $value = $_GET['file_name'];
                            } else {
                                $value = "default";
                            }
                        ?>
                        <option value="<?=$value?>" selected="true">Select a file</option>
                        <option value="copyright">Copyright</option>
                        <option value="tos">TOS</option>
                        <option value="privacy">Privacy</option>
                    </select>
                </div>
                <fieldset> 
                    <?php
                        // Show the name of the file user want to view
                        if (isset($_GET['file_name'])) {
                            
                            switch($_GET['file_name']) {
                                case "copyright":
                                    $file_name = "Copyright";
                                    break;
                                case "tos":
                                    $file_name = "Terms of Services";
                                    break;
                                case "privacy":
                                    $file_name = "Privacy Policy";
                                    break;
                                default:
                                    break;
                            }

                            echo "The content of $file_name: "; 
                        }
                    ?>
                    <legend>Content Editor</legend>
                    <div class="content-box">
                        <textarea name="content">
<?php
// Get the content users want to display and display it
if (isset($_SESSION['content-display'])) {
    $display = $_SESSION['content-display'];
    foreach($display as $line) {
        echo $line;
    }
    unset($_SESSION['content-display']);
} 

// Get the error message when file does not exist and display it
if (isset($_GET['error'])) {
    $error = base64_decode($_GET['error']);
    echo $error;
}
?>
                        </textarea>
                    </div>
                    <div class="btn-area">
                        <input type="submit" class="button" name="submit-append" value="Append Content">
                        <input type="submit" class="button" name="submit-overwrite" value="Overwrite Content">
                        <input type="submit" class="button" name="submit-open" value="View Content">
                    </div>
                </fieldset>
            </form>   
            <br> 
            <!-- Place to upload new avatars for the team members -->
            <h3>Change team avatars</h3>
            <br>
            <p>Click on the member you want to change avatar:</p>
            <br>
            <div class="team">
                <div class="avatar-box" id="duy-box">
                    <div class="img-box">
                        <?php 
                            $duy_id = rand(1,999999999);
                            $_SESSION['duy_id'] = $duy_id;
                        ?>
                        <img src="../code/images/about-images/duy-img.jpeg?id=<?=$duy_id?>">
                    </div>
                    <div class="box-content">
                        <h1>Nguyen Anh Duy<br>
                        <span>s3878141<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
                <div class="avatar-box" id="bao-box">
                    <div class="img-box">
                        <?php 
                            $bao_id = rand(1,999999999);
                            $_SESSION['bao_id'] = $bao_id; 
                        ?>
                        <img src="../code/images/about-images/bao-img.jpeg?id=<?=$bao_id?>">
                    </div>
                    <div class="box-content">
                        <h1>Nguyen Luu Quoc Bao<br>
                        <span>s3877698<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
                <div class="avatar-box" id="tuan-box">
                    <div class="img-box">
                        <?php 
                            $tuan_id = rand(1,999999999);
                            $_SESSION['tuan_id'] = $tuan_id;
                        ?>
                        <img src="../code/images/about-images/tuan-image.jpeg?id=<?=$tuan_id?>">
                    </div>
                    <div class="box-content">
                        <h1>Dao Kha Tuan<br>
                        <span>s3877347<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
                <div class="avatar-box" id="long-box">
                    <div class="img-box">
                        <?php 
                            $long_id = rand(1,999999999);
                            $_SESSION['long_id'] = $long_id;
                        ?>
                        <img src="../code/images/about-images/long-image.jpeg?id=<?=$long_id?>">
                    </div>
                    <div class="box-content">
                        <h1>Nguyen Trong Minh Long<br>
                        <span>s3878694<br>Website Developer</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div id="overlay-about" onclick="offOverlay()"></div>
            <div class="info" id="more-info-duy">
                <div class="info-header">
                    <div class="info-title">Nguyen Anh Duy</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/duy-img.jpeg?id=<?=$duy_id?>" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="duy-img-editor" method="post" enctype="multipart/form-data" action="./upload.php"> 
                        <!-- Profile image -->
                        <label for="duy_image">Select a new image: </label>
                        <input type="file" name="duy_image">
                        <br>
                        <input type="submit" class="button" name="duy-submit-btn" value="Upload Image">
                        <br>
                    </form>
                </div>
            </div>

            <div class="info" id="more-info-bao">
                <div class="info-header">
                    <div class="info-title">Nguyen Luu Quoc Bao</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/bao-img.jpeg?id=<?=$bao_id?>" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="bao-img-editor" method="post" enctype="multipart/form-data" action="./upload.php"> 
                        <!-- Profile image -->
                        <label for="bao_image">Select a new image: </label>
                        <input type="file" name="bao_image">
                        <br>
                        <input type="submit" class="button" name="bao-submit-btn" value="Upload Image">
                        <br>
                    </form>
                </div>
            </div>

            <div class="info" id="more-info-tuan">
                <div class="info-header">
                    <div class="info-title">Dao Kha Tuan</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/tuan-image.jpeg?id=<?=$tuan_id?>" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="tuan-img-editor" method="post" enctype="multipart/form-data" action="./upload.php"> 
                        <!-- Profile image -->
                        <label for="tuan_image">Select a new image: </label>
                        <input type="file" name="tuan_image">
                        <br>
                        <input type="submit" class="button" name="tuan-submit-btn" value="Upload Image">
                        <br>
                    </form>
                </div>
            </div>

            <div class="info" id="more-info-long">
                <div class="info-header">
                    <div class="info-title">Nguyen Trong Minh Long</div>
                </div>
                <div class="info-image">
                    <img src="../code/images/about-images/long-image.jpeg?id=<?=$long_id?>" width="200px" height="200px">
                </div>
                <div class="info-body">
                    <form name="long-img-editor" method="post" enctype="multipart/form-data" action="./upload.php"> 
                        <!-- Profile image -->
                        <label for="long_image">Select a new image: </label>
                        <input type="file" name="long_image">
                        <br>
                        <input type="submit" class="button" name="long-submit-btn" value="Upload Image">
                        <br>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <nav>
            <h3 class="left">All Rights Reserved. © 2021 RETAILEZ.</h3>
            <ul>
                <li><a href="../code/copyright.php">Copyright</a></li>
                <li><a href="../code/tos.php">ToS</a></li>
                <li><a href="../code/policy.php">Privacy Policy</a></li>
            </ul>
            <h3 class="right">Design by developer team</h3>
        </nav>
    </footer>
    <script src="../code/script/cookies.js" defer></script>
    <script src="../code/script/display-member-info.js"></script>
    <script src="../code/script/check_login.js" defer></script>
</body>
</html>