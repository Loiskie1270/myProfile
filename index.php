<!--connect file-->
<?php 
include('includes/connect.php');
include('functions/common_functions.php');
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

        <!-- Bootstrap CSS -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
 
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
<!-- Fontawesome link -->
<!-- for icons  -->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/adadafda03.js" crossorigin="anonymous"></script>

    <script>
      const activePage = window.location.pathname;
      const navLinks =document.querySelectorAll('nav-link').forEach(link => {
        if(link.href.includes(`${activePage}`)){
          link.classList.add('active');
        }
      })
    </script>

    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
      </script>
        <script src=
"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
      </script>
   
<!-- style.css -->

    <link rel="stylesheet" href="style.css">

   <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
  +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

<style>
@import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas+Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap');  

body{
  text-shadow: 0px 0px 1px #fff;
  color: transparent;
  padding: 0;
  overflow-x: hidden;
}
.logo_img{
  padding: 0px;
  margin-bottom: -25px;
  width: 28%;
  height: 20%;
  margin-left: 35%;
  object-fit: cover;
  filter: drop-shadow(7px 7px 10px white);
}
.logo{
  width: 110px;
  margin-left: 3px;
  margin-right: 3px;

}

.card{
  box-shadow: 0px 0px 2px 2px lightgray;
  background-color: #fffef8;
  padding: 5px 10px ;
  height: 97%;
  width: 97%;
  margin-left: 5px;
  margin-right: -55px;
  margin-top: 8px;
  margin-bottom: 3px;
  column-gap: 1px;
  caret-color: transparent;
}

.card .btn{
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  border-radius: 5px;
}

.card-img-top{
  display: block;
  margin-left: auto;
  margin-right: auto;
  align-items: center;
  justify-content: center;
  padding: 0 15px;
  width: 40%;
  height: 50%;
  margin-top: 8px;
  filter: drop-shadow(2px 1px 2px grey);
  /*mix-blend-mode: multiply;*/
  /*filter: contrast(1);*/
}

.card-title{
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  margin-top: 5px;
  font-weight: bold;
  display: block;
  margin-right: auto;
  margin-left: auto;
  font-weight: normal;
}
.card-text{
  font-family: 'Poppins', sans-serif;
  text-align: center;
  line-height: 1.5;
  font-size: 13px;
  margin-top: 5px;
  margin-bottom: 25px;
  font-weight: normal;
}

.card-text-price{
  font-family: 'Poppins', sans-serif;
  text-align: center;
  line-height: 1.5;
  font-size: 15px;
  margin-top: 5px;
  margin-bottom: 15px;
  font-weight: bold;
}

.btn{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 5px;
  width: 50%;
  border-radius: 3px;
}

.form-control > input:focus{
  outline:none;
  border: none;
}

.navbar-nav > .active > a {
  color: aqua !important;
}

.nav-item > a:hover {
  color: aqua;
}

.active{
    color:aqua !important;
}

.nav-link{
  color:#333;
  font-family: 'Poppins', sans-serif;
}

.nav-item .nav-link{
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  font-weight: 500;
}

.nav-link:focus {
  color: aqua !important;
}

.active a{
  color: red !important;
}

.nav-link:hover{
  font-weight: normal;
  color:#fff;
  font-family: 'Poppins', sans-serif;
}

.fa-stack[data-count]:after{
  text-decoration: none;
  position:absolute;
  right:20%;
  left: 25px;
  top: -2px;
  content: attr(data-count);
  padding:.5em;
  border-radius:999px;
  line-height:.70em;
  color: rgb(255, 0, 0);
  text-align:center;
  min-width:2em;
  font-weight:600;
  background: #fff;
  font-size: 12px;
}

.fa-circle {
  color:white;
}
.red-cart {
  color: white; background:#DF0000;
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

ul li a.nav-link:hover{
  background-color: #ff9b3f !important;
  color: #fff !important;
}

.container-image{
  background-color: #FFD833;
}

.container-slider{
    margin-top: 85px;
    width: 85vmin;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    overflow: hidden;
    border: 20px solid #ffffff;
    border-radius: 8px;
    box-shadow: 10px 25px 30px rgba(30,30,200,0.3);
}
.slider{
    
    width: 100%;
    display: flex;
    animation: slide 3s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
img{
    width: 100%;
}

.awesome {
  padding:10px;
  top: 126px;
  font-family: 'Poppins', sans-serif;
  font-style: normal;
  width: 100%;
  margin: 0 auto;
  text-align: center;
  color: #313131;
  font-size: 45px;
  font-weight: bold;
  position: absolute;
  caret-color: transparent;
  -webkit-animation: colorchange 20s infinite alternate;
}

@-webkit-keyframes colorchange {
  0% {
    color: white;
  }
  10% {
    color: #fffef8;
  }
  20% {
    color: #fff6d2;
  }
  30% {
    color: #fffef8;
  }
  40% {
    color: white;
  }
  50% {
    color: #fff6d2;
  }
  60% {
    color: white;
  }
  70% {
    color: #fffefa;
  }
  80% {
    color: #fff6d2;
  }
  90% {
    color: white;
  }
  100% {
    color: #fffef8;
  }
}
.navbar-toggler:focus {
    /*Below line will remove the border from the icon
    I have used bootstrap icon here */
    /* This will only remove the shadow effect */
    /* Border is still there */
    /* if you don't want any border then set the property equals to zero */
    border: 0 !important;
    box-shadow: none !important;
  
    /* This will remove the rounded corner(radious-border)
    and give square border */
    /* border-radius: 0 !important; */    
}

.navbar-toggler {
    /* This will completely remove border from the icon */
    /* If you need border for the icon then comment this code */
     border: 0 !important;

    /* if you want to check the border please uncomment below code */
    /* border-color: yellow !important; */
}
@media (max-width: 640px) {
        .banner {
          flex-direction: column;
        }
      }

        .banner {
        border-radius: 5px;
        width: 100vw;
        display: flex;
        justify-content: space-around;
      }

      .clm {
        margin: 2%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .clm img {
        width: 100%;
        border-radius: 5px;
      }

/*
---------------------------------------------
features
---------------------------------------------
*/

#features {
  margin-bottom: 80px;
}

.feature-item {
  display: inline-block;
  margin-bottom: 60px;
}

.feature-item .left-icon img {
  float: left;
  margin-right: 30px;
}

.feature-item .right-content {
  display: inline;
}

.feature-item .right-content h4 {
  margin-top: 0px;
  margin-bottom:  7px;
  letter-spacing: 0.25px;
  color: #232d39;
  font-size: 19px;
  font-weight: 600;
  text-transform: capitalize;
}

.feature-item .right-content a.text-button {
  margin-top: 7px;
  display: inline-block;
  font-size: 13px;
  text-transform: uppercase;
  color: #ed563b;
  font-weight: 500;
}
@media screen and (max-width: 1200px) {

.popup.popup-content, h5 p.text {

font-size: 10px;
}
}
      .popup {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            display: none;
        }

        .popup .left-side .details .text-one,
        .popup .left-side .details .text-two {
          font-size: 14px;
          color: #fff;
        }
        .popup-info .popup-info .right-side{
          width: 75%;
          margin-left: 75px;
        }
        .popup-info .right-side .topic-text{
          font-size: 23px;
          font-weight: 600;
          color: #fff;
        }
        .right-side .input-box{
           height: 50px; 
           width: 100%;
        }
        .right-side .input-box input{
          height: 100%;
          width: 100%;
        }
/**FOR FREQUENTLY ASKED QUESTION*****/        

        .popup .tab label::after{
          content: '+';
          position: absolute;
          right: 20px;
          font-size: 2em;
          color: rgba(0,0,0,0.1);
          transition: transform 1s;
        }
        .popup .tab:hover label::after{
          color: #333;
        }
        .popup .tab input:checked ~ label::after{
          transform: rotate(135deg);
          color: #fff;
        }
        .popup .tab input:checked ~ label h3{
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          color: rgba(255,255,255,0.2);
          font-size: 8em;
          justify-content: flex-end;
          padding: 20px;
          color: #fff;
          margin-top: 0;
        }
        .popup .tab input:checked ~ label h4{
          background-color: #ff571d;
          padding: 2px 10px;
          color: #fff;
          border-radius: 2px;
          box-shadow: 0 5px 15px rgba(0,0,0,0.05);
          opacity: 1;
        }
        .popup .tab input:checked ~ .content-faq p{
          background-color: #ff571d;
          color: #fff;
          padding: 2px 10px;
          border-radius: 2px;
          opacity:1;
        }
        .popup .tab:hover label::after{
          color: #fff;
        }
        .popup .tab label h3{
          margin-top: 15px;
          width: 40px;
          height: 40px;
          background: #ff571d;
          display: flex;
          justify-content: center;
          align-items: center;
          color: #fff;
          font-size: 1.25em;
          border-radius: 5px;
          margin-right: 10px;

        }
        .popup .tab:nth-child(2) label h3{
          background: linear-gradient(135deg,#ff571d,purple);
        }
        .popup .tab:nth-child(3) label h3{
          background: linear-gradient(135deg,#ff571d,purple);
        }
        .popup .tab:nth-child(4) label h3{
          background: linear-gradient(135deg,#ff571d,purple);
        }
        .popup .tab:nth-child(5) label h3{
          background: linear-gradient(135deg,#ff571d,purple);
        }
        
        .popup .tab label h4{
          position: relative;
          font-weight: 500;
          color: #333;
          z-index: 10;
        }
        .popup .tab .content-faq{
          max-height: 0;
          transition: 1s;
          overflow: hidden;
        }
        .popup .tab input:checked ~ .content-faq{
          max-height: 100vh;
        }
        .popup .tab .content-faq p{
          position: relative;
          padding: 10px 0;
          color: #333;
          z-index: 10;
        }

/**END OF FREQUENTLY ASKED QUESTION*****/   
        .popup-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888888;
            width: 30%;
            font-weight: bolder;
        }
        .popup-content button {
            display: block;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        h1 {
            color: green;
        }
@media (min-width:400px) and (max-width: 820px){
    .popup{
      margin: 40px 0;
      height: 100%;
    }
    .popup .popup-info{
      flex-direction: column-reverse;
    }
    .popup .popup-info .left-side{
      width: 100%;
      font-size:25px;
      flex-direction: row;
      margin-top: 35px;
      justify-content: center;
      flex-wrap: wrap;
    }
    .popup .popup-info .right-side{
      width: 100%;
      margin-left: 0;
    }
} 

</style>
  </head>
  <body>

<!----NAVBAR------>

    <div class="container-fluid bg-light p-0">

<!----First child------>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff571d; padding:10px; width:100%">
  <div class="container-fluid">
  <img src="./images/botikalogo2.png" alt="" class="logo">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">My Pharmacy</a>
        </li>

        <?php 
 if(isset($_SESSION['username'])){
echo "<li class='nav-item'>
<a class='nav-link' href='./user_area/profile.php'>My Account</a>
</li>"; 
  }else{
    echo "<li class='nav-item'>
    <a class='nav-link' href='#main' id='myButton11'>Register</a>
    
    </li>"; 
  }
 
?>
        
        <li class="nav-item">
        
        <!--<a class="nav-link" href="./user_area/contact.php" id="main">Contact Us</a>-->
        <!--<a class='nav-link' href='./user_area/user_registration.php'>Register</a>-->
        <!--<a class='nav-link text-light' href='./user_area/user_login.php' >Login</a>-->
          <a class="nav-link" href="#main" id="myButton10">Contact Us</a>
          
        </li>


        <li class="nav-item">
          <a class="nav-link fa-stack fa-1x has-badge" data-count="<?php cart_item();?>" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:15px;margin-left:-3px;"></i><sup></sup></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" style="margin-left:15px;font-family: 'Poppins', sans-serif;margin-top:-3px;"><span>Total Price: <font size="+1"><strong>₱ <?php total_cart_price();?></strong></font></span></a> 
        </li>
        
      </ul>

      <form class="d-flex" action="search_product.php" method="get">
          <table class="elementsContainer">
            <tr>
              <td>
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search_data" style="width:100%;">
              </td>
              <!--<td>&nbsp;
              <a href=""><i class="fa-solid fa-magnifying-glass" type="submit" name="search_data_product" style="color:#fff;"></i></a>
              </td>-->
              <!--<button class="btn btn-outline-light" type="submit">Search</button>--->
                  
                 <button type="submit" class="btn" name="search_data_product" style="color:#333; font-size: 5px;line-height:1px;padding:5px; vertical-align:middle; margin-left:-5px;"><i class="fa-solid fa-magnifying-glass fa-rotate-90" style="color:#333; font-size: 18px;"></i></button>
              </tr>     
          </table>           
<style> 
  button{
     color: white; 
     padding: 12px 14px; 
     font-size: 20px;
     cursor: pointer; 
     border:0;
     background:none;
     border-radius: 50px;
     float: right;
     vertical-align: middle;
     outline: none;
     margin-top: 5px;
  }    
  button:hover{
    color: #fff;
  }
  .d-flex {
    background-color: #ffaa5b;
    float: right;
    position: relative;
    height: 42px;
    text-decoration: none;
    border: 3px solid  #fe7a00;
    outline: none;
    border-radius: 50px;
    padding: 0px 10px;
    width: 300px;
    margin-top: 5px;
    outline:none;
    
   }
  .elementsContainer{
    width: 750%;
    height: 100%;
    vertical-align: middle;    
  }
  .form-control{
    border: none;
    height: 80%;
    width: 100%;
    padding: 0px 15px;
    border-radius: 50px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    font-weight: 200;
    color: #fff;
  }
  .form-control:focus{
    outline: none;
  }

</style>
      </form>
    </div>
  </div>
</nav>

<!--calling cart function -->
<?php 
cart();
?>

<!--second Child -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffbc7e; padding:0px; width:100%;height:50px;">

  <ul class="navbar nav me-auto">
    
    <?php
               if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a class='nav-link text-dark' href='#'>Welcome Guest</a>
              </li>";
              }else{
                echo "<li class='nav-item'>
                <a class='nav-link text-dark href='#'>Welcome &nbsp; <strong style='color: #ff571d;'>    ".$_SESSION['username']."</strong></a>
              </li>";
              }   
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  
  <a class='nav-link text-light' href='#main' id='myButton12'>Login</a>
  
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='./user_area/logout.php'>Logout</a>
</li>";
}  
    
?>    
  </ul>
</nav>

<!--third child -->

<div class="container-image" style="background-color: #ff571d; padding:20px; width:100%; position :     sticky; ">
   
   <p class="awesome" style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-22px; margin-left: -14px; font-size:15px; position : sticky; ">GARANTISADO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GAMOT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;&nbsp;BAGO</p>
</div>

<!--fourth child -->

<div class="row px-1">
  <div class="col-md-10">

<!--display products -->
    <div class="row">

<!--fetch products -->

 <?php 

 //calling functions-->

getproducts();
get_uniqe_category();
get_uniqe_brands();
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  
//$select_query="select * from `products` order by rand() limit 0,9";
//$result_query=mysqli_query($conn,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
//while($row=mysqli_fetch_assoc($result_query)){
//  $product_id=$row['product_id'];
//  $product_title=$row['product_title'];
//  $product_description=$row['product_description'];
//  $product_image1=$row['product_image1'];
//  $product_price=$row['product_price'];
//  $category_id=$row['category_id'];
//  $brand_id=$row['brand_id'];
//  echo "<div class='col-md-4 mb-2'>
//  <div class='card'>
//      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//      <div class='card-body'>
//        <h5 class='card-title'>$product_title</h5>
//        <p class='card-text'>$product_description</p>
//        <a href='#' class='btn btn-info'>Add to cart</a>
//        <a href='#' class='btn btn-secondary'>View more</a>
//      </div>
//  </div>
//</div>";
//}
    
//    ?>
    
  <!--row end-->
</div>
<!--col end-->
</div>
<!--products -->
    <div class="col-md-2 bg-light p-0">

<!--brands to be displayed -->

        <ul class="navbar-nav me-auto mt-0 mb-0 text-center">

            <li class="nav-item" style="background-color: #f5ffcf; color:green; font-family: 'Poppins', sans-serif; font-size: 17px; border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3">
           <a href="#" class="nav-link text-decoration-none">Botika Choice</a>
            </li>
      <?php 

 getbrands();

?>
        </ul>
        <ul class="navbar-nav me-auto mt-0 mb-0 text-center">

<!--categories to be displayed -->

            <li class="nav-item mb-0" style="background-color: #f5ffcf; color:green; font-family: 'Poppins', sans-serif; font-size: 17px; border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3">
            <a href="#" class="nav-link text-decoration-none">Categories</a>
            </li>
        <?php 

getcategories();      


?>
        </ul>
  
  </div>
    </div>
    <div style="background-color: #ff571d; padding:10px; width:101%; position : sticky; caret-color:transparent" id="information">
  
        <p class="about" style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-2px;  margin-left: -14px; font-size:15px; color: white; position : sticky;"><a href="#information" style="color: white; text-decoration:none" id="myButton7">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#information" style="color: white; text-decoration:none" id="myButton8">FAQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>&#x26AB;&nbsp;&nbsp;&nbsp;<a href="#information" style="color: white; text-decoration:none" id="myButton9">Contact</a></p>
    </div>

    <!--Image slider---->    
 
        <div class="slider">
            <img src="./images/br.png">
            <img src="./images/br2.png">
            <img src="./images/br3.png">
            <img src="./images/br4.png">
            <img src="./images/br5.png">
            <img src="./images/br6.png">
            <img src="./images/br7.png">
            <img src="./images/br8.png">
            <img src="./images/br9.png">
            <img src="./images/br10.png">
            <img src="./images/br1.png">
            <img src="./images/br2.png">
            <img src="./images/br4.png">
            <img src="./images/br.png">
            <img src="./images/br2.png">
            <img src="./images/br3.png">
            <img src="./images/br4.png">
            <img src="./images/br5.png">
        </div>
        <div style="background-color: #ff571d; padding:10px; width:101%; position : sticky;">
        <p style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-2px;  margin-left: -14px; font-size:15px; color: white; position : sticky;"><a href="" style="color: white; text-decoration:none"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color: white; text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;<a href="" style="color: white; text-decoration:none"></a></p>
    </div>

<!--INCLUDE FOOTER---->           
<section class="section" id="features" style="margin-bottom: 2px; caret-color:transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading" style="margin-top: 10%;">
                        <h2 style="font-family: 'Poppins', sans-serif;font-size: 20px; color: #FFFFFF; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);background-image: linear-gradient(to right, red , orange);width: 55%; margin-left: auto; margin-right: auto; display: flex; flex-direction: row; flex-wrap: wrap; align-items: center; justify-content: center;text-align:center; position: sticky; margin-bottom: 50px; padding: 10px 15px; border-radius: 3px">Your Daily Guide</h2>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon" >
                                <img src="./images/headache.png" style="width:20%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4 style="font-family: 'Poppins', sans-serif;font-size:15px;">Headache</h4>
                                <p style="font-family: 'Poppins', sans-serif;font-size:13px; font-weight:200; color: grey; margin-bottom:5px;line-height: normal;">Headache has variety of type & should not neglected, we suggest early intervention save lives.</p>
                                <a href="#features" class="text-button" id="myButton"><strong>Discover More</strong></a>
                            </div>

<!-----POP-UP WINDOW--->         

                            <div id="myPopup" class="popup">
                            <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); border-radius:5px;">
                            <h5 style="color:#ff571d; display:block;margin-left:auto;margin-right:auto; font-size:18px;font-weight:bold;">
                                        HEADACHE
                                        
                                        <img src="./images/headachetwo.png" alt="" style="width:30%;display:block;margin-right:auto;margin-left:auto; margin-top:20px; margin-bottom:15px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);border-radius: 3px;">

                                          <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px;line-height: normal;font-weight:normal;">Headache causes many things and should not be neglected that might cause harm or fatal to your patient.</p>

                                          <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px;line-height:normal;font-weight:normal;">There are many different types of headaches, so identifying the location and nature of your pain can help determine the cause.
                                          Some of the most common types include:</p>
    
                                   </h5>
                                  
                                  <button id="closePopup" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:5px; margin-right:3px; padding:0px 0px 0px 0px"></i></a>
                                    </button>
                                </div>
                             </div>
                        </li>
<!-----END OF POP-UP WINDOW--->                         
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="./images/highblood.png" style="width:20%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4 style="font-family: 'Poppins', sans-serif;font-size:15px;">High Blood Pressure</h4>
                                <p style="font-family: 'Poppins', sans-serif;font-size:13px; font-weight:200; color: grey; margin-bottom:5px;line-height: normal;">High blood pressure if negleted will caused fatal to the patient, we recommend to visit nearest clinic or hospital for better treatment.</p>
                                <a href="#features" class="text-button" id="myButton2"><strong>Discover More</strong></a>
                            </div>

<!-----POP-UP2 WINDOW--->  

                            <div id="myPopup2" class="popup">
                              <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); border-radius:5px;">
                              <h5 style="color:#ff571d; display:block;margin-left:auto;margin-right:auto; font-size:18px;font-weight:bold;">
                                        HIGH BLOOD PRESSURE
                                        
                                        <img src="./images/highbloodtwo.png" alt="" style="display:block;margin-right:auto;margin-left:auto; width:30%; margin-top:10px; margin-bottom:15px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);border-radius: 3px;">
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px;line-height: normal;font-weight:normal;">If you have high blood pressure, you must know that what your daily meal can make a difference. You must follow strict diet like the dietary approaches to stop hypertension...</p>
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px;line-height:normal;font-weight:normal;">Many people out there, taking their blood pressure anywhere is a crucial step in monitoring their health, wearing smart watches reduce difficulty to monitor bp. It’s essential to get an accurate reading, but there...</p>
                                    </h5>
                                  
                                  <button id="closePopup2" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:5px; margin-right:3px; padding:0px 0px 0px 0px;"></i></a>
                                    </button>
                                </div>
                            </div>
                        </li>
<!-----END OF POP-UP2 WINDOW--->                         
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="./images/muscleproblem.png" style="width:20%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4 style="font-family: 'Poppins', sans-serif;font-size:15px;">Muscle Problem</h4>
                                <p style="font-family: 'Poppins', sans-serif;font-size:13px; font-weight:200; color: grey; margin-bottom:5px;line-height: normal;">As we reach a certain age muscle meet various problems, this is the reason regular visit to your doctor is highly recommended.</p>
                                <a href="#features" class="text-button" id="myButton3"><strong>Discover More</strong></a>
                            </div>

<!-----POP-UP3 WINDOW--->                              
                            <div id="myPopup3" class="popup">
                              <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); border-radius:5px;">
                              <h5 style="color:#ff571d; display:block;margin-left:auto;margin-right:auto; font-size:18px;font-weight:bold;">
                                        MUSCLE PROBLEM
                                        
                                        <img src="./images/muscleproblemtwo.png" alt="" style="display:block;margin-right:auto;margin-left:auto; width:35%; margin-top:10px; margin-bottom:15px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);border-radius: 3px;">
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px; line-height: normal;font-weight:normal;">Your limbs contain different compartments, which are sets of muscles, nerves, and blood vessels that are covered by a tough tissue called fascia. If you experience swelling or bleeding within one of these compartments, the pressure can lead to great discomfort in your muscles.</p>
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px; line-height: normal;font-weight:normal;">The muscles in your body are surrounded by fascia, which is a tough connective tissue. With myofascial pain syndrome (MFS), this tissue becomes inflamed, which can lead to considerable discomfort in your muscles. </p>
                                    </h5>
                                 
                                  <button id="closePopup3" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:5px; margin-right:3px; padding:0px 0px 0px 0px;"></i></a>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
<!-----END OF POP-UP3 WINDOW---> 
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="./images/childmedicine.png" style="width:20%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4 style="font-family: 'Poppins', sans-serif;font-size:15px;">Child Medicine</h4>
                                <p style="font-family: 'Poppins', sans-serif;font-size:13px; font-weight:200; color: grey; margin-bottom:5px;line-height: normal;">Many parents are concerned about their child health way better than neglecting your child;s health.</p>
                                <a href="#features" class="text-button" id="myButton4"><strong>Discover More</strong></a>
                            </div>

<!-----POP-UP4 WINDOW--->     

                            <div id="myPopup4" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); border-radius:5px;">
                                  <h5 style="color:#ff571d; display:block;margin-left:auto;margin-right:auto; font-size:18px;font-weight:bold;">
                                        CHILD MEDICINE
                                        
                                        <img src="./images/childrenmedicinetwo.png" alt="" style="display:block;margin-right:auto;margin-left:auto; width:27%; margin-top:8px; margin-bottom:15px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);border-radius: 3px;">
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:grid;margin:auto; color:grey; line-height: normal;font-weight:normal;">Although most of the Child Health blog is aimed at parenting topics, it also includes information on child psychology, before-birth tips, growth and development and much more. There are articles on child abuse, nurturing, nursing, seasonal flu, childhood diseases, pollution, childhood eating disorders and nutrition. The Child Health blog even includes recipes for children. It also includes a special section for all things children that include articles on newborn babies, school issues and teenagers.</p>
                                    </h5>
                                  
                                  <button id="closePopup4" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:5px; margin-right:3px; padding:0px 0px 0px 0px;"></i></a>
                                    </button>
                                </div>
                            </div>
                        </li>
<!-----END OF POP-UP4 WINDOW--->   

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="./images/motherguide.png" style="width:20%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4 style="font-family: 'Poppins', sans-serif;font-size:15px;">Mother's Guide</h4>
                                <p style="font-family: 'Poppins', sans-serif;font-size:13px; font-weight:200; color: grey; margin-bottom:5px; line-height: normal;">Social media helped many mother as guide to their children's health way better than the old days, feel free to message us for more information.</p>
                                <a href="#features" class="text-button" id="myButton5"><strong>Discover More</strong></a>
                            </div>

<!-----POP-UP5 WINDOW--->     

                            <div id="myPopup5" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); border-radius:5px;">
                                <h5 style="color:#ff571d; display:block;margin-left:auto;margin-right:auto; font-size:18px;font-weight:bold;">
                                        MOTHER'S GUIDE
                                        
                                        <img src="./images/motherguidetwo.png" alt="" style="display:block;margin-right:auto;margin-left:auto; width:30%; margin-top:10px; margin-bottom:15px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);border-radius: 3px;">
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px; line-height: normal;font-weight:normal;">The Mothers Guide received some encouraging feedback from visitors to the event, most of whom were seeing it for the first time. Dr Spiro commented: “There was lots of interest and everyone seemed to like the new guide. I think it is brilliant that you have the new ‘laid-back feeding’ included.”</p>
                                    </h5>
                                  
                                  <button id="closePopup5" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:5px; margin-right:3px; padding:0px 0px 0px 0px;"></i></a>
                                    </button>
                                </div>
                            </div>
                        </li>
<!-----END OF POP-UP5 WINDOW--->                         
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="./images/br5.png" style="width:21%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4 style="font-family: 'Poppins', sans-serif;font-size:15px;">Branded & Generics</h4>
                                <p style="font-family: 'Poppins', sans-serif;font-size:13px; font-weight:200; color: grey; margin-bottom:5px;line-height: normal;font-weight:normal;">This web app will suggest about branding such as branded and generics, simply send a message us and we will do our very best to answer your query.</p>
                                <a href="#features" class="text-button" id="myButton6"><strong>Discover More</strong></a>
                            </div>

<!-----POP-UP6 WINDOW--->    

                            <div id="myPopup6" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); border-radius:5px;">
                                <h5 style="color:#ff571d; display:block;margin-left:auto;margin-right:auto; font-size:18px;font-weight:bold;">
                                        BRANDED & GENERICS
                                        
                                        <img src="./images/brandedgenericstwo.png" alt="" style="display:block;margin-right:auto;margin-left:auto; width:28%; margin-top:10px; margin-bottom:15px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);border-radius: 3px;">
                                        <p style="font-family: 'Poppins', sans-serif;font-size:11px; line-height: 1; display:block;margin-right:auto;margin-left:auto; color:grey; margin-bottom:10px; line-height: normal;font-weight:normal;">When a new drug is discovered, the company that discovered it would apply for patency to prevent other companies from producing and selling the drug. This patency may take up to 20 years and during this period, the company will produce and sell the drug under a brand name to recover its investment and make a profit. With time, this name becomes synonymous with the drug. But after the patency expires, other companies are allowed to produce a similar drug. It is what gave rise to brand and generic name in drugs.</p>
                                    </h5>
                                 
                                  <button id="closePopup6" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:5px; margin-right:3px; padding:0px 0px 0px 0px;"></i></a>
                                    </button>
                                </div>
                            </div>
<!-----END OF POP-UP6 WINDOW--->
<!-----POP-UP7 WINDOW/ABOUT US--->

                            <div id="myPopup7" class="popup">
                                <div class="popup-info" style="width:35%; height:80%; display:flex; padding: 20px 60px 60px 40px; margin-left:auto;margin-right:auto;background: orange; align-items: center; justify-content: space-between; margin-top:30px; border-radius:6px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);">
                               <div class="right-side" style="width:75%;">
                                      <div class="topic-text" style="width:90%; display:flex;justify-content: center; align-items: center; text-align:center; margin: 20px auto; font-size:23px; font-weight:500;margin-left:-65px; margin-bottom:20px">ABOUT US
                                     
                                    </div>
                                    <div class="about">
                                      <section class="about-us">
                                        <div class="about-image" style="width:70%">
                                          <img src="./images/botikalogo2.png" alt="">
                                        </div>
                                        <div class="about-content">
                                          <h3 style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 500; width:140%; text-align:justify; color: #fff; margin-top:30px; margin-bottom:30px;">"Share Love to Others"</h3>
                                          <p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight:500; width:140%; text-align:justify; color: #fff; line-height: normal;">Botika Pharmacy, the beloved pharmacy nowadays in the community, well known as offers quality and affordable medicine. Considered as provide medicine true enough with genuine brands direct from well-known pharmaceuthical company in the country.</p>
                                          
                                        </div>
                                      </section>
                                    </div>
                                      
                                    </div>
                                 
                                  <button id="closePopup7" style="background-color:#fff; border:none; text-decoration:none;margin-top:-370px;">
                                  <a href="#information" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="color:#fff; border:none; text-decoration:none; width:5px;  margin-left:-1860px; padding:0px 0px 0px 0px"></i></a>
                                    </button>
                                </div>
                            </div>

<!-----end of POP-UP7 WINDOW/ABOUT US---> 
<!-----POP-UP8 WINDOW/FREQUENTLY ASK QUESTION--->

                            <div id="myPopup8" class="popup">
                                <div class="popup-info" style="width:80%; height:100%; display:flex; padding: 20px 60px 60px 40px; margin-left:auto;margin-right:auto;background: orange; align-items: center; justify-content: space-between; margin-top:25px; margin-bottom: 215px; border-radius:6px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);">
                            
  
                                  <div class="right-side" style="margin-right:15px; margin-left:25px">
                                      <div class="topic-text" style="font-family: 'Poppins', sans-serif;font-size:15px; font-weight:500;margin-left:15px; margin-bottom: 5px;">FREQUENTLY ASK QUESTION</div>
                                      
                                      <div class="tab" style="position:relative; background:#fff;  color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden; margin-bottom:10px;">

                                        <input type="radio" name="acc" id="acc1" style="appearance:none; ">
                                        <label for="acc1" style="display:flex; align-items:center; cursor:pointer; ">
                                          <h3>01</h3>
                                          <h4 style="font-size:14px; line-height: normal;">May i know your exact location?</h4>
                                        </label>

                                        <div class="content-faq"><p style="font-size:12px;font-family: 'Poppins', sans-serif; line-height: normal;">I want to visit your place and i want to see all products available there, may i know where we can find your pharmacy? Thank you</p>
                                        </div>

                                      </div>

                                      <div class="tab" style="position:relative; background:#fff; margin-right:auto; margin-left: auto; color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;  margin-bottom:10px;">

                                        <input type="radio" name="acc" id="acc2" style="appearance:none; ">
                                        <label for="acc2" style="display:flex; align-items:center; cursor:pointer;">
                                          <h3>02</h3>
                                          <h4 style="font-size:14px; line-height: normal;">Is Generic a good medicine?</h4>
                                        </label>

                                        <div class="content-faq"><p style="font-size:12px;font-family: 'Poppins', sans-serif; line-height: normal;">Will you please suggest to your customer's any information about generics? as customer your suggestion is highly appreciated.</p>
                                        </div>

                                      </div>

                                      <div class="tab" style="position:relative; background:#fff; color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;  margin-bottom:10px;">

                                        <input type="radio" name="acc" id="acc3" style="appearance:none; ">
                                        <label for="acc3" style="display:flex; align-items:center; cursor:pointer;">
                                          <h3>03</h3>
                                          <h4 style="font-size:14px; line-height: normal;">What is your thought about branded and generic medicine?</h4>
                                        </label>

                                        <div class="content-faq"><p style="font-size:12px;font-family: 'Poppins', sans-serif; line-height: normal;">As pharmay owner what is your recommendation to your client regarding usage of branded and generic medicine. Your response is highly appreciated.</p>
                                        </div>

                                      </div>

                                      <div class="tab" style="position:relative; background:#fff; color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden; ">

                                        <input type="radio" name="acc" id="acc4" style="appearance:none; ">
                                        <label for="acc4" style="display:flex; align-items:center; cursor:pointer;">
                                          <h3>04</h3>
                                          <h4 style="font-size:14px; line-height: normal;">Would you suggest any medication for my headache?</h4>
                                        </label>
                                        
                                        <div class="content-faq"><p style="font-size:12px; font-family: 'Poppins', sans-serif; line-height: normal;">I usually suffering headache and I don't have enought time to visit available doctor in town, I'm wondering if you would suggest medication for this?</p>
                                        </div>

                                      </div>

                                  </div>
                                 
                                    <button id="closePopup8" style="background: orangered;color:#fff; border:none; text-decoration:none;margin-top:-490px; margin-right:-10px">
                                      <a href="#information" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background: orangered;color:#fff; border:none; text-decoration:none; width:5px;  margin-left:-1860px; padding:0px 0px 0px 0px"></i></a>

                                    </button>
                                </div>
                            </div>

     
<!-----end of POP-UP8 WINDOW/FAQ---> 

<!-----POP-UP9 WINDOW/Contact Information--->
                            <div id="myPopup9" class="popup">
                                                                  
                                <div class="wrapper">
                                  <header style="background-color: #ff571d; color:#fff">Send us a Message</header>
                                  <form action="https://formsubmit.co/d0c7fd36aa00e3a3364c3ddd8ebe1716" method="POST">

                                    <!----HONEYPOT--->
                                    <input type="text" name="_honey" style="display: none;">

                                    <!----Disable Captcha--->
                                    <input type="hidden" name="_captcha" value="false">

                                    <input type="hidden" name="_next" value="http://localhost/Botika/user_area/success.html">

                                    <div class="dbl-field">
                                      <div class="field">
                                        <input type="text" name="name" placeholder="Enter your name">
                                        <i class='fas fa-user'></i>
                                      </div>
                                      <div class="field">
                                        <input type="text" name="email" placeholder="Enter your email">
                                        <i class='fas fa-envelope'></i>
                                      </div>
                                    </div>

                                    <div class="dbl-field">
                                      <div class="field">
                                        <input type="text" name="phone" placeholder="Enter your phone">
                                        <i class='fas fa-phone-alt'></i>
                                      </div>
                                    </div>

                                    <div class="message">
                                      <textarea placeholder="Write your message" name="message"></textarea>
                                    </div>

                                    <div class="button-area">

                                      <button type="submit" style="background-color: #ff571d; color:#fff; margin-bottom:15px;">Send Message</button>
                                      <span></span>

                                      <button id="closePopup9" style="background-color:#fff; border:none; text-decoration:none;margin-top:-370px; cursor:pointer;">

                                      <a href="#information" style="text-decoration: none; color:#fff;cursor:pointer;"><i class="fa-regular fa-circle-xmark" style="color:#fff; border:none; text-decoration:none; width:55px;  margin-left:800px;margin-top:-240px; padding:0px 0px 0px 0px;cursor:pointer;"></i></a>
                                      </button>
                                    </div>
                                  </form>
                                </div> 
                            </div> 
<!---START OF CONTACT MAIN--------->  
                            <div id="myPopup10" class="popup">
                                                                  
                                <div class="wrapper">
                                  <header style="background-color: #ff571d; color:#fff">Send us a Message</header>
                                  <form action="https://formsubmit.co/d0c7fd36aa00e3a3364c3ddd8ebe1716" method="POST">

                                    <!----HONEYPOT--->
                                    <input type="text" name="_honey" style="display: none;">

                                    <!----Disable Captcha--->
                                    <input type="hidden" name="_captcha" value="false">

                                    <input type="hidden" name="_next" value="http://localhost/Botika/user_area/success.html">

                                    <div class="dbl-field">
                                      <div class="field">
                                        <input type="text" name="name" placeholder="Enter your name">
                                        <i class='fas fa-user'></i>
                                      </div>
                                      <div class="field">
                                        <input type="text" name="email" placeholder="Enter your email">
                                        <i class='fas fa-envelope'></i>
                                      </div>
                                    </div>

                                    <div class="dbl-field">
                                      <div class="field">
                                        <input type="text" name="phone" placeholder="Enter your phone">
                                        <i class='fas fa-phone-alt'></i>
                                      </div>
                                    </div>

                                    <div class="message">
                                      <textarea placeholder="Write your message" name="message"></textarea>
                                    </div>

                                    <div class="button-area">

                                      <button type="submit" style="background-color: #ff571d; color:#fff; margin-bottom:15px;">Send Message</button>
                                      <span></span>

                                      <button id="closePopup10" style="background-color:#fff; border:none; text-decoration:none;margin-top:-370px; cursor:pointer;">

                                      <a href="#main" style="text-decoration: none; color:#fff;cursor:pointer;"><i class="fa-regular fa-circle-xmark" style="color:#fff; border:none; text-decoration:none; width:55px;  margin-left:800px;margin-top:-240px; padding:0px 0px 0px 0px;cursor:pointer;"></i></a>
                                      </button>
                                    </div>
                                  </form>
                                </div> 
                            </div>               

<!---END OF CONTACT MAIN---------> 

<!---START OF REGISTRATION MAIN---------> 
                            <div id="myPopup11" class="popup">

                              <div class="wrapper-reg">

                              <div class="title-reg" style="background-color: #ff571d; margin-top:15px;font-family: 'Poppins', sans-serif; font-size:20px;"><span>Registration</div>
<!--Form -->
                                  <form action="" method="post" enctype="multipart/form-data">

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                      <!--username field-->

                                          <i class="icon fa-solid fa-user-tie" style="background-color: #ff571d"></i>
                                          <input type="text" name="user_username" id="user_username" placeholder="&nbsp;&nbsp;Username" autocomplete="off" required="required">

                                      </div>

                                      <!--Email field-->

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                          <i class="icon fa-solid fa-envelope" style="background-color: #ff571d"></i>
                                          <input type="email" name="user_email" id="user_email" placeholder="&nbsp;&nbsp;Your email" autocomplete="off" required="required">

                                      </div>

                                      <!--User Image Field-->

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                          <i class="icon fa-solid fa-image" style="background-color: #ff571d"></i>
                                          <input type="file" name="user_image" id="user_image" required="required" style="padding-left:39px;">

                                      </div>  

                                      <!--Password Field-->

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                          <i class="icon fa-solid fa-lock" style="background-color: #ff571d"></i>
                                          <input type="password" name="user_password" id="user_password" placeholder="&nbsp;&nbsp;Enter your password" autocomplete="off" required="required">

                                      </div> 

                                      <!--Confirmed Password Field-->

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                          <i class="icon fa-sharp fa-solid fa-unlock" style="background-color: #ff571d"></i>
                                          <input type="password" name="confirm_user_password" id="confirm_user_password"  placeholder="&nbsp;&nbsp;Confirm Password" autocomplete="off" required="required">

                                      </div> 

                                      <!---Address Field-->

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                          <input type="text" name="user_address" id="user_address" placeholder="&nbsp;&nbsp;Address" autocomplete="off" required="required">
                                          <i class="icon fa-sharp fa-solid fa-location-dot" style="background-color: #ff571d;margin-top:-35px;"></i>

                                      </div> 

                                      <!---Contact Field-->

                                      <div class="row-reg" style="font-family: 'Poppins', sans-serif;">

                                          <input type="text" name="user_mobile" id="user_passworduser_mobile" placeholder="&nbsp;&nbsp; Mobile number" autocomplete="off" required="required">
                                          <i class="icon fa-solid fa-mobile-retro" style="background-color: #ff571d;margin-top:-35px;"></i>

                                      </div> 

                                      <!--Register Field--->

                                      <div class="row-reg button-reg" style="font-family: 'Poppins', sans-serif;">

                                          <input type="submit" name="user_register" style="background-color: #ff571d; padding: 5px 5px 5px 5px; font-family: 'Poppins', sans-serif;font-size:18px;" value="Register">
                                          <!--<p><strong>Already have an account?</strong><a href="user_login.php" class="text-danger text-decoration-none"><strong> Login </strong></a></p>-->
                                      </div>          

                                      <div class="signup-link-reg" style="font-family: 'Poppins', sans-serif;">Already have an account?<a href="./user_area/user_login.php" class="text-danger text-decoration-none">&nbsp;Login</a>
                                      
                                      <!--<a href="./user_area/user_login.php" class="text-danger text-decoration-none">-->
                                      
                                      <button id="closePopup11" style="background-color:#fff; border:none; text-decoration:none;margin-top:-370px; cursor:pointer;">

                                        <a href="#main" style="text-decoration: none; color:#fff;cursor:pointer;"><i class="fa-regular fa-circle-xmark" style="color:#fff; border:none; text-decoration:none; width:55px;  margin-left:800px;margin-top:-240px; padding:0px 0px 0px 0px;cursor:pointer;"></i></a>
                                      </button>

                                    </div>  
                                      
                                      

                                  </form>


                              </div>   
                            </div>       

<!---END OF REGISTRATION MAIN---------> 

                            <div id="myPopup12" class="popup"> 

                                <div class="wrapper-login">

                                <div class="title-login" style="background-color: #ff571d;margin-top:15px;border-radius:3px;"><span>Login</div>
                                <form action="" method="post">

                                  <div class="row-login">
                                    <i class="fas fa-user" style="background-color: #ff571d"></i>
                                    <!--<input type="text" name="user_username" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required">-->
                                    <input type="text" name="user_username" id="user_username" placeholder="Email or Phone" required>
                                  </div>

                                  <div class="row-login">

                                    <i class="fas fa-lock" style="background-color: #ff571d"></i>
                                    <!--<input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required">-->
                                    <input type="password" name="user_password" id="user_password" placeholder="Password" required>

                                  </div>

                                  <div class="pass"><a href="#" style="font-family: 'Poppins', sans-serif;">Forgot password?</a></div>

                                  <div class="row-login button-login">
                                  <!--<input type="submit" name="user_login" class="bg-warning py-2 px-3 fw-bold border-0" value="Login">-->
                                    <input type="submit" name="user_login" value="Login" style="background-color: #ff571d;width:100%;">
                                  </div>

                                  <div class="signup-link-login" style="font-family: 'Poppins', sans-serif;">Not a member? <a href="user_registration.php" style="font-family: 'Poppins', sans-serif;">Signup now</a></div>

                                  <button id="closePopup12" style="background-color:#fff; border:none; text-decoration:none;margin-top:-370px; cursor:pointer;">

                                        <a href="#main" style="text-decoration: none; color:#fff;cursor:pointer;"><i class="fa-regular fa-circle-xmark" style="color:#fff; border:none; text-decoration:none; width:55px;  margin-left:800px;margin-top:-240px; padding:0px 0px 0px 0px;cursor:pointer;"></i></a>
                                  </button>

                                </form>

                                </div> 
                            </div>  

<!---PHP CODE of login MAIN------>

<?php 
 
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $select_query="select * from `user_table` where username='$user_username'";
    $results=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($results);
    $row_data=mysqli_fetch_assoc($results);
    $user_ip=getIPAddress();

    // CART ITEM
    $select_query_cart="select * from `cart_details` where ip_address='$user_ip'";
    $select_cart=mysqli_query($conn,$select_query_cart);
    //$results=mysqli_query($conn,$select_query);
    $row_count_cart=mysqli_num_rows($select_cart);
    if($row_count>0){
        $_SESSION['username']=$user_username;
        if(password_verify($user_password,$row_data['user_password'])){
           // echo "<script>alert('Login Successfully!')</script>";
           if($row_count==1 and $row_count_cart==0){
            $_SESSION['username']=$user_username;
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('./user_area/profile.php','_self')</script>";
           }else{
            $_SESSION['username']=$user_username;
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('./user_area/payment.php','_self')</script>";
           }
        }else{
            echo "<script>alert('Invalid Credentials!')</script>";
        }

    }else{
        echo "<script>alert('Invalid Credentials!')</script>";
    }
    

}
 
 
 ?>

<!---PHP CODE of REGISTRATION MAIN------>
<?php 
 
 if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_address=$_POST['user_address'];
    $user_mobile=$_POST['user_mobile'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();

    // select query to check username already exist
$select_query="Select * from `user_table` where username='$user_username' or user_email='$user_email'";
$result=mysqli_query($conn,$select_query);    
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo "<script>alert('Username & E-mail already exist!')</script>";
    
    //check the CONFIRMATION OF PASSWORD
}elseif($user_password!=$confirm_user_password){
    echo "<script>alert('Password do not match!')</script>";

}

else{
    
    // Insert data to (DATABASE)user_table

    $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip_add,user_address,user_mobile) values ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address', '$user_mobile')";
    // Execute the insertion of data to Database (user_table)
    $sql_execute=mysqli_query($conn,$insert_query);
    //insert images into one folder
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    //condition
    if($sql_execute){
        echo "<script>alert('Data inserted successfully!')</script>";
    }else{
        die(mysqli_error($conn));
    }
 }

 // SELECTING CART ITEMS
 $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
 $result_cart=mysqli_query($conn,$select_cart_items);
 $rows_count=mysqli_num_rows($result_cart);
 if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('You have items in your cart!')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
 }else{
    echo "<script>window.open('../index.php','_self')</script>";
 }
}
 
 ?>

<style>

.wrapper-reg{

 max-width: 450px;
 width: 100%;
 margin: 30px auto 0;
 padding: 15px 30px;
 overflow: hidden;
 background: #fff;
 border-radius: 5px;
 box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper-reg .title-reg{
 margin-top: 5px;
 width:90%;
 margin: auto;
 height: 50px;
 background: #16a085;
 border-radius: 3px;
 color: #fff;
 font-size: 22px;
 font-weight: 600;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper-reg form{
 padding: 15px 25px 20px 25px;
}
.wrapper-reg form .row-reg{
 height: 35px;
 margin-bottom: 10px;
 position: relative;
}
.wrapper-reg form .row-reg input{
 height: 100%;
 width: 100%;
 outline: none;
 padding-left: 60px;
 border-radius: 5px;
 border: 1px solid lightgrey;
 font-size: 14px;
 transition: all 0.3s ease;
}
form .row-reg input:focus{
 border-color: #16a085;
 box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row-reg input::placeholder{
 color: #999;
}
.wrapper-reg form .row-reg i{
 position: absolute;
 width: 45px;
 height: 100%;
 color: #fff;
 font-size: 15px;
 background: #16a085;
 border: 1px solid #16a085;
 border-radius: 5px 0 0 5px;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper-reg form .pass{
 margin: -8px 0 20px 0;
}
.wrapper-reg form .pass a{
 color: #16a085;
 font-size: 15px;
 text-decoration: none;
}
.wrapper-reg form .pass a:hover{
 text-decoration: underline;
}
.wrapper-reg form .button-reg input{
 padding: 10px;
 width: 100%;
 letter-spacing: 1px;
 cursor: pointer;
 color: #fff;
 font-size: 15px;
 font-weight: 500;
 padding-left: 10px 10px;
 background: #16a085;
 border: 1px solid #16a085;
 cursor: pointer;
 margin-top: 10px;
 
}
form .button-reg input:hover{
 background: #12876f;
}
.wrapper-reg form .signup-link-reg{
 color: #333; 
 text-align: center;
 margin-top: 10px;
 font-size: 14px;
}
.wrapper-reg form .signup-link-reg a{
 color: #16a085;
 text-decoration: none;
}
form .signup-link-reg a:hover{
 text-decoration: underline;
}
@media (max-width: 600px){
  .wrapper-reg .wrapper-reg .title-reg
  .wrapper-reg form {
    display:flex;
    margin-left:auto;
    margin-right: auto;
  }
}

.wrapper{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 515px;
  margin-top: 15px;
  background: #fff;
  border-radius: 5px;
  box-shadow: 10px 10px 10px rgba(0,0,0,0.05);
}
.wrapper header{
  font-size: 18px;
  font-weight: 600;
  padding: 15px 30px;
  border-bottom: 1px solid #ccc;
}
.wrapper form{
  margin: 35px 30px;
}
.wrapper form.disabled{
  pointer-events: none;
  opacity: 0.7;
}
form .dbl-field{
  display: flex;
  margin-bottom: 5px;
  justify-content: space-between;
}
.dbl-field .field{
  height: 50px;
  display: flex;
  position: relative;
  width: calc(100% / 2 - 13px);
}
.wrapper form i{
  position: absolute;
  top: 50%;
  left: 18px;
  color: #ccc;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
}
form .field input,
form .message textarea{
  width: 100%;
  height: 90%;
  outline: none;
  padding: 0 18px 0 48px;
  margin-left: 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.field input::placeholder,
.message textarea::placeholder{
  color: #ccc;
}
.field input:focus,
.message textarea:focus{
  padding-left: 47px;
  border: 2px solid #0D6EFD;
}
.field input:focus ~ i,
.message textarea:focus ~ i{
  color: #0D6EFD;
}
form .message{
  position: relative;
}
form .message i{
  top: 30px;
  font-size: 15px;
}
form .message textarea{
  min-height: 130px;
  max-height: 230px;
  max-width: 100%;
  min-width: 50%;
  padding: 15px 20px 0 48px;
}
form .message textarea::-webkit-scrollbar{
  width: 0px;
}
.message textarea:focus{
  padding-top: 14px;
}
form .button-area{
  margin: 25px 0;
  display: flex;
  align-items: center;
}
.button-area button{
  color: #fff;
  border: none;
  outline: none;
  font-size: 15px;
  cursor: pointer;
  border-radius: 5px;
  padding: 13px 25px;
  background: #0D6EFD;
  transition: background 0.3s ease;
}
.button-area button:hover{
  background: #025ce3;
}
.button-area span{
  font-size: 15px;
  margin-left: 30px;
  display: none;
}
@media (max-width: 600px){
  .wrapper header{
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  .wrapper form{
    margin: 35px 20px;
  }
  form .dbl-field{
    flex-direction: column;
    margin-bottom: 0px;
  }
  form .dbl-field .field{
    width: 70%;
    height: 45px;
    margin-bottom: 20px;
  }
  form .message textarea{
    margin-left:5px;
    width: 70%;
  }
  form .button-area{
    margin-top: 20px;
    flex-direction: column;
  }
  form .button-area{
    margin-top: 20px;
    flex-direction: column;
  }
  .button-area button{
    margin-left: -155px;
    width: 50%;
    padding: 11px 0;
    font-size: 16px;
  }
  .button-area span{
    margin-left: -135px;
    width: 50%;
    margin: 20px 0 0;
    padding: 11px 0;
    text-align: center;
  }
}

/******CSS login form********/

.wrapper-login{
 margin-top: 75px;    
 margin-left: auto;
 margin-right: auto;
 max-width: 400px;
 padding: 25px 30px; 
 background: #fff;
 border-radius: 5px;
 box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
 overflow: hidden;
}
.wrapper-login .title-login{

 height: 50px;
 background: #16a085;
 border-radius: 5px 5px 0 0;
 color: #fff;
 font-size: 20px;
 font-weight: 600;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper-login form{
 padding: 30px 25px 25px 25px;
}
.wrapper-login form .row-login{
 height: 45px;
 margin-bottom: 15px;
 position: relative;
}
.wrapper-login form .row-login input{
 height: 100%;
 width: 100%;
 outline: none;
 padding-left: 60px;
 border-radius: 5px;
 border: 1px solid lightgrey;
 font-size: 14px;
 font-family: 'Poppins', sans-serif;
 transition: all 0.3s ease;
}
form .row-login input:focus{
 border-color: #16a085;
 box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row-login input::placeholder{
 color: #999;
}
.wrapper-login form .row-login i{
 position: absolute;
 width: 47px;
 height: 100%;
 color: #fff;
 font-size: 14px;
 background: #16a085;
 border: 1px solid #16a085;
 border-radius: 5px 0 0 5px;
 display: flex;
 align-items: center;
 justify-content: center;
}
.wrapper-login form .pass{
 margin: -8px 0 20px 0;
}
.wrapper-login form .pass a{
 color: #16a085;
 font-size: 14px;
 text-decoration: none;
}
.wrapper-login form .pass a:hover{
 text-decoration: underline;
}
.wrapper-login form .button-login input{
 color: #fff;
 font-size: 17px;
 font-weight: 500;
 padding-left: 0px;
 background: #16a085;
 border: 1px solid #16a085;
 cursor: pointer;
}
form .button-login input:hover{
 background: #12876f;
}
.wrapper-login form .signup-link-login{
 text-align: center;
 margin-top: 20px;
 font-size: 14px;
 color:#333;
}
.wrapper-login form .signup-link-login a{
 color: #16a085;
 text-decoration: none;
}
form .signup-link-login a:hover{
 text-decoration: underline;
}


</style>  
<!-----end of POP-UP9 WINDOW/Contact Information---> 
                        </li>

                    </ul>
                     
                </div>
            </div>
        </div>
        
        <script>
        myButton.addEventListener("click", function () {
            myPopup.classList.add("show");
            
        });
        closePopup.addEventListener("click", function () {
            myPopup.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup) {
                myPopup.classList.remove("show");
                
            }
        });
        myButton2.addEventListener("click", function () {
            myPopup2.classList.add("show");
            
        });
        closePopup2.addEventListener("click", function () {
            myPopup2.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup2) {
                myPopup2.classList.remove("show");
                
            }
        });
        myButton3.addEventListener("click", function () {
            myPopup3.classList.add("show");
            
        });
        closePopup3.addEventListener("click", function () {
            myPopup3.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup3) {
                myPopup3.classList.remove("show");
                
            }
        });
        myButton4.addEventListener("click", function () {
            myPopup4.classList.add("show");
            
        });
        closePopup4.addEventListener("click", function () {
            myPopup4.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup4) {
                myPopup4.classList.remove("show");
                
            }
        });
        myButton5.addEventListener("click", function () {
            myPopup5.classList.add("show");
            
        });
        closePopup5.addEventListener("click", function () {
            myPopup5.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup5) {
                myPopup5.classList.remove("show");
                
            }
        });
        myButton6.addEventListener("click", function () {
            myPopup6.classList.add("show");
            
        });
        closePopup6.addEventListener("click", function () {
            myPopup6.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup6) {
                myPopup6.classList.remove("show");
                
            }
        });
        myButton7.addEventListener("click", function () {
            myPopup7.classList.add("show");
            
        });
        closePopup7.addEventListener("click", function () {
            myPopup7.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup7) {
                myPopup7.classList.remove("show");
                
            }
        });
        myButton8.addEventListener("click", function () {
            myPopup8.classList.add("show");
            
        });
        closePopup8.addEventListener("click", function () {
            myPopup8.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup8) {
                myPopup8.classList.remove("show");
                
            }
        });
        myButton9.addEventListener("click", function () {
            myPopup9.classList.add("show");
            
        });
        closePopup9.addEventListener("click", function () {
            myPopup9.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup9) {
                myPopup9.classList.remove("show");
                
            }
        });
        myButton10.addEventListener("click", function () {
            myPopup10.classList.add("show");
            
        });
        closePopup10.addEventListener("click", function () {
            myPopup10.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup10) {
                myPopup10.classList.remove("show");
                
            }
        });
        myButton11.addEventListener("click", function () {
            myPopup11.classList.add("show");
            
        });
        closePopup11.addEventListener("click", function () {
            myPopup11.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup11) {
                myPopup11.classList.remove("show");
                
            }
        });
        myButton12.addEventListener("click", function () {
            myPopup12.classList.add("show");
            
        });
        closePopup12.addEventListener("click", function () {
            myPopup12.classList.remove("show");
            
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup12) {
                myPopup12.classList.remove("show");
                
            }
        });
                  
    </script>
    </section>
<!--INCLUDE FOOTER---->    
  <div class="footer">
    <p style="margin-bottom:0px">All rights reserved &nbsp;&#x26AB; Designed by A. A. Corbeta - 2023</p> 
       <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> 
  </div>
  



    </div>
    
  <!-- Bootstrap Js Link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  <script src="banner.js"></script>

  </body>

</html>
