<?php include 
'../config/db.php';

$sql = "SELECT * FROM teachers";
$teacher = $conn->prepare($sql);
$teacher->execute();

$teachers_list = $teacher->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classes Qo‘shish</title>
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


<div class="form-container">
    <h2>Class Qo‘shish</h2>

    <form action ="store.php" method="POST">

        <div class="input-group">
            <label>Class name</label>
            <input type="text" name = "class_name" placeholder="Classni kiriting">
        </div>

        <div class="input-group">
            <label> Teacher name</label>
            <select name="teacher_id" id="">
                 <?php foreach($teachers_list as $teacher) : ?>
                    <option value="<?= $teacher['id'] ?>"><?= $teacher['first_name'] ?> <?= $teacher['last_name'] ?> </option>
                <?php endforeach  ?>
            </select>
        </div>

       

        

        <button type="submit">Qo‘shish</button>
    </form>
</div>


