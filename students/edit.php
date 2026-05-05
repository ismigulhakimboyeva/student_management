<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$students = $data->fetch(PDO::FETCH_ASSOC);
//**** 

$sql = "SELECT * FROM classes";
$class = $conn->prepare($sql);
$class->execute();

$classes_list = $class->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel ="stylesheet" href = "../assets/style.css">
  
</head>
<body>

<div class="container">
    <h2>Student Tahrirlash </h2>

    <form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?=$students['id'] ?>" >
        <input type="text" name="first_name" required value="<?=$students['first_name'] ?>" >

        <input type="text" name="last_name" required  value="<?=$students['last_name'] ?>">
        <input type="number" name="age" required value="<?=$students['age'] ?>">

        <input type="text" name="phone" required value="<?=$students['phone'] ?>">

        <input type="text" name="adress" required value="<?=$students['adress'] ?>">
        <!-- <input type="text" name="class_id" required value="<?=$students['class_id'] ?>"> -->
           <select name="class_id" id="">
                <?php foreach($classes_list as $classes) : ?>
                     <option value="<?= $classes['id'] ?>" <?= ($students['class_id'] == $classes['id']) ? "selected" : "" ?>  ><?= $classes['class_name'] ?>  </option> 
                <?php endforeach  ?>
            </select>


        <button type="submit">Saqlash</button>
    </form>

   
</div>

</body>
</html>