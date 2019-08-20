<?php
require_once("conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
<div class="form_group"></div>
    username:<input type="text" name="uname"><br>
    password:<input type="password" name="pwd"><br>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    //$pwd=password_hash($pwd,PASSWORD_DEFAULT);
    $sql="Select * from users where uname='$uname'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    if(isset($row)){
        //echo "1";
        if(password_verify($pwd,$row['pwd'])){
            if($row['u_role']=="admin"){
                //echo "1";
                $_SESSION['role']=$row['u_role'];
                header("location:admin.php");   
            }else{
                $_SESSION['role']=$row['u_role'];
                header("location:dashborad.php");
            }
        }else{
            die("invalid entry");
        }
       }else{
        echo"login fail";
    }
    // else{
    //     echo "no entry done";
    // }
}

?>