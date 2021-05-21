<?php
// Set error count = 0 to know if there is any error while testing
$error_count = 0;

// Set those empty variable for avoid warning of null value
$mess_username = '';
$mess_password = '';
$mess_retype = '';


// If the user click on the submit button
if (isset($_POST["submit-btn"])) {
    // Check if the username is empty
    if ($_POST["username"] == "") {
        $mess_username = "Username should not be empty";
        $error_count++;
    }

    // Check if the password is empty
    if ($_POST["password"] == "") {
        $mess_password = "Password should not be empty";
        $error_count++;
    }

    // Check if the password and the retype is the same
    if ($_POST["retype-password"] != $_POST["password"]) {
        $mess_retype = "Retype password must be the same to the password";
        $error_count++;
    }

    // After testing, if there is no error, we will open the data.txt file as write mode
        $data_file = fopen('../data.txt', 'w');

        // Write username and the hashed password in the file
        fwrite($data_file, $_POST["username"]);
        fwrite($data_file,"\n");
        fwrite($data_file, password_hash($_POST["password"], PASSWORD_DEFAULT));
        // Close the file after writing
        fclose($data_file);
    }

// Kiem tra xem file nay co ton tai hay ko (de vao tat ca file php khac)
// if (file_exists("install.php")) {
//     exit("The install.php file is exit");
// } else {
//     // Write code here
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Install</title>
</head>
<body>
    <form action="install.php" method="post">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <span><?=$mess_username;?></span>

        <br>

        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <span><?=$mess_password;?></span>
        
        <br>
        
        <label for="retype-password">Retype Password</label>
        <br>
        <input type="password" name="retype-password" id="retype-password">
        <br>
        <span><?=$mess_retype;?></span>
        <br>

        <input type="submit" value="Choose" name="submit-btn">


    </form>
</body>
</html>
