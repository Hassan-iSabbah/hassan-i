<?php
// Retrieve form data
$customerId = $_POST['customerId'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$password = $_POST['password'];

echo 'hello world ';

// Database connection details
$hostname = 'localhost';
$username = 'root';  // Default username for XAMPP MySQL
$conpassword = '';      // Default password is empty for XAMPP MySQL
$database = 'partyarchitects';

// Connect to MySQL
$conn = mysqli_connect($hostname, $username, $conpassword, $database);

if ($conn) {
    // Perform database operations here

    // Insert data into the database
    $query = "INSERT INTO Customers (customerId, firstName, lastName, email, telephone, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'issssss', $customerId, $firstName, $lastName, $email, $telephone, $address, $password);
    mysqli_stmt_execute($stmt);

    // Close the database connection
    mysqli_close($conn);

    // Redirect back to the form or another page
    header("Location: index.html");
    exit();
} else {
    // Handle connection errors
    echo 'Connection failed: ' . mysqli_connect_error();
}
?>
