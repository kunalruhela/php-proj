<?php
require_once('conn.php');
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
    <form action="signup.php" method="POST">
    <label for="uname">username</label>
    <input type="text" name="uname" ><br>
    <label for="email">Email</label>
    <input type="email" name="email"><br>
    <label for="pwd">password</label>
    <input type="password" name="pwd"><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname=$_POST["uname"];
        $email=$_POST["email"];
        $pwd=$_POST["pwd"];

        $pwd1=password_hash($pwd,PASSWORD_DEFAULT);
        $sql="Insert Into users(uname,email,pwd) Values('$uname','$email','$pwd1')";
        
        
        $result= $conn->query($sql);
    }
?>
