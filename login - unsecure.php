<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection
$con = new mysqli("localhost", "root", "", "website");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    // Insecure SQL query
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        // Assume login is successful and redirect to homepage
        header('Location: homepage.html');
        exit();
    } else {
        // Login failed
        header('Location: Loginpagedeny.html');
        exit();
    }
}
?>