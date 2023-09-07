<style>
  @import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');
</style>

<h4 class="text-center mt-3 mb-0" style="background-color:#ff571d;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:5px 15px;border-top-right-radius:3px;border-top-left-radius:3px; margin-bottom:5px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">ALL BOTIKA CHOICE</h4>

<table class="table-responsive" style="display:block; margin-left:auto; margin-right:auto; max-width:100%;width:650px;">

    <thead>
        <tr>
            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:15px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;font-weight:normal;vertical-align:middle;">Serial No.</th>

            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width:350px;caret-color:transparent;font-weight:normal;vertical-align:middle;">Brand Title</th>

            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 120px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Edit</th>

            <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 120px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-right-radius:3px;font-weight:normal;">Delete</th>
        </tr>
    </thead>
    <tbody>

<?php 
        $select_brands="select * from `brands`";
        $result=mysqli_query($conn,$select_brands);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $brand_id=$row['brand_id'];
            $brand_title=$row['brand_title'];
            $number++;
?>
        <tr>
            <td class="text-center" style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:10px 10px;border:1px solid white;'> <?php echo $number; ?></td>

            <td class="text-center" style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?php echo $brand_title; ?> </td>
            
            <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;padding:10px 10px;border:1px solid white;'><a href='index.php?edit_brands=<?php echo $brand_id ?>' class='text-light'><img src='../images/edit3.png' alt='' class='brightness' style='width:18%;'></a></td>
    
            <td class='text-center text-decoration-none' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><a href='index.php?delete_brands=<?php echo $brand_id ?>' class="text-light text-decoration-none" onclick="return checkdelete()"><img src='../images/trash2.png' alt='' class='brightness' style='width:18%;'></a></td>

</tr>
<?php 

}?>    
<script>
    function checkdelete(){
        return confirm('Delete this Brand now?');
    }
</script>

    </tbody>
</table>

<!-- Button trigger modal -->
<!---<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>--->

<!-- Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
    <div class="modal-body" style="width:350px;">
        <h4 style="color:#ff571d; font-size:17px; margin-left:20px;">Confirm Delete?</h4>
      </div>
      <div class="modal-footer">
        <button style="display: inline;width:200px; margin: 0 auto;" type="button" class="btn btn-secondary text-decoration-none" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a> </button>

        <button style="display: inline;width:200px; margin: 0 auto;" type='button' class='btn btn-primary text-decoration-none'><a href='index.php?delete_brands=<?php echo $brand_id ?>' class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>-->
