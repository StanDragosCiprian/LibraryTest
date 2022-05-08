<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "Connected successfully";
}
//$sql="INSERT INTO log(Nume, Prenume, Email, Passworld)VALUES('Stan','Dr','eu@gmail.com','1234')";
?>