<?php
include "../config/db.php";
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$class_id=$_POST['class_id'];

	$sql = "UPDATE students
		SET first_name = ?,
			last_name = ?,
			age = ?,
			phone = ?,
			adress = ?,
			class_id = ?
		WHERE id = ?";

	$data = $conn->prepare($sql);
	$data->execute([
		$first_name, 
		$last_name,
		$age,
		$phone,
		$adress,
		$class_id,
		$id
	]);
	header("Location: index.php");
	exit();
	?>
