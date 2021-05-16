<?php 
// include './get-data.php';

function created_time_cmp($store_or_product_1, $store_or_product_2) {
    return strtotime($store_or_product_2[3]) - strtotime($store_or_product_1[3]);
  }

$products_data = get_data_from_csv('./backend/products.csv');
$stores_data = get_data_from_csv('./backend/stores.csv');

// print_r_with_lines($stores_data);

// $store_and_product = [];

// print_r_with_lines($stores_data);
// print_r_with_lines($products_data);

// foreach($products_data as $product_row) {
//     if (isset($product_row[$field_name_products["store_id"]])) {
//         $store_and_product[$product_row[$field_name_products["store_id"]]][] = [
//             "name" => $product_row[$field_name_products["name"]],
//             "price" => $product_row[$field_name_products["price"]],
//             "created_time" => $product_row[$field_name_products["created_time"]]
//         ];
//     } else {
//         $store_and_product[$product_row[$field_name_products["store_id"]]] = [
//             "name" => $product_row[$field_name_products["name"]],
//             "price" => $product_row[$field_name_products["price"]],
//             "created_time" => $product_row[$field_name_products["created_time"]]
//         ];
//     }
// }
// array_shift($store_and_product["store_id"]);
// print_r_with_lines($store_and_product);

// Print in product
// $product_by_store = [];
// foreach($store_and_product as $store) {

//     if (count($store) >= 10) {
//         $limit = 10;
//     } else {
//         $limit = count($store);
//     }

//     for($i=0; $i < $limit; $i++) {
//         $product_by_store[] = $store[$i]["name"] . ": " . $store[$i]["price"] . " (" . $store[$i]["created_time"] . ")";
//     }
// }

// print_r_with_lines($product_by_store);

usort($stores_data, "created_time_cmp");
usort($products_data, "created_time_cmp");


// print_r_with_lines($stores_data);
// print_r_with_lines($products_data);
?>



