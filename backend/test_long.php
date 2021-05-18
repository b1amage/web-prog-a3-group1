<?php 
include './get-data.php';
$stores_data = get_data_from_csv("./stores.csv");
$products_data = get_data_from_csv("./products.csv");


$product_by_store_array = [];

foreach($stores_data as $store) {
    foreach($products_data as $product) {
        if($store[$field_name_stores["id"]] == $product[$field_name_products["store_id"]]) {
            $product_by_store_array[$store[$field_name_stores["name"]]][$product[$field_name_products["name"]]] = $product; 
        }
    }
}

print_r_with_lines($product_by_store_array);

?>