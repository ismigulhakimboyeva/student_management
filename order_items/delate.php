<?php
include "../config/db.php";
 // id ni olish
 $id = $_GET['id'];


 // delate query
 $sql = "DELETE FROM order_items WHERE 	id = :id";

 // tayyorlash
 $data = $conn->prepare($sql);

 // bajarish
 
 $data->execute([':id'=>$id]);

 //qaytarish
 header("Location:  ../orders/show.php?id=$order_id");
 exit;
 ?>





