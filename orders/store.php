<?php
include "../config/db.php";
$students_id = $_POST['students_id'];
$note = $_POST['note'];


// $phone = $_POST['phone'];
// $subject = $_POST['subject'];
// $experience = $_POST['experience'];


$sql = "INSERT INTO orders (students_id, note )
	values (:students_id, :note )";
	$data = $conn->prepare($sql);

	$data->execute([
		':students_id' => $students_id,
		':note' => $note
		
		// ':phone' => $phone,
		// ':subject' => $subject,
		// ':experience' => $experience
	]);
	header("Location: index.php");
?>

