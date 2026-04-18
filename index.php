<?php
	include 'config/db.php'

	
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #2c3e50;
            padding: 15px 0;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .navbar a:hover {
            background: #3498db;
        }

        .active {
            background: #3498db;
        }

        .content {
            text-align: center;
            margin-top: 50px;
            font-size: 24px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="teachers/index.php" class="active">👨‍🏫 Teachers</a>
    <a href="students/index.php">🎓 Students</a>
</div>

<div class="content">
    <h1>Xush kelibsiz 👋</h1>
    <p>Yuqoridagi menyudan sahifani tanlang</p>
</div>

</body>
</html>