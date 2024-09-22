<?php
$regno = $_POST['regno'];
$email = $_POST['email'];
$password = $_POST['password'];
$pwdc = $_POST['pwdc'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'eedhal', 3308);
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT * FROM `organisation` WHERE `email` = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        echo "<script>alert('Email ID already exists.'); window.history.back();</script>";
    } else {
        // Email doesn't exist, proceed with registration
        $stmt = $conn->prepare("INSERT INTO `organisation` (`regno`, `email`, `password`, `pwdc`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $regno, $email, $password, $pwdc);
        $execval = $stmt->execute();

        if ($execval) {
            // Redirect to index.html after successful registration
            header("Location: index1.html");
            exit(); // Ensure the script stops after the redirect
        } else {
            echo "Error in registration.";
        }

        $stmt->close();
    }

    $checkEmail->close();
    $conn->close();
}
?>
