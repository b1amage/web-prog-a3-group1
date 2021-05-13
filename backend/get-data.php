<?php 
    function get_data_from_csv($file_name) {
        $data_open = fopen($file_name, 'r');
        $raw_data = fread($data_open,filesize($file_name));
        fclose(($data_open));

        $data_split_line = (explode("\n", $raw_data));
        
        foreach($data_split_line as $index => $sub_data_array) {
            $array_full_data[] = explode(",", $sub_data_array);
        }

        return $array_full_data;
    }

    function print_r_with_lines($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    print_r_with_lines(get_data_from_csv("./products.csv"));
    print_r_with_lines(get_data_from_csv("./stores.csv"));
    print_r_with_lines(get_data_from_csv("./categories.csv"));

 ?>