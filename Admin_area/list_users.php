<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:20px;width:100%; padding:10px 5px 10px 5px; margin-bottom:5px">ALL USERS</h4>
 
<table class="table table-bordered mt-0">

    <thead>
    <?php
$get_payments="select * from `user_table`";
$result=mysqli_query($conn,$get_payments);
$row_count=mysqli_num_rows($result);


if($row_count==0){
    echo "<h4 class='text-danger text-center mt-4'>No User to display</h4>";
}else{
    echo " <tr>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>SI no.</th>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>Username</th>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>Email</th>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>Uploaded Image</th>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>Address</th>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>Mobile No.</th>
  <th class='text-center' style='background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold; border-color:#333'>Delete</th>
  </tr>
  </thead>
  <tbody class='bg-secondary text-light'>";
  
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
        $user_email=$row_data['user_email'];
        $user_image=$row_data['user_image'];
        $user_address=$row_data['user_address'];
        $user_mobile=$row_data['user_mobile'];
        $number++;

        echo "<tr>
        <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'>$number</td>
        <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'>$username</td>
        <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'>$user_email</td>
        <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><img src='../user_area/user_images/$user_image' alt='$username' class='profile_img' ' style='width:20%;height:25%;'/></td>
        <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'>$user_address</td>
        <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'>$user_mobile</td>
                
        <td class='bg-secondary text-light text-center text-decoration-none' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><a href='index.php?delete_order=<?php echo $user_id ?>' 
        type=button class=text-light text-decoration-none data-toggle=modal data-target=#exampleModal><img src='../images/trash.png' alt='' class='brightness'></a></td>
        
 </tr>";
        
    }
}

?>
    
    
       
    </tbody>

</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <h4>Confirm delete?  </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-decoration-none" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a> </button>

        <button type='button' class='btn btn-primary text-decoration-none'><a href='index.php?delete_brands=<?php echo $payment_id ?>' class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>