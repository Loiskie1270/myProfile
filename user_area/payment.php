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
    <title>Payment Page</title>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Fontawesome link -->
     <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style.css -->
    <link rel="stylesheet" href="style.css">
    <style>

.payment_img{
    width: 90%;
    margin: auto;
    display: block;
}        
    </style>
</head>
<body>
    <!---PHP CODE TO ACCESS USER-ID------>
    <?php 
    $user_ip=getIPAddress();
    $get_user="select * from `user_table` where user_ip_add='$user_ip'";
    $result=mysqli_query($conn,$get_user);
    $run_query=mysqli_fetch_array($result);
    $user_id=$run_query['user_id'];

    
    
    ?>
    <div class="container">
        <h2 class="text-center mt-3 text-bg-success">PAYMENT OPTIONS</h2>
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6 ">
                <a href="https://www.paypal.com" target="_blank"><img src="../images/payment2.png" alt="" class="payment_img"></a>
            </div>
            <div class="col-md-6 ">
                <a href="order.php?user_id=<?php echo $user_id ?>"><h2 class="text-center text-decoration-none">PAY OFFLINE</h2></a>
            </div>
            
        </div>
    </div>
</body>
</html>