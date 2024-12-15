<?php
// Simple authentication example

// Predefined credentials (In real-world, you should validate against a database)
$valid_username = 'admin';
$valid_password = '12345';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate user
    if ($username == $valid_username && $password == $valid_password) {
        // Redirect to a dashboard or another page upon successful login
        header("Location: order-form.html");
        exit();
    } else {
        // Redirect to login page with error message
        echo "<script>alert('Invalid credentials. Please try again.'); window.location.href='login.html';</script>";
    }
}
?>
