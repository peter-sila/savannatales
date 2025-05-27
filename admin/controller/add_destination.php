<?php
// Include database connection file
require_once 'admincontroller.php';

// Check if form is submitted
if (isset($_POST['adddestination'])) {
    // Get form data and sanitize input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    
    // Validate required fields
    if (empty($name) || empty($description) || empty($price)) {
        $_SESSION['error_p'] = "All fields are required.";
        header("Location: ../destinations.php");
        exit();
    }

    // Handle multiple file uploads
    $imageNames = [];
    if (!empty($_FILES['images']['name'][0])) { // Ensure at least one image is uploaded
        $targetDir = "../assets/destinations/";
        $allowedTypes = array("jpg", "jpeg", "png", "gif");
        
        foreach ($_FILES['images']['name'] as $key => $imageName) {
            $imageFileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            
            // Check file type
            if (!in_array($imageFileType, $allowedTypes)) {
                $_SESSION['error_p'] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
                header("Location: ../destinations.php");
                exit();
            }
            
            // Generate a unique file name
            $uniqueName = time() . "_" . $imageName;
            $targetFilePath = $targetDir . $uniqueName;
            
            // Move uploaded file
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFilePath)) {
                $imageNames[] = $uniqueName;
            }
        }
    }
    
    // Convert image names array to JSON format (for database storage)
    $imageNamesJson = json_encode($imageNames);
    
    // Insert data into database
    $sql = "INSERT INTO destinations (name, description, images, price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssd", $name, $description, $imageNamesJson, $price);
    
    if ($stmt->execute()) {
        $_SESSION['success_p'] = "Destination added successfully.";
    } else {
        $_SESSION['error_p'] = "Failed to add destination.";
    }
    
    // Redirect back to destinations page
    header("Location: ../destinations.php");
    exit();
} else {
    // Redirect if accessed directly
    header("Location: ../destinations.php");
    exit();
}
