<?php
include '../config/db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$class_name = $_POST['class_name'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];

$sql = "INSERT INTO students (first_name, last_name, age, class_name, phone, adress)
	values (:first_name, :last_name, :age, :class_name, :phone, :adress)";
	$data = $conn->prepare($sql);

	$data->execute([
		':first_name' => $first_name,
		':last_name' => $last_name,
		':age' => $age,
		':class_name' => $class_name,
		':phone' => $phone,
		':adress' => $adress,
	]);
	header("Location: index.php");
?>