<?php
// login.php connect to login.html hire22.ai
$servername = "localhost";
$username = "name";
$password = "password";
$dbname = "hire22db";


$conn = new mysqli('localhost','root','','hire22db');


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $conn->real_escape_string($_POST['email']); 
$password = $conn->real_escape_string($_POST['password']);


$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  $row = $result->fetch_assoc();
  if ($password === $row['password']) {
    
    header("Location: home.html");
    exit; 
  } else {
    
    echo "Incorrect password. Please try again.";
  }
} else {
  
  echo "User not found. Please register first.";
}

$conn->close();
?>
