<?php
session_start();
include("connect.php");

// Check if the session variable 'email' is set
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // Query the database for the user's data using their email
    $query = mysqli_query($conn, "SELECT * FROM data WHERE email='$email'");
    $user = mysqli_fetch_array($query); // Fetch the user's data
} else {
    // If no session, redirect to login page (or another appropriate action)
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello, <?php echo $user['firstName'].' '.$user['lastName']; ?> :)
        </p>
        
        <!-- Displaying other user information -->
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <!-- Add more fields as necessary -->
        
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
