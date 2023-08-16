
    <h3 class="text-danger mt-5">Delete Account</h3>
    <form action="" method="post" class="mt-4">
        <div class="form-outline w-50 m-auto">
        <input type="submit" class="form-control bg-info mb-4 text-light" name="delete" value="Delete Account">    
        </div>
        <div class="form-outline w-50 m-auto">
        <input type="submit" class="form-control bg-info text-light" name="undelete" value="Undelete Account">    
        </div>
    </form>

    <?php 
$username_session=$_SESSION['username']; 
if(isset($_POST['delete'])){
    $delete_query="delete from `user_table` where username='$username_session'";
    $result=mysqli_query($conn, $delete_query);
    if($result){
        session_destroy();
        echo "<script>alert('Account deleted successfully!')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

if(isset($_POST['undelete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}
?>
