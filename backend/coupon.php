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



if (isset($_GET["discount-code"])){
    if ($_GET["discount-code"] == "COSC2430-HD"){
        $_SESSION["discount"] = 0.8;
        $_SESSION["error_message"] = "Applied";
    } elseif($_GET["discount-code"] == "COSC2430-DI"){
        $_SESSION["discount"] = 0.9;
        $_SESSION["error_message"] = "Applied";
    } elseif($_GET["discount-code"] == ""){
        $_SESSION["discount"] = 1;
        $_SESSION["error_message"] = "No code applied";
    } else{
        $_SESSION["discount"] = 1;
        $_SESSION["error_message"] = "Invalid code";
    }
}




?>