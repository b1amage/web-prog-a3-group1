<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
session_start();
header("Location: ../code/order_placement_2.php");

// Set i = 1 for indexing and calculatings
$i = 1;
foreach($_SESSION["order"] as $order){
    // if exit order id, submit the new quantity from form and change it in the super global variables
    if($order["id"] == $_GET[$i]){
        $quantity = "quantity-" . $i;
        $_SESSION["order"][$order["id"]]["quantity"] = $_GET[$quantity];
        $i ++;
    }
    
}


// check if coupon code exit
if (isset($_GET["discount-code"])){
    if ($_GET["discount-code"] == "COSC2430-HD"){
        //discount 20% if code is COSC2430-HD and display a message that the code has been applied
        $_SESSION["discount"] = 0.8;
        $_SESSION["error_message"] = "Applied";
    } elseif($_GET["discount-code"] == "COSC2430-DI"){
        //discount 10% if code is COSC2430-DI and display a message that the code has been applied
        $_SESSION["discount"] = 0.9;
        $_SESSION["error_message"] = "Applied";
    } elseif($_GET["discount-code"] == ""){
        // if there is no code, no discount and display the message that no code had been applied
        $_SESSION["discount"] = 1;
        $_SESSION["error_message"] = "No code applied";
    } else{
        // if code is wrong ==> invalid code
        $_SESSION["discount"] = 1;
        $_SESSION["error_message"] = "Invalid code";
    }
} 
}
?>