 <h4 class="text-center text-bg-success mt-3 mb-0">VIEW ALL PRODUCTS</h4>
 <table class="table table-bordered mt-0">
    <thead class="bg-info">
        <tr>
            <th class="bg-primary text-light text-center">Product ID</th>
            <th class="bg-primary text-light text-center">Product Title</th>
            <th class="bg-primary text-light text-center">Product Image</th>
            <th class="bg-primary text-light text-center">Product Price</th>
            <th class="bg-primary text-light text-center"> Total Sold</th>
            <th class="bg-primary text-light text-center">Status</th>
            <th class="bg-primary text-light text-center">Edit</th>
            <th class="bg-primary text-light text-center">Delete</th>
            
        </tr>
    </thead>
    <tbody class="bg-secondary text-light mb-3">
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
    <td class='bg-secondary text-center text-light'><?php echo $number; ?></td>
    <td class='bg-secondary text-center text-light'><?php echo $product_title; ?></td>
    <td class='bg-secondary text-center text-light'><img src='./product_images/<?php echo $product_image1;?>' class='product_img'?/></td>
    <td class='bg-secondary text-center text-light'><?php echo$product_price; ?></td>
    <td class='bg-secondary text-center text-light'><?php 
    $get_count="select * from `pending_orders` where product_id=$product_id";
    $result_count=mysqli_query($conn,$get_count);
    $rows_count=mysqli_num_rows($result_count);
    echo $rows_count; 
    ?></td>
    <td class='bg-secondary text-light'><?php echo $status; ?></td>
    <td class='bg-secondary text-light text-center'><a href='index.php?edit_products=<?php echo $product_id ?>' class='text-dark'><img src='../images/edit-file5.png' alt='' class='brightness'></a></td>
    
    <td class='bg-secondary text-light text-center'><a href='index.php?delete_products=<?php echo $product_id ?>' class='text-light'><img src='../images/trash.png' alt='' class='brightness'></a></td>
</tr>
<?php
}
?>
        
    </tbody>

 </table>
