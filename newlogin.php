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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<form action="login.php" method="POST">
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
    $sql="Select * from users where uname='$uname'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    if(isset($row)){
        if(password_verify($pwd,$row['pwd'])){
            if($row['u_role']=="admin"){
                $_SESSION['role']=$row['u_role'];
                header("location:admin.php");   
            }else{
                $_SESSION['role']=$row['u_role'];
                header("location:view.php");
            }
        }
       }else{
        echo"login fail";
    }
    // else{
    //     echo "no entry done";
    // }
}

?>