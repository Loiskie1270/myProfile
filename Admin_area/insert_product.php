<?php 
include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    // ACCESS IN IMAGES
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    
     // ACCESS IN IMAGES Temp Name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    // check empty condition
    if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script>alert('Field cannot be empty')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        // insert query
        $insert_product="insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query=mysqli_query($conn,$insert_product);
        if($result_query){
            echo "<script>alert('Product inserted successfully!')</script>";
        }
    }
}
?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Insert Products - Admin Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
         <!---Bootstrap CSS LINK------>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Fontawesome link -->
 <!-- for icons  -->
 <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="../style.css">
<style>

</style>
    
 </head>
 <body style="background-color:#f5ffcf;color:#fff;">
     <div class="container w-50 mt-3" style="background-color:#f5ffcf;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:100%; border-radius:5px; display:block; margin-left:auto; margin-right:auto;">
        <h3 class="text-center mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:20px;width:100%; padding:10px 5px 10px 5px; margin-bottom:5px">INSERT PRODUCTS</h3>
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data" style="background-color:#ffbc7e;color:#fff; width:100%;">
            <div class="form-outline mb-0 m-auto" style="padding: 15px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                <!--Title-->
                
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <div> 
                <!--Description-->
                <div class="form-outline mb-0 m-auto" style="padding: 10px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter description" autocomplete="off" required="required">
            
            </div>
            <div> 
                <!--keyword-->
                <div class="form-outline mb-0 m-auto" style="padding: 10px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keyword" autocomplete="off" required="required">
            </div>  
            <div> 
                <!--categories-->
                <div class="form-outline mb-0 m-auto" style="padding: 10px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                    <select name="product_category" id="" class="form-select">
                        <option value="">Select Category</option>
                        <?php 
                                $select_query="Select * from `categories`";
                                $result_query=mysqli_query($conn,$select_query);
                                while($row=mysqli_fetch_assoc($result_query)){
                                    $category_title=$row['category_title'];
                                    $category_id=$row['category_id'];
                                    echo "<option value='$category_id'>$category_title</option>";
                                }
                        
                        
                        ?>
                        <!--
                        <option value="">Category1 </option>
                        <option value="">Category2</option>
                        <option value="">Category3</option>
                        -->
                    </select>
            </div>
            <div> 
                <!--Brands-->
                <div class="form-outline mb-0 m-auto" style="padding: 10px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                    <select name="product_brands" id="" class="form-select">
                        <option value="">Select Brand</option>
                        <?php 
                                $select_query="Select * from `brands`";
                                $result_query=mysqli_query($conn,$select_query);
                                while($row=mysqli_fetch_assoc($result_query)){
                                    $brand_title=$row['brand_title'];
                                    $brand_id=$row['brand_id'];
                                    echo "<option value='$brand_id'>$brand_title</option>";
                                }

                        ?>
                        <!--
                        <option value="">Brand1 </option>
                        <option value="">Brand2</option>
                        <option value="">Brand3</option>
                        -->
                    </select>
            </div>
            <div> 
                <!--Image 1-->
                <div class="form-outline mb-0 m-auto" style="padding: 5px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                <label for="product_image1" class="form-label text-dark">Insert Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
            </div>  
            <div> 
                <!--Image 2-->
                <div class="form-outline mb-0 m-auto" style="padding: 5px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                <label for="product_image2" class="form-label text-dark">Insert Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
            </div> 
            <div> 
                <!--Image 3-->
                <div class="form-outline mb-0 m-auto" style="padding: 5px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                <label for="product_image3" class="form-label text-dark">Insert Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">
            </div> 
            <div> 
                <!--price-->
                <div class="form-outline mb-0 m-auto" style="padding: 5px 5px 5px 5px; width:80%; display:block; margin-left:auto; margin-right:auto;">
                <label for="product_price" class="form-label text-dark">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div> 
            <div> 
                <!--BUTTON INSERT PRODUCT-->
                <div class="form-outline mb-4 m-auto" style="padding: 5px 5px 5px 5px; width:50%; display:block; margin-left:auto; margin-right:auto;">
                <input type="submit" name="insert_product" class="btn mb-2 px-3" value="Insert Products" style="padding: 5px 5px 5px 5px; width:50%; display:block; margin-left:auto; margin-right:auto;background-color:#ff571d;color:#fff;">
                
            </div>    
             
        </form>

     </div>
 </body>
 </html>