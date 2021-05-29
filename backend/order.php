<?php
    session_start();

    $id = $_GET["product_id"];
    header("Location: ../code/product-detail.php?product_id=$id");

    include "./get-data.php";
    include "./display-store-product.php";

    $orderplacement = $_SESSION["order"];


    print_r_with_lines($products_data);
    foreach ($products_data as $product) {
        if ($product[$field_name_products["id"]] == $id) {
            if ($orderplacement === []) {
                $orderplacement[$id] = [
                    "id" => $id,
                    "name" => $product[$field_name_products["name"]],
                    "price" => $product[$field_name_products["price"]],
                    "quantity" => 1
                ];
            } else {
                $new_quantity = $orderplacement[$id]["quantity"] + 1;
                $orderplacement[$id] = [
                    "id" => $id,
                    "name" => $product[$field_name_products["name"]],
                    "price" => $product[$field_name_products["price"]],
                    "quantity" => $new_quantity
                ];
            }
        }
    }

    print_r_with_lines($orderplacement);

    $_SESSION["order"] = $orderplacement; 

?>