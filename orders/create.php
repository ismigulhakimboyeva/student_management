<?php include 
'../config/db.php';

$sql = "SELECT * FROM students";
$data = $conn->prepare($sql);
$data->execute();

$students = $data->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Orders</title>
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
    <h2>Orders Qo‘shish</h2>

    <form action ="store.php" method="POST">

        <div class="input-group">
            <label>Student Id</label>
			<select name="students_id" id="">
                 <?php foreach($students as $item) : ?>
                     <option value="<?= $item['id'] ?>"><?= $item['first_name'] ?> <?= $item['last_name'] ?> </option> 
                <?php endforeach  ?>
            </select>
            <!-- <input type="text" name = "students_id" placeholder=" Students Id "> -->
        </div>

        <div class="input-group">
            <label>Note</label>
            <input type="text" name = "note" placeholder="Note ">
        </div>
<!-- 
        <div class="input-group">
            <label>Created At</label>
            <input type="date" name = "created_at" placeholder="Vaqtni kiriting">
        </div> -->

       

        <button type="submit">Qo‘shish</button>
    </form>
</div>

</body>
</html>