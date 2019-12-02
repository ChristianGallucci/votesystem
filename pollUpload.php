<?php
	include 'includes/session.php';
	$ramID = "";
	$pollTitle    = "";
	$semester = "";
	$year = "";
	$can1 = "";
	$can2 = "";
	$can3 = "";
	$can4 = "";
	$can5 = "";
	$can6 = "";
	$can7 = "";
	$can8 = "";
	$can9 = "";
	$can10 = "";
	$errors = array(); 

	if(isset($_POST['poll_up'])){
		$ramID = $_POST['ramID'];
		$pollTitle = $_POST['poll_title'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$can1 = $_POST['can1'];
		$can2 = $_POST['can2'];
		$can3 = $_POST['can3'];
		$can4 = $_POST['can4'];
		$can5 = $_POST['can5'];
		$can6 = $_POST['can6'];
		$can7 = $_POST['can7'];
		$can8 = $_POST['can8'];
		$can9 = $_POST['can9'];
		$can10 = $_POST['can10'];

	$ramID = mysqli_real_escape_string($conn, $_POST['ramID']);
  	$pollTitle = mysqli_real_escape_string($conn, $_POST['poll_title']);
	$can1 = mysqli_real_escape_string($conn, $_POST['can1']);
	$can2 = mysqli_real_escape_string($conn, $_POST['can2']);
	$can3 = mysqli_real_escape_string($conn, $_POST['can3']);
	$can4 = mysqli_real_escape_string($conn, $_POST['can4']);
	$can5 = mysqli_real_escape_string($conn, $_POST['can5']);
	$can6 = mysqli_real_escape_string($conn, $_POST['can6']);
	$can7 = mysqli_real_escape_string($conn, $_POST['can7']);
	$can8 = mysqli_real_escape_string($conn, $_POST['can8']);
	$can9 = mysqli_real_escape_string($conn, $_POST['can9']);
	$can10 = mysqli_real_escape_string($conn, $_POST['can10']);
	
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ramID)) { array_push($errors, "Ram ID is required"); }
  if (empty($pollTitle)) { array_push($errors, "Poll Title is required"); }
	 if (count($errors) == 0) {	
		$query = "INSERT INTO pollRequest (ramID, poll_title, semester, year, can1, can2, can3, can4, can5, can6, can7, can8, can9, can10) VALUES ('$ramID', '$pollTitle', '$semester', '$year', '$can1', '$can2', '$can3', '$can4', '$can5', '$can6', '$can7', '$can8', '$can9', '$can10')";
		 mysqli_query($conn, $query);
		$_SESSION['success'] = "Poll Request Successful";
  		header('location: pollRequest.php');
	 }
}
?>