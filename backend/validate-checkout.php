<?php
    session_start();
    if (isset($_SESSION["login"])) {
        header("Location: ../code/thanks.php");
    } else {
        header("Location: ../code/login-box.php");
    }
?>