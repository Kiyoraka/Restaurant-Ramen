<?php
// Include the database connection
include('connection.php');

// Initialize a message variable
$message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $money = $_POST['money'];
    $food = $_POST['food'];

    // Prepare the SQL query to insert data into the database
    $sql = "INSERT INTO orders (name, money, food) VALUES ('$name', '$money', '$food')";

    // Check if query is successful
    if ($conn->query($sql) === TRUE) {
        $message = "New order placed successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Redirect back to the order form with a success or error message
    echo "<script>
        alert('$message');
        window.location.href = 'order-form.html';
    </script>";
    exit();
}
?>
