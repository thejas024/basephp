<?php

$servername = "localhost";
$username = "root";         
$password = "";             
$dbname = "hire22db";       


$conn = new mysqli('localhost','root','','hire22db');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $city = $_POST['city'];
  $password = $_POST['password'];  

  
  $user_id = 1;  
  
  
  $sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile', city='$city', password='$password' WHERE id=$user_id";

  if ($conn->query($sql) === TRUE) {
    echo "User details updated successfully";
    
    echo '<br><a href="home.html">Go Back to Home</a>';
    
  } else {
    echo "Error updating user details: " . $conn->error;
  }
}

$conn->close();
?>