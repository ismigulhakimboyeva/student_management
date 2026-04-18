<?php
include "../config/db.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$experience = $_POST['experience'];


$sql = "INSERT INTO teachers (first_name, last_name, age,  phone, subject, experience)
	values (:first_name, :last_name, :age, :phone, :subject, :experience)";
	$data = $conn->prepare($sql);

	$data->execute([
		':first_name' => $first_name,
		':last_name' => $last_name,
		':age' => $age,
		':phone' => $phone,
		':subject' => $subject,
		':experience' => $experience
	]);
	header("Location: index.php");
?>

?>