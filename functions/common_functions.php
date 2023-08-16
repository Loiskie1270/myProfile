<?php

$conn = new mysqli('localhost', 'root', '', 'pebstore');

if(!$conn){
    echo "Connection success!";
}


function getproducts(){
    global $conn;

    //condition to isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    
    $select_query="select * from `products` order by rand() limit 0,6";
    $result_query=mysqli_query($conn,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
          <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <br>
            
            <p class='card-text text-smaller'>$product_description</p>
            <p class='card-text'>Price:<strong> ₱ $product_price </strong></p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
          </div>
      </div>
    </div>";
}
}
}
}


//get all products
function get_all_products(){
  global $conn;

    //condition to isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    
    $select_query="select * from `products` order by rand() limit 0,6";
    $result_query=mysqli_query($conn,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
          <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <br>
            <p class='card-text text-smaller'>$product_description</p>
            <p class='card-text'>Price:<strong> ₱ $product_price </strong></p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
            <a href='product_details.php?product_id=$product_id'
            <a href='#' class='btn btn-secondary'>View more</a>
          </div>
      </div>
    </div>";
}
}
}
}

//get unique category
function get_uniqe_category(){
  global $conn;

  //condition to isset or not
  if(isset($_GET['category'])){
    //if(!isset($_GET['brand'])){
    $category_id=$_GET['category']; 
  $select_query="select * from `products` where category_id like '%$category_id%' order by rand() limit 0,6";
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h1 class='text-center'>No category available</h1>";
  }
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    echo "<div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <br>
          <p class='card-text text-smaller'>$product_description</p>
          <p class='card-text'>Price:<strong> ₱ $product_price </strong></p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
          <a href='product_details.php?product_id=$product_id'
          <a href='#' class='btn btn-secondary'>View more</a>
        </div>
    </div>
  </div>";
}
}
}

function get_uniqe_brands(){
  global $conn;
    if(isset($_GET['brand'])){
      $brand_id=$_GET['brand']; 
  $select_query="select * from `products` where brand_id like '%$brand_id%' order by rand() limit 0,6";
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h1 class='text-center'>No brand available</h1>";
    }
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    echo "<div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <br>
          <p class='card-text text-smaller'>$product_description</p>
          <p class='card-text'>Price:<strong> ₱ $product_price </strong></p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
          <a href='product_details.php?product_id=$product_id'
          <a href='#' class='btn btn-secondary'>View more</a>
        </div>
    </div>
  </div>";
}
}
}

//display brands in sidenav
function getbrands(){
    global $conn;
    $select_brands="select * from `brands`";
$result_brands=mysqli_query($conn, $select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link text-decoration-none' style='background-color: #fff6d2; color:darkgreen; font-size: 14px; margin-bottom: 2px; margin-top: 2px'>$brand_title</a>
</li>";
}
}

// displaying categories in sidenav
function getcategories(){
  global $conn;
  $select_categories="select * from `categories`";
$result_categories=mysqli_query($conn, $select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "<li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-decoration-none' style='background-color: #fff6d2; color:darkgreen; font-size: 14px; margin-bottom: 2px; margin-top: 2px'>$category_title</a>
</li>";
}
}

//get unique brand

//search products function

function search_product(){
  global $conn;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
    //condition to isset or not
    //if(!isset($_GET['category'])){
    //  if(!isset($_GET['brand'])){
    $search_query="select * from `products` where product_keywords like '%$search_data_value%' order by rand()limit 0,6";
    //$select_query="select * from `products` order by rand() limit 0,9";
$result_query=mysqli_query($conn,$search_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
      echo "<h3 class='text-center'>No results found on this category!</h3>";
}    
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mb-2'>
      <div class='card'>
          <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <br>
            <p class='card-text text-smaller'>$product_description</p>
            <p class='card-text'>Price:<strong> ₱ $product_price </strong></p>
            <a href='index.php?add_to_cart=$product_id' class='align-self-end btn btn-info' style='margin-top: auto'>Add to cart</a>
            <a href='product_details.php?product_id=$product_id'
            <a href='#' class='align-self-end btn btn-secondary' style='margin-top: auto'>View more</a>
          </div>
      </div>
    </div>";
}
}
}

// view details function
function view_details(){
  global $conn;

    //condition to isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $product_id=$_GET['product_id'];  
    $select_query="select * from `products` where product_id=$product_id";
    $result_query=mysqli_query($conn,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_image2=$row['product_image2'];
      $product_image3=$row['product_image3'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
          <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <br>
            <p class='card-text text-smaller'>$product_description</p>
            <p class='card-text'>Price:<strong> ₱ $product_price </strong></p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
            <a href='index.php' class='btn btn-secondary'>Go home</a>
          </div>
      </div>
    </div>
    
    <div class='col-md-8'>
            <!--related images---->
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='text-center w-50 mt-5 text-bg-dark mb-0'>RELATED PRODUCTS</h4>
                </div>
                <div class='col-md-6 mt-5 mb-0'>
                <img src='./images/$product_image2' class='card-img-top mt-5 text-bg-info p-2' alt='$product_title'>
                </div>
                <div class='col-md-6 mt-5 mb-0'>
                <img src='./images/$product_image3' class='card-img-top text-bg-success p-2' alt='$product_title'>
                </div>
            </div>
        </div>";
    
}
}
}
}
}

//GET IP address (Internet Protocol) FUNCTION
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 

// CART FUNCTION
function cart(){
if(isset($_GET['add_to_cart'])){
  global $conn;
  $get_ip_add = getIPAddress(); 
  $get_product_id=$_GET['add_to_cart'];

  $select_query="select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
      echo "<script>alert('Item already added in cart!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
  
}else{
  $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_add',0)";
  $result_query=mysqli_query($conn,$insert_query);
      echo "<script>alert('Item successfully added to cart!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
}  
}
}

// function to get cart item number
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $get_ip_add = getIPAddress(); 
    $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    }else{
      global $conn;
      $get_ip_add = getIPAddress(); 
      $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
      $count_cart_items=mysqli_num_rows($result_query);
  }  
echo $count_cart_items;
  
}

// total price function
function total_cart_price(){
  global $conn;
  $get_ip_add = getIPAddress();
  $total_price=0;
  $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
  $result=mysqli_query($conn,$cart_query);
  while($row=mysqli_fetch_array( $result)){
    $product_id=$row['product_id'];
    $select_products="select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($conn,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
  $product_price=array($row_product_price['product_price']);
  $product_values=array_sum($product_price); 
  $total_price+=$product_values;   
    }
  }
  echo $total_price;
}

// GET USER ORDER_DETAILS
function get_user_order_details(){
  global $conn;
  $username=$_SESSION['username'];
  $get_details="select * from `user_table` where username='$username'";
  $result_query=mysqli_query($conn,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];
    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['delete_account'])){
          $get_orders="Select * from `user_orders` where user_id=$user_id and order_status='pending'";
          $result_order_query=mysqli_query($conn,$get_orders);
          $row_count=mysqli_num_rows($result_order_query);
          if($row_count>0){
            echo "<h3 class='text-center text-success mt-5 mb-2'>You have <span class='tex-danger'>$row_count</span> Pending Orders </h3>
            <p class='text-center'><strong><a href='profile.php?my_orders' class='text-dark'>Order Details</a></strong></p>";
          }else{
            echo "<h3 class='text-center w-50 text-bg-success mt-5 mb-0'>YOU HAVE NO PENDING ORDER</h3>
            <p class='text-center w-50 text-bg-info'><strong><a href='../index.php' class='text-dark text-decoration-none'>EXPLORE MORE</a></strong></p>";
          }
        }
      }
    }
  }
}
?>