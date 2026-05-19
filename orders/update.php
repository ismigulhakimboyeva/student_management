<?php
include "../config/db.php";
$id=$_POST['id'];
$students_id=$_POST['students_id'];
$note=$_POST['note'];


	$sql = "UPDATE orders
		SET students_id = ?,
			note = ?
		WHERE id = ?";
		
	$data = $conn->prepare($sql);
	$data->execute([
		$students_id, 
		$note,
		$id
	]);
	header("Location: index.php");
	exit();
	?>