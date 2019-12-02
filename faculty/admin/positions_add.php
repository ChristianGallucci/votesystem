<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$description = $_POST['description'];
		$max_vote = $_POST['max_vote'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];

		$sql = "SELECT * FROM positionsf ORDER BY priority DESC LIMIT 1";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO positionsf (description, max_vote, start_date, end_date, priority) VALUES ('$description', '$max_vote', '$start_date', '$end_date', '$priority')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Poll added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: positions.php');
?>