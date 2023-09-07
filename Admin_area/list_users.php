<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">ALL USERS</h4>
 
<table class="table-responsive" style="display:block;margin-left:auto;margin-right:auto;">

    <thead>
    <?php
$get_payments="select * from `user_table`";
$result=mysqli_query($conn,$get_payments);
$row_count=mysqli_num_rows($result);


if($row_count==0){
    echo "<h4 class='text-danger text-center mt-4'>No User to display</h4>";
}else{
    echo "<tr>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:11px;width: 70px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;'>SI no.</th>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:2px solid lightgrey;'>Username</th>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:2px solid lightgrey;'>Email</th>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:2px solid lightgrey;'>Uploaded Image</th>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 250px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:2px solid lightgrey;'>Address</th>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:2px solid lightgrey;'>Mobile No.</th>
  <th class='text-center' style='background-color:#ffbc7e;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:2px solid lightgrey;border-top-right-radius:3px;'>Delete</th>
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
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;width: 70px;'>$number</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;width: 150px;'>$username</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;width: 150px;'>$user_email</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;width: 150px;'><img src='../user_area/user_images/$user_image' alt='$username' class='profile_img' ' style='width:20%;border-radius: 50%;background:#fff;margin-top:5px;margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;border:1px solid white;'/></td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;width: 250px;'>$user_address</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;width: 140px;'>$user_mobile</td>
                
        <td class='text-center text-decoration-none' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; width:140px; vertical-align:middle;padding:5px 15px;caret-color:transparent;border:1px solid white;'><a href='index.php?delete_order=<?php echo $user_id ?>' class='text-light text-decoration-none' onclick='return checkdelete()' ><img src='../images/trash2.png' alt='' class='brightness' style='width:25px;'></a></td>
        
 </tr>";
        
    }
}

?>
<script>
    function checkdelete(){
        return confirm('Delete this account now?');
    }
</script>   
    
       
    </tbody>

</table>

<!-- Modal 
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
</div>-->