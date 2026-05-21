<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM order_items WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$order_items = $data->fetch(PDO::FETCH_ASSOC);
//and

$sql = "SELECT * FROM books";
$data = $conn->prepare($sql);
$data->execute();

$books = $data->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Order Item Form</title>
       <link rel ="stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Order Item Tahrirlash </h2>

    <form action="update.php" method="POST">
		<input type="hidden" name="id" value="<?=$order_items['id'] ?>" >
        <!-- <input type="#" name="book_id" required value="<?=$order_items['book_id'] ?>" > -->
        	<select name="book_id" id="">
                 <?php foreach($books as $item) : ?>
                     <option value="<?= $item['id'] ?>"><?= $item['book_name'] ?>  </option> 
                <?php endforeach  ?>
            </select>
        <input type="hidden" name="order_id" required  value="<?=$order_items['order_id'] ?>">
        <input type="date" name="from_date" required value="<?=$order_items['from_date'] ?>">
        <input type="date" name="to_date" required value="<?=$order_items['to_date'] ?>">

        <button type="submit">Saqlash</button>
    </form>

   
</div>

</body>
</html>