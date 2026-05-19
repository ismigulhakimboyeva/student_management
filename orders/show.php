<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM orders WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$orders = $data->fetch();
//and 
//  $id = $_GET['id'];
$sql = "SELECT ot.id, ot.from_date, ot.to_date, b.book_name FROM order_items ot
LEFT JOIN  books b
 ON ot.book_id=b.id
WHERE ot.order_id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$order_list = $data->fetchAll();



?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Order ma'lumotlari</title>
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
            width: 3500px;
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
        /* and  Order item table*/
        .order-table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.order-table thead{
    background: #007bff;
    color: white;
}

.order-table th,
.order-table td{
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.order-table tr:hover{
    background: #f5f5f5;
}
/* and */
 .view { background: #3498db; }
        .edit { background: #f39c12; }
        .delete { background: #e74c3c; }
    </style>
</head>
<body>

<div class="card">
    <div class="avatar"></div>
    <h2> Order Profile</h2>

    <div class="info">
        <p><strong>ID:</strong> 1</p>
				
        <p><strong>Students Id:</strong> <?= $orders['students_id']; ?></p>
        <p><strong>Note:</strong> <?= $orders['note']; ?></p>
    
    </div>
    
   
    <h2>📚 Order Items</h2>

<table class="order-table">

    <thead>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($order_list as $item): ?>

        <tr>
            <td><?= $item['id'] ?>
            <td><?= $item['book_name'] ?></td>
            <td><?= $item['from_date'] ?></td>
            <td><?= $item['to_date'] ?></td>
            <td>
                  <a href="../order_items/show.php?id=<?= $item['id'] ?>" class="view">Ko‘rish</a>

                <a href="../order_items/edit.php?id=<?= $item['id'] ?>" class="edit">
                    Tahrirlash
                </a>

                <a href="../order_items/delete.php?id=<?= $item['id'] ?>"
                   onclick="return confirm('O‘chirasizmi?')" class="delete">
                    O‘chirish
                </a>
            </td>
            
          
        </tr>

    <?php endforeach; ?>

    </tbody>

</table>
    <a href="../order_items/create.php?order_id=<?= $orders['id'] ?>" class="btn">+</a>
    <a href="index.php" class="btn">⬅ Orqaga</a>
    
</div>

</body>
</html>