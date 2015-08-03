<?php
$servername = "localhost";
$username = "root";
$password = "supriya";
$dbname = "supriyacart";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];


$sql = "INSERT INTO Users (Password,EmailId)
VALUES ('$password','$email')";

if ($conn->query($sql) === TRUE) {
    echo "YOU HAVE REGISTERED FOR YOUR ONLINE MUSIC CART";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 


<form action= "login.html"  method="post">
<input type="submit" value="go to login page">
</form>
