<?php
// session_start();
// echo "welcome"." ". $_SESSION['uname'];
// $userprofile=$_SESSION['uname'];
// if($userprofile==true)
// {

// }
// else
// {
//     header('location:admin.php');
// }
require_once('conn.php');
$uname=$_GET['uname'];
$q="SELECT * FROM users where uname='$uname'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($result);
foreach($row as $ke=> $val)
{
   echo $ke.": ".$val."<br>";
}

?>
<a href="logout.php">logout</a>