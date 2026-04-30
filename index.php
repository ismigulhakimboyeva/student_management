<?php
	include 'config/db.php'


?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f5f7fb;
        }

        .navbar {
            display: flex;
            justify-content: center;
            padding: 20px;
            background: white;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            text-decoration: none;
            color: #555;
            font-size: 16px;
            padding: 10px 18px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: #eef2ff;
            color: #4f46e5;
        }

        .menu a.active {
            background: #4f46e5;
            color: white;
            font-weight: 500;
            box-shadow: 0 5px 15px rgba(79,70,229,0.3);
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            text-align: center;
            color: #333;
        }

        .content h1 {
    
            font-size: 38px;
            margin-bottom: 10px;
        }

        .content p {
            color: #777;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="menu">
        <a href="teachers/index.php" class="active">👨‍🏫 Teachers</a>
        <a href="students/index.php">🎓 Students</a>
        <a href="classes/index.php">📚 Classes </a>
     
    </div>
</div>

<div class="content">
    <div>
        <h1>Xush kelibsiz 👋</h1>
        <p>Kerakli sahifani tanlang</p>
    </div>
</div>

</body>
</html>