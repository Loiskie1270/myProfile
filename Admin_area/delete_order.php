<?php 

if(isset($_GET['delete_order'])){
    $delete_order=$_GET['delete_order'];
    //echo $delete_order;

    $delete_query="Delete from `user_orders` where order_id=$delete_order";
    $result=mysqli_query($conn,$delete_query);
    if($result){
        echo "<script>alert('Order deleted successfully!')</script>";
        echo "<script>window.open('./index.php?list_orders.php','_self')</script>";
    }
}

?>