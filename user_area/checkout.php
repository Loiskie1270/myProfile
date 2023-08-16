<!--connect file-->
<?php 
include('../includes/connect.php');
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Botika</title>

<!-- Bootstrap CSS link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<!-- Fontawesome link -->
<!-- for icons  -->

     <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
    +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- style.css -->
    <link rel="stylesheet" href="../style.css">

<style>
body{
  overflow-x: hidden;
  
}
.logo_img{
  margin-top: 5px;
  margin-bottom: -15px;
  width: 30%;
  height: 30%;
  margin-left: 5%;
  object-fit: cover;
}
.logo{
  width: 110px;
  
}
.card-img-top{
  position: absolute;
  display: flex;
  margin-left: -30px;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 5px 5px 5px 5px;
  width: 50%;
  height: 40%;
  filter: drop-shadow(2px 2px 10px white);
  /*mix-blend-mode: multiply;*/
  /*filter: contrast(1);*/
}
.card{
  padding: 5px 5px;
  margin-left: 12px;
  margin-top: 5px;
  background-color: lemonchiffon;
}
.footer{
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  font-weight: bold;
  padding: 14px 0px 5px 0px;
  width: 101%;
  height: 10%;
  margin-bottom: 0px;
  background-color: #ff571d;
  text-align: center;
  margin-top: 0;
}
.footer p{
  font-family: 'Poppins', sans-serif;
  font-weight: normal;
  color: white;
}
.uil {
  color: white;
  box-shadow: 5px;
  font-size: 15px;
  text-decoration: none;
}
.container-image{
  background-color: #FFD833;
}
</style>    
    
  </head>
  <body>

<!----NAVBAR------>

    <div class="container-fluid bg-light p-0">

<!----First child------>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff571d; width:101%">

  <div class="container-fluid">
  <img src="../images/botikalogo2.png" alt="" class="logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="user_registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--<button class="btn btn-outline-light" type="submit">Search</button>--->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!--calling cart function -->
<!--second Child -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffbc7e; width:101%">

  <ul class="navbar nav me-auto">
    
    <?php 
          if(!isset($_SESSION['username'])){
            echo "<li class='nav-item'>
            <a class='nav-link text-dark' href='#'><strong>Welcome Guest</strong></a>
          </li>";
          }else{
            echo "<li class='nav-item'>
            <a class='nav-link text-dark' href='#'>Welcome ".$_SESSION['username']."</a>
          </li>";
          }   

if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='./user_login.php'><strong>Login</strong></a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='Logout.php'>Logout</a>
</li>";
}  
    
?>
       
  </ul>
</nav>
<!--third child -->
<div class="container-image" style="background-color: #ff571d; padding:10px; width:101%">
    <p style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-2px;  margin-left: -9px; font-size: 15px; color: white">GARANTISADO&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;GAMOT&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;BAGO</p>
  <!--<img src="../images/pebslogo5.png" alt="" class="logo_img">-->
</div>

<!--fourth child -->
<div class="row px-1">
  <div class="col-md-12">
  <!--display products -->
    <div class="row">
        <?php 
        if(!isset($_SESSION['username'])){
include('user_login.php');            
        }else{
            include('payment.php');
        }
        
        ?>       


   <!--fetch products -->


  <!--row end-->
</div>
<!--col end-->
</div>
   <!--products -->
   


<!--footer-->

<div class="footer">
    <p style="margin-bottom: 5px;">All rights reserved @ Designed by A. A. CORBETA - 2023  </p> 
       <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> 
  </div>
  


    </div>
    
  <!-- Bootstrap Js Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>

</html>
