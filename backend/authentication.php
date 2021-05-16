<?php 
    // Include the "get-data.php" file to use the get_data_from_csv function
    include_once('get-data.php');

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a"); // Open the registration.csv file
    flock($fp, LOCK_SH); // Set the file in shared mode (reader)

    if (isset($_POST['submit']) && $_POST['submit'] !== "") {
        $previous_record = get_data_from_csv($registration_file);
        
    }

    // Release the lock of the registration.csv
    flock($fp, LOCK_UN);

    // Close the registartion.csv file
    fclose($fp);
?>