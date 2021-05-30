<?php 

// Check if the file is exist
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
// Create empty array for product by store
$product_by_store = [];

// Iterate through the store data for getting product by id in each store
foreach($stores_data as $store) {
    foreach($products_data as $product) {
        if($store[$field_name_stores["id"]] == $product[$field_name_products["store_id"]]) {
            $product_by_store[$store[$field_name_stores["id"]]][] = $product[$field_name_products["name"]]; 
        }
    }
}
}
?>