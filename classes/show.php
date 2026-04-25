<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$class = $data->fetch();
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class ma'lumotlari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9966, #ff5e62);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #ddd;
            margin: 0 auto 15px;
        }

        h2 {
            margin-bottom: 10px;
        }

        .info {
            text-align: left;
            margin-top: 15px;
        }

        .info p {
            margin: 8px 0;
            padding: 8px;
            background: #f5f5f5;
            border-radius: 8px;
        }

        .btn {
            margin-top: 15px;
            display: inline-block;
            padding: 10px 15px;
            background: #ff5e62;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }

        .btn:hover {
            background: #e14b50;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="avatar"></div>
    <h2>Class Profile</h2>

    <div class="info">
        <p><strong>ID:</strong> 1</p>
				
        <p><strong>Class_name:</strong> <?= $class['class_name']; ?></p>
        <p><strong>Teacher_id</strong> <?= $class['teacher_id']; ?></p>
    </div>

    <a href="index.php" class="btn">⬅ Orqaga</a>
</div>

</body>
</html>