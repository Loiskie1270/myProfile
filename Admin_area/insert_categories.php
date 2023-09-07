<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');

</style>
<script src="https://kit.fontawesome.com/adadafda03.js" crossorigin="anonymous"></script>

<?php 
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];

    // select data from database
    $select_query="select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($conn, $select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('Selected category already exist!')</script>";
    }else{

    $insert_query="insert into `categories` (category_title) values ('$category_title')";
    $result=mysqli_query($conn, $insert_query);
    if($result){
        echo "<script>alert('Category inserted successfully!')</script>";
    }
}}
?>

<h3 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">INSERT CATEGORY</h3>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text" id="basic-addon1" style="background-color: #db6900;color:fff;"><i class="fa-solid fa-file-invoice"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="text-light border-0 p-2 my-2" style="display:block;margin-left:auto;margin-right:auto; font-family: 'Poppins', sans-serif;background-color: #ff571d; color:#fff; width: 150px;font-size:14px; border-radius:3px;box-shadow: 1px 1px 3px 3px rgba(0, 0, 0, 0.3);" name="insert_cat" value="INSERT CATEGORY">
  <!---<button class="bg-info p-1 my-3 border-0">Insert categories</button>--->
</div>
</form>