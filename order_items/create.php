<?php include '../config/db.php';

$sql = "SELECT * FROM books";
$data = $conn->prepare($sql);
$data->execute();

$books = $data->fetchAll(PDO::FETCH_ASSOC);
// and
$order_id = $_GET['order_id'];


?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Order Items </title>
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
    <h2>+ Order Items </h2>

    <form action ="store.php" method="POST">

        <div class="input-group">
            <label>Book Id</label>
            <!-- <input type="#" name = "book_id" placeholder="Book ID  kiriting"> -->
            	<select name="book_id" id="">
                 <?php foreach($books as $item) : ?>
                     <option value="<?= $item['id'] ?>"><?= $item['book_name'] ?> </option> 
                <?php endforeach  ?>
            </select>
        </div>

        <div class="input-group">
            <input type="hidden" value="<?= $order_id ?>" name = "order_id" placeholder="Order Id kiriting">
        </div>

        <div class="input-group">
            <label>From Date</label>
            <input type="date" name = "from_date" placeholder="From Date ">
        </div>

        <div class="input-group">
            <label>To Date</label>
            <input type="date" name = "to_date" placeholder="To Date">
        </div>
<!-- 
        <div class="input-group">
            <label>Status</label>
            <input type="#" name = "status" placeholder="Status">
        </div>

        <div class="input-group">
            <label>In Take Date</label>
            <input type="#" name = "intake_date" placeholder="In Take Date">
        </div>
         -->

        <button type="submit">Qo‘shish</button>
    </form>
</div>

</body>
</html>