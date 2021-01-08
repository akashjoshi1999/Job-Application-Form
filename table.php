<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE job (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
_name VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
email VARCHAR(50),
age VARCHAR(50),
exe VARCHAR(50),
skill VARCHAR(50),
_file VARCHAR(100),
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>