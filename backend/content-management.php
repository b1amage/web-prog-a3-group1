<?php 
    session_start();
    # Edit the content:

    // Check if all the information has been submitted to the server
    if (isset($_POST) && $_POST['file'] !== "default") {
        // Check if user has clicked on append button:
        if (isset($_POST['submit-append']) && !empty($_POST['file'])) {
            // Check file existence, if not then output an error message
            if (!file_exists($_POST['file'] . ".txt")){
                echo "Error: This file does not exist";
            } else {
                // If the selected file is empty, open the old file in append mode
                if (filesize($_POST['file'] . ".txt") === 0) {
                    $file = fopen("./current-files/old-" . $_POST['file'] . ".txt", "a+");
                } else {
                    // If the selected file is not empty, open the selected file in append mode
                    $file = fopen($_POST['file'] . ".txt", "a+");
                }

                // Empty string to store the current contents
                $curr_content = "";
                // Get every lines in the textfile to the $curr_content:
                while(!feof($file)){
                    $curr_content = $curr_content . fgets($file);
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

        header("Location: ../backend/cms.php");
    }

    // Check if the user has clicked on the open button
    if (isset($_POST['submit-open']) && $_POST['file-name'] !== "default") {
        // Check if the textfile exist
        if(!file_exists($_POST['file-name'] . ".txt")){
            $error =  base64_encode("Error: This file does not exist.");
            header("Location: ../backend/cms.php?error=$error");
        } else {
            // If the selected file is empty, open the old file in read mode
            if (filesize($_POST['file-name'] . ".txt") === 0) {
                $file = fopen("./current-files/old-" . $_POST['file-name'] . ".txt", "r");
            } else {
                // If the selected file is not empty, open the selected file in read mode
                $file = fopen($_POST['file-name'] . ".txt", "r");
            }
            
            $_SESSION['content-display'] = [];

            // Get every lines in the textfile
            while(!feof($file)){
                $_SESSION['content-display'][] = fgets($file);
            }
            fclose($file);
            $file_name = $_POST['file-name'];
            header("Location: ../backend/cms.php?file_name=$file_name");
        }
    }
?>