<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You should implement password hashing here for security
    // For simplicity, we will store the password as plain text in this example

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
