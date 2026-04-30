<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM classes WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$classes = $data->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM teachers";
$teacher = $conn->prepare($sql);
$teacher->execute();

$teachers_list = $teacher->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classes Form</title>
       <link rel ="stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Class Tahrirlash </h2>

    <form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?=$classes['id'] ?>" >
        <input type="text" name="class_name" required value="<?=$classes['class_name'] ?>" >
        <!-- <input type="text" name="teacher_id" required  value="<?=$classes['teacher_id'] ?>"> -->
       

            <select name="teacher_id" id="">
                <?php foreach($teachers_list as $teacher) : ?>
                    <option value="<?= $teacher['id'] ?>" <?= ($classes['teacher_id'] == $teacher['id']) ? "selected" : "" ?>  ><?= $teacher['first_name'] ?> <?= $teacher['last_name'] ?> </option>
                <?php endforeach  ?>
            </select>

        <button type="submit">Saqlash</button>
    </form>

   
</div>

</body>
</html>