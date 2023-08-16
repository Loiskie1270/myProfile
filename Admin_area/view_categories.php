<h3 class="text-center text-bg-success mt-3 mb-0">ALL CATEGORIES</h3>
<table class="table table-bordered mt-0">
    <thead class="bg-info text-center">
        <tr>
            <th class="bg-primary text-light text-center">SI no.</th>
            <th class="bg-primary text-light text-center">Category Title</th>
            <th class="bg-primary text-light text-center">Edit</th>
            <th class="bg-primary text-light text-center">Delete</th>
        </tr>
    </thead>
    <tbody >
        <?php 
        $select_category="select * from `categories`";
        $result=mysqli_query($conn,$select_category);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];
            $number++;
?>
        <tr class="text-center">
            <td class="bg-secondary text-light"> <?php echo $number; ?></td>
            <td class="bg-secondary text-light"><?php echo $category_title; ?> </td>
            
    <td class='bg-secondary text-light text-center'><a href='index.php?edit_category=<?php echo  $category_id ?>' class='text-light'><img src='../images/edit-file5.png' alt='' class='brightness'></a></td>
    <td class='bg-secondary text-light text-center'><a href='index.php?delete_category=<?php echo  $category_id ?>' class='text-light'><img src='../images/trash.png' alt='' class='brightness'></a></td>

</tr>
<?php 

}?>     
    </tbody>
</table>