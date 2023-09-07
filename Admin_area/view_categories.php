<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h3 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">ALL CATEGORIES</h3>

<table class="table-responsive" style="display:block; margin-left:auto; margin-right:auto; max-width:100%;width:650px;">

    <thead>
        <tr>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:15px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;font-weight:normal;vertical-align:middle;">SI no.</th>

            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width:350px;caret-color:transparent;font-weight:normal;vertical-align:middle;">Category Title</th>

            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 120px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Edit</th>

            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 120px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-right-radius:3px;font-weight:normal;">Delete</th>

        </tr>
    </thead>

    <tbody>
        <?php 
        $select_category="select * from `categories`";
        $result=mysqli_query($conn,$select_category);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];
            $number++;
?>
        <tr>
            <td class="text-center" style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:10px 10px;border:1px solid white;'> <?php echo $number; ?></td>

            <td class="text-center" style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?php echo $category_title; ?> </td>
            
            <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:10px 10px;border:1px solid white;'><a href='index.php?edit_category=<?php echo  $category_id ?>' class='text-light'><img src='../images/edit3.png' alt='' class='brightness' style='width:20%;'></a></td>

            <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><a href='index.php?delete_category=<?php echo  $category_id ?>' onclick='return checkdelete()' class='text-light'><img src='../images/trash2.png' alt='' class='brightness' style='width:20%;'></a></td>

        </tr>
<?php 

}?>     
<script>
    function checkdelete(){
        return confirm('Delete this Catergory now?');
    }
</script>
    </tbody>
</table>