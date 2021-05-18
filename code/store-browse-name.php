<?php
    session_start();
    if (isset($_SESSION["login"])) {
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
    <title>Browse Stores By Categories</title>
    <link rel="stylesheet" href="./code/css/store-browse-name.css">
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
        <div class="title">Browse Store By Name</div>
        <div class="categ-container">
            <select class="name-categ" name="name-categ">
                <option disabled selected>Select the starting letter</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="X">Y</option>
                <option value="Y">Z</option>
            </select>
        </div>
        <div class="store-container s1">
            <div class="store">
                <!-- <div class="overlay">
                    <p>Convenience Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/department_stores/bibomart.jpg" alt="department store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">BiBoMart</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Convenience Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/department_stores/bsmart.jpg" alt="department store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">B'sMart</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Convenience Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/department_stores/ministop.jpg" alt="department store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Ministop</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Convenience Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/department_stores/circlek.jpg" alt="department store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">CircleK</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Convenience Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/department_stores/familymart.jpg" alt="department store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">FamilyMart</a></h3>
            </div>
            
            <div class="store">
                <!-- <div class="overlay">
                    <p>Grocery Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/grocery_stores/coopmart.jpg" alt="grocery store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">coopmart</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Grocery Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/grocery_stores/speedL.jpg" alt="grocery store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">SpeedL</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Grocery Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/grocery_stores/choppvn.jpg" alt="grocery store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Chopp.vn</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Grocery Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/grocery_stores/bachhoaxanh.jpg" alt="grocery store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Bach Hoa Xanh</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Grocery Store</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/grocery_stores/vinmart.jpg" alt="grocery store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">VinMart</a></h3>
            </div>

            <div class="store">
                <!-- <div class="overlay">
                    <p>Chickens & Fast Food</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/restaurants/donchicken.jpg" alt="Restaurant" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Don Chicken</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pizza Restaurant</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/restaurants/pizzahut.jpg" alt="Restaurant" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Pizza Hut</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>BBQ buffet</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/restaurants/gogi.jpg" alt="Restaurant" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Gogi House</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Hotpot buffet</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/restaurants/kichikichi.jpg" alt="Restaurant" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">KichiKichi</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Vietnamese Cusine</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/restaurants/wrap&roll.jpg" alt="Restaurant" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Wrap & Roll</a></h3>
            </div>

            <div class="store">
                <!-- <div class="overlay">
                    <p>Clothes</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/clothing_stores/tommy.jpg" alt="clothing store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Chicken Soup</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Clothes</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/clothing_stores/h&m.jpg" alt="clothing store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">H&M</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Clothes</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/clothing_stores/gap.jpg" alt="clothing store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">GAP</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Clothes</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/clothing_stores/g2000.jpg" alt="clothing store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">G2000</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Clothes</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/clothing_stores/calvin.jpg" alt="clothing store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Calvin Klein</a></h3>
            </div>
            <div class="store">
                <!-- <div class="overlay">
                    <p>Vintage & Recycled Accessories</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/accessory_stores/anice.jpg" alt="accessory store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Anice Jewellery</a></h3>
            </div>

            <div class="store">
                <!-- <div class="overlay">
                    <p>Medium Accessories</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/accessory_stores/little_devil.jpg" alt="accessory store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Little Devil</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Fashion & Cool Accessories</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/accessory_stores/moji.jpg" alt="accessory store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Moji</a></h3>
            </div>

            <div class="store">
                <!-- <div class="overlay">
                    <p>Cute Accessories</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/accessory_stores/bcorner.jpg" alt="accessory store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">BCorner</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Fashion & Small Accessories</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/accessory_stores/adler.jpg" alt="accessory store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Adler</a></h3>
            </div>
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pharmacies</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pharmacies/apoteket.jpg" alt="pharmacies" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Apoteket</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pharmacies</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pharmacies/eco_pharmaceutical.jpg" alt="pharmacies" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Eco Pharmaceutical</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pharmacies</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pharmacies/nhs.jpg" alt="pharmacies" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">NHS</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pharmacies</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pharmacies/pharmacity.jpg" alt="pharmacies" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Pharmacity</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pharmacies</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pharmacies/terrywhite.jpg" alt="pharmacies" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">TerryWhite Chenmart</a></h3>
            </div>
            <div class="store">
                <!-- <div class="overlay">
                    <p>Phones, Tablets & Laptop</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/technology_stores/tgdd/tgdd-logo.jpg" alt="technology store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">The Gioi Di Dong</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Phones, Tablets & Laptop</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/technology_stores/fpt/fpt.jpg" alt="technology store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">FPT Shop</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Gaming & Entertainment</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/technology_stores/halo/halo.jpg" alt="technology store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Halo Shop</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Gaming Technologies</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/technology_stores/gearvn.jpg" alt="technology store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">GearVn</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Phones, Tablets & Laptop</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/technology_stores/cellphones.jpg" alt="technology store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">CellphoneS</a></h3>
            </div>
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pets</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pet_stores/chewy.jpg" alt="pet storetoy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Chewy</a></h3>
            </div>

            <div class="store">
                <!-- <div class="overlay">
                    <p>Pets</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pet_stores/petmart.jpg" alt="pet storetoy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Petmart</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pets</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pet_stores/coupaw.jpg" alt="pet storetoy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Coupaw</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pets</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pet_stores/dogcom.jpg" alt="pet storetoy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Dog.com</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Pets</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/pet_stores/petsmart.jpg" alt="pet storetoy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Petsmart</a></h3>
            </div>
            <div class="store">
                <!-- <div class="overlay">
                    <p>Kid Toys</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/toy_stores/babimart.jpg" alt="toy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Bobimart</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Kid Toys</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/toy_stores/funnyland.jpg" alt="toy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Funnyland</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Kid Toys</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/toy_stores/mykingdom.jpg" alt="toy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">My Kingdom</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Kid Toys</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/toy_stores/fat_brain.jpg" alt="toy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Fat Brain Toy</a></h3>
            </div>
    
            <div class="store">
                <!-- <div class="overlay">
                    <p>Kid Toys</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/toy_stores/disney.jpg" alt="toy store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">Disney</a></h3>
            </div>
            <div class="store">
                <!-- <div class="overlay">
                    <p>Specialties</p>
                </div> -->
                <a href="./donchicken-home.php" ><img src="./code/images/stores-image/specialty_stores/annam.jpg" alt="specialty storethrift store" width="200" height="200"></a>
                <h3><a href="./donchicken-home.php">An Nam Gourmet</a></h3>
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
</html>