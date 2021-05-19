<?php 
    include_once('get-data.php');
    function display_store($store_name) {
        $store = <<<"STORE"
        <div class="store">
            <a href="./donchicken-home.php" ><img src="./images/stores-image/department_stores/bibomart.jpg" alt="department store" width="200" height="200"></a>
            <h3><a href="./donchicken-home.php">{$store_name}</a></h3>
        </div>
        STORE;

        echo $store;
    }
    if (isset($_POST['name-categ'])) {
        $first_letter = $_POST['name-categ'];
        $stores_data = get_data_from_csv('../backend/stores.csv');
        $matched_stores = [];


        foreach($stores_data as $store) {
            if (strpos($store[$field_name_stores['name']], $first_letter) === 0 && $store[$field_name_stores['name']] !== "name") {
                $matched_stores[] = $store[$field_name_stores['name']];
            }
        }

        $no_matched_message = "There is no item starts with letter {$first_letter}";

        print_r_with_lines($matched_stores);

        if (count($matched_stores) !== 0) {
            $matched_stores = base64_encode(serialize($matched_stores));
            header("Location: ../code/store-browse-name.php?matched_stores={$matched_stores}");
        } else {
            header("Location: ../code/store-browse-name.php?no_matched_message={$no_matched_message}");
        }
    }
?>