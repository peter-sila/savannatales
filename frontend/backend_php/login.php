<?php
session_start();

require_once 'db_connect.php';

$errors = array();

// if user click on login button
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validating entered details in the form
    if (empty($email)) {
        $errors['email'] = "Email or Username required";
    }
    if (empty($password)) {
        $errors['password'] = "Password required";
    }
    
    if (count($errors) === 0) {

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            //    verify password
            if ($user && password_verify($password, $user['password'])) {
                // login success
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['success'] = "Welcome, " . $user['username'];
                if ($user['role'] === 'Admin') {
                    header('Location: ../admin/');
                    exit();
                } else {
                    header('Location: /index.php');
                    exit();
                }
                
            } else {
                $errors['login_fail'] = "Wrong email or password";
            }
            
        } else {
            $errors['db_error'] = "Database error: user not found";
        }
    } else {

        $_SESSION['login_fail'] = "User not found";
    }
}


?>