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
  
  
  $user_id = $_POST['user_id'];
  
  
  $user_id = intval($user_id);

  
  $sql = "DELETE FROM users WHERE id = $user_id";

  if ($conn->query($sql) === TRUE) {
    echo "User account deleted successfully";
    
  } else {
    echo "Error deleting user account: " . $conn->error;
  }
}

$conn->close();
?>
