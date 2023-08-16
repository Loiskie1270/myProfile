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
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin Login</title>
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
body{
   overflow: hidden;
   background-color: cadetblue;
}
.container-fluid{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-top: 30px;
    margin-bottom: 20px;
    width: 50%;
    border-radius: 5px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.7); 
}
.img-fluid{
    width: 90%;
    margin-left: -15px;
    margin-top: 30px;
    filter: drop-shadow(5px 5px 10px white);
} 
.form-control{
    position: relative;
}  
.icon{
    position: absolute;
    right: 394px;
    margin-top: -20px;
}
.form-outline .bg-warning{
    width: 120px;
    margin-top: 4px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);  
}


    </style>
 </head>
 <body>
 <div class="container-fluid w-50 bg-info">
        <h3 class="bg-info text-center text-bg-light mt-5 py-4 px-3 mb-4"><strong>Admin - Sign In</strong></h3>
        <div class="d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/pebslogo2.png" alt="" class="img-fluid">
            </div>
        <!--Form-->
        <div class="col-lg-6 col-xl-5 bg-info">
        <form action="" method="post">
            <div class="form-outline mb-4">
                <!--username field-->
                
                <input type="text" name="admin_adminname" id="admin_adminname" class="form-control" placeholder="Enter your username" autocomplete="off" required="required">
                <i class="icon fa-solid fa-user-tie fa-lg"></i>
            </div>
            <div> 
                <!--Password Field-->
                <div class="form-outline mb-4">
                                
                <input type="password" name="admin_password" id="admin_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required">
                <i class="icon fa-solid fa-lock fa-lg"></i>
                
            </div> 
            <div class="text-center mb-4">
            <a href="user_registration.php" class="text-decoration-none"><strong>Forgot password?</strong></a>
            </div>
            <div>
                
                <!--Register Field--->
                <div class="form-outline mb-4">
                <input type="submit" name="admin_login" class="bg-warning py-2 px-3 fw-bold border-0" value="Login">
                <p class="medium fw-bold">Don't have an account?<a href="admintwo_registration.php" class="link-danger text-decoration-none"> Register</a></p>
            </div>   

        </form>    
        </div>
        </div>

     </div>        
    
 </body>
 </html>

 <?php 
 
if(isset($_POST['admin_login'])){
    $admin_adminname=$_POST['admin_adminname'];
    $admin_password=$_POST['admin_password'];
    $select_query="select * from `admintwo_table` where admin_name='$admin_adminname'";
    $results=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($results);
    $row_data=mysqli_fetch_assoc($results);
    $admin_ip=getIPAddress();

    // CART ITEM
    $select_query="select * from `admintwo_table` where admin_name='$admin_adminname'";
    $select_cart=mysqli_query($conn,$select_query);
    //$results=mysqli_query($conn,$select_query);
    $row_count_cart=mysqli_num_rows($select_cart);
    if($row_count>0){
        $_SESSION['admin_adminname']=$admin_adminname;
        if(password_verify($admin_password,$row_data['admin_password'])){
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('admin_profile.php','_self')</script>";
           if($row_count==1 and $row_count_cart==0){
            $_SESSION['admin_adminname']=$admin_adminname;
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            
           
        }else{
            echo "<script>alert('Invalid Credentials!')</script>";
            
        }

    }else{
        echo "<script>alert('Invalid Credentials!')</script>";
    }
    
    }
}
 
 
 ?>