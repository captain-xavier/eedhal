<?php


    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'eedhal',3308);  if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Query to check if the email and password match
        $stmt = $conn->prepare("SELECT * FROM organisation WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Redirect to donate.html if credentials match
           // header("Location: donate.html");
           $user = $result->fetch_assoc();
        $username = $user['email']; // Assuming email is being used as the username
            echo "<script>
                localStorage.setItem('Org_username', '$username');
                window.location.href = 'receive.html';
              </script>";
            exit(); // Ensure the script stops after the redirect
        } else {
            echo("<script>alert('Invalid email or password. Please try again.'); window.location.href='index1.html';</script>");
            //header("Location: index.html");
        }

        $stmt->close();
        $conn->close();
    }
?>
