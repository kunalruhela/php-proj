<?php
require_once('conn.php');
$uname=$_GET['uname'];
$email=$_GET['email'];
$q="SELECT * FROM users";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>	
    <tr>
        <td><?=$row['uname'];?></td>
        <td><?=$row['email'];?></td>
    </tr>
<?php	
}
}
else {
    echo "0 results";
}
mysqli_close($conn);
?>