<?php
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
    <title>Term Of Service</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/tos.css">
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
            <h1>TERMS OF SERVICE</h1>
            <h5>Effective April 04, 2021 </h5>
            <div class="line"></div>
            <br>
            <div class="caption">We know it’s tempting to skip these Terms of Service, but it’s important to establish what you can expect from us as you use Retailerz services, and what we expect from you.</div>
            <p>These Terms of Service reflect the way Retailorz’s business works, the laws that apply to our company, and certain things we’ve always believed to be true. As a result, these Terms of Service help define Google’s relationship with you as you interact with our services. For example, these terms include the following topic headings:</p>
            <ul>
                <li>What you can expect from us, which describes how we provide and develop our services</li>
                <li>What we expect from you, which establishes certain rules for using our services</li>
                <li>Content in Retailorz services, which describes the intellectual property rights to the content you find in our services — whether that content belongs to you, Retailerz, or others</li>
            </ul>
            <h2>Age Requirement</h2>
            <p>As a shopper, if you’re under the age required to manage your own Retailez Account, you must have your parent or legal guardian’s permission to use a Google Account. Please have your parent or legal guardian read these terms with you.
            <br><br>If you’re a parent or legal guardian, and you allow your child to use the services, then these terms apply to you and you’re responsible for your child’s activity on the services.
            </p>
            <h2>Your relationship with Retailez</h2>
            <p>These terms help define the relationship between you and Retailez. Broadly speaking, we give you permission to use our services if you agree to follow these terms, which reflect how Retailerz’s business works and how we earn money. 
            </p>
            <h2>What you can expect from us</h2>
            <h3>Provide a broad range of useful services</h3>
            <p>We provide a broad range of services that are subject to these terms, including:</p>
            <ul>
                <li>apps and sites</li>
                <li>platforms</li>
                <li>integrated activities</li>
            </ul>
            <h3>Improve Retailez services</h3>
            <p>We’re constantly developing new technologies and features to improve our services. For example, we invest in artificial intelligence that uses machine learning to detect and block spam and malware, and to provide you with innovative features, like simultaneous translations. As part of this continual improvement, we sometimes add or remove features and functionalities, increase or decrease limits to our services, and start offering new services or stop offering old ones.</p>
            <p>If we make material changes that negatively impact your use of our services or if we stop offering a service, we’ll provide you with reasonable advance notice and an opportunity to export your content from your Google Account using Google Takeout, except in urgent situations such as preventing abuse, responding to legal requirements, or addressing security and operability issues.</p>
            <h2>What we expect from you</h2>
            <p>The permission we give you to use our services continues as long as you meet your responsibilities in:</p>
            <h3>Respect others</h3>
            <p>Many of our services allow you to interact with others. We want to maintain a respectful environment for everyone, which means you must follow these basic rules of conduct</p>
            <ul>
                <li>comply with applicable laws, including export control, sanctions, and human trafficking laws</li>
                <li>respect the rights of others, including privacy and intellectual property rights</li>
                <li>don’t abuse or harm others or yourself (or threaten or encourage such abuse or harm) — for example, by misleading, defrauding, defaming, bullying, harassing, or stalking others</li>
                <li>don’t abuse, harm, interfere with, or disrupt the services</li>
            </ul>
            <p>Our service-specific additional terms and policies provide additional details about appropriate conduct that everyone using those services must follow. If you find that others aren’t following these rules, many of our services allow you to report abuse. If we act on a report of abuse, we also provide a fair process as described in the Taking action in case of problems section.</p>
            <h3>Permission to use your content</h3>
            <p>Some of our services are designed to let you upload, submit, store, send, receive, or share your content. You have no obligation to provide any content to our services and you’re free to choose the content that you want to provide. If you choose to upload or share content, please make sure you have the necessary rights to do so and that the content is lawful.</p>
            <h2>License</h2>
            <p>Your content remains yours, which means that you retain any intellectual property rights that you have in your content. For example, you have intellectual property rights in the creative content you make, such as reviews you write. Or you may have the right to share someone else’s creative content if they’ve given you their permission.</p>
            <p>We need your permission if your intellectual property rights restrict our use of your content. You provide Google with that permission through this license.</p>
            <h2>Using Retailez services</h2>
            <p>If you meet these age requirements you can create a Retailez Account for your convenience. Some services require that you have a Retailerz Account in order to work — for example, to order a product or service as a shopper, and to place your products or services to the website as a shop owner.</p>
            <p>You’re responsible for what you do with your Retailez Account, including taking reasonable steps to keep your Retailerz Account secure, and we encourage you to regularly use the Security Checkup.</p>
            <p>To provide you with our services, we sometimes send you service announcements and other information. </p>
            <p>If you choose to give us feedback, such as suggestions to improve our services, we may act on your feedback without obligation to you.</p>
            <h2>Content in Retailez services</h2>
            <h3>Your content</h3>
            <p>Some of our services give you the opportunity to make your content publicly available — for example, you might post a product that you owned.</p>
            <ul>
                <li>See the Permission to use your content section for more about your rights in your content, and how your content is used in our services</li>
                <li>See the Removing your content section to learn why and how we might remove user-generated content from our services</li>
            </ul>
            <p>If you think someone is infringing your intellectual property rights, you can send us notice of the infringement and we’ll take appropriate action. For example, we suspend or close the Retailerz Accounts of repeat copyright infringers as described in our Copyright Help Center.</p>
            <h3>Retailez content</h3>
            <p>Some of our services include content that belongs to Retailez, for example: website service, logo, website interface. You may use Retailerz’s content as allowed by these terms and any service-specific additional terms, but we retain any intellectual property rights that we have in our content. Don’t remove, obscure, or alter any of our branding, logos, or legal notices. If you want to use our branding or logos, please contact to us.</p>
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