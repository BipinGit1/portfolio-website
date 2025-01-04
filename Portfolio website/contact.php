<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfoliodb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$gmail = $_POST['gmail'];
$message = $_POST['message'];
$sql = "INSERT INTO users (name,gmail,message) VALUES ('$name', '$gmail','message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
