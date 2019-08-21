<?php
//error_reporting(0);
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
    $msg=$_GET['msg'];
    if($msg!=''){
         echo "innhyttu";
        //echo "alert('Failed')";
    }
    //$pwd=password_hash($pwd,PASSWORD_DEFAULT);
    $sql="SELECT * FROM users WHERE uname='$uname'";
    $result= $conn-> query($sql);
    $row= $result-> fetch_assoc();
    //$count=mysqli_num_row($result);
    $role = $row['u_role'];
    $uname=$row['uname'];
    //$pwd1 = $row['pwd'];
   //$pwd1=password_hash($pwd,PASSWORD_DEFAULT);
   if(isset($row)){
    if(password_verify($pwd,$row['pwd'])){
        if($role=="admin"){
            echo "admin";
            $_SESSION['u_role']=$role;
            $_SESSION['uname']=$uname;
            header("location:admin.php");
        }elseif($role=="user"){
            echo "user";
            $_SESSION['u_role']=$role;
            $_SESSION['uname']=$uname;
            $uname=$row['uname'];
            header("location:view.php?uname=$uname");
        }
    }else{
        //$msg=Login Failed,Please redo;
        header("location:login.php?msg=Wrong data entry");
    }
}else{
    echo "NO Data Entered";
}
   
   // if($row){
    //     //echo "1";
    //     if(password_verify($pwd,$pwd1)){
    //         if($role =="admin"){
    //             //echo "1";
    //             $_SESSION['role']=$role;
    //             header("location:adminpage.php");   
    //     }else{
    //         $_SESSION['role']=$role;
    //         $username=$name;
    //         header("location:view.php");
    //     //echo "hello";
    //     } 
    //     }else{
    //     echo"Invalid";
    //     }
    // }else{
    //     echo "no entry done";
    // }
}
?>