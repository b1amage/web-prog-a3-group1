<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    // Check if user has logged in before checking out the order
    if (isset($_SESSION["login"])) {
        header("Location: ../code/thanks.php");
    } else {
        header("Location: ../code/register.php");
    }
}
?>