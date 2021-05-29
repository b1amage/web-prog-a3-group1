<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    include_once('get-data.php');

    if (isset($_POST['store_categ_id'])) {
        if ($_POST['store_categ_id'] !== "all") {

            $store_categ_id = $_POST['store_categ_id'];
            $stores_data = get_data_from_csv('../backend/stores.csv');
            $categories_data = get_data_from_csv('../backend/categories.csv');
            $matched_stores = [];

            foreach($stores_data as $store) {
                if ($store[$field_name_stores['category_id']] === $store_categ_id) {
                    $matched_stores[] = $store;
                }
            }

            // print_r_with_lines($matched_stores);

            if (count($matched_stores) !== 0) {
                // $matched_stores = base64_encode(serialize($matched_stores));
                $_SESSION['matched_stores'] = base64_encode(serialize($matched_stores));
                $matched_categ = $categories_data[$store_categ_id][$field_name_categories['name']];
                // header("Location: ../code/store-browse-categ.php?matched_stores={$matched_stores}&matched_categ={$matched_categ}");
                header("Location: ../code/store-browse-categ.php?matched_categ={$matched_categ}");
            } else {
                $no_matched_message = base64_encode("There is no store in category {$store_categ}");
                header("Location: ../code/store-browse-categ.php?no_matched_message={$no_matched_message}");
            }
        } else if ($_POST['store_categ_id'] === "all") {
            $_SESSION['matched_stores'] = "all";
            header("Location: ../code/store-browse-categ.php");
        }  
    } 
}
?>