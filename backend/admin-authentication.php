<?php 
    session_start();
    
    // Create an array to store admin data from data.txt
    $admin_array = [];
    $admin_file = fopen('../data.txt', "r"); // Open the data.txt file
    flock($admin_file, LOCK_SH); // Set the file in shared mode (reader)
    while (! feof($admin_file)) {
        array_push($admin_array, fgets($admin_file) ) ;
        // print_r(fgets($admin_file));
    }
    $data_username = $admin_array[0];
    $data_hashed_password = $admin_array[1];

    // Check if users submit the form
    if (isset($_POST['submit-btn']) && $_POST['submit-btn'] !== "") {

        // Store the email or phone submitted in a variable
        $admin_username = $_POST['admin-username'];

        // Store the password submitted in a variable
        $admin_password = $_POST['admin-password'];

        // A variable to check if the username is in data.txt
        $valid_admin = false;

        // A variable to check if the password is in data.txt
        $valid_password = false;

        // A variable to store the error message
        $error_message = base64_encode("Incorrect username or password. Try again");
        
        if ($admin_username == $data_username) {
            $valid_admin = true;
        } else {
            $valid_admin = false;
        }

        if (password_verify($admin_password, $data_hashed_password)) {
            $valid_password = true;
        } else {
            $valid_password = false;
        }

        // Check if the account is valid with the right username and password
        if ($valid_admin && $valid_password) {
            $_SESSION['admin-login'] = true;
            $_SESSION['admin-username'] = $_POST['admin-username'];
            // If valid, redirect to CMS page
            header("Location: ./cms.php");
        } else {
            // If invalid, send an error message and redirect back to admin-login.php page
            header("Location: ../code/admin-login.php?error_message=$error_message");        
        }
    }

    // Release the lock of the registration.csv
    flock($fp, LOCK_UN);

    // Close the registartion.csv file
    fclose($fp);
?>