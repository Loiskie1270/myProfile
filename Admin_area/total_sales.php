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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootsrap.min.js"></script>

<script>
    $(document).ready(function()
    {
        $('tr').each(function()
        {
            var totmarks=0;
            $(this).find('amount').each(function()
            {
                var marks = $(this).text();
                if(marks.length!==0)
                {
                    totmarks+=parseFloat(marks);
                }
            });
            $(this).find('#total_sales').html('=' +totmarks);
        });
    });
    
</script>

        <!-- Fontawesome link -->
     <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css">

    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
    +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    <title>Total Sales</title>
</head>
<body class="bg-light">
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color:#ee5511;color:#fff;">
                                <h6 style="font-family: 'Poppins', sans-serif;font-size:15px;caret-color:transparent;vertical-align:middle;">&nbsp;&#x26AB;&nbsp;TOTAL SALES QUERY&nbsp;&#x26AB;&nbsp;Year:Month:Day&nbsp;&#x26AB;&nbsp;</h6>
                            </div>
                            <div class="card-body" style="background-color:#ffc512;">

                                <form action="" method="GET">
                                    <div class="row">
                                        <div class="col-md-4">   
                                            <div class="form-group">
                                                <label for="" style="background-color:#ff6611;color:#fff;padding:5px 10px;font-family: 'Poppins', sans-serif;font-size:12px;font-weight:bold;border-radius:3px;caret-color:transparent;">From Date:</label>
                                                <input type="date" style="font-family: 'Poppins', sans-serif;font-size:13px;caret-color:transparent;" name="from_date" value="<?php if(isset($_GET['from_date'])){echo $_GET['from_date'];}else{} ?>" class="form-control" placeholder="From Date" value="from">
                                            </div>    
                                        </div>
                                        <div class="col-md-4">   
                                            <div class="form-group">
                                                <label for="" style="background-color:#ff6611;color:#fff;padding:5px 10px;font-family: 'Poppins', sans-serif;font-size:12px;font-weight:bold;border-radius:3px;caret-color:transparent;">To Date:</label>
                                                <input type="date" style="font-family: 'Poppins', sans-serif;font-size:13px;caret-color:transparent;" name="to_date" value="<?php if(isset($_GET['to_date'])){echo $_GET['to_date'];}else{} ?>" class="form-control" placeholder="To Date" value="to">
                                            </div>    
                                        </div>
                                        <div class="col-md-4">   
                                            <div class="form-group">
                                                <label for="" style="background-color:#ff6611;color:#fff;padding:5px 10px;font-family: 'Poppins', sans-serif;font-size:12px;font-weight:bold;border-radius:3px;caret-color:transparent;">Check</label><br>
                                                <a href="index.php?pg=home">
                                                <button type="submit" class="btn btn-primary" style="width:100px;padding:5px 15px;font-family: 'Poppins', sans-serif;font-size:15px;font-weight:bold;border-radius:5px;">Filter</button>
                                                </a>
                                            </div>    
                                        </div>
                                    </div>
                                </form>    
                            </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body" style="background-color:#ffc512;">
                                <h6 style="background-color:#ee5511;color:#fff;max-width:100%;width:150px;padding: 10px 20px;text-align:center;font-family: 'Poppins', sans-serif;font-size:18px;
                                box-shadow: 1px 1px 3px 3px rgba(0, 0, 0, 0.3);display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">Your Sales</h6>
                                <br>
                                <table id="order_data" class="table table-responsive table-bordered table-striped table-hover" style="max-width:100%; width:800px;display:block;margin-left:auto;margin-right:auto;caret-color:transparent;">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;background-color:#ee5511;color:#fff;font-weight:normal;border:1px solid white;">Order ID</th>
                                            <th style="width: 220px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;background-color:#ee5511;color:#fff;font-weight:normal;border:1px solid white;">Invoice No.</th>
                                            <th style="width: 250px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;background-color:#ee5511;color:#fff;font-weight:normal;border:1px solid white;">Payment Mode</th>
                                            <th style="width: 250px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;background-color:#ee5511;color:#fff;font-weight:normal;border:1px solid white;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                        {
                                            if(strtotime($_GET['from_date']) < strtotime($_GET['to_date']))
                                            {

                                                $from_date = $_GET['from_date']; 
                                                $to_date = $_GET['to_date'];   

                                                $conn = mysqli_connect("localhost","root","","pebstore");
                                                $total_sales=0;
                                                $query = "select * from user_payments where date BETWEEN '$from_date' AND '$to_date'";
                                                $query_run = mysqli_query($conn,$query);

                                                if(mysqli_num_rows($query_run) > 0)
                                                {
                                                    foreach($query_run as $row)
                                                    {
                                                       // echo $row['order_id'].", ";   
                                                       ?>
                                                            <tr>
                                                                <td style="width: 150px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;font-weight:normal;"><?php echo $row['order_id']; ?></td>
                                                                <td style="width: 150px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;font-weight:normal;"><?php echo $row['invoice_number']; ?></td>
                                                                <td style="width: 150px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:13px;text-align:center;caret-color:transparent;font-weight:normal;"><?php echo $row['payment_mode']; ?></td>
                                                                <td class="netPrice" style="width: 150px;vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:14px;text-align:center;caret-color:transparent;font-weight:bold;"><?php echo $row['amount']; ?></td>

                                                            </tr>
                                                       <?php 
                                                    }    
                                                }
                                                else
                                                {
                                                    echo "No Record Found";
                                                }
                                            }
                                            else
                                            {
                                                //echo "From-Date is greater than To-Date. Invalid Action!";
                                                ?>
                                                    <tr>
                                                        <td colspan="4"><h5>From Date is greater than To Date.Invalid Filter Action.</h5></td>
                                                    </tr>
                                                <?php
                                            }    
                                        }
                                        ?>
                                    </tbody>
                                    <?php 
                        
                                    ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" style="padding: 10px 20px;font-family: 'Poppins', sans-serif;font-size:17px;vertical-align:middle;">Total (by: Filtered Date)</td>
                                            <td id="total" style="vertical-align:middle;font-family: 'Poppins', sans-serif;font-size:15px;text-align:center;caret-color:transparent;font-weight:bold;">0</td>
                                        </tr>
                                    </tfoot>
                                    <?php
                                    
                                    $results = mysqli_query($conn, "SELECT sum(amount) FROM user_payments");
                                    while($rows = mysqli_fetch_array($results)){?>
                                  <span style="background-color:green;color:#fff;padding:5px 10px;font-family: 'Poppins', sans-serif;font-size:17px;display:block;margin-left:auto;margin-right:auto;max-width:100%; width:800px;"> Grand Total Sales :<font size="+1"><strong>&nbsp;₱ <?php echo $rows['sum(amount)']; ?> </font> </span>
<?php
                                    }
                                     ?>
                                </table>

                                <script>
                                    var total =document.getElementById("total");
                                    var netPrice =document.getElementsByClassName("netPrice");

                                    var cal = 0;
                                    for (let i = 0; i < netPrice.length; i++) {
                                        cal +=parseInt(netPrice[i].innerHTML);
                                    }
                                    total.innerHTML = cal;

                                

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>


</html>

<!--<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        var dataTable= $('#order_data').Datatable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"fetch.php",
                type:"POST"
            },
            drawCallback:function(settings)
            {
                $('#total_order').html(settings.json.total);
            }
        });
    });

</script>-->