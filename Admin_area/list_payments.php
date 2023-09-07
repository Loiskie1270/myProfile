<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">ALL PAYMENTS</h4>

<table class="table-responsive" style="display:block;margin-left:auto;margin-right:auto;">
    <thead>

<?php
$get_payments="select * from `user_payments`";
$result=mysqli_query($conn,$get_payments);
$row_count=mysqli_num_rows($result);


if($row_count==0){
    echo "<h4 class='text-danger text-center mt-4'>No payment to display</h4>";
}else{
    echo " <tr>
  <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 70px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;font-weight:normal;'>SI No.</th>

  <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Invoice No.</th>

  <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Amount</th>

  <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 250px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Payment Mode</th>

  <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 250px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;'>Order Date</th>
  
  <th class='text-center' style='background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;border-top-right-radius:3px;'>Delete</th>
  </tr>
  </thead>
  <tbody class='bg-secondary text-light'>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        
        $payment_id=$row_data['payment_id'];
        $order_id=$row_data['order_id'];
        $invoice_number=$row_data['invoice_number'];
        $amount=number_format($row_data['amount'],2);
        $payment_mode=$row_data['payment_mode'];
        $payment_date=$row_data['date'];
        $number++;

        echo "<tr>

        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$number</td>

        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$invoice_number</td>

        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 140px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>₱ $amount</td>

        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 250px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$payment_mode</td>

        <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;width: 220px;margin-left:5px;padding:5px 15px;caret-color:transparent;border:1px solid white;'>$payment_date</td>
        
        <td class='text-center text-decoration-none' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px;font-weight:bold;width: 180px;margin-left:5px;padding:5px 20px;caret-color:transparent;border:1px solid white;'><a href='index.php?delete_payment=<?php echo $payment_id ?>' class='text-light text-decoration-none' onclick='return checkdelete()'><img src='../images/trash2.png' alt='' class='brightness' style='width:18px;'></a></td>
        
 </tr>";
        
    }
}

?>
<script>
    function checkdelete(){
        return confirm('Delete this payment now?');
    }
</script>

    </tbody>

</table>

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      
      <div class="modal-body" style="width:350px;">
        <h4 style="color:#ff571d; font-size:17px; margin-left:20px;">Confirm Delete?  </h4>
      </div>
      <div class="modal-footer">
        <button style="display: inline;width:200px; margin: 0 auto;" type="button" class="btn btn-secondary text-decoration-none" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a> </button>

        <button style="display: inline;width:200px; margin: 0 auto;" type='button' class='btn btn-primary text-decoration-none'><a href='index.php?delete_payment=<?php echo $payment_id ?>' class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div> -->