<?php 
include('../includes/connect.php');

if (isset($_GET['page_no']) && $_GET['page_no'] !== "") {
    $page_no = $_GET['page_no'];
  }else{
    $page_no = 1;
  }

  
//total records to display
$total_records_per_page = 7;

//get the page offset
$offset = ($page_no - 1) * $total_records_per_page;

//previous
$previous_page = $page_no - 1;
  
//next page
$next_page = $page_no + 1;

//get the total count of records
$result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM `products`") or die(mysqli_error($conn));

//total records
$records = mysqli_fetch_array($result_count);
//total records

  //store records to variable
$total_records = $records['total_records'];

//get total pages
$total_no_of_pages = ceil($total_records / $total_records_per_page);
  
//query string
$sql = "SELECT * from products LIMIT $offset , $total_records_per_page";
$number=0;

//results
 $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

    <script src="https://kit.fontawesome.com/adadafda03.js" crossorigin="anonymous"></script>

    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootsrap.min.js"></script>-->


    <!-- Fontawesome link -->
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css">

    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
    +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    <title>View Products</title>
</head>
<body>
    <div class="container mt-5" style="max-width:100%;width:900px;background-color:#ffc512;padding:15px 15px;box-shadow: 1px 1px 3px 3px rgba(0, 0, 0, 0.5);">
        <div class="card-header" style="background-color:#ee5511;color:#fff;box-shadow: 1px 1px 3px 3px rgba(0, 0, 0, 0.5);margin-bottom:5px;height:50px;">
            <h4 class="text-center" style="margin-top:-5px;background-color:#ff7a00;color:#fff; font-family: 'Poppins', sans-serif; font-size:15px;width:250px; padding:8px 15px;border-top-right-radius:3px;border-top-left-radius:3px; display:relative;caret-color:transparent;box-shadow: 1px 1px 3px 3px rgba(0, 0, 0, 0.2);">VIEW ALL PRODUCTS</h4>
            <a href="index.php?view_products" style="text-decoration:none;"><img src="../images/home2.png" alt="" style="width:25px;height:23px;margin-top:-80px;margin-left:22px;"></a>
        </div>
        <table class="table-responsive" style="display:block;margin-left:auto;margin-right:auto;">
            <thead>
                <tr>
                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 70px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-left-radius:3px;font-weight:normal;">ID</th>
                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width:300px;caret-color:transparent;font-weight:normal;" >Product Title</th>
                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width:200px;caret-color:transparent;font-weight:normal;">Product Image</th>
                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;padding:5px 15px;width: 170px;margin-left:5px;caret-color:transparent;font-weight:normal;">Product Price</th>

                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Status</th>
                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;font-weight:normal;">Edit</th>
                    <th class="text-center" style="background-color:#e67a37;color:#fff;border:2px solid lightgrey;font-family: 'Poppins', sans-serif; font-size:12px;width: 100px;margin-left:5px;padding:5px 15px;caret-color:transparent;border-top-right-radius:3px;font-weight:normal;">Delete</th>

                </tr>
            </thead>
            <tbody class="bg-secondary text-dark mb-3">
                <tr>
                    <?php while($row = mysqli_fetch_array($result)){?>
                    
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?= $row['product_id']; ?> </td>
                    
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;padding:5px 15px;width:300px;'><?= $row['product_title']; ?> </td>
                    
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;padding:5px 15px;width:200px;'><img src='./product_images/<?= $row['product_image1']; ?>' style='width:20%;height:25%;' class='product_img'?/></td>
                    
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;padding:5px 15px;width: 170px;'><strong>₱ <?= $row['product_price']; ?> </strong> </td>
                    
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><?= $status=$row['status']; ?></td>
                    
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><a href='index.php?edit_products=<?= $row['product_id']; ?>' class='text-light'><img src='../images/edit3.png' alt='' class='brightness' style='width:18px;'></a></td>
                        
                    <td class='text-center' style='background-color:#eecc99;color:darkgreen;font-family: Poppins, sans-serif; font-size:12px; vertical-align:middle;border:1px solid white;'><a href='index.php?delete_products=<?= $row['product_id']; ?>' class='text-light' onclick='return checkdelete()'><img src='../images/trash2.png' alt='' class='brightness' style='width:18px;'></a></td>
                </tr>


<?php }
 mysqli_close($conn); ?>

<script>
    function checkdelete(){
        return confirm('Delete this product now?');
    }
</script>
            </tbody>
        </table>
      
        <nav aria-label="Page navigation example">
            <ul class="pagination">

              <li class="page-item"><a style="background-color:#ff571d;color:#fff;font-family: 'Poppins', sans-serif;font-size:12px;width:80px;height:28px;margin-top:3px;vertical-align:middle;text-align:center;" class="page-link <?= ($page_no <= 1) ? 'disabled' : ''; ?>" <?= ($page_no > 1) ?  'href=?page_no=' .$previous_page : ''; ?>>Previous</a></li>

              <?php for($counter = 1; $counter <= $total_no_of_pages; $counter++) { ?>

                <?php if ($page_no != $counter) { ?>
                  <li class="page-item"><a style="background-color:#808080;color:#fff;font-family: 'Poppins', sans-serif;font-size:12px;width:30px;height:28px;margin-top:3px;vertical-align:middle;text-align:center;" class="page-link" href="?page_no=<?=$counter; ?>"><?= $counter; ?></a></li>
                <?php } else { ?>
                
                  <li class="page-item"><a style="background-color:lightgrey;color:#333;font-family: 'Poppins', sans-serif;font-size:12px;width:30px;height:28px;margin-top:3px;vertical-align:middle;text-align:center;" class="page-link" href="?page_no=<?=$counter; ?>"><?= $counter; ?></a></li>
                
                <?php } ?>    
                
              <?php } ?>
                
                  <li class="page-item"><a style="background-color:#ff571d;color:#fff;font-family: 'Poppins', sans-serif;font-size:12px;width:80px;height:28px;margin-top:3px;vertical-align:middle;text-align:center;" class="page-link <?= ($page_no >= $total_no_of_pages) ? 'disabled' : ''; ?>" <?= ($page_no < $total_no_of_pages) ? 'href=pagination.php?page_no='.$next_page : ''; ?>>Next</a></li>
                
            </ul>
        </nav>

        <div class="p-10" style="font-family: 'Poppins', sans-serif;font-size:12px;">
            <strong>Page&nbsp; <?= $page_no; ?> of &nbsp;<?= $total_records_per_page; ?></strong>
        </div>
    </div>                  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
</html>