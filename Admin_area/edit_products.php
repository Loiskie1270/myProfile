<?php 
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    //echo $edit_id;
    $get_data="select * from `products` where product_id=$edit_id";
    $result=mysqli_query($conn,$get_data);
    $row=mysqli_fetch_assoc( $result);
    $product_title= $row['product_title'];
    $product_description= $row['product_description'];
    $product_keywords= $row['product_keywords'];
    $category_id= $row['category_id'];
    $brand_id= $row['brand_id'];
    $product_image1= $row['product_image1'];
    $product_image2= $row['product_image2'];
    $product_image3= $row['product_image3'];
    $product_price= $row['product_price'];

    // FETCHING CATEGORY NAME (CATEGORY_ID)
    $select_category="select * from `categories` where category_id=$category_id";
    $result_category=mysqli_query($conn,$select_category);
    $row_category=mysqli_fetch_assoc($result_category);
    $category_title=$row_category['category_title'];
    //echo  $category_title;

     // FETCHING BRAND NAME (BRAND_ID)
     $select_brand="select * from `brands` where brand_id=$brand_id";
     $result_brand=mysqli_query($conn,$select_brand);
     $row_brand=mysqli_fetch_assoc($result_brand);
     $brand_title=$row_brand['brand_title'];
     //echo  $brand_title;
}
?>
<div class="container w-50" style="background-color:#ffbc7e;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:100%; display:block; margin-left:auto; margin-right:auto; border-radius:3px;">
    <h3 class="text-center" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:20px; padding:10px 10px 10px 10px; margin-bottom:15px; display: inline-block;  width:fit-content; margin-top:20px; border-radius:3px; margin-left:180px;" >EDIT PRODUCT</h3>

    <form action="" method="post" enctype="multipart/form-data" style="background-color:#ffbc7e;color:#fff; width:100%;">

        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;">

            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" id="product_title" value="<?php echo $product_title?>" name="product_title" class="form-control" required="required">
        </div>

        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;">

            <label for="product_description" class="form-label ">Product Description</label>
            <input type="text" id="product_description" value="<?php echo $product_description?>" name="product_description" class="form-control" required="required">
        </div>

        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;">

            <label for="product_keywords" class="form-label ">Product Keywords</label>
            <input type="text" id="product_keywords" value="<?php echo $product_keywords?>"  name="product_keywords" class="form-control" required="required">
        </div>

        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;">

        <label for="product_category" class="form-label ">Product Category</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title?>"><?php echo $category_title?></option>
                <?php 
$select_category_all="select * from `categories`";
$result_category_all=mysqli_query($conn,$select_category_all);
while($row_category_all=mysqli_fetch_assoc($result_category_all)){
    $category_title=$row_category_all['category_title'];
    $category_id=$row_category_all['category_id'];  
    echo "<option value='category_id'>$category_title</option>";
};    
  
?>
                
            </select>
        </div>
        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;">
        <label for="product_brands" class="form-label ">Product Brand</label>    
            <select name="product_brands" class="form-select">
                <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>
                <?php 
$select_brand_all="select * from `brands`";
$result_brand_all=mysqli_query($conn,$select_brand_all);
while($row_brand_all=mysqli_fetch_assoc($result_brand_all)){
    $brand_title=$row_brand_all['brand_title'];
    $brand_id=$row_brand_all['brand_id'];  
    echo "<option value='brand_id'>$brand_title</option>";
};    
?>  
               
            </select>
        </div>
        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;margin-top:2px;">
            <label for="product_image1" class="form-label">Image1</label>
            <div class="d-flex">
            <input type="file" id="product_image1" name="product_image1" class="form-control w-60 m-auto" required="required">&nbsp;&nbsp;
            <img src="./product_images/<?php echo $product_image1 ?>" style="width:15%; border-radius:5px;" alt="" class="product1_img">
            </div>
        </div>
        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto;margin-top:-2px;">
            <label for="product_image2" class="form-label" style="font-family: 'Poppins', sans-serif; font-size:14px; margin-top:-15px;">Image2</label>
            <div class="d-flex">
            <input type="file" id="product_image2" name="product_image2" class="form-control w-60 m-auto" required="required">&nbsp;&nbsp;
            <img src="./product_images/<?php echo $product_image2 ?>" style="width:15%; border-radius:5px;" alt="" class="product1_img">
            </div>
        </div>
        <div class="form_outline m-auto mb-0" style="width:80%; display:block; margin-left:auto; margin-right:auto; gap:2;">
            <label for="product_image3" class="form-label" style="font-family: 'Poppins', sans-serif; font-size:14px; margin-top:-15px;">Image3</label>
            <div class="d-flex">
            <input type="file" id="product_image3" name="product_image3" class="form-control w-60 m-auto" required="required">&nbsp;&nbsp;
            <img src="./product_images/<?php echo $product_image3 ?>" style="width:15%; border-radius:5px;" alt="" class="product1_img">
            </div>
        </div>
        <div class="form_outline m-auto mb-4" style="width:80%; display:block; margin-left:auto; margin-right:auto;">
            <label for="product_price" class="form-label ">Product Price</label>
            <input type="text" id="product_price" value="<?php echo $product_price?>" name="product_price" class="form-control" required="required" style="margin-top:-10px;">
        </div>
        <div class="text-center">
        <input type="submit" name="edit_product" value="Update Product" style="background-color: #ff571d;color:#fff; margin-bottom:15px; display: inline-block; margin-left:50px; width: fit-content; margin-top:20px; border-radius:3px; margin-left:30px;"  class="btn mb-3 border-0">
        </div>
    </form>
</div>

<!--EDITING PRODUCTS---->
<?php 

if(isset($_POST['edit_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];

    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    // CHECK FIELDS EMPTY
    if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' or $product_price==''){
        echo "<script>alert(Please don't leave empty fields.')</script>";
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        // UPDATE QUERY PRODUCTS
        $update_products="update `products` set product_title='$product_title',product_description='$product_description',product_keywords='$product_keywords',category_id='$product_category',brand_id='$brand_id',product_image1='$product_image1',product_image2='$product_image2',product_image3='$product_image3',product_price='$product_price',date=NOW() where product_id=$edit_id";
        $result_update=mysqli_query($conn,$update_products);
        if($result_update){
            echo "<script>alert('Product updated successfully!')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
            //echo "<script>window.open('./insert_product.php','_self')</script>";
        }
    }

}






?>