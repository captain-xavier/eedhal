<?php
$email = $_POST['email'];
$password = $_POST['password'];
$pwdc = $_POST['pwdc'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'eedhal', 3308);
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Check if the email already exists
    $checkEmail = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        echo "<script>alert('Email already exists. Please try a different email.'); window.location.href='index.html';</script>";
    } else {
        // Proceed with registration
        $stmt = $conn->prepare("INSERT INTO user (email, password, pwdc) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $password, $pwdc);
        $execval = $stmt->execute();

        if ($execval) {
            // Redirect to index.html after successful registration
            header("Location: index.html");
            exit(); // Ensure the script stops after the redirect
        } else {
            echo "<script>alert('Error in registration.'); window.location.href='index.html';</script>";
        }

        $stmt->close();
    }

    $checkEmail->close();
    $conn->close();
}
?>
