<h4 class="text-center text-bg-success mt-3 mb-0">ALL ORDERS</h4>
<table class="table table-bordered mt-0">
    <thead class="bg-info">
    <?php
$get_orders="select * from `user_orders`";
$result=mysqli_query($conn,$get_orders);
$row_count=mysqli_num_rows($result);

//if($row_count==0){
  //echo "<h4 class='text-danger text-center mt-5'>No order to display</h4>";
//}else
  if($row_count==0){
    echo "<h4 class='text-danger text-center mt-5'>No order to display</h4>";
  }else{
      echo "<tr>
    <th class='bg-primary text-light text-center'>SI no.</th>
    <th class='bg-primary text-light text-center'>Amout Due</th>
    <th class='bg-primary text-light text-center'>Invoice No.</th>
    <th class='bg-primary text-light text-center'>Total Products</th>
    <th class='bg-primary text-light text-center'>Order Date</th>
    <th class='bg-primary text-light text-center'>Status</th>
    <th class='bg-primary text-light text-center'>Delete</th>
    </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";
     $number=0;
     while($row_data=mysqli_fetch_assoc($result)){
        $order_id=$row_data['order_id'];
        $user_id=$row_data['user_id'];
        $amout_due=$row_data['amount_due'];
        $invoice_number=$row_data['invoice_number'];
        $total_products=$row_data['total_products'];
        $order_date=$row_data['order_date'];
        $order_status=$row_data['order_status'];
        $number++;
        echo "<tr>
        <td class='bg-secondary text-center text-light'>$number</td>
        <td class='bg-secondary text-center text-light'>$amout_due</td>
        <td class='bg-secondary text-center text-light'>$invoice_number</td>
        <td class='bg-secondary text-center text-light'>$total_products</td>
        <td class='bg-secondary text-center text-light'>$order_date</td>
        <td class='bg-secondary text-center text-light'>$order_status</td>

        
        <td class='bg-secondary text-light text-center text-decoration-none'><a href='index.php?delete_order=<?php echo $order_id ?>' 
        type=button class=text-light text-decoration-none data-toggle=modal data-target=#exampleModal><img src='../images/trash.png' alt='' class='brightness'></a></td>
        
 </tr>";
    }   
  ?>   
    

        
        
<?php 
        
}?>  
        
    
       
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

        <button type='button' class='btn btn-primary text-decoration-none'><a href='index.php?delete_order=<?php echo $order_id ?>' class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>