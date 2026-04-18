<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Qo‘shish</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #43e97b, #38f9d7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 20px;
            width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #43e97b;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #43e97b;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #2fd66a;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Teacher Qo‘shish</h2>

    <form action ="store.php" method="POST">

        <div class="input-group">
            <label>First Name</label>
            <input type="text" name = "first_name" placeholder="Ismini kiriting">
        </div>

        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name = "last_name" placeholder="Familiyasini kiriting">
        </div>

        <div class="input-group">
            <label>Age</label>
            <input type="number" name = "age" placeholder="Yoshini kiriting">
        </div>

        <div class="input-group">
            <label>Phone</label>
            <input type="text" name = "phone" placeholder="+998 ...">
        </div>

        <div class="input-group">
            <label>Subject</label>
            <input type="text" name = "subject" placeholder="Fan nomi">
        </div>

        <div class="input-group">
            <label>Experience</label>
            <input type="text" name = "experience" placeholder="Masalan: 5 yil">
        </div>

        <button type="submit">Qo‘shish</button>
    </form>
</div>

</body>
</html>