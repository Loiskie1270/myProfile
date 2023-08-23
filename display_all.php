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
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Fontawesome link -->
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css" integrity="sha512-2dJkRM/DmWkZqINs3QixNKKsgG9mlBT9/PieLVF8OEGHCpPNBoPFYmGPL/yD7JuQVVm2IESF5K0zTDBaf4qehQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/adadafda03.js" crossorigin="anonymous"></script>

    <script>
      const activePage = window.location.pathname;
      const navLinks =document.querySelectorAll('nav a').forEach(link => {
        if(link.href.includes(`${activePage}`)){
          link.classList.add('active');
        }
      })
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

.navbar-nav > .active > a {
  color: aqua !important;;
}
.nav-item > a:hover {
  color: aqua;
}
.active{
    color:aqua !important;
}
.navbar-nav > .active  a{
    color : aqua !important;
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
    animation: slide 6s infinite;
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
    color: 	#FFFDD0;
  }
  20% {
    color: #F9F6EE;
  }
  30% {
    color: 	#F5F5DC;
  }
  40% {
    color: #EDEADE;
  }
  50% {
    color: #FFFFF0;
  }
  60% {
    color: #FFF;
  }
  70% {
    color: #FAF9F6;
  }
  80% {
    color: #FCF5E5;
  }
  90% {
    color: #FCF5E5;
  }
  100% {
    color: #E9DCC9;
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
        }
        .popup .tab input:checked ~ label h4{
          background: #fff;
          padding: 2px 10px;
          color: #333;
          border-radius: 2px;
          box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .popup .tab input:checked ~ .content-faq p{
          background: #fff;
          color: #333;
          padding: 2px 10px;
          border-radius: 2px;
        }
        .popup .tab:hover label::after{
          color: #fff;
        }
        .popup .tab label h3{
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="display_all.php">My Pharmacy</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./user_area/contact.php">Contact Us</a>
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
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search_data">
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
                <a class='nav-link text-light href='#'>Welcome <strong style='color: yellow'>    ".$_SESSION['username']."</strong></a>
              </li>";
              }   
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='./user_area/user_login.php'>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='logout.php'>Logout</a>
</li>";
}  
    
?>    
  </ul>
</nav>
<!--third child -->
<div class="container-image" style="background-color: #ff571d; padding:20px; width:101%; position : sticky;">
   
   <p class="awesome" style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-22px;  margin-left: -14px; font-size:15px; position : sticky; ">GARANTISADO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GAMOT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;BAGO</p>
</div>

<!--fourth child -->
<div class="row px-1">
  <div class="col-md-10">
  <!--display products -->
    <div class="row">
   <!--fetch products -->

 <?php 
 //calling functions-->
//getproducts();
get_all_products();
get_uniqe_category();
get_uniqe_brands();
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
        <!--categories to be displayed -->
          <li class="nav-item" style="background-color: #f5ffcf; color:green; font-family: 'Poppins', sans-serif; font-size: 17px; border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3">
           <a href="#" class="nav-link text-decoration-none">Botika Choice</a>
          </li>
      <?php 
 getbrands();
//bramds fumction 
//$select_brands="select * from `brands`";
//$result_brands=mysqli_query($conn, $select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
//while($row_data=mysqli_fetch_assoc($result_brands)){
//  $brand_title=$row_data['brand_title'];
//  $brand_id=$row_data['brand_id'];
//  echo "<li class='nav-item'>
//  <a href='index.php?brand=$brand_title' class='nav link text-light'>$brand_title</a>
//</li>";
//}

?>
        </ul>
        <ul class="navbar-nav me-auto mb-0 text-center">
<!--categories to be displayed -->
          <li class="nav-item mb-0" style="background-color: #f5ffcf; color:green; font-family: 'Poppins', sans-serif; font-size: 17px; border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3">
            <a href="#" class="nav-link text-decoration-none">Categories</a>
          </li>
        <?php 

getcategories();      

//$select_categories="select * from `categories`";
//$result_categories=mysqli_query($conn, $select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
//while($row_data=mysqli_fetch_assoc($result_categories)){
//  $category_title=$row_data['category_title'];
//  $category_id=$row_data['category_id'];
//  echo "<li class='nav-item'>
//  <a href='index.php?category=$category_id' class='nav link text-light'>$category_title</a>
//</li>";
//}
?>
        </ul>
  
  </div>
    </div>

    <div style="background-color: #ff571d; padding:10px; width:101%; position : sticky;">
        <p style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-2px;  margin-left: -14px; font-size:15px; color: white; position : sticky;">GARANTISADO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GAMOT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;BAGO</p>
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



    <!--FOOTER -->

     <div class="footer">
     <p style="margin-bottom: 5px;">All rights reserved &nbsp;&#x26AB; Designed by A. A. Corbeta - 2023</p> 
       <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> 
    </div>


    </div>
    
  <!-- Bootstrap Js Link -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>

</html>
