<?php

session_start();

require 'db_connect.php';
// require_once 'emailcontrol.php';

$errors = array();
$status = '';

// if user click on add bus button
if (isset($_POST['addbus'])) {
   $busnumber = $_POST['busnumber'];
   $capacity = $_POST['capacity'];
   $status = $_POST['status'];

   // validating entered details in the form
   if (empty($busnumber)) {
      $errors['busnumber'] = "Bus no required";
   }
   if (empty($capacity)) {
      $errors['capacity'] = "Bus capacity required";
   }
   if (empty($status)) {
      $errors['status'] = "Select status";
   }
   

   if (count($errors) === 0) {

      $insert_bus_sql = "INSERT INTO buses (busnumber, capacity, status) VALUES (?,?,?)";
      $st_sucess = $conn->prepare($insert_bus_sql);
      $st_sucess->bind_param('sis', $busnumber, $capacity, $status);
      
      if ($st_sucess->execute()) {
         
         $_SESSION['success_p'] = "New bus added successfully";
         header('location: #busform');
         exit();

      } else {
         $errors['db_error'] = "Database error: failed to register";
      }
   } else {

      $_SESSION['error_p'] = "Error adding new bus, Try again: " . $conn->error;
   }

}





// logging out user
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['firstname']);
    unset($_SESSION['phonenumber']);
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    unset($_SESSION['verified']);

    header('location: ../login.php');
    exit();
}

  
?>
