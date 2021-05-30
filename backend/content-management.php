<?php 
    # Edit the content:

    // Check if all the information has been submitted to the server
    if (isset($_POST)) {
        // Check if user has clicked on append button:
        if (isset($_POST['submit-append']) && !empty($_POST['file'])) {
            // Check file existence, if not then output an error message
            if (!file_exists($_POST['file'] . ".txt")){
                echo "Error: This file does not exist";
            } else {
                // Open the selected file in append mode
                $file = fopen($_POST['file'] . ".txt","a+");
                // Empty string to store the current contents
                $curr_content = "";
                // Get every lines in the textfile to the $curr_content:
                while(!feof($file)){
                    $curr_content = $curr_content . fgets($file). "<br>";
                }
                $new_content = $_POST["content"];
                // Input new content into the selected file
                file_put_contents($_POST['file'] . ".txt", $curr_content . $new_content);
                fclose($file);
            }
        }
        // Check if user has clicked on overwrite button:
        if (isset($_POST['submit-overwrite']) && !empty($_POST['file'])) {
            // Open the selected file in write mode
            $file = fopen($_POST['file'] . ".txt","w");
            $content = $_POST["content"];
            // Overwrite new content into the selected file
            file_put_contents($_POST['file'] . ".txt", $content);
            fclose($file);
        }
    }
?>