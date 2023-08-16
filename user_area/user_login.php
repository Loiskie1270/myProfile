<?php
//$conn = new mysqli('localhost', 'root', '', 'pebstore');
//if(!$conn){
//    echo "Connection success!";
//}
include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title> 
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: 'Poppins',sans-serif;
}
body{
 background: #ffbc7e;
 overflow: hidden;
 caret-color: transparent;
}
::selection{
 background: rgba(26,188,156,0.3);
}
.container{
 margin-top: 75px;    
 margin-left: auto;
 margin-right: auto;
 max-width: 440px;
 padding: 0 20px;

}
.wrapper{
 width: 100%;
 background: #fff;
 border-radius: 5px;
 box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
 height: 50px;
 background: #16a085;
 border-radius: 5px 5px 0 0;
 color: #fff;
 font-size: 20px;
 font-weight: 600;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper form{
 padding: 30px 25px 25px 25px;
}
.wrapper form .row{
 height: 45px;
 margin-bottom: 15px;
 position: relative;
}
.wrapper form .row input{
 height: 100%;
 width: 100%;
 outline: none;
 padding-left: 60px;
 border-radius: 5px;
 border: 1px solid lightgrey;
 font-size: 14px;
 transition: all 0.3s ease;
}
form .row input:focus{
 border-color: #16a085;
 box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
 color: #999;
}
.wrapper form .row i{
 position: absolute;
 width: 47px;
 height: 100%;
 color: #fff;
 font-size: 14px;
 background: #16a085;
 border: 1px solid #16a085;
 border-radius: 5px 0 0 5px;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper form .pass{
 margin: -8px 0 20px 0;
}
.wrapper form .pass a{
 color: #16a085;
 font-size: 14px;
 text-decoration: none;
}
.wrapper form .pass a:hover{
 text-decoration: underline;
}
.wrapper form .button input{
 color: #fff;
 font-size: 17px;
 font-weight: 500;
 padding-left: 0px;
 background: #16a085;
 border: 1px solid #16a085;
 cursor: pointer;
}
form .button input:hover{
 background: #12876f;
}
.wrapper form .signup-link{
 text-align: center;
 margin-top: 20px;
 font-size: 14px;
}
.wrapper form .signup-link a{
 color: #16a085;
 text-decoration: none;
}
form .signup-link a:hover{
 text-decoration: underline;
}

</style>


  </head>
  <body>
    <div class="container">

      <div class="wrapper">

        <div class="title" style="background-color: #ff571d"><span>Login</div>
        <form action="" method="post">

          <div class="row">
            <i class="fas fa-user" style="background-color: #ff571d"></i>
            <!--<input type="text" name="user_username" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required">-->
            <input type="text" name="user_username" id="user_username" placeholder="Email or Phone" required>
          </div>

          <div class="row">

            <i class="fas fa-lock" style="background-color: #ff571d"></i>
            <!--<input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required">-->
            <input type="password" name="user_password" id="user_password" placeholder="Password" required>

          </div>

          <div class="pass"><a href="#">Forgot password?</a></div>

          <div class="row button">
          <!--<input type="submit" name="user_login" class="bg-warning py-2 px-3 fw-bold border-0" value="Login">-->
            <input type="submit" name="user_login" value="Login" style="background-color: #ff571d">
          </div>

          <div class="signup-link">Not a member? <a href="user_registration.php">Signup now</a></div>

        </form>
        
      </div>
    </div>

  </body>
</html>

 <?php 
 
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $select_query="select * from `user_table` where username='$user_username'";
    $results=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($results);
    $row_data=mysqli_fetch_assoc($results);
    $user_ip=getIPAddress();

    // CART ITEM
    $select_query_cart="select * from `cart_details` where ip_address='$user_ip'";
    $select_cart=mysqli_query($conn,$select_query_cart);
    //$results=mysqli_query($conn,$select_query);
    $row_count_cart=mysqli_num_rows($select_cart);
    if($row_count>0){
        $_SESSION['username']=$user_username;
        if(password_verify($user_password,$row_data['user_password'])){
           // echo "<script>alert('Login Successfully!')</script>";
           if($row_count==1 and $row_count_cart==0){
            $_SESSION['username']=$user_username;
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
           }else{
            $_SESSION['username']=$user_username;
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('payment.php','_self')</script>";
           }
        }else{
            echo "<script>alert('Invalid Credentials!')</script>";
        }

    }else{
        echo "<script>alert('Invalid Credentials!')</script>";
    }
    

}
 
 
 ?>