<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:20px;width:100%; padding:10px 5px 10px 5px; margin-bottom:5px">ALL BRANDS</h4>
<table class="table table-bordered mt-0">
    <thead class="bg-info text-center">
        <tr>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:14px;font-weight:bold;">Serial No.</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:14px;font-weight:bold;">Brand Title</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:14px;font-weight:bold;">Edit</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:14px;font-weight:bold;">Delete</th>
        </tr>
    </thead>
    <tbody >
        <?php 
        $select_brands="select * from `brands`";
        $result=mysqli_query($conn,$select_brands);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $brand_id=$row['brand_id'];
            $brand_title=$row['brand_title'];
            $number++;
?>
        <tr class="text-center">
            <td class="bg-secondary text-light" style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'> <?php echo $number; ?></td>
            <td class="bg-secondary text-light" style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'><?php echo $brand_title; ?> </td>
            
    <td class='bg-secondary text-light text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'><a href='index.php?edit_brands=<?php echo $brand_id ?>' class='text-light'><img src='../images/edit-file5.png' alt='' class='brightness'></a></td>
    
    <td class='bg-secondary text-light text-center text-decoration-none'><a href='index.php?delete_brands=<?php echo $brand_id ?>' 
        type="button" class="text-light text-decoration-none" data-toggle="modal" data-target="#exampleModal"><img src='../images/trash.png' alt='' class='brightness'></a></td>

</tr>
<?php 

}?>     
    </tbody>
</table>

<!-- Button trigger modal -->
<!---<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>--->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4>Confirm delete?  </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-decoration-none" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a> </button>

        <button type='button' class='btn btn-primary text-decoration-none'><a href='index.php?delete_brands=<?php echo $brand_id ?>' class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>
