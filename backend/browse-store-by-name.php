<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    // Include the get-data.php to use the get_data_from_csv funtion
    include_once('get-data.php');

    // Check if users choose the first letter to display the stores
    if (isset($_POST['name_categ'])) {
        if ($_POST['name_categ'] !== "all") { // If users choose to display the stores starts with a letter
            
            // Get the letter users chose
            $first_letter = $_POST['name_categ'];
            
            // Get the data from stores.csv
            $stores_data = get_data_from_csv('../backend/stores.csv');
            $matched_stores = [];

            // Iterate through the stores.csv to find the matched stores 
            foreach($stores_data as $store) {
                if (strpos($store[$field_name_stores['name']], $first_letter) === 0 && $store[$field_name_stores['name']] !== "name") {
                    $matched_stores[] = $store;
                }
            }

            // If users want to see the stores starts with a digit, iterate through the stores.csv to find the matched stores
            if ($first_letter === "a digit") {
                foreach($stores_data as $store) {
                    if (is_numeric($store[$field_name_stores['name']][0])) {
                        $matched_stores[] = $store;
                    }
                }
            }

            if (count($matched_stores) !== 0) {// Check if there are matched stores
                // Send the information of the stores matched with the first letter users chose
                $_SESSION['matched_stores_with_letter'] = base64_encode(serialize($matched_stores));
                $_SESSION['matched_letter'] = $first_letter;
                header("Location: ../code/store-browse-name.php");
            } else {
                // Delete the previous matched stores
                unset($_SESSION['matched_stores_with_letter']);
                unset($_SESSION['matched_letter']);

                // If there is no matched store, send the message to users
                $no_matched_message = base64_encode("There is no store starts with {$first_letter}");
                header("Location: ../code/store-browse-name.php?no_matched_message={$no_matched_message}");
            }

        } else if ($_POST['name_categ'] === "all") { // If users choose to display all of the stores
            // Redirect user back to the store-browse-categ.php page and display all of the stores
            $_SESSION['matched_stores_with_letter'] = "all";
            unset($_SESSION['matched_letter']);
            header("Location: ../code/store-browse-name.php");
        }
    }
}
?>