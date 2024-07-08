<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management - Admin Panel</title>
  <link rel="stylesheet" href="adminstyles.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid #ccc;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <h2>User Management - Admin Panel</h2>
    <?php
    
    $servername = "localhost";  
    $username = "thejas";     
    $password = "123456789";  
    $dbname = "hire22db"; 

    $conn = new mysqli('localhost','root','','hire22db');

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, email, mobile, city FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>City</th></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["mobile"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "No users found.";
    }

    $conn->close();
    ?>
    <br>
    <p><a href="home.html">BACK</a></p>
  </div>
</body>
</html>
