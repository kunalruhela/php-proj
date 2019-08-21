<?php
session_start();
require_once('conn.php');
//$uid=$_GET['uid'];
$uname=$_GET['uname'];
$sql="SELECT * FROM users where uname='$uname'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
foreach($row as $ke=> $val)
{
   echo $ke." : " .$val. "<br>";
}

?>
<a href="logout.php">logout</a>