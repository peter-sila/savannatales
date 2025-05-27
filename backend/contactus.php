<?php
session_start();

require 'db_connect.php';

$errors = array();

//message from users
// if user click on send button
if (isset($_POST['send_message'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    


    // validating entered details in the form
    if (empty($fname)) {
        $errors['fname'] = "First Name Required";
    }
    if (empty($lname)) {
        $errors['lname'] = "Last Name Required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address";
    }
    if (empty($email)) {
        $errors['email'] = "Email required";
    }
    if (empty($message)) {
        $errors['message'] = "Write something,message can't be blank";
    }
    

    if (count($errors) === 0) {
       
        $insert_message = "INSERT INTO messages (firstname, lastname, email, message) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($insert_message);
        $stmt->bind_param('ssss', $fname, $lname, $email, $message);
        
        if ($stmt->execute()) {
            $_SESSION['success_send'] = "Message send successfully";
            // Clear any existing errors JSON
            file_put_contents('errors.json', json_encode([]));

            header('location: ../frontend/contactus.html');
            exit();

        } else {
            $errors['db_error'] = "Database error: failed to register";
        }
    } else {
        $_SESSION['error_send'] = "Message not send, try again";
        // Write errors to a JSON file
        file_put_contents('errors.json', json_encode($errors));

        header('location: ../frontend/contactus.html');

    }


}

?>