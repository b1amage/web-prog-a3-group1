<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    // Include the get-data.php to use the get_data_from_csv function
    include_once('get-data.php');

    // Check if user choose a store category to display
    if (isset($_POST['store_categ_id'])) {
        // If users choose to diplay only one category
        if ($_POST['store_categ_id'] !== "all") {

            // Get the category that users choose
            $store_categ_id = $_POST['store_categ_id'];

            // Get the data from stores.csv and categories.csv files
            $stores_data = get_data_from_csv('../backend/stores.csv');
            $categories_data = get_data_from_csv('../backend/categories.csv');
            $matched_stores = [];

            // Iterate through all of the stores to find the ones that match with the chose category
            foreach($stores_data as $store) {
                if ($store[$field_name_stores['category_id']] === $store_categ_id) {
                    $matched_stores[] = $store;
                }
            }

            if (count($matched_stores) !== 0) { // Check if there are matched stores
                // Send the information of matched stores and the category they belong to back to the store-browse-categ.php page
                $_SESSION['matched_stores'] = base64_encode(serialize($matched_stores)); 
                $matched_categ = $categories_data[$store_categ_id][$field_name_categories['name']];
                header("Location: ../code/store-browse-categ.php?matched_categ={$matched_categ}");
            } else {
                // If there is no matched store, send the message to users
                $no_matched_message = base64_encode("There is no store in category {$store_categ}");
                header("Location: ../code/store-browse-categ.php?no_matched_message={$no_matched_message}");
            }
        } else if ($_POST['store_categ_id'] === "all") { // If users choose to display all of the stores
            // Redirect user back to the store-browse-categ.php page and display all of the stores
            $_SESSION['matched_stores'] = "all";
            header("Location: ../code/store-browse-categ.php");
        }  
    } 
}
?>