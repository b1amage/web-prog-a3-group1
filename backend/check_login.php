<?php 
    function check_login() {
        if (isset($_SESSION["login"])) {
            return "./user-information.php";
        } else {
            return "./login-box.php";
        }
    }
?>