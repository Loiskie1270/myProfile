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
body{
   overflow: hidden;
   background-color: darkgrey;
}
.container-fluid{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: cadetblue;
    margin-top: 55px;
    margin-bottom: 20px;
    width: 60%;
    border-radius: 5px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.7); 
}
.img-fluid{
    width: 90%;
    margin-left: -15px;
    margin-top: 40px;
    filter: drop-shadow(5px 5px 10px white);
} 
.form-control{
    position: relative;
}  
.icon{
    position: absolute;
    right: 345px;
    margin-top: -20px;
}
.form-outline .bg-warning{
    width: 120px;
    margin-top: 4px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);  
}
.img-fluid{
    width: 90%;
    margin-left: -10px;
    margin-top: 20px;
    filter: drop-shadow(5px 5px 10px white);
} 
    </style>
 </head>
 <body>
 <div class="container-fluid">
        <h3 class="text-center p-4 mb-3"><strong>ADMIN REGISTRATION</strong></h3>
        <div class="d-flex justify-content-center">
        <div class="col-lg-6 col-xl-5">
            <img src="../images/pebslogo2.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-xl-5">
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-3">
                <!--username field-->
                
                <input type="text" name="admin_name" id="admin_name" class="form-control" placeholder="AdminName" autocomplete="off" required="required">
                <i class="icon fa-solid fa-user-tie fa-lg"></i>

            </div>
            <div> 
                <!--Email field-->
                <div class="form-outline mb-3">
               
                <input type="email" name="admin_email" id="admin_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required">
                <i class="icon fa-solid fa-envelope fa-lg"></i>
            
            </div>
            
            <div> 
                <!--User Image Field-->
                <div class="form-outline mb-3">
                
                <input type="file" name="admin_image" id="admin_image" class="form-control"  required="required">
                <i class="icon fa-solid fa-image fa-lg"></i>

            </div>  

            <div> 
                <!--Password Field-->
                <div class="form-outline mb-3">
                
                <input type="password" name="admin_password" id="admin_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required">
                <i class="icon fa-solid fa-lock fa-lg"></i>

            </div> 
           
       
            <div> 
                <!--Register Field--->
                <div class="form-outline mb-2">
                <input type="submit" name="admin_register" class="bg-warning py-2 px-3 fw-bold border-0" value="Register">
                <p class="small text-dark mb-4"><strong>Already have an account?</strong><a href="admin_login.php" class="text-danger text-decoration-none"><strong> Login </strong></a></p>
            </div>                          
        </form>
        </div> 
        </div>   
     </div>        
    
 </body>
 </html>

 <!---PHP CODE------>
 <?php 
 
 if(isset($_POST['admin_register'])){
    $admin_adminname=$_POST['admin_name'];
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
    //$confirm_user_password=$_POST['confirm_user_password'];
    //$user_address=$_POST['user_address'];
    //$user_mobile=$_POST['user_mobile'];
    $admin_image=$_FILES['admin_image']['name'];
    $admin_image_tmp=$_FILES['admin_image']['tmp_name'];
    $admin_ip=getIPAddress();

    // select query to check AdminName already exist
$select_query="Select * from `admintwo_table` where admin_name='$admin_adminname' or admin_email='$admin_email'";
$result=mysqli_query($conn,$select_query);    
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    
    echo "<script>alert('Adminname & E-mail already exist!')</script>";
    
    //check the CONFIRMATION OF PASSWORD
//}elseif($user_password!=$confirm_user_password){
    //echo "<script>alert('Password do not match!')</script>";

}

else{
    
    // Insert data to (DATABASE)user_table

    $insert_query="insert into `admintwo_table` (admin_name,admin_email,admin_password,admin_image,admin_ip_add) values ('$admin_adminname','$admin_email','$hash_password','$admin_image','$admin_ip')";
    // Execute the insertion of data to Database (user_table)
    $sql_execute=mysqli_query($conn,$insert_query);
    //insert images into one folder
    move_uploaded_file($admin_image_tmp,"./images/$admin_image");
    //condition
    if($sql_execute){
        
        echo "<script>alert('Data inserted successfully!')</script>";
        echo "<script>window.open('admin_login.php','_self')</script>";
    }else{
        die(mysqli_error($conn));
    }
 }

 
}
 
 
 ?>