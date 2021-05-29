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
    <title>Privacy Policies</title>
    <link rel="stylesheet" href="./css/policy.css">
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
        <div class="container">
        <h1>Privacy Policy</h1>
        <h5>https://retailez.netlify.app/</h5>
        <div class="line"></div>
        <p>Protecting your private information is our priority. This Statement of Privacy applies to https://retailez.netlify.app/ and governs data collection and usage. For the purposes of this Privacy Policy, unless otherwise noted, all references to the terms "User", "you" or "your" refer to you, the user, while all references to the terms "we", "us" or "our" refers to https://retailez.netlify.app/. By using the https://retailez.netlify.app/ website, you consent to the data practices described in this statement.
        <br><br>This policy is effective as of 3/14/2021 and was last updated on 3/14/2021.</p>
        <h2>Collection of your Personal Information</h2>
        <h3>Personal Informations</h3>
        <p>In order to better provide you with products and services offered, we may collect personally identifiable information, such as your:</p>
        <ul>
            <li>First and Last Names</li>
            <li>Mailing Addresses</li>
            <li>Email Addresses</li>
            <li>Telephone Numbers</li>
            <li>Credit Card Number</li>
        </ul>
        <p>We do not collect any personal information about you unless you voluntarily provide it to us. However, you may be required to provide certain personal information to us when you elect to use certain products or services. These may include:</p>
        <ul>
            <li>Registering for an account</li>
            <li>Entering a sweepstakes or contest sponsoed by us or one of our partners</li>
            <li>Signing up for special offers from selected third parties</li>
            <li>Sending us an email message</li>
            <li>Submitting your credit card or other payment information when ordering and purchasing products and services</li>
        </ul>
        <p>To wit, we will use your information for, but not limited to, communicating with you in relation to services and/or products you have requested from us. We also may gather additional personal or non-personal information in the future.</p>
        <h3>Demographic Informations</h3>
        <p>We may also collect anonymous demographic information, which is not unique to you, such as your:</p>
        <ul>
            <li>Age</li>
            <li>Gender</li>
            <li>Race</li>
            <li>Religion</li>
            <li>Political affilation</li>
        </ul>
        <h3>Use of your Personal Informations</h3>
        <p>Any of the personnal informations we collect from you may be used for the following purposes:</p>
        <ul>
            <li>To enable you to customise or personalise your experience of our website</li>
            <li>To fufill orders and deliveries</li>
            <li>To contact and communicate with you</li>
            <li>To enable you to access and use our website, associated applications, and associated social media platforms</li>
            <li>For security and fraud prevention, and to ensure that our sites and apps are safe, secure, and used in line with our terms of use</li>
            <li>For user account registration</li>
            <li>For internal record keeping and administrative purposes</li>
        </ul>
        <h3>Tracking User Behavior</h3>
        <p>We may keep track of the websites and pages our users visit within the service, in order to determine which services are the most popular. This data is used to deliver customized content and advertising within the service to customers whose behavior indicates that they are interested in a particular subject area.
        <br>We may also employ more advanced methods of studying user behavior, such as tracking mouse movements.</p>
        <h3>Security of your Personal Information</h3>
        <p>We secure your personal information from unauthorized access, use, or disclosure. We use the following methods for SSL Protocol.
        <br>When personal information (such as a credit card number) is transmitted to other websites, it is protected through the use of encryption, such as the Secure Sockets Layer (SSL) protocol.</p>
        <h3>Children Under Thirteen</h3>
        <p>We do not knowingly collect personally identifiable information from children under the age of thirteen. If you are under the age of thirteen, you must ask your parent or guardian for permission to use this website. If you are a parent and you have questions regarding our data collection practices, please contact us using the information provided at the end of this Statement of Privacy.</p>
        <h3>E-mail Communications</h3>
        <p>From time to time, we may contact you via email for the purpose of providing announcements, promotional offers, alerts, confirmations, surveys, and/or other general communication. In order to improve our Services, we may receive a notification when you open an email from us or click on a link therein.</p>
        <h3>Changes to this Statement</h3>
        <p>We reserve the right to change this Privacy Policy from time to time. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email address specified in your account, by placing a prominent notice on our website, and/or by updating any privacy information. Your continued use of the website and/or Services available after such modifications will constitute your:</p>
        <ul>
            <li>Acknowledgment of the modified Privacy Policy</li>
            <li>Agreement to abide and be bound by that Policy</li>
        </ul>
        <h3>Contact Information</h3>
        <p>We welcome your questions or comments regarding this Statement of Privacy. If you believe that we did not adhered to this Statement, please contact us at:</p>
        <div class="contact">
            <span><em><b>Email Address:</b></em> retailez@com.vn</span><br>
            <span><em><b>Telephone number:</b></em> 028-567954961</span>
        </div>
        <h3>References</h3>
        <p>For more information about the privacy policies, you can visit this link:
        <br><a href="https://typeful.co/privacy-policy/RW-Z1mfH" class="link" target="blank">Privacy Policy</a>    
        </p>
        <br>
        <!-- Place to store the changed content -->
        <div class="changed-content">
            <h2>This place is for changing the content:</h2>
            <br>
            <?php
                if(!file_exists("../backend/policy.txt")){
                    echo "Error: This file is not exist. The content cannot be loaded!";
                } else {
                    $file = fopen("../backend/policy.txt", "r");
                    while(!feof($file)) {
                        echo fgets($file). "<br>";
                    }
                    fclose($file);
                }
                ?>   
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