<?php
// $servername="localhost";
// $dbname="miniproject";
// $username="root";
// $password="";
// create conn
$conn=new mysqli("localhost","root","","miniproject");
//check conn
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
   //echo "connection successful";
?>