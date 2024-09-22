<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$food = $_POST['food'];
	$datetime = $_POST['datetime'];
    $location = $_POST['location'];

	// Database connection
	$conn = new mysqli('localhost','root','Eedhal#byleen@61','eedhal');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pet(name, mobile, food, location, datetime) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $mobile, $food, $location, $datetime);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>