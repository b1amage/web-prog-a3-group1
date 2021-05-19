<?php 
    include_once('get-data.php');
    function display_store($store) {
        $store_id = $store[0];
        $store_name = $store[1];
        $display = <<<"STORE"
        <div class="store">
            <a href="./nike-home.php?store_id=$store_id"><img src="./images/index-img/nike.jpeg" alt="nike-logo" width="200" height="200"></a>
            <h3><a href="./nike-home.php?store_id=$store_id" class="underline">$store_name</a></h3>
        </div>
        STORE;

        echo $display;
    }



    if (isset($_POST['name-categ'])) {
        if ($_POST['name-categ'] !== "all") {
            $first_letter = $_POST['name-categ'];
            $stores_data = get_data_from_csv('../backend/stores.csv');
            $matched_stores = [];


            foreach($stores_data as $store) {
                if (strpos($store[$field_name_stores['name']], $first_letter) === 0 && $store[$field_name_stores['name']] !== "name") {
                    $matched_stores[] = $store;
                }
            }

            if (count($matched_stores) !== 0) {
                $matched_stores = base64_encode(serialize($matched_stores));
                header("Location: ../code/store-browse-name.php?matched_stores={$matched_stores}");
            } else {
                $no_matched_message = base64_encode("There is no item starts with letter {$first_letter}");
                header("Location: ../code/store-browse-name.php?no_matched_message={$no_matched_message}");
            }
        } else if ($_POST['name-categ'] === "all") {
            header("Location: ../code/store-browse-name.php?matched_stores=all");
        }
    }
?>