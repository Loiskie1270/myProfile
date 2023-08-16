<?php 

if(isset($_GET['delete_products'])){
    $delete_id=$_GET['delete_products'];
    //echo $delete_id;

    // DELETE QUERY

    $delete_product="delete from `products` where product_id=$delete_id";
    $result_produt=mysqli_query($conn,$delete_product);
    if($result_produt){
        echo "<script>alert('Product deleted successfully!')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }
}


?>