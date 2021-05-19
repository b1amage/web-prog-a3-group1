<?php 
        session_start();
        $id_store = $_GET["store_id"];
        // echo $id_store;
        
        if (isset($_POST["next-btn"])) {
            $_SESSION["page"] += 2;
            header("Location: ../code/nike-browse-time.php?store_id=$id_store");
        }

        if (isset($_POST["previous-btn"])) {
            $_SESSION["page"] -= 2;
            header("Location: ../code/nike-browse-time.php?store_id=$id_store");
        }

        ?>