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
//$uid=$_GET['uid'];
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
foreach($row as $ke=> $val)
{
   echo $ke." : " .$val. "<br>";
}

?>
<a href="logout.php">logout</a>