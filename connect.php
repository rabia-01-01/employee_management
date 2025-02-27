<?php

$servername = "localhost";
$username = "root";
$password = "";
 
// Connection
$conn = new mysqli($servername,
           $username, $password);
 
// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
      . $conn->connect_error);
}

//echo "Connected successfully";
 if (!mysqli_select_db($conn,'employeedb'))     
    
	die("Unable to select database: " . mysqli_error()); 



?>

