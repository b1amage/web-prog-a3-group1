<?php 
// include '../backend/get-data.php';
// include '../backend/display-store-product.php';

// print_r_with_lines($stores_data);
// print_r_with_lines($products_data);

if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
$product_by_store = [];

foreach($stores_data as $store) {
    foreach($products_data as $product) {
        if($store[$field_name_stores["id"]] == $product[$field_name_products["store_id"]]) {
            $product_by_store[$store[$field_name_stores["id"]]][] = $product[$field_name_products["name"]]; 
        }
    }
}

// print_r_with_lines($product_by_store);
}
?>