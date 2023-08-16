<!--connect file-->
<?php 
include('../includes/connect.php');
include('../functions/common_functions.php');
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Welcome <?php echo  $_SESSION['username']?></title>

    <!-- Bootstrap CSS link -->
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Fontawesome link -->
     <!-- for icons  -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <!-- style.css -->
    <link rel="stylesheet" href="../style.css">
    <style>
body{
  overflow-x: hidden;
}
.profile_img{
  width: 50%;
  padding: 5px;
  margin: auto;
  display: block;
  object-fit: contain;
}  
.edit_image{
  width: 100px;
  height: 100px;
  object-fit: contain;
}  
.logo_img{
  padding: 0px;
  margin-bottom: -25px;
  width: 20%;
  height: 20%;
  margin-left: 5%;
  object-fit: cover;
}
.logo{
  width: 4%;
  margin-left: -10;
  margin-right: 3px;
}
.fa-stack[data-count]:after{
  text-decoration: none;
  position:absolute;
  right:20%;
  left: 22px;
  top: 5px;
  content: attr(data-count);
  font-size:60%;
  padding:.5em;
  border-radius:999px;
  line-height:.70em;
  color: white;
  text-align:center;
  min-width:2em;
  font-weight:bold;
  background: red;
  font-size: 11px;
  
}
.fa-circle {
  color:white;
}
.red-cart {
  	color: white; background:#DF0000;
}
.footer{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 12px;
  font-weight: bold;
  padding: 14px 0px 5px 0px;
  background-color: lightblue;
  height: 20%;
  margin-bottom: 0px;
  color: black;
  text-align: center;
  margin-top: 5px;
}
.uil {
  font-size: 20px;
  text-decoration: none;
}

    </style>
  </head>
  <body>
    <!----NAVBAR------>
    <div class="container-fluid p-0">
        <!----First child------>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
  <img src="../images/pebslogo6.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fa-stack fa-1x has-badge" data-count="<?php cart_item();?>" href="cart.php"><i class="fa fa-shopping-cart"></i><strong><sup></sup></strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#"><strong>Total Price: <font size="+2">₱ <?php total_cart_price();?></font></strong></a> 
        </li>
      </ul>
      <form class="d-flex" action="../search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--<button class="btn btn-outline-light" type="submit">Search</button>--->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!--calling cart function -->
<?php 
cart();
?>

<!--second Child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar nav me-auto">
    
    <?php
               if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a class='nav-link text-light' href='#'>Welcome Guest</a>
              </li>";
              }else{
                echo "<li class='nav-item'>
                <a class='nav-link text-light href='#'>Welcome <strong style='color: yellow'>    ".$_SESSION['username']."</strong></a>
              </li>";
              }   
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='./user_area/user_login.php'>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='logout.php'>Logout</a>
</li>";
}  
    
?>    
  </ul>
</nav>
<!--third child -->
<div class="bg-light">
  <!----<h3 class="text-center">Pebb's Store</h3>
  <p class="text-center">Communictions is at the heart of e-commerce and community</p>--->
  <img src="../images/pebslogo4.png" alt="" class="logo_img">
</div>

<!--fourth child -->

<div class="row">
    <div class="col-md-2">
        <ul class="navbar-nav bg-secondary text-center mt-5">
            <li class="nav-item bg-info">
                <a class="nav-link text-bg-success" href="#"><h4>Your Profile</h4></a>
            </li>
            <?php 
$username=$_SESSION['username'];
$user_image="select * from `user_table` where username='$username'";
$result_image=mysqli_query($conn,$user_image);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['user_image'];
echo "<li class='nav-item'>
<img src='./user_images/$user_image' class='profile_img' alt=''>
</li>";
?>            
            
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php"><h6>Pending Orders</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php?edit_account"><h6>Edit Account</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php?my_orders"><h6>My Orders</h6></a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link text-light" href="profile.php?delete_account"><h6>Delete Account</h6></a>
            </li>
            <li class="nav-item">  
                <a class="nav-link text-light" href="logout.php"><h6>Logout</h6></a>
            </li>
        </ul>
    </div>

    <div class="col-md-10 text-center">
      <?php 
      get_user_order_details();
      if(isset($_GET['edit_account'])){
        include('edit_account.php');
      }
      if(isset($_GET['my_orders'])){
        include('user_orders.php');
      }
      if(isset($_GET['delete_account'])){
        include('delete_account.php');
      }       
      ?>
    </div>
</div>
    


<!--FOOTER---->    
<div class="footer">
    <p>All rights reserved @ Designed by A. A. CORBETA - 2023    <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> </p>
  </div>


    </div>
    
  <!-- Bootstrap Js Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
  </body>

</html>
