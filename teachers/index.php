<?php
	include '../config/db.php';
	
	$sql = "SELECT * FROM teachers";

	
	$data = $conn->prepare($sql);


	$data->execute();

	
	$teachers = $data->fetchAll(PDO::FETCH_ASSOC);

	
    $cnt = 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Teacher Jadvali</title>

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

        .view:hover { background: #2980b9; }
        .edit:hover { background: #d68910; }
        .delete:hover { background: #c0392b; }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <h2>Teacher Jadvali</h2>
    <a href="create.php" class="add-btn">+ Teacher qo‘shish</a>
</div>

<!-- TABLE -->
<div class="container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Experience</th>
                <th>Amallar</th>
            </tr>
        </thead>

        <tbody>
					 <?php foreach($teachers as $item) : ?>
            <tr>
                <td><?= $cnt++; ?></td>
                <td><?= $item['first_name'] ?></td>
                <td><?= $item['last_name'] ?></td>
                <td><?= $item['age'] ?></td>
                <td><?= $item['phone'] ?></td></td>
                <td><?= $item['subject'] ?></td>
                <td><?= $item['experience'] ?></td>
                <td>
                    <a href="show.php?id=<?= $item['id'] ?>" class="btn view">Ko‘rish</a>
                    <a href="edit.php?id=<?= $item['id'] ?>" class="btn edit">Tahrirlash</a>
                    <a href="delate.php?id=<?= $item['id'] ?>" class="btn delete" onclick="return confirm('O\'chirasizmi?')">O‘chirish</a>
                </td>
            </tr>
						 <?php endforeach ?>
<!-- 
            <tr>
                <td>2</td>
                <td>Ali</td>
                <td>Karimov</td>
                <td>28</td>
                <td>+998 91 765 43 21</td>
                <td>Fizika</td>
                <td>5 yil</td>
                <td>
                    <a href="#" class="btn view">Ko‘rish</a>
                    <a href="#" class="btn edit">Tahrirlash</a>
                    <a href="#" class="btn delete">O‘chirish</a>
                </td>
            </tr> -->

            <!-- <tr>
                <td>3</td>
                <td>Malika</td>
                <td>Ismoilova</td>
                <td>32</td>
                <td>+998 93 222 11 00</td>
                <td>Ingliz tili</td>
                <td>10 yil</td>
                <td>
                    <a href="#" class="btn view">Ko‘rish</a>
                    <a href="#" class="btn edit">Tahrirlash</a>
                    <a href="#" class="btn delete">O‘chirish</a>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>

</body>
</html>