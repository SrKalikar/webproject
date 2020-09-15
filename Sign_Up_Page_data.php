<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "Students_Database";

// Create connection
$conn = new mysql($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//query formation within the table
$sql = "INSERT INTO Students_Data (firstname, middlename, lastname, email, branch, year, roll_no)
VALUES ('firstname', 'middlename', 'lastname', 'email', 'branch', 'year', 'roll_no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>