<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
        session_start();
        $id_store = $_GET["store_id"];
        
        if (isset($_POST["next-btn"])) {
            $_SESSION["page"] += 2;
            header("Location: ../code/nike-browse-time.php?store_id=$id_store");
        }

        if (isset($_POST["previous-btn"])) {
            $_SESSION["page"] -= 2;
            header("Location: ../code/nike-browse-time.php?store_id=$id_store");
        }
    }
        ?>