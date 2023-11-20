<?php
// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Database connection details
$hostname = 'localhost';
$username = 'root';  // Default username for XAMPP MySQL
$conpassword = '';      // Default password is empty for XAMPP MySQL
$database = 'partyarchitects';

// Connect to MySQL
$conn = mysqli_connect($hostname, $username, $conpassword, $database);

if ($conn) {
    // Perform login check
    $query = "SELECT * FROM customers WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
           //echo ('email: ' . $email . '<br>');
           //echo ('password: ' . $password . '<br>');
    // Check if a matching record is found
    if ($row = mysqli_fetch_assoc($result)) {
        // User found, retrieve all user information
        $userId = $row['customerId'];
        $userFirstName = $row['firstName'];
        $userLastName = $row['lastName'];
        $userTelephone = $row['telephone'];
        $userAddress = $row['address'];

        //session variables
        session_start();
        $_SESSION['user_email'] = $email;
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_first_name'] = $userFirstName;
        $_SESSION['user_last_name'] = $userLastName;
        $_SESSION['user_telephone'] = $userTelephone;
        $_SESSION['user_address'] = $userAddress;

        // Redirect to a dashboard or another page after successful login
        header("Location: index.php");
        exit();
    } else {
        // Invalid login credentials
        echo 'Invalid email or password.';
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle connection errors
    echo 'Connection failed: ' . mysqli_connect_error();
}
?>