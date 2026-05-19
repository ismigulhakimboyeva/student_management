<?php
include "../config/db.php";
$book_name = $_POST['book_name'];
$author = $_POST['author'];
$notes = $_POST['notes'];
$pages = $_POST['pages'];
$date_of_publication = $_POST['date_of_publication'];
$row_numb = $_POST['row_numb'];
$book_number = $_POST['book_number'];


$sql = "INSERT INTO books (book_name, author, notes,  pages, date_of_publication, row_numb, book_number)
	values (?, ?, ?, ?, ?, ?, ?)";
	$data = $conn->prepare($sql);

	$data->execute([
		 $book_name,
		$author,
		 $notes,
		 $pages,
		 $date_of_publication,
		 $row_numb,
		 $book_number
	]);
	header("Location: index.php");
?>