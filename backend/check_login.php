<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    // A function to check if users has logged in
    function check_login() {
        if (isset($_SESSION["login"])) {
            return "../code/user-information.php";
        } else {
            return "../code/login-box.php";
        }
    }

    // A function to check if admin has logged in
    function check_admin_login() {
        if (isset($_SESSION["admin-login"])) {
            return "../backend/cms.php";
        } else {
            return "../code/admin-login.php";
        }
    }
}
?>