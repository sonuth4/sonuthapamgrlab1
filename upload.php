<?php

$allowed_file_types = ["application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
$max_file_size = 1 * 1024 * 1024; 

if (isset($_POST['submit'])) {
   
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['cv']['name'];
        $file_tmp_name = $_FILES['cv']['tmp_name'];
        $file_size = $_FILES['cv']['size'];
        $file_type = $_FILES['cv']['type'];

       
        if ($file_size > $max_file_size) {
            echo "Error: File size is too large. Maximum allowed size is 1MB.";
            exit;
        }

       
        if (!in_array($file_type, $allowed_file_types)) {
            echo "Error: Invalid file type. Only PDF and DOCX files are allowed.";
            exit;
        }

        
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); 
        }

        
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid('cv_') . '.' . $file_extension;
        $upload_path = $upload_dir . $new_file_name;

       
        if (move_uploaded_file($file_tmp_name, $upload_path)) {
            echo "File uploaded successfully!<br>";
            echo "File Name: " . htmlspecialchars($new_file_name) . "<br>";
            echo "File Size: " . round($file_size / 1024, 2) . " KB<br>";
            echo "File Type: " . htmlspecialchars($file_type);
        } else {
            echo "Error: There was an issue uploading the file.";
        }
    } else {
        echo "Error: No file was uploaded or there was an upload error.";
    }
}
?>