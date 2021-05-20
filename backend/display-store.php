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
?>