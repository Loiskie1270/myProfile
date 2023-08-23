<!--connect file-->
<?php 
include('includes/connect.php');
include('functions/common_functions.php');
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Botika</title>

    <!-- Bootstrap CSS link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Fontawesome link -->
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style.css -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
    +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
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

.nav-link:hover{
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
<!----NAVBAR------>
    <div class="container-fluid bg-light p-0">
        <!----First child------>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff571d; padding:10px; width:101%">
  <div class="container-fluid">
  <img src="./images/botikalogo2.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" style="margin-left:15px; font-weight:bold; margin-top:-7px" href="#"><strong>Total Price: <font size="+2">₱ <?php total_cart_price();?></font></strong></a> 
        </li>
      
    </div>
  </div>
</nav>
<!----End of NAVBAR------>

<!--calling cart function -->
<?php 
cart();
?>

<!--second Child -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffbc7e; padding:0px; width:100%; height:25px;">
  <ul class="navbar nav me-auto">
    
          <?php 
          if(!isset($_SESSION['username'])){
            echo "<li class='nav-item'>
            <a class='nav-link text-dark' href='#'>Welcome Guest</a>
          </li>";
          }else{
            echo "<li class='nav-item'>
            <a class='nav-link text-dark href='#'>Welcome <strong style='color: yellow'>    ".$_SESSION['username']."</strong></a>
          </li>";
          }   
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='./user_login.php'>Login</a>
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
<div class="container-image" style="background-color: #ff571d; padding:10px; width:100%">
<p style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-2px;  margin-left: -9px; font-size: 15px">GARANTISADO&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;GAMOT&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;BAGO</p>
  <!--<img src="images/pebslogo4.png" alt="" class="logo_img">-->
</div>

<!--fourth child -->

<div class="container" style="background-color:#ffbc7e;color:#fff; font-family: 'Poppins', sans-serif; font-size:12px; border-radius:3px;">
    <div class="row mt-2 mb-2">
      <form action="" method="post" class="mt-4 mb-0">
        <table class="table table-bordered text-center" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:300;">
          
            <tbody>
              <!----PHP CODE TO DISPLAY DYNAMIC DATA---->
              <?php 
  //global $conn;
  $get_ip_add = getIPAddress();
  $total_price=0;
  $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
  $result=mysqli_query($conn,$cart_query);
  $result_count=mysqli_num_rows($result);
  if($result_count>0){
//    echo "  <thead>
//    <tr>
//        <th>Product Title</th>
//        <th>Product Image</th>
//        <th>Quantity</th>
//        <th>Total Price</th>
//        <th>Remove</th>
//        <th colspan='2'>Operations</th>
//    </tr>
//</thead>
//</body>";
  while($row=mysqli_fetch_array( $result)){
    $product_id=$row['product_id'];
    $select_products="select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($conn,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
  $product_price=array($row_product_price['product_price']);
  $price_table=$row_product_price['product_price'];
  $product_title=$row_product_price['product_title'];
  $product_image1=$row_product_price['product_image1'];
  $product_values=array_sum($product_price); 
  $total_price+=$product_values;   
  
  ?>
  <thead>
    <tr>
  <thead>
        <th style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:normal;" >Product Title</th>
        <th style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:normal;">Product Image</th>
        <th style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:normal; width: 20px; margin:4px 0 0;">Quantity</th>
        <th style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:normal;">Total Price</th>
        <th style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:normal; width:20px;">Remove</th>
        <th colspan='2' style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:14px; font-weight:normal; width:40%;">Action Taken</th>
    </tr>
</thead>
</body> 
                <tr>
                    <td style="vertical-align: middle;"><?php echo $product_title?></td>
                    <td style="vertical-align: middle;"><img src="./admin_area/product_images/<?php echo $product_image1?>" alt="" style="width:60px; height:60px;" class="cart_img"></td>
                    <td style="vertical-align: middle;"><input type="text" name="qty" class="form-input "></td>
                    <style>
                      input[type=text] {
                      margin: 4px 0 0;
                      line-height: normal;
                      width: 25px;
                      height: 25px;
                      }
                    </style>


                    <?php 
$get_ip_add = getIPAddress();
if(isset($_POST['update_cart'])){
    $quantities=$_POST['qty'];
    $update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
    $result_products_quantity=mysqli_query($conn,$update_cart);
    $total_price=$total_price*$quantities;
}                    
                    ?>
                    <td style="vertical-align: middle; font-size:14px;"><strong><?php echo $price_table?></strong> </td>
                    <style>
                      input[type=checkbox] {
                      margin: 4px 0 0;
                      line-height: normal;
                      width: 25px;
                      height: 25px;
                      }
                    </style>
                    <td style="vertical-align: middle; font-size:20px;"><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                    <td style="vertical-align: middle;">
                        <!---<button class="bg-info px-3 border-0 mx-2">Update</button>--->
                        <input type="submit" value="Update Cart" style="vertical-align: middle; padding:5px 5px;background-color:#ff571d;color:#fff;border-radius:3px;" class=" px-3 border-0 mx-2" name="update_cart">
                        <!--<button class="bg-dark px-3 border-0 mx-2 text-light">Remove</button>-->
                        <input type="submit" value="Remove Cart" style="vertical-align: middle; padding:5px 5px;color:#fff;border-radius:3px;" class="bg-secondary px-3 border-0 mx-2 text-light" name="remove_cart">
                    </td>
                </tr>
<?php   }}}

else{
  echo "<h5 class='text-center' style='background-color:#ff571d;color:#fff;font-family: Poppins, sans-serif;font-size:18px;font-weight:bold; margin-top:-15px; border-radius:3px; width:20%; padding: 5px 10px;'><strong>CART IS EMPTY</strong></h5>";
}
?>            
            </tbody>
        </table>
        <!---subtotal---->
        <div class="d-flex mb-2">
          <?php 
$get_ip_add = getIPAddress();
//$total_price=0;
$cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
$result=mysqli_query($conn,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
  echo "<h4 class='px-3' style='font-size:20px; font-weight:500; vertical-align:middle; color:#db6900;'>Subtotal: <strong class='text-dark'> ₱ $total_price </strong></h4>
  <input type='submit' value='Continue Shopping' class='px-3 py2 border-0 mx-3' style='vertical-align: middle; padding:5px 5px;background-color:#ff571d;color:#fff;border-radius:3px; font-size:14px;' name='continue_shopping'>
  <button class='bg-secondary px-3 py-2 border-0 text-light' style='vertical-align: middle; padding:5px 5px;color:#fff;border-radius:3px; font-size:14px;'><a class='text-light text-decoration-none' href='./user_area/checkout.php'>Checkout</a></button>";
}else{
  echo " <input type='submit' value='CONTINUE SHOPPING' class='border-0' name='continue_shopping' style='background-color:grey;color:#fff;font-family: Poppins, sans-serif;font-size:12px;font-weight:bold; margin-top:-15px; border-radius:3px; width:20%; padding: 5px 10px;margin-left:-1px;'>";
}            
if(isset($_POST['continue_shopping'])){
  echo "<script>window.open('index.php','_self')</script>";
}          
          ?>
         
          <!-- <h4 class="px-3">Subtotal: <strong class="text-info">P <?php echo $total_price?></strong></h4>
             <a href="index.php"><button class="bg-info px-3 border-0 mx-2">Continue Shopping</button></a>
            <a href="index.php"><button class="bg-black px-3 border-0 text-light">Checkout</button></a>--->
        </div>
    </div>
    </form>  
<!---function to remove items---->    
<?php 
function remove_cart_item(){
  global $conn;
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
      echo $remove_id;
      $delete_query="Delete from `cart_details` where product_id=$remove_id";
      $run_delete=mysqli_query($conn,$delete_query);
      if($run_delete){
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
}
echo $remove_item=remove_cart_item();


?>
</div>
<!-- FOOTER---->    

  <div class="footer">
    <p style="margin-bottom:0px">All rights reserved &nbsp;&#x26AB; Designed by A. A. Corbeta - 2023</p> 
       <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> 
  </div>

    </div>
    
    <!--Bootstrap Js Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>

</html>
