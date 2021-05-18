<?php 
include './get-data.php';
$stores_data = get_data_from_csv("./stores.csv");
$products_data = get_data_from_csv("./products.csv");
$categories_data = get_data_from_csv('./categories.csv');


// print_r_with_lines($stores_data);
// print_r_with_lines($products_data);

$store_by_categ = [];

foreach($categories_data as $categ) {
    foreach($stores_data as $store) {
        if($categ[$field_name_categories["id"]] == $store[$field_name_stores["category_id"]]) {
            $store_by_categ[$categ[$field_name_categories["id"]]][$store[$field_name_stores["id"]]] = $store; 
        }
    }
}

print_r_with_lines($store_by_categ);

?>