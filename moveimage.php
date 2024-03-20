<?php
include "dataconnect.php";
include "admin/int.php";
// Define the paths to the admin panel and main folders

// Example query to retrieve image data
 // Replace with your desired image ID

$adminFolderPath = 'admin/images/';
$mainFolderPath = 'images/';

// Specify the image file name you want to copy
$imageFileName = 'download.jpeg';
//move_uploaded_file(filename, destination);


// Check if the image file exists in the admin panel folder
if (file_exists($adminFolderPath . $imageFileName)) {
    // Copy the image to the main folder
    if (copy($adminFolderPath . $imageFileName, $mainFolderPath . $imageFileName)) {
        echo "Image copied successfully!";
    } else {
        echo "Failed to copy the image.";
    }
} else {
    echo "Image not found in the admin panel folder.";
}
?>
