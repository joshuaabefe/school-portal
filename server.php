<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

//Creating connection for mysqli
$conn = new mysqli("localhost", "root", "", "firstdb");
 
// create user account
if (isset($_POST['create_user'])) {
  // recieve all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  $password = md5($password_1);//encrypt the password before saving in the database

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { 
    array_push($errors, "Username is required"); 
  }
  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }
  if (empty($password_1)) { 
    array_push($errors, "Password is required"); 
  }
  if ($_POST['password_1'] !== $_POST['password_2']) {
    array_push($errors, 'Password and Confirm password should match!');   
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  $sql = "INSERT INTO register (name, email, username, password) VALUES ('$name', '$email', '$username' , '$password')";
 
  if (count($errors) == 0) {
  	if($conn->query($sql) === TRUE){
      header('location: signupsuccess.php');
    }
  }

}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
      $fetch = mysqli_fetch_assoc($results);
      $_SESSION['name'] = $fetch['name'];
  	  $_SESSION['username'] = $fetch['username'];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dashboard.php');
  	}else {
  		array_push($errors, "Incorrect email or password");
  	}
  }
}

?>