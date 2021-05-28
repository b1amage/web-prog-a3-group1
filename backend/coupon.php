<?php
session_start();
header("Location: ../code/order_placement_2.php");



// if (isset($_SESSION["order"])){
//     for ($i=1; $i=$_SESSION["index"]; $i++){
//         $_SESSION["price"] = $_SESSION["price"][$index] * $_SESSION["quantity"][$index];
//     }
// }

if (isset($_GET["discount-code"])){
    if ($_GET["discount-code"] == "COSC2430-HD"){
        $_SESSION["new_price"] = $_SESSION["price"] * 80/100;
    } elseif($_GET["discount-code"] == "COSC2430-DI"){
        $_SESSION["new_price"] = $_SESSION["price"] * 90/100;
    } else{
        $_SESSION["error_message"] = "Invalid code";
    }
}





?>