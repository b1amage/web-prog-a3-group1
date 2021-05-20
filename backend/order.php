<?php
    session_start();
    $id = $_GET["product_id"];
    header("Location: ../code/product-detail.php?product_id=$id");

    include "./get-data.php";
    include "./display-store-product.php";

    $orderplacement = [];

   
    foreach ($products_data as $product){
        if ($product[$field_name_products["id"]] == $id){
            $orderplacement["id"] = $product[$field_name_products["id"]];
            $orderplacement["name"] = $product[$field_name_products["name"]];
            $orderplacement["price"] = $product[$field_name_products["price"]];
            $orderplacement["quantity"] = 1;


  

            // print_r_with_lines($_SESSION["order"]);

            // echo var_dump($_SESSION["order"]);

            // foreach ($_SESSION["order"] as $ordered_product){
            //     if ($ordered_product == $id){
            //         $_SESSION["order"][$id]["quantity"]++;
            //     }
            //     else {
            //         $_SESSION["order"][$id][]=$orderplacement;
            //     }
            // }
            // print_r_with_lines($orderplacement);


        
        }



    };
    $_SESSION["order"] = $orderplacement;
    // print_r_with_lines($_SESSION["order"]);
  








?>