<?php
	$quantity = $_POST['quantity'];
	$foodtype = $_POST['foodtype'];
	$time = $_POST['time'];
	$date = $_POST['date'];

	// Database connection
	$conn = new mysqli('localhost','root','Eedhal#byleen@61','eedhal');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into request(quantity, foodtype, time, date) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $quantity, $foodtype, $time, $date);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>