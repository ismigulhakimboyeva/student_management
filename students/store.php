<?php
include '../config/db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$class_id = $_POST['class_id'];

$sql = "INSERT INTO students (first_name, last_name, age, phone, adress,  class_id)
	values (:first_name, :last_name, :age,  :phone, :adress, :class_id)";
	$data = $conn->prepare($sql);

	$data->execute([
		':first_name' => $first_name,
		':last_name' => $last_name,
		':age' => $age,
		':phone' => $phone,
		':adress' => $adress,
		':class_id' => $class_id
	]);
	header("Location: index.php");
?>