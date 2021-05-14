<?php 
    $field_name_categories = [
        "id" => 0,
        "name" => 1
    ];

    $field_name_stores = [
        "id" => 0,
        "name" => 1,
        "category_id" => 2,
        "created_time" => 3,
        "featured" =>4
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
        fclose(($data_open));

        // Split the raw data by lines
        $data_split_line = (explode("\n", $raw_data));
        
        // Use loop to split the data by the comma
        foreach($data_split_line as $index => $sub_data_array) {
            $array_full_data[] = explode(",", $sub_data_array);
        }

        return $array_full_data;
    }

    // this function use for printing complex array
    function print_r_with_lines($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    // Test full mảng
    // print_r_with_lines(get_data_from_csv("./products.csv"));
    // print_r_with_lines(get_data_from_csv("./stores.csv"));
    // print_r_with_lines(get_data_from_csv("./categories.csv"));

    // Cú pháp: <Tên mảng>[hàng thứ n][$field_name_<tên mảng>["tên trường]]
    // Dùng để truy cập mảng theo tên của cột, không cần dùng id

    // Test gọi trường bất kỳ
    // echo get_data_from_csv("./categories.csv")[1][$field_name_categories["name"]];
    // echo get_data_from_csv("./stores.csv")[1][$field_name_stores["name"]];
    // echo get_data_from_csv("./products.csv")[1][$field_name_products["name"]];

 ?>