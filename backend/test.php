<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
$admin_array = [];
$admin_file = fopen('../data.txt', "r"); // Open the data.txt file
flock($admin_file, LOCK_SH); // Set the file in shared mode (reader)
while (!feof($admin_file)) {
    array_push($admin_array, fgets($admin_file) ) ;
    // print_r(fgets($admin_file));
}
print_r($admin_array);
$data_username = $admin_array[0];
$data_hashed_password = $admin_array[1];
}
?>