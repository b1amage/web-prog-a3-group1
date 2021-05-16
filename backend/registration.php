<?php
    // Include the "get-data.php" file to use the get_data_from_csv function
    include_once('get-data.php');

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a"); // Open the registration.csv file
    flock($fp, LOCK_SH); // Set the file in shared mode (reader)

    // A function to check if a field is filled out
    function fill_out($field_name) {
        // Check if the value of the field is submitted and not blank
        if (isset($_POST[$field_name]) && $_POST[$field_name] !== "") {
            return true;
        } else {
            return false;
        }
    }

    // A function to validate email
    function validate_email() {
        // Check if the email field is filled out
        if (fill_out('email')) {
            // Store the value of the email submitted
            $new_email = $_POST['email']; 

            // The regex to validate the email
            $email_regex = "/^(?=[^\.])[a-zA-Z0-9.]{2,}[a-zA-Z0-9]+[@](?=[^\.])[a-zA-Z0-9.]+[.][a-zA-Z]{2,5}$/"; 

            // If the email is not matched with the regex, return false
            if (!preg_match($email_regex, $new_email)) {
                return false;
            } 

            // If the email contains double dots, return false 
            if (strpos($new_email, "..")) {
                return false;
            } 
            
            return true;
        } else {
            return false;
        }
    }
  
    // A function to validate phone number
    function validate_phone() {
        // Check if the phone field is filled out
        if (fill_out('phone')) {
            // Store the value of the phone number submitted
            $new_phone = $_POST['phone'];

            // The regex to validate phone number
            $phone_regex = "/^(?=[^\.])(?=[^\-])(?=[^\s])[0-9 .-]*[\d]$/";
    
            // If the phone number is not matched with the regex, return false
            if (!preg_match($phone_regex, $new_phone)) {
                return false;
            } 

            // If the phone number has double symbols, return false 
            $symbols = " .-";
            for ($index = 0; $index <= strlen($new_phone) - 2; $index++) {
                if (strpos($symbols, $new_phone[$index]) && strpos($symbols, $new_phone[$index + 1])) {
                    return false;
                } 
            }

            // Check the number of digits
            $number_of_digits = 0;

            // Count the number of digits in phone number
            for ($index = 0; $index <strlen($new_phone); $index++) {
                if (is_numeric($new_phone[$index])) {
                    $number_of_digits++;
                }
            }

            // If the number of digits is less than 9 or greater than 11, return false 
            if ($number_of_digits < 9 || $number_of_digits > 11) {
                return false;
            } 

            return true;
        } else {
            return false;
        }
    }

    // A function to validate password
    function validate_password() {
        // Check if the password field is filled out
        if (fill_out('password')) {
            // Store the value of the password submitted
            $new_password = $_POST['password'];
            
            // Store the value of re-password submitted
            $new_repassword = $_POST['re-password'];

            // The regex to validate password
            $password_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/";
            
            // If the password is not matched with the regex, return false
            if (!preg_match($password_regex, $new_password)) {
                return false;
            }

            // If the password contains a space, return false
            if (strpos($new_password, " ")) {
                return false;
            }

            // The retyped password is not the same as the orginal one, false
            if ($new_password !== $new_repassword) {
                return false;
            }

            return true;
        } else {
            return false;
        }
    }
   
    // A function to check the length of the value of a field
    function check_length($field_name) {
        // Check if the field is filled out
        if (fill_out($field_name)) {
            $field = $_POST[$field_name];

            // Check if the length of the field's value is greater than 3
            if (strlen($field) >= 3) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // A function to validate zipcode
    function validate_zipcode() {
        // Check if the zipcode field is filled out
        if (fill_out('zipcode')) {
            // Store the value of the zipcode submitted
            $new_zipcode = $_POST['zipcode'];

            // The regex to validate zipcode
            $zipcode_regex = "/^\d{4,6}$/";

            // If the zipcode is not matched with the regex, return false
            if (!preg_match($zipcode_regex, $new_zipcode)) {
                return false;
            }

            return true;
        } else {
            return false;
        }
    }

    // A function to check if the information about the account type is filled out
    function fill_out_account_type() {
        // Check if the account type is checked
        if (fill_out('account')) {
            // If the account type is store owner, check if the "Business name", "Store name", "Store category" fields are filled out. Else, return true
            if ($_POST['account'] === "store-owner") {
                return fill_out('business-name') && fill_out('store-name') && fill_out('store-category');
            } else if ($_POST['account'] === 'shopper') {
                return true;
            }
        }

        return false;
    }

    // Check phone and email unique
    if (fill_out('submit')) {
        // A variable to check the if the account is unique
        $unique = true;

        // A variable to store the error message
        $error_message = "";

        // Add new record into an array
        $new_record = [];
        foreach($_POST as $key => $value) {
            $new_record[] = $value;
        }

        // Hashing the password and retype - password then save them to the server
        $new_record[2] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $new_record[3] = password_hash($_POST['re-password'], PASSWORD_DEFAULT);

        // Use the get_data_from_csv function to get information about previous records in registration.csv
        $previous_records = get_data_from_csv($registration_file);

        // Store the phone number submitted without special characters in a variable
        $new_phone_number = preg_replace('/[^0-9]/', '', $new_record[1]);

        for ($index = 1; $index < count($previous_records); $index++) {
            // Store the phone number already in the server without special characters in a variable
            $previous_phone_number = preg_replace('/[^0-9]/', '', $previous_records[$index][1]);

            // If the email or phone number is reused, set the $unique variable to false
            if ($previous_records[$index][0] === $new_record[0] || $previous_phone_number === $new_phone_number) {
                // Show error message when users reused an account
                $error_message = base64_encode("This account has been used. Register again");
                $unique = false;

                // Redirect to the register.php page
                header("Location: ../register.php?error_message=$error_message");
            }
        }

        // If all the validation processes are passed, redirect to the login-box.php page. Else, redirect back to the register.php page
        if ($unique && validate_email() && validate_phone() && validate_password() && check_length('first-name') && check_length('last-name') && check_length('address') && check_length('city') && validate_zipcode() && fill_out('profile-picture') && fill_out('country') && fill_out_account_type()) {
            // Convert the records into a single line 
            $registration = implode(",", $new_record);

            // Add the new record into registration.csv
            fwrite($fp, "\n{$registration}");

            // Redirect to the login-box.php page
            header("Location: ../login-box.php");
        } else {
            // Show error message when there are problems in registration
            $error_message = base64_encode("Some errors in validation. Register again");

            // Re direct to the register.php page
            header("Location: ../register.php?error_message=$error_message");
        }    
    }

    // Release the lock of the registration.csv
    flock($fp, LOCK_UN);

    // Close the registartion.csv file
    fclose($fp);
?>
