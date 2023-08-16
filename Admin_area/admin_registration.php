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
    <title>Admin Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <!---Bootstrap CSS LINK------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Fontawesome link -->
<!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <script src="https://kit.fontawesome.com/adadafda03.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../style.css">
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
    margin-top: 40px;
    filter: drop-shadow(5px 5px 10px white);
} 
.form-control{
    position: relative;
}  
.icon{
    position: absolute;
    right: 29px;
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
    <div class="container-fluid bg-info">
        <h3 class ="text-center p-4 mb-3"><strong>ADMIN REGISTRATION</strong></h3>
        <div class="d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/pebslogo2.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        
                        <input type="text" id="admin_name" name="admin_name" placeholder="Admin name" required="required" class="form-control">
                        <i class="icon fa-solid fa-user-tie fa-lg"></i>

                    </div>
                    <div class="form-outline mb-4">
                        
                        <input type="text" id="admin_email" name="admin_email" placeholder="Email" required="required" class="form-control">
                        <i class="icon fa-solid fa-envelope fa-lg"></i>

                    </div>
                    <div class="form-outline mb-4">
                        
                        <input type="password" id="admin_password" name="admin_password" placeholder="Password" required="required" class="form-control">
                        <i class="icon fa-solid fa-lock fa-lg"></i>
                    </div>
                    <div class="form-outline mb-4">
                        
                        <input type="password" id="confirm_admin_password" name="confirm_admin_password" placeholder="Confirm password" required="required" class="form-control">
                        <i class="icon fa-sharp fa-solid fa-unlock fa-lg"></i>

                    </div>
                    <br>
                    <div class="form-outline mb-3">
                        
                        <input type="submit" class="bg-warning py-2 px-3 fw-bold border-0" name="admin_register" value="Register">
                        <br>
                        
                        <p class="medium fw-bold"><strong>Do you have an account? <a href="admin_login.php" class="link-danger"><strong>Login</strong></a></p>
                    </div>
                </form>
            
        </div>
        
    </div>
 </body>
 </html>

 <!---PHP CODE------>
 <?php 
 
 if(isset($_POST['admin_register'])){
    $admin_admin_name=$_POST['admin_name'];
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
    $confirm_admin_password=$_POST['confirm_admin_password'];
  

    // select query to check admin_name already exist
$select_query="Select * from `admin_table` where admin_name='$admin_admin_name' or admin_email='$admin_email'";
$result=mysqli_query($conn,$select_query);    
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo "<script>alert('Admin name & E-mail already exist!')</script>";
    
    //check the CONFIRMATION OF PASSWORD
}elseif($admin_password!=$confirm_admin_password){
    echo "<script>alert('Password do not match!')</script>";

}

else{
    
    // Insert data to (DATABASE)admin_table

    $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password) values ('$admin_admin_name','$admin_email','$hash_password')";
    // Execute the insertion of data to Database (admin_table)
    $sql_execute=mysqli_query($conn,$insert_query);
    //insert images into one folder
    //move_uploaded_file($user_image_tmp,"./admin_images/$admin_image");
    //condition
    if($sql_execute){
        echo "<script>alert('Data inserted successfully!')</script>";
    }else{
        die(mysqli_error($conn));
    }
 }

 // SELECTING CART ITEMS
// $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
// $result_cart=mysqli_query($conn,$select_cart_items);
// $rows_count=mysqli_num_rows($result_cart);
// if($rows_count>0){
//    $_SESSION['username']=$user_username;
//    echo "<script>alert('You have items in your cart!')</script>";
//    echo "<script>window.open('checkout.php','_self')</script>";
// }else{
//    echo "<script>window.open('../index.php','_self')</script>";
// }
}
    
 
 
 
 
 ?>