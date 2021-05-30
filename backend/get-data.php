<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    // Create the field name base on index for easier access
    $field_name_categories = [
        "id" => 0,
        "name" => 1
    ];

    $field_name_stores = [
        "id" => 0,
        "name" => 1,
        "category_id" => 2,
        "created_time" => 3,
        "featured" => 4
    ];

    $field_name_products = [
        "id" => 0,
        "name" => 1,
        "price" => 2,
        "created_time" => 3,
        "store_id" => 4,
        "featured_in_mall" => 5,
        "featured_in_store" => 6
    ];

    function get_data_from_csv($file_name) {
        // Open, get raw data and close file
        $data_open = fopen($file_name, 'r');
        $raw_data = fread($data_open,filesize($file_name));
        fclose($data_open);

        // Split the raw data by lines
        $data_split_line = (explode("\n", $raw_data));
        
        // Use loop to split the data by the comma
        foreach($data_split_line as $index => $sub_data_array) {
            $array_full_data[] = explode(",", $sub_data_array);
        }

        return $array_full_data;
    }

    function get_data_from_csv_with_double_quotes($file_name) {
        // Turn the CSV file into an array
        return array_map('str_getcsv', file($file_name));;        
    }

    // this function use for printing complex array
    function print_r_with_lines($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}
 ?>