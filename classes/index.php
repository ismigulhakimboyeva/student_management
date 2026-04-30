<?php
	include '../config/db.php';
	
	$sql = "SELECT c.id, c.class_name,t.first_name, t.last_name  FROM classes c
    INNER JOIN teachers t
    On c.teacher_id = t.id";

	
	$data = $conn->prepare($sql);


	$data->execute();

	
	$classes = $data->fetchAll(PDO::FETCH_ASSOC);

	
    $cnt = 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classes Jadvali</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 20px;
        }

        /* HEADER */
        .header {
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .header h2 {
            margin: 0;
        }

        .add-btn {
            background: #2ecc71;
            padding: 10px 15px;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .add-btn:hover {
            background: #27ae60;
        }

        /* TABLE */
        .container {
            max-width: 1100px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #667eea;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        tr {
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f5f5f5;
        }

        /* BUTTONS */
        .btn {
            padding: 6px 10px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            font-size: 13px;
            margin: 2px;
            display: inline-block;
        }

        .view { background: #3498db; }
        .edit { background: #f39c12; }
        .delete { background: #e74c3c; }
        .sahifa {
    background: rgb(203, 134, 235) ;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
} 

        .view:hover { background: #2980b9; }
        .edit:hover { background: #d68910; }
        .delete:hover { background: #c0392b; }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <h2>Classes Jadvali</h2>
    <a href="create.php" class="add-btn">+ Class qo‘shish</a>
</div>

<!-- TABLE -->
<div class="container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Class name</th>
                <th>Teacher id</th>
                 <th>Amallar</th>
            </tr>
        </thead>

       <tbody>
					 <?php foreach($classes as $item) : ?>
            <tr>
                <td><?= $cnt++; ?></td>
                <td><?= $item['class_name'] ?></td>
                <td><?= $item['first_name']." ". $item['last_name'] ?></td>
                
                <td>
                    <a href="show.php?id=<?= $item['id'] ?>" class="btn view">Ko‘rish</a>
                    <a href="edit.php?id=<?= $item['id'] ?>" class="btn edit">Tahrirlash</a>
                    <a href="delate.php?id=<?= $item['id'] ?>" class="btn delete" onclick="return confirm('O\'chirasizmi?')">O‘chirish</a>
                    <a href="../index.php" class="sahifa">Menu</a>
                </td>
            </tr>
						 <?php endforeach ?>

        </tbody> 
    </table>
</div>

</body>
</html>
