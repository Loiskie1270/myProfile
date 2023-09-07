
<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

 <h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">VIEW ALL PRODUCTS</h4>
 <table class="table-responsive" style="display:block;margin-left:auto;margin-right:auto;">
    <thead>
        <tr>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 70px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;font-weight:normal;">ID</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width:250px;caret-color:transparent;font-weight:normal;" >Product Title</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width:200px;caret-color:transparent;font-weight:normal;">Product Image</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 150px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Product Price</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;"> Total Sold</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Status</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Edit</th>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-right-radius:3px;font-weight:normal;">Delete</th>
            
        </tr>
    </thead>
    <tbody class="bg-secondary text-dark mb-3">
        <?php 
//paging
//if (isset($_GET['page_no']) && $_GET['page_no'] !== "") {
//  $page_no = $_GET['page_no'];
//}else{
//  $page_no = 1;/
//}

//total records to display
//$total_records_per_page = 10;

//get the page offset
//$offset = ($page_no - 1) * $total_records_per_page;
//$sql = "select * from `products` LIMIT $offset , $total_records_per_page";

//previous
//$previous = $page_no - 1;

//next page
//$next = $page_no + 1;

//get the total count of records
//$result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM `products`") or die(mysqli_error($conn));

//total records
//$records = mysqli_fetch_array($result_count);

//store records to variable
//$total_records = $records['total_records'];

//query string
//$sql = "SELECT * FROM products LIMIT $offset , $total_records_per_page";

//results
//$results = mysqli_query($conn, $sql) or die(mysqli_error($conn));




//ORIGINAL PHP CODES START HERE
$get_products="SELECT * from `products`";
$result=mysqli_query($conn,$get_products);
$number=0;

while($row=mysqli_fetch_assoc($result)){

    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $status=$row['status'];
    $number++;
    ?>
    <tr>
    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;' ><?php echo $number; ?> </td>

    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?php echo $product_title; ?></td>

    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><img src='./product_images/<?php echo $product_image1;?>' style='width:20%;height:25%;' class='product_img'?/></td>

    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?php echo$product_price; ?></td>

    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?php 
    $get_count="select * from `pending_orders` where product_id=$product_id";
    $result_count=mysqli_query($conn,$get_count);
    $rows_count=mysqli_num_rows($result_count);
    echo $rows_count; 
    ?></td>

    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?php echo $status; ?></td>

    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><a href='index.php?edit_products=<?php echo $product_id ?>' class='text-dark'><img src='../images/edit3.png' alt='' class='brightness' style='width:20%;'></a></td>
    
    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><a href='index.php?delete_products=<?php echo $product_id ?>' class='text-light' onclick='return checkdelete()'><img src='../images/trash2.png' alt='' class='brightness' style='width:23%;'></a></td>
    
</tr>


<?php
}
?>

<script>
    function checkdelete(){
        return confirm('Delete this product now?');
    }
</script>
        
    </tbody>

 </table>

