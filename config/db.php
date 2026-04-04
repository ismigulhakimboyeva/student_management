<?php
	$host = "localhost";
	$dbname = "students_db";
	$username = "root";
  $password = "";
	try{
		$conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
		// xatolik chiqarish
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	} catch(PDOException $e){
		echo "Xatolik: ".$e->getMassage();	}

?>