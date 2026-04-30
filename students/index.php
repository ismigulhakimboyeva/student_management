<?php
	include '../config/db.php';
	//query - so'rov
	
	
	 $sql = "SELECT  s.id, s.first_name, s.last_name, s.age,  c.class_name , s.phone, s.adress FROM students s
    INNER JOIN classes c
    On s.class_id = c.id";


	//tayyorlash
	$data = $conn->prepare($sql);

	//ishga tushirish
	$data->execute();

	//ma'lumotni olish
	$students = $data->fetchAll(PDO::FETCH_ASSOC);

	// $data = $conn->prepare("SELECT * FROM students")->execute()->fertchALL(PDO:: FETCH_ASSOC)
    $cnt = 1;
?>


<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<title>Student Jadval</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    padding: 20px;
}

.container {
    max-width: 1000px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.add-btn {
    background: green;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.add-btn:hover {
    background: darkgreen;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background: #007bff;
    color: white;
}

.view {
    background: blue;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
}
.sahifa {
    background: rgb(203, 134, 235) ;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
} 


.delete {
    background: red;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
}

.view:hover {
    background: darkblue;
}

.delete:hover {
    background: darkred;
}
.edit {
    background: #FFC107;
    color: black;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
}
.edit:hover {
    background:  #d1a00c;
}
</style>
</head>

<body>

<div class="container">

    <div class="top">
        <h2>Studentlar ro‘yxati</h2>
        <a href="create.php" class="add-btn">+ Student qo‘shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Sinf</th>
                <th>Telefon</th>
                <th>Manzil</th>
                <th>Amallar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($students as $item):?>
                
            <tr>
                <td><?= $cnt++; ?></td>
                <td><?= $item['first_name'] ?></td>
                <td><?= $item['last_name'] ?></td>
                <td><?= $item['age'] ?></td>
                <td><?= $item['class_name'] ?></td>
                <td><?= $item['phone'] ?></td>
                <td><?= $item['adress'] ?></td>
                 
                <td>
                    <a href="show.php?id=<?= $item['id'] ?>" class="view">Ko‘rish</a>
                    <a href="edit.php?id=<?=$item['id'];?>" class="edit">Tahrirlash</a>
                    <a href="delate.php?id=<?=$item['id'];?>" class="delete" onclick="return confirm('O\'chirasizmi?')">O‘chirish</a>
                    <a href="../index.php" class="sahifa">Menu</a>
                </td>
            </tr>
             <?php endforeach ?>   
            

            <!-- <tr>
                <td>2</td>
                <td>Sardor</td>
                <td>Karimov</td>
                <td>17</td>
                <td>11-B</td>
                <td>998998765432</td>
                <td>Samarqand</td>
                <td>
                    <a href="#" class="view">Ko‘rish</a>
                    <a href="#" class="delete">O‘chirish</a>
                </td>
            </tr> -->
        </tbody>

    </table>

</div>

</body>
</html>