<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $city = $_POST['city'];
  $password = $_POST['password'];

  $conn = new mysqli('localhost','root','','hire22db');
  if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into users(name,email,mobile,city,password)
          values(?,?,?,?,?)");
      $stmt->bind_param("ssiss",$name,$email,$mobile,$city,$password);
      $stmt->execute();
      echo "registraton Successfully...";
      $stmt->close();
      $conn->close();
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful</title>
  <link rel="stylesheet" href="userregstyles.css">
</head>
<body>
  <div class="wrapper">
    <h2>Registration Successful!</h2>
    <p>Your registration has been successfully processed.</p>
    <a href="login.html" class="button">Go to Login Page</a>
  </div>
</body>
</html>