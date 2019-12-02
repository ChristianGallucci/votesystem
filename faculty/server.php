<?php
session_start();
// initializing variables
$firstname = "";
$lastname    = "";
$voters_id = "";
$errors = array(); 
// connect to the database
$conn = new mysqli('localhost', 'root', '', 'votesystem');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $voters_id = mysqli_real_escape_string($conn, $_POST['voters_id']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
	
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Lirstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($voters_id)) { array_push($errors, "Ram ID is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM votersf WHERE voters_id='$voters_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['voters_id'] === $voters_id) {
      array_push($errors, "Ram ID already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = password_hash($password, PASSWORD_DEFAULT);//encrypt the password before saving in the database
  	$query = "INSERT INTO votersf (firstname, lastname, voters_id, password)
  			  VALUES('$firstname', '$lastname', '$voters_id', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['voters_id'] = $voters_id;
  	$_SESSION['success'] = "You are now registered as:";
  	header('location: redirect.php');
  }
}