<?php 
include './get-data.php';
$stores_data = get_data_from_csv("./stores.csv");
$products_data = get_data_from_csv("./products.csv");

// print_r_with_lines($stores_data);
// print_r_with_lines($products_data);

$product_by_store = [];

foreach($stores_data as $store) {
    foreach($products_data as $product) {
        if($store[$field_name_stores["id"]] == $product[$field_name_products["store_id"]]) {
            $product_by_store[$store[$field_name_stores["name"]]][] = $product[$field_name_products["name"]]; 
        }
    }
}

print_r_with_lines($product_by_store);

?>