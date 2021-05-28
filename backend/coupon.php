<?php
session_start();
header("Location: ../code/order_placement_2.php");

// $all_order = $_SESSION["order"];
$i = 1;
foreach($_SESSION["order"] as $order){
    
    if($order["id"] == $_GET[$i]){
        $quantity = "quantity-" . $i;
        $_SESSION["order"][$order["id"]]["quantity"] = $_GET[$quantity];
        $i ++;
    }
    
}

$_SESSION["new_price"] = $_SESSION["price"];

if (isset($_GET["discount-code"])){
    if ($_GET["discount-code"] == "COSC2430-HD"){
        $_SESSION["new_price"] = $_SESSION["price"]* 80/100;
        $_SESSION["error_message"] = "Applied";
    } elseif($_GET["discount-code"] == "COSC2430-DI"){
        $_SESSION["new_price"] = $_SESSION["price"] * 90/100;
        $_SESSION["error_message"] = "Applied";
    } else{
        $_SESSION["new_price"] = $_SESSION["price"];
        $_SESSION["error_message"] = "Invalid code";
    }
}




?>