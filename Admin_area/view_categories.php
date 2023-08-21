<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h3 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:20px;width:100%; padding:10px 5px 10px 5px; margin-bottom:5px">ALL CATEGORIES</h3>
<table class="table table-bordered mt-0">
    <thead class="bg-info text-center">
        <tr>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">SI no.</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Category Title</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Edit</th>
            <th class="text-center" style="background-color:#ffbc7e;color:#333;font-family: 'Poppins', sans-serif; font-size:12px;font-weight:bold;">Delete</th>
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
            <td class="bg-secondary text-light" style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'> <?php echo $number; ?></td>
            <td class="bg-secondary text-light" style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'><?php echo $category_title; ?> </td>
            
    <td class='bg-secondary text-light text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'><a href='index.php?edit_category=<?php echo  $category_id ?>' class='text-light'><img src='../images/edit-file5.png' alt='' class='brightness'></a></td>
    <td class='bg-secondary text-light text-center' style='background-color:#ffbc7e;color:#333;font-family: Poppins, sans-serif; font-size:12px;'><a href='index.php?delete_category=<?php echo  $category_id ?>' class='text-light'><img src='../images/trash.png' alt='' class='brightness'></a></td>

</tr>
<?php 

}?>     
    </tbody>
</table>