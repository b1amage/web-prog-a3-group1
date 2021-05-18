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
    <title>Contact</title>
    <link rel="stylesheet" href="./code/css/contact.css">
    <link rel="stylesheet" href="./code/css/header.css">
    <link rel="stylesheet" href="./code/css/cookies.css">
    <link rel="stylesheet" href="./code/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./code/css/footer.css">
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
        <h1 class="title">Contact form</h1>
        <div class="container">
            <form method="get" action="#" enctype="text/plain">
            <div clas="contact_form">
                <label class="purpose" for="cont_pur">Your purpose of contact</label>
                <select id="cont_pur">
                    <option value="Business">Business</option>
                    <option value="Feedback">Feedback</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="contact_form">
                <p>Please enter your full name:<br><input id="full_name" required type="text" required minlength="3" maxlength="60" name="full name" placeholder="Your full name"></p>
                <span id="name_alert"></span>
            </div>
            <div class="contact_form">
                <p>Enter your email address:<br><input id="email" required type="email" name="email" placeholder="avcd123@email.com"></p>
                <span id="email_alert"></span>
            </div>
            <div class="contact_form">
                <p>Enter your phone number:<br><input id="phone" required type="tel" name="phone number" placeholder="091 989 5451"></p>
                <span id="phone_alert"></span>
            </div>
            <div class="contact_form">
                <p>Method of contact</p>
                <input type="radio" name="contact_method" id="email_method"><label for="email_method">By email</label>
                <input type="radio" name="contact_method" id="phone_method"><label for="phone_method">By phone</label>
                <br>
                <span id="radio_alert"></span>   
            </div>
            <div class="contact_form">
                <p>Contact days:</p>
                <input type="checkbox" name="contactdays[]" value="monday" id="monday"><label for="monday">Monday</label>
                <input type="checkbox" name="contactdays[]" value="tuesday" id="tuesday"><label for="tuesday">Tuesday</label>
                <input type="checkbox" name="contactdays[]" value="wednesday" id="wednesday"><label for="wednesday">Wednesday</label>
                <input type="checkbox" name="contactdays[]" value="thursday" id="thursday"><label for="thursday">Thursday</label>
                <input type="checkbox" name="contactdays[]" value="friday" id="friday"><label for="friday">Friday</label>
                <input type="checkbox" name="contactdays[]" value="saturday" id="saturday"><label for="saturday">Saturday</label>
                <input type="checkbox" name="contactdays[]" value="sunday" id="sunday"><label for="sunday">Sunday</label>
                <br>
                <span id="checkbox_alert"></span>
            </div>
            <div class="contact_form">
                <label class="message" for="msg">Your message:</label>
                <br>
                <textarea required id="msg" name="message" rows="15" cols="150" placeholder="Enter your message here!" onkeyup="keyboard_press_count(event)" onkeydown="backspace_count(event)"></textarea>
                <span id="message_alert"></span>
            </div>
            <div class="contact_method">
                <button type="reset" id="clear">Clear</button>
                <button type="submit" id="submit">Submit</button>
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
    <script src="./code/script/cookies.js" defer></script>
    <script src="./code/script/check_login.js" defer></script>
    <script src="./code/script/validation_contact.js"></script>
</body>
</html>