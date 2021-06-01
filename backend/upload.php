<?php
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    // Check duy-submit-btn
    if (isset($_POST['duy-submit-btn'])) {
        // Check if there is no error in the uploaded file 
        if ($_FILES["duy_image"]["error"] == UPLOAD_ERR_OK) {
        // Input the current image folder location
        $new_location = '../code/images/about-images/duy-img.jpeg';    
        // store new image in the image folder location (replace the current image)
        move_uploaded_file($_FILES['duy_image']['tmp_name'], $new_location);
        echo "<p>The image has been uploaded, close and restart the browser to update the file!</p>";
        }
    }
    // Check bao-submit-btn
    if (isset($_POST['bao-submit-btn'])) {
        // Check if there is no error in the uploaded file 
        if ($_FILES["bao_image"]["error"] == UPLOAD_ERR_OK) {
        // Input the current image folder location
        $new_location = '../code/images/about-images/bao-img.jpeg';    
        // store new image in the image folder location (replace the current image)
        move_uploaded_file($_FILES['bao_image']['tmp_name'], $new_location);
        echo "<p>The image has been uploaded, close and restart the browser to update the file!</p>";
        }
    }
    // Check tuan-submit-btn
    if (isset($_POST['tuan-submit-btn'])) {
        // Check if there is no error in the uploaded file 
        if ($_FILES["tuan_image"]["error"] == UPLOAD_ERR_OK) {
        // Input the current image folder location
        $new_location = '../code/images/about-images/tuan-image.jpeg';    
        // store new image in the image folder location (replace the current image)
        move_uploaded_file($_FILES['tuan_image']['tmp_name'], $new_location);
        echo "<p>The image has been uploaded, close and restart the browser to update the file!</p>";
        }
    }    
    // Check long-submit-btn
    if (isset($_POST['long-submit-btn'])) {
        // Check if there is no error in the uploaded file 
        if ($_FILES["long_image"]["error"] == UPLOAD_ERR_OK) {
        // Input the current image folder location
        $new_location = '../code/images/about-images/long-image.jpeg';
        // store new image in the image folder (replace the current image)    
        move_uploaded_file($_FILES['long_image']['tmp_name'], $new_location);
        echo "<p>The image has been uploaded, close and restart the browser to update the file!</p>";
        }
    }
    header("Location: ../backend/cms.php");
}
?>