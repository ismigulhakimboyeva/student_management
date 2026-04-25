<?php
include "../config/db.php";
 // id ni olish
 $id = $_GET['id'];

 // delate query
 $sql = "DELETE FROM classes WHERE 	id = :id";

 // tayyorlash
 $data = $conn->prepare($sql);

 // bajarish
 $data->execute([':id'=>$id]);

 //qaytarish
 header("Location: index.php");
 exit;
 ?>