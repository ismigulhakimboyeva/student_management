<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT c.class_name, t.first_name,t.last_name From classes c
LEFT JOIN teachers t
 ON c.teacher_id = t.id
WHERE c.id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$class = $data->fetch();
// and
//  $st = "SELECT s.first_name, s.last_name, s.age, s,phone, s.adress s.class_id,  c.id from students s
//  LEFT JOIN  classes c
//  On s.teacher_id = c.id
//  Where s.teacher_id = ?";
$sql = "SELECT * FROM students WHERE class_id = ?";
 $data = $conn->prepare($sql);
 $data->execute([$id]);
 $students = $data->fetchAll();
?>
<!DOCTYPE html>
<html lang="uz">        
<head>
    <meta charset="UTF-8">
    <title>Class ma'lumotlari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ebe6e4, #e9c0c1);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 500px;
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
        .student-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 14px;
        }

        .student-table th {
            background: #f06e70;
            color: white;
            padding: 10px;
        }

        .student-table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .student-table tr:nth-child(even) {
             background: #f9f9f9;
        }

        .student-table tr:hover {
            background: #f1f1f1;
        }
        .btn {
            margin-top: 15px;
            display: inline-block;
            padding: 10px 15px;
            background: #f87f81;
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
        <p><strong>Teacher_id</strong> <?= $class['first_name'] . " ". $class['last_name'] ?></p>
    </div>
     

    <!-- STUDENTS TABLE -->
    <table class="student-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>Class ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['first_name'] ?></td>
                <td><?= $student['last_name'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td><?= $student['adress'] ?></td>
                <td><?= $student['class_id'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php" class="btn">⬅ Orqaga</a>


</body>
</html>