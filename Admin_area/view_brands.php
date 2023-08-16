<h4 class="text-center text-bg-success mt-3 mb-0">ALL BRANDS</h4>
<table class="table table-bordered mt-0">
    <thead class="bg-info text-center">
        <tr>
            <th class="bg-primary text-light text-center">Serial No.</th>
            <th class="bg-primary text-light text-center">Brand Title</th>
            <th class="bg-primary text-light text-center">Edit</th>
            <th class="bg-primary text-light text-center">Delete</th>
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
            <td class="bg-secondary text-light"> <?php echo $number; ?></td>
            <td class="bg-secondary text-light"><?php echo $brand_title; ?> </td>
            
    <td class='bg-secondary text-light text-center'><a href='index.php?edit_brands=<?php echo $brand_id ?>' class='text-light'><img src='../images/edit-file5.png' alt='' class='brightness'></a></td>
    
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
