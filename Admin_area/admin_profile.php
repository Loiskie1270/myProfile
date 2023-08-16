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

    
    <title>Welcome <?php echo  $_SESSION['admin_adminname']?></title>

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
  width: 15%;
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
  <div class="container-fluid p-0">
            <!---first child------>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="container-fluid">
                    <img src="../images/pebslogo4.png" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">

                        
    
    <?php
               if(!isset($_SESSION['admin_adminname'])){
                echo "<li class='nav-item'>
                <a class='nav-link text-dark' href='#'>Welcome Guest</a>
              </li>";
              }else{
                echo "<li class='nav-item'>
                <a class='nav-link text-dark href='#'>Welcome <strong style='color: yellow'>    ".$_SESSION['admin_adminname']."</strong></a>
              </li>";
              }   
if(!isset($_SESSION['admin_adminname'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='/admin_area/admin_login.php'>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link text-dark' href='logout_user.php'>Logout</a>
</li>";
}  
    
?>    
 

<!--fourth child -->

            <?php 
$admin_adminname=$_SESSION['admin_adminname'];
$admin_image="select * from `admintwo_table` where admin_name='$admin_adminname'";
$result_image=mysqli_query($conn,$admin_image);
$row_image=mysqli_fetch_array($result_image);
$admin_image=$row_image['admin_image'];
echo "<li class='nav-item'>
<img src='./images/$admin_image' class='profile_img' alt=''>
</li>";
?>            
            
            </nav>
                

                </div>
            </nav>
            <!---second child------>
            <div class="bg-light">
                <h2 class="text-center text-bg-success mb-0 p-2">MANAGE DETAILS</h2>
            </div>
            <!---third child------>
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                  
                    <div class="p-3">
  

                               
              
                       <!--- <p class="text-light text-center"><strong style='color: orangered'><?php echo $_SESSION['admin_adminname']?> </strong> </p>---->
      
                        
                        
                    </div> 
                    <div class="button bg-dark mt-0 text-center p-1">
                            <button class="my-3 bg-danger  text-center p-1"><a href="insert_product.php" class="nav-link text-light my-1">Insert Products</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?view_products" class="nav-link text-light my-1">View Products</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?insert_category" class="nav-link text-light my-1">Insert Categories</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?view_categories" class="nav-link text-light my-1">View Categories</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?insert_brand" class="nav-link text-light my-1">Insert Brands</a></button>

                            <Button class="my-3 bg-danger  text-center p-1"><a href="index.php?view_brands" class="nav-link text-light my-1">View Brands</a></Button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?list_orders" class="nav-link text-light my-1">All Orders</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?list_payments" class="nav-link text-light my-1">All Payments</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?list_users" class="nav-link text-light my-1">List Users</a></button>

                            <button class="my-3 bg-danger  text-center p-1"><a href="index.php?logout_user" class="nav-link text-light my-1">Logout</a></button>

                    </div>

                </div>
            </div>
            <!--fourth Child -->
            <div class="container my-2">
                <?php 
                    if(isset($_GET['insert_category'])){
                        include('insert_categories.php');
                    }
                    if(isset($_GET['insert_brand'])){
                        include('insert_brands.php');
                    }
                    if(isset($_GET['view_products'])){
                        include('view_products.php');
                    }
                    if(isset($_GET['edit_products'])){
                        include('edit_products.php');
                    }
                    if(isset($_GET['delete_products'])){
                        include('delete_product.php');
                    }
                    if(isset($_GET['view_categories'])){
                        include('view_categories.php');
                    }
                    if(isset($_GET['view_brands'])){
                        include('view_brands.php');
                    }
                    if(isset($_GET['edit_category'])){
                        include('edit_category.php');

                    }
                    if(isset($_GET['edit_brands'])){
                        include('edit_brands.php');
                    }

                    if(isset($_GET['delete_category'])){
                        include('delete_category.php');
                    }
                    if(isset($_GET['delete_brands'])){
                        include('delete_brands.php');
                    }
                    if(isset($_GET['list_orders'])){
                        include('list_orders.php');
                    }
                    if(isset($_GET['list_payments'])){
                        include('list_payments.php');
                    }
                    if(isset($_GET['list_users'])){
                        include('list_users.php');
                    }
                    if(isset($_GET['logout_user'])){
                        include('logout_user.php');
                    }




                    
                ?>
            </li>
        </ul>
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
