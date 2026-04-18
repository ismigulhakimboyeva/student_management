<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM teachers WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$teachers = $data->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Teacher Form</title>
   
</head>
<body>

<div class="container">
    <h2>Teacher Tahrirlash </h2>

    <form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?=$teachers['id'] ?>" >
        <input type="text" name="first_name" required value="<?=$teachers['first_name'] ?>" >

        <input type="text" name="last_name" required  value="<?=$teachers['last_name'] ?>">
        <input type="number" name="age" required value="<?=$teachers['age'] ?>">
        <input type="text" name="phone" required value="<?=$teachers['phone'] ?>">
			  <input type="text" name="class_name" required value="<?=$teachers['subject'] ?>">
        <input type="text" name="adress" required value="<?=$teachers['experience'] ?>">

        <button type="submit">Saqlash</button>
    </form>

   
</div>

</body>
</html>