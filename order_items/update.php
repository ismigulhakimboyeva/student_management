<?php
include "../config/db.php";
$id=$_POST['id'];
$book_id=$_POST['book_id'];
$order_id=$_POST['order_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];


	$sql = "UPDATE order_items
		SET book_id = ?,
			from_date = ?,
			to_date = ?
		WHERE id = ?";
		
	$data = $conn->prepare($sql);
	$data->execute([
		$book_id, 
		$from_date,
		$to_date,
		$id
	]);
	header("Location: ../orders/show.php?id=$order_id");
	exit();
	?>