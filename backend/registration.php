<?php
    include ('get-data.php');
    $unique = true;

    function getInfo($fieldName) {
        return $_POST[$fieldName];
    }

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a");
    flock($fp, LOCK_SH);
    
    $new_record = [];
    foreach($_POST as $key => $value) {
        $new_record[] = $value;
    }

    // Validate email
    function validateEmail() {
        if (isset($_POST['email'])) {
            $new_email = getInfo('email');
            $emailRegex = "/^(?=[^\.])[a-zA-Z0-9.]{2,}[a-zA-Z0-9]+[@](?=[^\.])[a-zA-Z0-9.]+[.][a-zA-Z]{2,5}$/";

            if (strpos($new_email, "..")) {
                return false;
            } 

            if (preg_match($emailRegex, $new_email)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
  
    // Validate phone
    function validatePhone() {
        if (isset($_POST['phone'])) {
            $new_phone = getInfo('phone');
            $phoneRegex = "/^(?=[^\.])(?=[^\-])(?=[^\s])[0-9 .-]*[\d]$/";
    
            if (preg_match($phoneRegex, $new_phone)) {
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
        } else {
            return false;
        }
    }

    // Validate password
    // if (exists("password")) {
    //     $new_password = $new_record[2];
    //     $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/";

    //     if (preg_match($passwordRegex, $new_password)) {
    //         if (strpos($new_password, " ")) {
                
    //         } else {
    //             $checkLastName = false;
    //         }
    //     } else {
    //         $checkPassword = false;
    //     }
        
    // } else {
    //     return false;
    // }

    // Check phone and email unique
    if (isset($_POST['submit'])) {
        $previous_records = get_data_from_csv($registration_file);
      
        for ($index = 1; $index < count($previous_records); $index++) {
            if ($previous_records[$index][0] === $new_record[0] || $previous_records[$index][1] === $new_record[1]) {
                $unique = false;
                break;
            }
        }
    }

    if ($unique && validateEmail() && validatePhone()) {
        $registration = implode(",", $new_record);
        fwrite($fp, "\n{$registration}");
        header("Location: ../login-box.php");
    } else {
        // header("Location: ../register.php");
    }    
    
    flock($fp, LOCK_UN);
    fclose($fp);
?>
