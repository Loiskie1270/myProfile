<?php 
if(isset($_GET['edit_brands'])){
    $edit_brand=$_GET['edit_brands'];
  //echo $edit_brand;

    $get_brands="select * from `brands` where brand_id=$edit_brand";
    $result=mysqli_query($conn,$get_brands);
    $row=mysqli_fetch_assoc($result);
    $brand_title=$row['brand_title'];
    //echo $brand_title;

}

if(isset($_POST['edit-brand'])){
    $brand_title=$_POST['brand_title'];

    $update_query="update `brands` set brand_title='$brand_title' where brand_id=$edit_brand";
    $result_brand=mysqli_query($conn,$update_query);
    if($result_brand){
        echo "<script>alert('Brand updated successfully!')</script>";
        echo "<script>window.open('./index.php?view_brands.php','_self')</script>";
    }

}

?>

<div class="container mt-3">
    <h3 class="text-center" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">Edit Brand</h3>

    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_title" class="form-label"><strong>Brand Title</strong></label>
            <input type="text" name="brand_title" id="brand_title" class="form-control" required="required" value='<?php echo $brand_title;?>'>
        </div>
        <input type="submit" value="Update Brand" class="btn px-3 mb-3" name="edit-brand" style="background-color:#ff571d;color:#fff;font-family: 'Poppins', sans-serif;font-size:13px;caret-color:transparent;">
    </form>

</div>
