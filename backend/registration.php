<?php
    include ('get-data.php');
    $checkEmail = true;
    $checkPhone = true;
    $checkPassword = true;
    $checkFirstName = true;
    $checkLastName = true;
    $checkAddress = true;
    $checkCity = true;
    $checkZipcode = true;
    $checkProfilePicture = true;
    $checkCountry = true;
    $checkAccountType = true;
    $checkBusinessName = true;
    $checkStoreName = true;
    $checkStoreCategory = true;

    function exists($fieldName) {
        return isset($_POST[$fieldName]);
    }

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a");
    flock($fp, LOCK_SH);
    
    $new_record = [];
    foreach($_POST as $key => $value) {
        $new_record[] = $value;
    }
    // Validate email
    if (exists("email")) {
        $new_email = $new_record[0];
        $emailRegex = "/^(?=[^\.])[a-zA-Z0-9.]{2,}[a-zA-Z0-9]+[@](?=[^\.])[a-zA-Z0-9.]+[.][a-zA-Z]{2,5}$/";
        if (preg_match($emailRegex, $new_email)) {
            if (!strpos($new_email, "..")) {
                $checkEmail = true;
            } else {
                $checkEmail = false;
                echo "<script>alert('Invalid email')</script>";
            }
        } else {
            $checkEmail = false;
            echo "<script>alert('Invalid email')</script>";
        }
    }

    // Validate phone
    if (exists("phone")) {
        $new_phone = $new_record[1];
        $phoneRegex = "/^(?=[^\.])(?=[^\-])(?=[^\s])[0-9 .-]*[\d]$/";

        $symbols = " .-";
        $symbols_double = false;
        // Check double symbols
        for ($index = 0; $index <= strlen($new_phone) - 2; $index++) {
            if (strpos($symbols, $new_phone[$index]) && strpos($symbols, $new_phone[$index + 1])) {
                $symbols_double = true;
                break;
            } 
        }

        // Check number of digits
        $number_of_digits = 0;
        $exceed_number_of_digits = false;
        for ($index = 0; $index <strlen($new_phone); $index++) {
            if (is_numeric($new_phone[$index])) {
                $number_of_digits++;
            }
        }

        if ($number_of_digits < 9 || $number_of_digits > 11) {
            $exceed_number_of_digits = true;
        } 

        // if(!$symbols_double && !$exceed_number_of_digits) {
        //     $checkPhone = true;
        // } else {
        //     $checkPhone = false;
        // }
        $checkPhone = (!$symbols_double && !$exceed_number_of_digits) ? true : false;
    }

    if (isset($_POST['submit'])) {
        $allow = true;
        $previous_records = get_data_from_csv($registration_file);
      
        for ($index = 1; $index < count($previous_records); $index++) {
            if ($previous_records[$index][0] === $new_record[0] || $previous_records[$index][1] === $new_record[1]) {
                $allow = false;
                break;
            }
        }
        if ($allow && $checkEmail && $checkPhone) {
            $registration = implode(",", $new_record);
            fwrite($fp, "{$registration}\n");
            echo "<script>alert('Success Login')</script>";
            header("Location: ../login-box.php");
        } else {
            echo "<script>alert('This account has been used')</script>";
            header("Location: ../register.php");
        }    
    }
    
    flock($fp, LOCK_UN);
    fclose($fp);
?>
