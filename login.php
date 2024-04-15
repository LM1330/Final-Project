<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection
$con = new mysqli("localhost", "root", "", "website");
if ($con->connect_error) {
    // Log the error server-side and redirect to a generic error page
    error_log("Connection failed: " . $con->connect_error);
    header('Location: error.html');
    exit();
}

$stmt = $con->prepare("SELECT * FROM register WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt_result = $stmt->get_result();
if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if ($data['password'] === $password) {
        header('Location: homepage.html');
    } else {
        header('Location: Loginpagedeny.html');
    }
} else {
    header('Location: Loginpagedeny.html');
}
exit();
?>