<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">ALL ORDERS</h4>

<table class="table-responsive" style="display:block;margin-left:auto;margin-right:auto;">
    <thead>
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
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 70px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;font-weight:normal;'>SI no.</th>
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Amout Due</th>
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Invoice No.</th>
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Total Products</th>
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 250px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Order Date</th>
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Status</th>
    <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;border-top-right-radius:3px;'>Delete</th>
    </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";
     $number=0;
     while($row_data=mysqli_fetch_assoc($result)){
        $order_id=$row_data['order_id'];
        $user_id=$row_data['user_id'];
        $amout_due=number_format($row_data['amount_due'],2);
        $invoice_number=$row_data['invoice_number'];
        $total_products=$row_data['total_products'];
        $order_date=$row_data['order_date'];
        $order_status=$row_data['order_status'];
        $number++;
        echo "<tr>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 70px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$number</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>₱ $amout_due</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$invoice_number</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$total_products</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 250px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$order_date</td>
        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$order_status</td>

        
        <td class='text-center text-decoration-none' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;font-weight:bold;width: 140px;margin-left:5px;padding:5px 20px;caret-color:transparent;border:1px solid white;'><a href='index.php?delete_order=<?php echo $order_id ?>' class=text-'light text-decoration-none' onclick='return checkdelete()'><img src='../images/trash2.png' alt='' class='brightness' style='width:18px;'></a></td>
        
 </tr>";
    }   
  ?>   

<?php 
        
}?>  
 
 <script>
    function checkdelete(){
        return confirm('Delete this order now?');
    }
</script> 
    
       
    </tbody>

</table>

