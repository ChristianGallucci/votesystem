<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$description = $_POST['description'];
		$max_vote = $_POST['max_vote'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];

		$sql = "UPDATE positionsf SET description = '$description', max_vote = '$max_vote', start_date = '$start_date', end_date = '$end_date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Poll updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: positions.php');

?>