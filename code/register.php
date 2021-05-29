<?php
if (file_exists("../backend/install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    include('../backend/check_login.php');
    $my_account_link = check_login();
?>
<!DOCTYPE html>
<html lang="en" id="full-html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/footer.css">
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
        <div class="login-box">
            <form action="../backend/registration.php" method="POST" autocomplete="off">
                <h1>Create your new account</h1>
                <h5 style="color:red;text-align:center">
                    <?php 
                        if (isset($_GET['error_message'])) {
                            echo base64_decode($_GET['error_message']);
                        }
                    ?>
                </h5>
                <div id="line">
                    <hr>
                </div>
                <div id="info">
                    <div class="email">
                        <input id="email" class="" required type="email" name="email" placeholder="Email">  
                        <div class="invalid email"></div>
                    </div>
                    <div class="phone">
                        <input id="phone" class="" required type="tel" name="phone" placeholder="Phone number">  
                        <div class="invalid phone"></div>
                    </div>
                    <div class="password">
                        <input id="password" class="" required type="password" name="password" required minlength="8" maxlength="20" placeholder="Your password">
                        <div class="invalid password"></div>
                    </div>
                    <div class="re-password">
                        <input id="re-password" class="" required type="password" name="re-password" required minlength="8" maxlength="20" placeholder="Re - enter your password">
                        <div class="invalid re-password"></div>
                    </div>
                    <div class="first-name">
                        <input id="first-name" class="" required type="text" name="first-name" required minlength="3" placeholder="First name">
                        <div class="invalid first-name"></div>
                    </div>
                    <div class="last-name">
                        <input id="last-name" class="" required type="text" name="last-name" required minlength="3" placeholder="Last name">
                        <div class="invalid last-name"></div>
                    </div>
                    <div class="address">
                        <input id="address" class="" required type="text" name="address" required minlength="3" placeholder="Address">
                        <div class="invalid address"></div>
                    </div>
                    <div class="city">
                        <input id="city" class="" required type="text" name="city" required minlength="3" placeholder="City">
                        <div class="invalid city"></div>
                    </div>
                    <div class="zipcode">
                        <input id="zipcode" class="" required name="zipcode" required minlength="4" maxlength="6" placeholder="Zipcode">
                        <div class="invalid zipcode"></div>
                    </div>
                    <div class="profile-picture">
                        <label for="profile-picture">Select a profile picture:</label>
                        <input id="profile-picture" required type="file" name="profile-picture" accept="image/*" placeholder="Profile picture">
                    </div>
                    <div class="country">
                        <select id="country" name="country" required>
                            <option value="" selected disabled hidden>Select a country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AR">Argentina</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="BH">Bahrain</option>
                            <option value="BS">Bahamas</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BT">Bhutan</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BR">Brazil</option>
                            <option value="BG">Bulgaria</option>
                            <option value="KH">Cambodia</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CO">Colombia</option>
                            <option value="CG">Congo</option>
                            <option value="CR">Costa Rica</option>
                            <option value="HR">Croatia</option>
                            <option value="DK">Denmark</option>
                            <option value="EG">Egypt</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GR">Greece</option>
                            <option value="GU">Guam</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IN">India</option>
                            <option value="IE">Ireland</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JP">Japan</option>
                            <option value="DE">Germany</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="LT">Lithuania</option>
                            <option value="MY">Malaysia</option>
                            <option value="MX">Mexico</option>
                            <option value="MM">Myanmar</option>
                            <option value="NL">Netherlands</option>
                            <option value="NG">Nigeria</option>
                            <option value="ON">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PH">Philippines</option>
                            <option value="RU">Russian Federation</option>
                            <option value="SG">Singapore</option>                       
                            <option value="UK">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="VN">Vietnam</option>
                        </select>
                    </div>
                </div>
                <h3 class="center">Account type</h3>
                <div id="radio-check">
                    <div id="shopper-account">
                        <input required type="radio" name="account" value="shopper" id="shopper"><label for="shopper">Shopper</label>
                    </div>
                    <div id="store-owner-account">
                        <input required type="radio" name="account" value="store-owner" id="store-owner"><label for="store-owner">Store owner</label>
                    </div>
                </div>
                <div id="additional" class="hidden">
                    <input id="business" type="text" name="business-name" placeholder="Business name">
                    <input id="store-name" type="text" name="store-name" placeholder="Store name">
                    <div class="store-category">
                        <label for="store-category">Store category</label>
                        <select id="store-category" name="store-category">
                            <option value="" selected disabled hidden>Select a store category</option>    
                            <option value="department-stores">Department stores</option>
                            <option value="grocery-stores">Grocery stores</option>
                            <option value="restaurants">Restaurants</option>
                            <option value="clothing-stores">Clothing stores</option>
                            <option value="accessory-stores">Accessory stores</option>
                            <option value="pharmacies">Pharmacies</option>
                            <option value="technology-stores">Technology stores</option>
                            <option value="pet-stores">Pet stores</option>
                            <option value="toy-stores">Toy stores</option>
                            <option value="specialty-stores">Specialty stores</option>
                            <option value="thrift-stores">Thrift stores</option>
                            <option value="services">Services</option>
                            <option value="kiosks">Kiosks</option>
                        </select>
                    </div>                
                </div>
                <div class="buttons">
                    <input id="clear" type="reset" value="Clear">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
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
    <script src="./script/validate_form.js" defer></script>
    <script src="./script/show_hide.js" defer></script>
    </body>
</html>
<?php } ?>
    