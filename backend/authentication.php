<?php 
    // Include the "get-data.php" file to use the get_data_from_csv function
    include_once('get-data.php');

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a"); // Open the registration.csv file
    flock($fp, LOCK_SH); // Set the file in shared mode (reader)

    if (isset($_POST['button-submit']) && $_POST['button-submit'] !== "") {
        $previous_record = get_data_from_csv($registration_file);

        $account = $_POST['email/phone'];
        $password = $_POST['password'];

        $valid_user = false;
        $valid_password = false;

        if (strpos($account, "@")) {
            $record_len = count($previous_record);
            for ($index = 0; $index < $record_len; $index++) {
                if ($previous_record[$index][0] === $account) {
                    $valid_user = true;
                    break;
                } 
            }
        } else {
            $account = preg_replace('/[^0-9]/', '', $account);
            if (is_numeric($account)) {
                $record_len = count($previous_record);
                for ($index = 0; $index < $record_len; $index++) {
                    if ($previous_record[$index][1] === $account) {
                        $valid_user = true;
                        break;
                    } 
                }
            } else {
                header("Location: ../login-box.php");
            }
        }

        if ($user) {
            header("Location: ../user-information.php");
        } else {
            header("Location: ../login-box.php");
        }
    }

    // Release the lock of the registration.csv
    flock($fp, LOCK_UN);

    // Close the registartion.csv file
    fclose($fp);
?>