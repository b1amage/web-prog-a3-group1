<?php
// session_start();
// $_SESSION["user_data"] = [];

$error_count = 0;
if (isset($_POST["submit-btn"])) {
    if ($_POST["username"] == "") {
        $mess_username = "Username should not be empty";
        $error_count++;
    }

    if ($_POST["password"] == "") {
        $mess_password = "Password should not be empty";
        $error_count++;
    }

    if ($_POST["retype-password"] != $_POST["password"]) {
        $mess_retype = "Retype password must be the same to the password";
        $error_count++;
    }

    if ($error_count === 0) {
        $information = [
            $_POST["username"] => password_hash($_POST["password"], PASSWORD_DEFAULT)
        ];

        $data_file = fopen('data.txt', 'w');

        fwrite($data_file, $_POST["username"]);
        fwrite($data_file,"\n");
        fwrite($data_file, password_hash($_POST["password"], PASSWORD_DEFAULT));
        fclose($data_file);
    }

// Kiem tra xem file nay co ton tai hay ko (de vao tat ca file php khac)
// if (file_exists("install.php")) {
//     return "The install.php is exist!";
// } else {
//     // Write code here
// }
}
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
