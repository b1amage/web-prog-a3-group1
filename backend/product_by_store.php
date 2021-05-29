<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
$product_by_store_array = [];

foreach($stores_data as $store) {
    foreach($products_data as $product) {
        if($store[$field_name_stores["id"]] == $product[$field_name_products["store_id"]]) {
            $product_by_store_array[$store[$field_name_stores["id"]]][] = $product; 
        }
    }
}
}
?>