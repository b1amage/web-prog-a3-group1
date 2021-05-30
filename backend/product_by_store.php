<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
// Set an empty array for the result
$product_by_store_array = [];

// iterate through the stores in the store data
foreach($stores_data as $store) {
    // iterate through the product in the product data
    foreach($products_data as $product) {
        // If the id and the store name are equal, append that to the result
        if($store[$field_name_stores["id"]] == $product[$field_name_products["store_id"]]) {
            $product_by_store_array[$store[$field_name_stores["id"]]][] = $product; 
        }
    }
}
}
?>