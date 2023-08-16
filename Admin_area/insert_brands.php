<?php 
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
    $brand_title=$_POST['brand_title'];

    // select data from database
    $select_query="select * from `brands` where brand_title='$brand_title'";
    $result_select=mysqli_query($conn, $select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('Selected brand already exist!')</script>";
    }else{

    $insert_query="insert into `brands` (brand_title) values ('$brand_title')";
    $result=mysqli_query($conn, $insert_query);
    if($result){
        echo "<script>alert('Brand inserted successfully!')</script>";
    }
}}
?>

<h3 class="text-bg-success text-center mt-3 mb-0">INSERT BRAND</h3>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert brands" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="bg-secondary text-light border-0 p-2 my-2" name="insert_brand" value="Insert Brands">
  <!---<button class="bg-info p-1 my-3 border-0">Insert Brands</button>--->
</div>
</form>