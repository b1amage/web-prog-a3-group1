<?php 
    session_start();
    include_once('get-data.php');

    if (isset($_POST['name_categ'])) {
        if ($_POST['name_categ'] !== "all") {
            
            $first_letter = $_POST['name_categ'];
            $stores_data = get_data_from_csv('../backend/stores.csv');
            $matched_stores = [];


            foreach($stores_data as $store) {
                if (strpos($store[$field_name_stores['name']], $first_letter) === 0 && $store[$field_name_stores['name']] !== "name") {
                    $matched_stores[] = $store;
                }
            }

            if (count($matched_stores) !== 0) {
                // $matched_stores = base64_encode(serialize($matched_stores));
                $_SESSION['matched_stores'] = base64_encode(serialize($matched_stores));
                // header("Location: ../code/store-browse-name.php?matched_stores={$matched_stores}&matched_letter={$first_letter}");
                header("Location: ../code/store-browse-name.php?matched_letter={$first_letter}");
            } else {
                $no_matched_message = base64_encode("There is no store starts with letter {$first_letter}");
                header("Location: ../code/store-browse-name.php?no_matched_message={$no_matched_message}");
            }

        } else if ($_POST['name_categ'] === "all") {
            $_SESSION['matched_stores'] = "all";
            // header("Location: ../code/store-browse-name.php?matched_stores=all");
            header("Location: ../code/store-browse-name.php");
        }
    }
?>