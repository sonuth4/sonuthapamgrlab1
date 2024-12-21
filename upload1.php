<?php

$allowed_file_types = ["image/png", "image/jpeg"];
$max_file_size = 500 * 1024; 


if (isset($_POST['submit'])) {
    
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['profile_image']['name'];
        $file_tmp_name = $_FILES['profile_image']['tmp_name'];
        $file_size = $_FILES['profile_image']['size'];
        $file_type = $_FILES['profile_image']['type'];

       
        if ($file_size > $max_file_size) {
            echo "Error: File size is too large. Maximum allowed size is 500KB.";
            exit;
        }

       
        if (!in_array($file_type, $allowed_file_types)) {
            echo "Error: Invalid file type. Only PNG and JPEG files are allowed.";
            exit;
        }

        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); 
        }

        
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid('profile_') . '.' . $file_extension;
        $upload_path = $upload_dir . $new_file_name;

        
        if (move_uploaded_file($file_tmp_name, $upload_path)) {
            echo "Profile image uploaded successfully!<br>";
            echo "File Name: " . htmlspecialchars($new_file_name) . "<br>";
            echo "File Size: " . round($file_size / 1024, 2) . " KB<br>";
            echo "File Type: " . htmlspecialchars($file_type);
        } else {
            echo "Error: There was an issue uploading the image.";
        }
    } else {
        echo "Error: No file was uploaded or there was an upload error.";
    }
}
?>