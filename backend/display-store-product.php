<?php 
include './get-data.php';
$products_data = get_data_from_csv('./products.csv');
$stores_data = get_data_from_csv('./stores.csv');

$store_and_product = [];

// print_r_with_lines($stores_data);
// print_r_with_lines($products_data);

foreach($products_data as $product_row) {
    if (isset($product_row[$field_name_products["store_id"]])) {
        $store_and_product[$product_row[$field_name_products["store_id"]]][] = [
            "name" => $product_row[$field_name_products["name"]],
            "price" => $product_row[$field_name_products["price"]],
            "created_time" => $product_row[$field_name_products["created_time"]]
        ];
    } else {
        $store_and_product[$product_row[$field_name_products["store_id"]]] = [
            "name" => $product_row[$field_name_products["name"]],
            "price" => $product_row[$field_name_products["price"]],
            "created_time" => $product_row[$field_name_products["created_time"]]
        ];
    }
}

print_r_with_lines($store_and_product)

?>


