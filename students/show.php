<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);

$student = $data->fetch();


?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Ma'lumotlari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4caaf2, #e0edee);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .info {
            margin: 10px 0;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            float: right;
            color: #000;
        }

        .clearfix::after {
            content: "";
            display: block;
            clear: both;
        }

        .btn {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #4facfe;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background: #00c6ff;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Student Ma'lumotlari</h2>

    <!-- <div class="info clearfix">
        <span class="label">ID:</span>
        <span class="value"></span>
    </div> -->

    <div class="info clearfix">
        <span class="label">Ismi:</span>
        <?= $student['first_name']; ?>
    </div>

    <div class="info clearfix">
        <span class="label">Familiya:</span>
        <?= $student['last_name']; ?>
    </div>

    <div class="info clearfix">
        <span class="label">Yosh:</span>
       <?= $student['age']; ?>
    </div>
    
    <div class="info clearfix">
        <span class="label">Telefon:</span>
        <?= $student['phone']; ?>
    </div>

    <div class="info clearfix">
        <span class="label">Manzil:</span>
       <?= $student['adress']; ?>
    </div>
    
    <div class="info clearfix">
        <span class="label">Sinf:</span>
        <?= $student['class_id']; ?>
    </div>

    <a href="index.php" class="btn">Ortga</a>
		
</div>


</body>
</html>
