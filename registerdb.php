<?php
session_start();

$username = "";

$errors=0 

$database = mysqli_connect('localhost', 'osiris', 'Newpass59#', 'Storage');

if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($database, $_POST['username']);
  $password_1 = mysqli_real_escape_string($database, $_POST['password_1']);

  $isusernamesame = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($database, $isusernamesame);
  $user = mysqli_fetch_assoc($result);
 
  if ($user) { 
    if ($user['username'] === $username) {
      $errors = 1
      echo 'username is the same';

    }  
  }


  if (count($errors) == 0) {
      $password333 = $_POST['password_1'];
      $password213 = trim($password333);
      $password123 = md5($password213);
      $query = "INSERT INTO users (username, password) 
  		  VALUES('$username','$password123')";
      mysqli_query($database, $query);
      $_SESSION['username'] = $username;
      header('location: Login.php');
  }
}
