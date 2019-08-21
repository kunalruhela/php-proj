<?php
//error_reporting(0);
//include_once('i.css');
session_start();
require_once('conn.php');
if(!isset($_SESSION['u_role']) || $_SESSION['u_role']!='admin'){
header("location:index.php");
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="address.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>

</head>
<body>
<form action="admin.php" method="post">
    <fieldset><legend>basic info</legend>
    <label for="u_role">u_role</label>
    <input  type="text" name="u_role"><br>
    <label for="uname">uname</label>
    <input id="uname" type="text" name="uname"><br>
    <label for="password">password</label>
    <input type="text" name="pwd"><br>
    <label for="email">email</label>
    <input id="email" type="text" name="email"><br>
    <label for="fname">firstname</label>
    <input type="text" name="fname"><br>
    <label for="lname">lastname</label>
    <input type="text" name="lname"><br>
    <label for="t_code">t_code</label>
    <input type="text" name="t_code"><br>
    <label for="h_phone">h_phone</label>
    <input id="h_phone" type="text" name="h_phone"><br>
    </fieldset>
    <fieldset><legend>Primary address</legend>
    <!-- <label for="building">building</label> -->
    building:<input type="text" id="building" name="building" value=""><br>
    <!-- <label for="street">street</label> -->
    street:<input type="text" id="street" name="street" value=""><br>
    <!-- <label for="city">city</label> -->
    city:<input type="text" id="city" name="city" value=""><br>
    <!-- <label for="state">state</label> -->
    state:<input type="text" id="u_state" name="u_state" value=""><br>
    <!-- <label for="zip">zip</label> -->
    zip:<input type="text" id="zip" name="zip" value=""><br></fieldset>
   
   <fieldset><legend>Secondary detail</legend>
    <!-- <label for="sec_fname">sec_fname</label> -->
    sec_fname:<input type="text" name="sec_fname" value=""><br>
    <!-- <label for="sec_lname">sec_lname</label> -->
    sec_lname:<input type="text"  name="sec_lname" value=""><br>
    <!-- <label for="sec_rel">sec_rel</label> -->
    sec_phone:<input type="text"  name="sec_phone" value=""><br>
    sec_email:<input type="text"  name="sec_email" value=""><br>
    sec_rel:<input type="text"  name="sec_rel" value=""><br></fieldset>
    <!-- <label for="sec_street">sec_street</label> -->
    

    <fieldset><legend>Secondary address</legend>
    sec_street:<input type="text" id="sec_street" name="sec_street" value=""><br>
    <!-- <label for="sec_city">sec_city</label> -->
    sec_city:<input type="text" id="sec_city" name="sec_city" value=""><br>
    <!-- <label for="sec_state">sec_state</label> -->
    sec_state:<input type="text" id="sec_state" name="sec_state" value=""><br>
    <!-- <label for="sec_zip">zip</label> -->
    sec_zip:<input type="text" id="sec_zip" name="sec_zip" value=""><br>
    <!-- <label for="sec_email">sec_email</label> -->
    <!-- sec_email:<input type="text" id="sec_email" name="sec_email" value=""><br> -->
    <!-- <label for="sec_phone">sec_phone</label> -->
    <!-- sec_phone:<input type="text" id="sec_phone" name="sec_phone" value=""><br> -->
    </fieldset>
    Checkbox: <input type="checkbox" id="same"  onclick="addressFunction()">
    <label for="same">if primary same as secondary address</label>
    <fieldset>
    <legend>Programs</legend>
    <label for="house_prog">house_prog</label>
    <input type="text" name="house_prog"><br>
    <label for="service_prog">service_prog</label>
    <input type="text" name="service_prog"><br>
    </fieldset>
    <input type="submit" value="submit" name="submit">
    <!-- <input type="submit" name="submit1" id="submit"> -->
      
</form>
<table>
<thead>
<th>Username</th>
<th>email</th>
<th>View</th>
<th>Delete</th>   
</thead>
<tbody id="responsedata">
<?php
require_once('conn.php');
$sql="SELECT * FROM users";
$query=mysqli_query($conn,$sql);

    while($result=mysqli_fetch_array($query))
    {
    ?>
    <tr>
    <td><?php echo $result['uname']?></td>
    <td><?php echo $result['email']?></td>
    <td><button><a href="view.php?uname=<?php echo $result['uname']?>">view</button></td>
    <td><button><a href="delete.php?uname=<?php echo $result['uname']?>">delete</button></td>
    </tr>
    <?php
    }
?>
</tbody>
</table>
<a href="logout.php">logout</a>
</body>
</html>

<?php

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    $uname=test_input($_POST['uname']);
    $pwd=test_input($_POST['pwd']);
    $email=test_input($_POST['email']);
    $u_role=$_POST['u_role'];
    $fname=test_input($_POST['fname']);
    $lname=test_input($_POST['lname']);
    $t_code=test_input($_POST['t_code']);
    $h_phone=test_input($_POST['h_phone']);
    $building=test_input($_POST['building']);
    $street=test_input($_POST['street']);
    $city=test_input($_POST['city']);
    $u_state=test_input($_POST['u_state']);
    $zip=test_input($_POST['zip']);
    $sec_fname=test_input($_POST['sec_fname']);
    $sec_lname=test_input($_POST['sec_lname']);
    $sec_rel=test_input($_POST['sec_rel']);
    $sec_street=test_input($_POST['sec_street']);
    $sec_city=test_input($_POST['sec_city']);
    $sec_state=test_input($_POST['sec_state']);
    $sec_zip=test_input($_POST['sec_zip']);
    $sec_email=test_input($_POST['sec_email']);
    $sec_phone=test_input($_POST['sec_phone']);
    $house_prog=test_input($_POST['house_prog']);
    $service_prog=test_input($_POST['service_prog']);
   
  //  for username/phone number
    if(empty($uname)){
        die("Username should not be empty");
    }elseif(!preg_match("/^[a-zA-Z]*$/",$uname)){
        die("Username should not contain white space and special charecter");
    }else{
      //$sql="select * from users where uname='$uname'";
      $result=$conn->query("SELECT * FROM users WHERE uname='$uname'");
      if($result->fetch_array()>0){
        die("username already exists");
       // die();
      }
    }

        
        // mail
        if(empty($email)){
          die("Email needs to be entered");
         // $email=filter_var($email,FILTER_SANITIZE_EMAIL);
          // echo $email;
          if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email=test_input($email);
            //echo "Email: $email";
          }else{
            die("Invalid email address");
          }
        }else{
          $result=$conn->query("SELECT * FROM users WHERE email='$email'");
          if($result->fetch_array()>0){
        die("email already exists"); 
        }
      }
    
    //     // h_phone
      // if(empty($h_phone)){
      //   echo "phone number should not be empty";
      // }
        

         if(!empty($h_phone)){
          if(!preg_match("/^[0-9]{10}$/",$h_phone)){
           // echo "phone number is valid: $h_phone";
           die("phone number is not valid");
          }
          //die("phone number must not be empty");
          }else{
            die("phone no is empty");
          }
        //}
        //}

          if(empty($fname)){
            echo("firstname should not be empty");
          }elseif(!preg_match("/^[a-zA-Z]*$/",$fname)){
            die("firstname should not contain whitespace and special charecter ");
          }else{
            $result=$conn->query("SELECT * FROM users WHERE fname='$fname'");
            if($result->fetch_array()>0){
              die("firstname already exists");
          }
        }

        if(empty($lname)){
          echo("last should not be empty");
      }elseif(!preg_match("/^[a-zA-Z]*$/",$lname)){
          die("lastname should not contain whitespace and special charecter ");
      }else{
        $result=$conn->query("SELECT * FROM users WHERE lname='$lname'");
      if($result->fetch_array()>0){
        die("lastname already exists");
      }
    }

        if(empty($t_code)){
          die("t_code should not be empty");
        }else{
          $result=$conn->query("SELECT * FROM users WHERE t_code='$t_code'");
      if($result->fetch_array()>0){
        die("t_code already exists");
        }
      } 
       
        if(empty($building)){
          die("Building should not be empty");
        }

        if(empty($street)){
          die("street should not be empty");
        }
        
        if(empty($u_state)){
          die("state should not be empty");
        }

        if(empty($zip)){
          echo("zip should not be empty");
        }elseif(!preg_match("/^[0-9]{6}$/",$zip)){
          die("zip is invalid");
        }
        
        if(empty($sec_fname)){
          echo("sec_firstname should not be empty");
        }elseif(!preg_match("/^[a-zA-Z ]*$/",$sec_fname)){
          die ("sec_firstname should not contain whitespace and special charecter ");
        }
        if(empty($sec_lname)){
          echo("sec_lastname should not be empty");
        }elseif(!preg_match("/^[a-zA-Z ]*$/",$fname)){
          die ("sec_lastname should not contain whitespace and special charecter ");
        }

        if(!empty($sec_email)){
          // $email=filter_var($email,FILTER_SANITIZE_EMAIL);
           // echo $email;
           if(filter_var($sec_email,FILTER_VALIDATE_EMAIL)){
             $sec_email=test_input($sec_email);
            // echo "Sec_Email: $sec_email";
           }else{
             die("Invalid email address");
           }
         }else{
           die("Email needs to be entered");
         }

        if(empty($sec_phone)){
          if(preg_match("/^[0-9]{10}$/",$sec_phone)){
           // echo "sec_phone number is valid: $sec_phone";
          }else{
            die("secondary phone number is not valid");
          }
          die("secondary phone number must not be empty");
          }

         if(empty($sec_street)){
          die("sec_street should not be empty");
        }
         // password hash
          $pwd1=password_hash($pwd,PASSWORD_DEFAULT);
          
          //building
        if(empty($sec_rel)){
           die("relation should not be empty");
          }

          if(empty($sec_city)){
            die("secondary city should not be empty");
           }
           
           if(empty($sec_zip)){
            die("secondary zip should not be empty");
           }
           
           if(empty($sec_rel)){
            die("relation should not be empty");
           }

           if(empty($house_prog)){
            die("house_prog should not be empty");
           }

           if(empty($service_prog)){
            die("service_prog should not be empty");
           }
            // if(($_POST['uname']=="") || ($_POST['pwd']=="") || ($_POST['email']=="") || ($_POST['fname']=="") || ($_POST['lname']=="") || ($_POST['t_code']=="") || ($_POST['h_phone']=="") || ($_POST['building']=="") || ($_POST['street']=="") || ($_POST['city']=="") || ($_POST['state']=="") || ($_POST['zip']=="") || ($_POST['house_prog']=="") || ($_POST['service_prog']==""))
            // {
            //     echo "fill all fields";
            // }else{
       
           // $sql= "INSERT INTO users(uname,email,pwd) VALUES('$uname','$email,','$pwd')";
        
        $sql = "INSERT INTO users(uname,email,pwd,u_role,fname,lname,t_code,h_phone,building,street,city,u_state,
        zip,sec_fname,sec_lname,sec_rel,sec_street,sec_city,sec_state,sec_zip,sec_email,
        sec_phone,house_prog,service_prog) VALUES('$uname','$email','$pwd1','$u_role',
        '$fname','$lname','$t_code','$h_phone','$building','$street','$city','$u_state',
        '$zip','$sec_fname','$sec_lname','$sec_rel','$sec_street','$sec_city','$sec_state',
        '$sec_zip','$sec_email','$sec_phone','$house_prog','$service_prog')";
        
        $result=$conn->query($sql); 
          
        if($result){
            echo "data entered";
        }else{
            echo "failed";
        }
}