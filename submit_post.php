<?php
session_start();
include_once "db.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $content = $_POST['content'];

    // Check if the image file was uploaded successfully
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['tmp_name'];

        // Move the uploaded image file to the desired folder
        $targetDir = 'upload/'; // Replace with your desired folder path
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        if (move_uploaded_file($image, $targetFile)) {
            // Prepare the SQL statement to insert the post data
            $stmt = $conn->prepare("INSERT INTO posts (title, date, time, location, content, image) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $title, $date, $time, $location, $content, $targetFile);

            if ($stmt->execute()) {
                // Post data inserted successfully
                echo "Post created successfully";
                echo '<script>alert("Post created successfully.");</script>';
                header("Location: create_post.php");
                exit();
            } else {
                // Error occurred while inserting data
                echo "Error creating post";
            }
        } else {
            // Error moving the uploaded file
            echo "Error moving image file";
        }
        
    } else {
        // Image file upload error
        echo "Error uploading image";
    }
}
?>
