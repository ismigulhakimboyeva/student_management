<?php
include "../config/db.php";
$book_id = $_POST['book_id'];
$order_id = $_POST['order_id'];
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];
// $status = $_POST['status'];
// $intake_date = $_POST['intake_date'];


$sql = "INSERT INTO order_items (book_id, order_id, from_date,  to_date)
	values (?, ?, ?, ?)";
	$data = $conn->prepare($sql);

	$data->execute([
		 $book_id,
		 $order_id,
		 $from_date,
		 $to_date,
		//  $status,
		//  $intake_date
	]);
	header("Location: ../orders/show.php?id=$order_id");
?>

