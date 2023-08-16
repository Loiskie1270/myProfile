<?php
//$conn = new mysqli('localhost', 'root', '', 'pebstore');
//if(!$conn){
//    echo "Connection success!";
//}
include('../includes/connect.php');
include('../functions/common_functions.php');


?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    
    <!-- Fontawesome link -->
     <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/adadafda03.js" crossorigin="anonymous"></script>

    <!-- style.css -->
    <link rel="stylesheet" href="style.css">

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
 margin-top: 35px;    
 margin-left: auto;
 margin-right: auto;
 max-width: 440px;
 padding: 0 10px;

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
 font-size: 18px;
 font-weight: 600;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper form{
 padding: 15px 25px 20px 25px;
}
.wrapper form .row{
 height: 35px;
 margin-bottom: 10px;
 position: relative;
}
.wrapper form .row input{
 height: 100%;
 width: 100%;
 outline: none;
 padding-left: 45px;
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
 width: 45px;
 height: 100%;
 color: #fff;
 font-size: 15px;
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
 font-size: 15px;
 text-decoration: none;
}
.wrapper form .pass a:hover{
 text-decoration: underline;
}
.wrapper form .button input{
 color: #fff;
 font-size: 15px;
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
 margin-top: 10px;
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
      
        <div class="title" style="background-color: #ff571d"><span>Registration</div>
<!--Form-->
            <form action="" method="post" enctype="multipart/form-data">

                <div class="row">

                <!--username field-->
                
                    <i class="icon fa-solid fa-user-tie" style="background-color: #ff571d"></i>
                    <input type="text" name="user_username" id="user_username" placeholder="&nbsp;&nbsp;Username" autocomplete="off" required="required">
   
                </div>

                <!--Email field-->

                <div class="row">

                    <i class="icon fa-solid fa-envelope" style="background-color: #ff571d"></i>
                    <input type="email" name="user_email" id="user_email" placeholder="&nbsp;&nbsp;Your email" autocomplete="off" required="required">
            
                </div>

                <!--User Image Field-->

                <div class="row">

                    <i class="icon fa-solid fa-image" style="background-color: #ff571d"></i>
                    <input type="file" name="user_image" id="user_image" required="required">

                </div>  

                <!--Password Field-->

                <div class="row">

                    <i class="icon fa-solid fa-lock" style="background-color: #ff571d"></i>
                    <input type="password" name="user_password" id="user_password" placeholder="&nbsp;&nbsp;Enter your password" autocomplete="off" required="required">

                </div> 

                <!--Confirmed Password Field-->

                <div class="row">

                    <i class="icon fa-sharp fa-solid fa-unlock" style="background-color: #ff571d"></i>
                    <input type="password" name="confirm_user_password" id="confirm_user_password"  placeholder="&nbsp;&nbsp;Confirm Password" autocomplete="off" required="required">

                </div> 
 
                <!---Address Field-->

                <div class="row">
                
                    <input type="text" name="user_address" id="user_address" placeholder="&nbsp;&nbsp;Address" autocomplete="off" required="required">
                    <i class="icon fa-sharp fa-solid fa-location-dot" style="background-color: #ff571d"></i>

                </div> 

                <!---Contact Field-->

                <div class="row">
                
                    <input type="text" name="user_mobile" id="user_passworduser_mobile" placeholder="&nbsp;&nbsp; Mobile number" autocomplete="off" required="required">
                    <i class="icon fa-solid fa-mobile-retro" style="background-color: #ff571d"></i>

                </div> 
 
                <!--Register Field--->

                <div class="row button">

                    <input type="submit" name="user_register" style="background-color: #ff571d" value="Register">
                    <!--<p><strong>Already have an account?</strong><a href="user_login.php" class="text-danger text-decoration-none"><strong> Login </strong></a></p>-->
                </div>          

                <div class="signup-link">Already have an account?<a href="user_login.php" class="text-danger text-decoration-none"><strong> Login </strong></div>                
            </form>

           
        </div>   
    </div>        
    
 </body>
 </html>

 <!---PHP CODE------>
 <?php 
 
 if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_address=$_POST['user_address'];
    $user_mobile=$_POST['user_mobile'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();

    // select query to check username already exist
$select_query="Select * from `user_table` where username='$user_username' or user_email='$user_email'";
$result=mysqli_query($conn,$select_query);    
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo "<script>alert('Username & E-mail already exist!')</script>";
    
    //check the CONFIRMATION OF PASSWORD
}elseif($user_password!=$confirm_user_password){
    echo "<script>alert('Password do not match!')</script>";

}

else{
    
    // Insert data to (DATABASE)user_table

    $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip_add,user_address,user_mobile) values ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address', '$user_mobile')";
    // Execute the insertion of data to Database (user_table)
    $sql_execute=mysqli_query($conn,$insert_query);
    //insert images into one folder
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    //condition
    if($sql_execute){
        echo "<script>alert('Data inserted successfully!')</script>";
    }else{
        die(mysqli_error($conn));
    }
 }


 // SELECTING CART ITEMS
 $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
 $result_cart=mysqli_query($conn,$select_cart_items);
 $rows_count=mysqli_num_rows($result_cart);
 if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('You have items in your cart!')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
 }else{
    echo "<script>window.open('../index.php','_self')</script>";
 }
}
    
 
 
 
 
 ?>