<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

 <h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:20px;width:100%; padding:10px 5px 10px 5px; margin-bottom:5px">VIEW ALL PRODUCTS</h4>
 <table class="table table-bordered mt-0">
    <thead>
        <tr>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Product ID</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;" >Product Title</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Product Image</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Product Price</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;"> Total Sold</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Status</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Edit</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Delete</th>
            
        </tr>
    </thead>
    <tbody class="bg-secondary text-dark mb-3">
        <?php 
$get_products="select * from `products`";
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
    <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;' ><?php echo $number; ?> </td>
    <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><?php echo $product_title; ?></td>
    <td class='bg-secondary text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><img src='./product_images/<?php echo $product_image1;?>' style='width:20%;height:25%;' class='product_img'?/></td>
    <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><?php echo$product_price; ?></td>
    <td class='bg-secondary text-center text-light' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><?php 
    $get_count="select * from `pending_orders` where product_id=$product_id";
    $result_count=mysqli_query($conn,$get_count);
    $rows_count=mysqli_num_rows($result_count);
    echo $rows_count; 
    ?></td>
    <td class='bg-secondary text-light text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><?php echo $status; ?></td>
    <td class='bg-secondary text-light text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><a href='index.php?edit_products=<?php echo $product_id ?>' class='text-dark'><img src='../images/edit-file5.png' alt='' class='brightness'></a></td>
    
    <td class='bg-secondary text-light text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;'><a href='index.php?delete_products=<?php echo $product_id ?>' class='text-light'><img src='../images/trash.png' alt='' class='brightness'></a></td>
</tr>
<?php
}
?>
        
    </tbody>

 </table>
