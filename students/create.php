<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel ="stylesheet" href = "../assets/style.css">
  
</head>
<body>

<div class="container">
    <h2>Student Qo'shish Formasi</h2>

    <form action="store.php" method="POST">
        <input type="text" name="first_name"  placeholder="First Name" required>

        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="number" name="age" placeholder="Age" required>

        <input type="text" name="class_name" placeholder="Class Name" required>
        <input type="text" name="phone" placeholder="Phone" required>

        <input type="text" name="adress" placeholder="Address"  required>

        <button type="submit">Qo‘shish</button>
    </form>

   
</div>

</body>
</html>