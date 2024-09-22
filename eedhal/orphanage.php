<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$food = $_POST['food'];
	$quality = $_POST['quality'];
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];
    $datetime = $_POST['datetime'];

	// Database connection
	$conn = new mysqli('localhost','root','Eedhal#byleen@61','eedhal');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into orphanage(name, mobile, food, quality, quantity, location, datetime) values(?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("sssssss", $name, $mobile, $food, $quality, $quantity, $location, $datetime);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>