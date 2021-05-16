<?php
    include ('get-data.php');

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a");
    flock($fp, LOCK_SH);

    function fill_out($field_name) {
        if (isset($_POST[$field_name]) && $_POST[$field_name] !== "") {
            return true;
        } else {
            return false;
        }
    }

    // Validate email
    function validate_email() {
        if (fill_out('email')) {
            $new_email = $_POST['email'];
            $email_regex = "/^(?=[^\.])[a-zA-Z0-9.]{2,}[a-zA-Z0-9]+[@](?=[^\.])[a-zA-Z0-9.]+[.][a-zA-Z]{2,5}$/";

            if (!preg_match($email_regex, $new_email)) {
                return false;
            } 

            if (strpos($new_email, "..")) {
                return false;
            } 
            
            return true;
        } else {
            return false;
        }
    }
  
    // Validate phone
    function validate_phone() {
        if (fill_out('phone')) {
            $new_phone = $_POST['phone'];
            $phone_regex = "/^(?=[^\.])(?=[^\-])(?=[^\s])[0-9 .-]*[\d]$/";
    
            if (!preg_match($phone_regex, $new_phone)) {
                return false;
            } 

            // Check double symbols
            $symbols = " .-";
            for ($index = 0; $index <= strlen($new_phone) - 2; $index++) {
                if (strpos($symbols, $new_phone[$index]) && strpos($symbols, $new_phone[$index + 1])) {
                    return false;
                } 
            }

            // Check number of digits
            $number_of_digits = 0;
            for ($index = 0; $index <strlen($new_phone); $index++) {
                if (is_numeric($new_phone[$index])) {
                    $number_of_digits++;
                }
            }

            if ($number_of_digits < 9 || $number_of_digits > 11) {
                return false;
            } 

            return true;
        } else {
            return false;
        }
    }

    // Validate password
    function validate_password() {
        if (fill_out('password')) {
            $new_password = $_POST['password'];
            $new_repassword = $_POST['re-password'];
            $password_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/";
            
            if (!preg_match($password_regex, $new_password)) {
                return false;
            }

            if (strpos($new_password, " ")) {
                return false;
            }

            if ($new_password !== $new_repassword) {
                return false;
            }

            return true;
        } else {
            return false;
        }
    }
   
    function check_length($field_name) {
        if (fill_out($field_name)) {
            $field = $_POST[$field_name];
            if (strlen($field) >= 3) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function validate_zipcode() {
        if (fill_out('zipcode')) {
            $new_zipcode = $_POST['zipcode'];
            $zipcode_regex = "/^\d{4,6}$/";

            if (!preg_match($zipcode_regex, $new_zipcode)) {
                return false;
            }

            return true;
        } else {
            return false;
        }
    }

    function fill_out_account_type() {
        if (fill_out('account')) {
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
        $unique = true;
        // Add new record into an array
        $new_record = [];
        foreach($_POST as $key => $value) {
            $new_record[] = $value;
        }

        // Hashing the password and retype - password then save them to the server
        $new_record[2] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $new_record[3] = password_hash($_POST['re-password'], PASSWORD_DEFAULT);

        $previous_records = get_data_from_csv($registration_file);
        $new_record[1] = preg_replace('/[^0-9]/', '', $new_record[1]);

        for ($index = 1; $index < count($previous_records); $index++) {
            if ($previous_records[$index][0] === $new_record[0] || $previous_records[$index][1] === $new_record[1]) {
                $unique = false;
            }
        }

        if ($unique && validate_email() && validate_phone() && validate_password() && check_length('first-name') && check_length('last-name') && check_length('address') && check_length('city') && validate_zipcode() && fill_out('profile-picture') && fill_out('country') && fill_out_account_type()) {
            $registration = implode(",", $new_record);
            fwrite($fp, "\n{$registration}");
            header("Location: ../login-box.php");
        } else {
            header("Location: ../register.php");
        }    
    }

    flock($fp, LOCK_UN);
    fclose($fp);
?>
