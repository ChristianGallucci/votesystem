<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, candidatesf.id AS canid FROM candidatesf LEFT JOIN positionsf ON positionsf.id=candidatesf.position_id WHERE candidatesf.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>