<!--connect file-->
<?php 
include('../includes/connect.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    //echo $order_id;
    $select_data="select * from `user_orders` where order_id=$order_id";
    $result=mysqli_query($conn,$select_data);
    $row_fetch=mysqli_fetch_assoc($result);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amount_due'];
}

if(isset($_POST['confirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="insert into `user_payments` (order_id,invoice_number,amount,payment_mode) values ($order_id,$invoice_number,$amount,'$payment_mode')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
       // echo "<h3 class='text-center text-light'>Payment submitted</h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="update `user_orders` set order_status='Complete' where order_id=$order_id";
    $result_orders=mysqli_query($conn,$update_orders);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Fontawesome link -->

    <!-- for icons  -->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style.css -->
    <link rel="stylesheet" href="../style.css">

<style>

.container-fluid{
    
    font-weight: bold;
    margin-top: 40px;
    margin-bottom: 20px;
    padding: 3px 3px 3px 3px;
    width: 696px;
    height: 94px;
    margin-left: 300px;
    background-color: burlywood;
    border-radius: 4px;
    box-shadow: 5px 0px 5px 5px rgba(0, 0, 0, 0.4); 
}

.container{
    padding: 3px 3px 5px 3px;
    margin-left: -3px;
    background-color: dimgray;
    width: 696px;
    height: 350px;
    border-radius: 0px;
    box-shadow: 5px 0px 5px 5px rgba(0, 0, 0, 0.6); 
}
h3{
    position: relative;
    margin-top: 5px;
    height: 0px;
    top: -25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
    
}
.form-outline .bg-info{
    font-weight: bold;
    width: 125px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);  
}



</style>    

<body class="container-fluid">
    <h3 class="text-center text-dark mt-5">CONFIRM PAYMENT</h3>
    <div class="container my-5">
        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
            <label for="" class="text-light">Invoice Number</label>
                 <input type="text" class="form-control w-50 m-auto" name="invoice_number" 
                 value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Amount</label>
                 <input type="text" class="form-control w-50 m-auto" name="amount" 
                 value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                 <select name="payment_mode" class="form-select w-50 m-auto">
                    <option>Payment Mode</option>
                    <option>Cash on Delivery</option>
                    <option>PayOffline</option>
                    <option>GCash</option>
                    <option>BancNet</option>
                    <option>GrabPay</option>
                    <option>Paymaya</option>
                    <option>CoinsPH</option>
                    <option>PayPal</option>
                   
                 </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
               <input type="submit" class="bg-info text-light py-2 px-3 border-0 text-decoration-none" value="Confirm" name="confirm_payment">
            </div>

        </form>
    </div>
</body>
</html>    
