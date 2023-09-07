<!--connect file-->
<?php 
include('../includes/connect.php');
include('../functions/common_functions.php');


session_start();
//$_SESSION['admin_adminname']="Admin";
//$_SESSION['admin_password']="admin";
//$_SESSION['admin_email']="Pebbs@gmail.com";
//$_SESSION['admin_adminname'];
//$_SESSION['admin_password'];
//$_SESSION['admin_email'];
//echo "Session data is saved";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard</title>
       <!---Bootstrap CSS LINK------>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <!-- Fontawesome link -->
     <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
    +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="../style.css">

<style>

body{
  text-shadow: 0px 0px 1px #fff;
  color: transparent;
  padding: 0;
  overflow-x: hidden;
}
.logo_img{
  padding: 0px;
  margin-bottom: -25px;
  width: 28%;
  height: 20%;
  margin-left: 35%;
  object-fit: cover;
  filter: drop-shadow(7px 7px 10px white);
}
.logo{
  width: 110px;
  margin-left: 3px;
  margin-right: 3px;

}
.card{
  box-shadow: 0px 0px 2px 2px lightgray;
  background-color: #fffef8;
  padding: 5px 10px ;
  height: 97%;
  width: 97%;
  margin-left: 10px;
  margin-right: -55px;
  margin-top: 8px;
  margin-bottom: 3px;
  column-gap: 1px;
  caret-color: transparent;
}

.card .btn{
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  border-radius: 5px;
}
.card-img-top{
  display: block;
  margin-left: auto;
  margin-right: auto;
  align-items: center;
  justify-content: center;
  padding: 0 15px;
  width: 40%;
  height: 50%;
  margin-top: 5px;
  filter: drop-shadow(2px 1px 2px grey);
  /*mix-blend-mode: multiply;*/
  /*filter: contrast(1);*/
}

.card-title{
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  margin-top: 5px;
  font-weight: bold;
  display: block;
  margin-right: auto;
  margin-left: auto;
  font-weight: normal;
}
.card-text{
  font-family: 'Poppins', sans-serif;
  text-align: center;
  line-height: 1.5;
  font-size: 13px;
  margin-top: 5px;
  margin-bottom: 25px;
  font-weight: normal;
}

.card-text-price{
  font-family: 'Poppins', sans-serif;
  text-align: center;
  line-height: 1.5;
  font-size: 15px;
  margin-top: 5px;
  margin-bottom: 15px;
  font-weight: bold;
}

.btn{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 5px;
  width: 50%;
  border-radius: 3px;
}
.nav-link{
  color:#333;
  font-family: 'Poppins', sans-serif;
}
.nav-item .nav-link{
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  font-weight: 500;
}

button:hover{
  background: #e8b447 !important;
  font-weight: bold;
  color:#fff;
  font-family: 'Poppins', sans-serif;
}

.fa-stack[data-count]:after{
  text-decoration: none;
  position:absolute;
  right:20%;
  left: 25px;
  top: -2px;
  content: attr(data-count);
  padding:.5em;
  border-radius:999px;
  line-height:.70em;
  color: rgb(255, 0, 0);
  text-align:center;
  min-width:2em;
  font-weight:600;
  background: #fff;
  font-size: 12px;
}
.fa-circle {
  color:white;
}
.red-cart {
  color: white; background:#DF0000;
}
.footer{
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  font-weight: bold;
  padding: 14px 0px 5px 0px;
  width: 101%;
  height: 10%;
  margin-bottom: 0px;
  background-color: #ff571d;
  text-align: center;
  margin-top: 0;
}
.footer p{
  font-family: 'Poppins', sans-serif;
  font-weight: normal;
  color: white;
}
.uil {
  color: white;
  box-shadow: 5px;
  font-size: 15px;
  text-decoration: none;
}
.container-image{
  background-color: #FFD833;
}

        </style>
    </head>
    <body>
        <div class="container-fluid p-0">
            <!---first child------>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#ff571d;color:#fff;">
                <div class="container-fluid">
                    <img src="../images/botikalogo2.png" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                        
                        <?php
               if(!isset($_SESSION['admin_adminname'])){
                echo "<li class='nav-item'>
                <a class='nav-link text-light' href='#'>Welcome Guest</a>
              </li>";
              }else{
                echo "<li class='nav-item'>
                <a class='nav-link text-light' href='#'>Welcome&nbsp; <strong style='color: yellow'>    ".$_SESSION['admin_adminname']."</strong></a>
              </li>";
              }   
if(!isset($_SESSION['admin_adminname'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='admin_login.php'>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='admin_login.php'>Logout</a>
</li>";
}  
    
?>                 


                        </ul>
                   </nav>
                

                </div>
            </nav>
            <!---second child------>
            <div class="bg-light">
                <h2 class="text-center mb-0 p-2" style="background-color:#ffbc7e;color:darkgreen; font-family: 'Poppins', sans-serif; font-size:17px;font-weight:bold;caret-color:transparent;">MANAGE DETAILS</h2>
            </div>
            <!---third child------>
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                  
 
                    <div class="button bg-dark mt-0 text-center p-1">
                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px; width:160px;"><a href="insert_product.php" class="nav-link text-light my-1">INSERT PRODUCT</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="pagination.php" class="nav-link text-light my-1">VIEW PRODUCTS</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?insert_category" class="nav-link text-light my-1">INSERT CATEGORY</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?view_categories" class="nav-link text-light my-1">VIEW CATEGORIES</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?insert_brand" class="nav-link text-light my-1">INSERT BRAND</a></button>

                            <Button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?view_brands" class="nav-link text-light my-1">VIEW B.CHOICE</a></Button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?list_orders" class="nav-link text-light my-1">ALL ORDERS</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?list_payments" class="nav-link text-light my-1">ALL PAYMENTS</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?list_users" class="nav-link text-light my-1">USERS LIST</a></button>

                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="total_sales.php" class="nav-link text-light my-1">TOTAL SALES</a></button>

                                                        
                            <button class="my-3 text-center p-1" style="background-color:#ff571d;color:#333; font-family: 'Poppins', sans-serif; font-size:12px;width:160px;"><a href="index.php?logout_user" class="nav-link text-light my-1">LOGOUT</a></button>

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
                    //if(isset($_GET['view_products'])){
                    //    include('view_products.php');
                    //}
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
                    if(isset($_GET['delete_payment'])){
                      include('delete_payment.php');
                    }
                    if(isset($_GET['list_users'])){
                        include('list_users.php');
                    }
                                      
                    if(isset($_GET['logout_user'])){
                        include('logout_user.php');
                    }




                    
                ?>
            </div>

        <!--footer -->
    <div class="footer">
    <p style="margin-bottom:0px;">All rights reserved &nbsp;&#x26AB; Designed by A. A. Corbeta - 2023</p> 
       <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> 
  </div>

<!--footer--->
        </div>





    <!---Bootstrap js LINK------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!---<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    </body>
</html>
