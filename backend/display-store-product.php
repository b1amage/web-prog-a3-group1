<?php 
// include './get-data.php';

function created_time_cmp($time1, $time2) {
    return strtotime($time1) - strtotime($time2);
  }

$products_data = get_data_from_csv('./backend/products.csv');
$stores_data = get_data_from_csv('./backend/stores.csv');

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
// array_shift($store_and_product["store_id"]);
// print_r_with_lines($store_and_product);

// Print in product
// foreach($store_and_product as $store) {

//     if (count($store) >= 10) {
//         $limit = 10;
//     } else {
//         $limit = count($store);
//     }

//     for($i=0; $i < $limit; $i++) {
//         if ($i == $limit - 1) {
//             echo '<pre>';
//             echo $store[$i]["name"] . ": " . $store[$i]["price"] . " (" . $store[$i]["created_time"] . ")";
//             echo '</pre>';
//             echo '_______________';
//         } else {
//             echo '<pre>';
//             echo $store[$i]["name"] . ": " . $store[$i]["price"] . " (" . $store[$i]["created_time"] . ")";
//             echo '</pre>';
//         }

//     }
// }

?>



