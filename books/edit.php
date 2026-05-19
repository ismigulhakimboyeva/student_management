<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$books = $data->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Books Form</title>
       <link rel ="stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Book Tahrirlash </h2>

    <form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?=$books['id'] ?>" >
        <input type="text" name="book_name" required value="<?=$books['book_name'] ?>"  >
        <input type="text" name="author" required  value="<?=$books['author'] ?>">
        <input type="text" name="notes" required value="<?=$books['notes'] ?>">
        <input type="text" name="pages" required value="<?=$books['pages'] ?>">
				<input type="date" name="date_of_publication" required value="<?=$books['date_of_publication']; ?>">
		<input type="text" name="row_numb" required value="<?=$books['row_numb'] ?>">
        <input type="text" name="book_number" required value="<?=$books['book_number'] ?>">

        <button type="submit">Saqlash</button>
    </form>

   
</div>

</body>
</html>