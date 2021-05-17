<?php 
// This function use to compare the created time of the products and the stores 
function created_time_cmp($store_or_product_1, $store_or_product_2) {
    return strtotime($store_or_product_2[3]) - strtotime($store_or_product_1[3]);
  }

// Get the data by using function from the get-data.php, which will be include in the index.php
$products_data = get_data_from_csv('./backend/products.csv');
$stores_data = get_data_from_csv('./backend/stores.csv');

// sort the data by using usort built-in function with the created_time_cmp function 
usort($stores_data, "created_time_cmp");
usort($products_data, "created_time_cmp");

?>



