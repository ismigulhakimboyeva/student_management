<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM orders WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$orders = $data->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Order Form</title>
       <link rel ="stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Order Tahrirlash </h2>

    <form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?=$orders['id'] ?>" >
        <input type="#" name="students_id" required value="<?=$orders['students_id'] ?>" >
        <input type="text" name="note" required  value="<?=$orders['note'] ?>">
       

        <button type="submit">Saqlash</button>
    </form>

   
</div>

</body>
</html>