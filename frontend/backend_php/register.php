<?php
session_start();

require_once 'db_connect.php';

$errors = array();

// if user click on register button
if (isset($_POST['register'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $conf_password = $_POST['conf-password'];

   // validating entered details in the form
   if (empty($username)) {
      $errors['username'] = "Username required";
   }
   if (empty($email)) {
      $errors['email'] = "Email required";
   }
   if (empty($password)) {
      $errors['password'] = "Password required";
   }
   if ($password != $conf_password) {
      $errors['password'] = "The two passwords do not match";
   }
   

   if (count($errors) === 0) {
      // hashing the password
      $hash_password = password_hash($password, PASSWORD_DEFAULT);
      $role = 'User';
      $insert_user_sql = "INSERT INTO users (username, email, role, password) VALUES (?,?,?,?)";
      $st_sucess = $conn->prepare($insert_user_sql);
      $st_sucess->bind_param('ssss', $username, $email, $role, $hash_password);
      
      if ($st_sucess->execute()) {
         
         $_SESSION['success_p'] = "You have registered successfully";
         header('Location: ../login.php');
         exit();

         } else {
            $errors['db_error'] = "Database error: failed to register";
         }
   } else {

      $_SESSION['error_p'] = "Error adding new registration, Try again: " . $conn->error;
   }

}


?>