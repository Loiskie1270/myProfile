<?php 
if(isset($_GET['edit_category'])){
    $edit_category=$_GET['edit_category'];
    //echo $edit_category;

    $get_category="select * from `categories` where category_id=$edit_category";
    $result=mysqli_query($conn,$get_category);
    $row=mysqli_fetch_assoc($result);
    $category_title=$row['category_title'];
    //echo $category_title;



}

if(isset($_POST['edit-category'])){
    $cat_title=$_POST['category_title'];

    $update_query="update `categories` set category_title='$cat_title' where category_id=$edit_category";
    $result_cat=mysqli_query($conn,$update_query);
    if($result_cat){
        echo "<script>alert('Category updated successfully!')</script>";
        echo "<script>window.open('./index.php?view_categories.php','_self')</script>";
    }

}

?>

<div class="container mt-3">
    <h3 class="text-center" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">Edit Category</h3>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="category_title" class="form-label"><strong>Category Title</strong></label>
            <input type="text" name="category_title" id="category_title" class="form-control" required="required" style="caret-color:transparent;" value='<?php echo $category_title;?>'>
        </div>
        <input type="submit" value="Update Category" class="btn px-3 mb-3" name="edit-category" style="background-color:#ff571d;color:#fff;font-family: 'Poppins', sans-serif;font-size:13px;caret-color:transparent;">
    </form>

</div>
