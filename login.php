<?php
error_reporting(0);
require_once("conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <!-- <style>
    body{
    background-image: url("nature.jpg") no-repeat;
    background-color: #cccccc;
   }
    </style> -->
</head>
<body>
    <div class="box">
    <div class="login-container d-flex align-items-center justify-content-center">
    <form class="login-form text-center" action="login.php" method="POST">
    <h1 class="login-form text-uppercase">Login page</h1>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="username" name="uname"><br>
    </div>
    <div class="form-group">
    <input type="password" class="form-control" placeholder="password" name="pwd"><br>
    </div>
    <button type="submit" class="btn btn-primary btn-block" value="submit" name="submit">Login</button>
</form>
</div>
</div>
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
    $role = $row['u_role'];
    $name=$row['uname'];
    //$pwd1 = $row['pwd'];
    $pwd1=password_hash($pwd,PASSWORD_DEFAULT);
    if($row){
        //echo "1";
        if(password_verify($pwd,$pwd1)){
            if($role =="admin"){
                //echo "1";
                $_SESSION['role']=$role;
                header("location:admin.php");   
        }else{
            $_SESSION['role']=$role;
            $username=$name;
            header("location:k.php");
        //echo "hello";
        } 
        }else{
        echo"Invalid";
        }
    }else{
        echo "no entry done";
    }
}
?>