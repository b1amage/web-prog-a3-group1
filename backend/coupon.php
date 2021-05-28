<?php
session_start();
header("Location: ../code/order_placement_2.php");

if(isset($_SESSION["price"])){
    if ($_GET["discount-code"] == "COSC2430-HD"){
        $_SESSION["price"] = $_SESSION["price"] * 80/100;
    } elseif($_GET["discount-code"] == "COSC2430-DI"){
        $_SESSION["price"] = $_SERVER["price"] * 90/100;
    } else{
        $_SERVER["error_message"] = "Invalid code";
    }
}




?>