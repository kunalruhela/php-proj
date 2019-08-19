<?php
require_once('conn.php');
$uname=$_GET['uname'];
$q= "DELETE FROM users WHERE uname ='$uname'";
$result=mysqli_query($conn,$q);
header('location:admin.php');
?>