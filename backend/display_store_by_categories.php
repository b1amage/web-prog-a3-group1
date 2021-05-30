<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {

$store_by_categ = [];

foreach($categories_data as $categ) {
    foreach($stores_data as $store) {
        if($categ[$field_name_categories["id"]] == $store[$field_name_stores["category_id"]]) {
            $store_by_categ[$categ[$field_name_categories["id"]]][$store[$field_name_stores["id"]]] = $store; 
        }
    }
}
}

?>