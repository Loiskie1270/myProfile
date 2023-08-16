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
   
<!-- style.css -->

    <link rel="stylesheet" href="style.css">

   <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Amatic+SC:wght@700&family=Bebas
  +Neue&family=Caveat&family=Clicker+Script&family=Pacifico&family=Permanent+Marker&family=Rubik+Puddles&display=swap" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

<style>

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
  filter: drop-shadow(5px 5px 10px white);

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
  filter: drop-shadow(2px 2px 5px white);
  /*mix-blend-mode: multiply;*/
  /*filter: contrast(1);*/
}
.card{
  box-shadow: 0px 0px 2px 2px lightgray;
  padding: 5px 10px ;
  height: 97%;
  width: 97%;
  margin-left: 5px;
  margin-right: -55px;
  margin-top: 10px;
  margin-bottom: 10px;
  column-gap: 2px;
  caret-color: transparent;
}
.card-title{
  text-align: right;
  margin-right: -5px;
  font-weight: bold;
}
.card-text{
  font-size: 15px;
  margin-top: 20px;
  margin-bottom: 1px;
  font-weight: bold;
}
.fa-stack[data-count]:after{
  text-decoration: none;
  position:absolute;
  right:20%;
  left: 24px;
  top: 5px;
  content: attr(data-count);
  padding:.5em;
  border-radius:999px;
  line-height:.70em;
  color: white;
  text-align:center;
  min-width:2em;
  font-weight:bold;
  background: #799cf0;
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
    color: blue;
  }
  20% {
    color: green;
  }
  30% {
    color: blue;
  }
  40% {
    color: white;
  }
  50% {
    color: blue;
  }
  60% {
    color: white;
  }
  70% {
    color: blue;
  }
  80% {
    color: green;
  }
  90% {
    color: white;
  }
  100% {
    color: blue;
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

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff571d; padding:10px; width:101%">
  <div class="container-fluid">
  <img src="./images/botikalogo2.png" alt="" class="logo">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php"><strong>Products</strong></a>
        </li>

        <?php 
 if(isset($_SESSION['username'])){
echo "<li class='nav-item'>
<a class='nav-link' href='./user_area/profile.php'><strong>My Account</strong></a>
</li>"; 
  }else{
    echo "<li class='nav-item'>
    <a class='nav-link' href='./user_area/user_registration.php'><strong>Register</strong></a>
    </li>"; 
  }
 
?>
        
        <li class="nav-item">
          <a class="nav-link" href="./user_area/contact.php"><strong>Contact Us</strong></a>
        </li>

        <li class="nav-item">
          <a class="nav-link fa-stack fa-1x has-badge" data-count="<?php cart_item();?>" href="cart.php"><i class="fa fa-shopping-cart"></i><strong><sup></sup></strong></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#" style="margin-left:15px; font-weight:bold; margin-top:-7px"><span>Total Price: <font size="+2">₱ <?php total_cart_price();?></font></span></a> 
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
<?php 
cart();
?>

<!--second Child -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffbc7e; padding:0px; width:101%">

  <ul class="navbar nav me-auto">
    
    <?php
               if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'>
                <a class='nav-link text-dark' href='#'><strong>Welcome Guest</strong></a>
              </li>";
              }else{
                echo "<li class='nav-item'>
                <a class='nav-link text-dark href='#'>Welcome <strong style='color: yellow'>    ".$_SESSION['username']."</strong></a>
              </li>";
              }   
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-light' href='./user_area/user_login.php'><strong>Login</strong></a>
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

<div class="container-image" style="background-color: #ff571d; padding:20px; width:101%; position : sticky; ">
   
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
           <a href="#" class="nav-link text-decoration-none">Branded</a>
            </li>
      <?php 

 getbrands();

?>
        </ul>
        <ul class="navbar-nav me-auto mt-0 mb-0 text-center">

<!--categories to be displayed -->

            <li class="nav-item mb-0" style="background-color: #f5ffcf; color:green; font-family: 'Poppins', sans-serif; font-size: 17px; border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3">
            <a href="#" class="nav-link text-decoration-none">Generics</a>
            </li>
        <?php 

getcategories();      


?>
        </ul>
  
  </div>
    </div>
    <div style="background-color: #ff571d; padding:10px; width:101%; position : sticky; caret-color:transparent" id="information">
        <p style="font-family: 'Poppins', sans-serif; text-align: center; height:5px; margin-top:-2px;  margin-left: -14px; font-size:15px; color: white; position : sticky;"><a href="#information" style="color: white; text-decoration:none" id="myButton7">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x26AB;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#information" style="color: white; text-decoration:none" id="myButton8">FAQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>&#x26AB;&nbsp;&nbsp;&nbsp;<a href="#information" style="color: white; text-decoration:none" id="myButton9">Contact</a></p>
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
                        <h2 style="font-size: 25px; color: #FFFFFF; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);background-image: linear-gradient(to right, red , orange);width: 55%; margin-left: auto; margin-right: auto; display: flex; flex-direction: row; flex-wrap: wrap; align-items: center; justify-content: center;text-align:center; position: sticky; margin-bottom: 50px; padding: 10px 5px; border-radius: 3px">Your Daily Guide</h2>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon" >
                                <img src="./images/headache.png" style="width:20%; box-shadow: 0 3px 10px rgb(0 0 0 / 0.6); background-image: linear-gradient(to right, red , orange); border-radius: 5px" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Headache</h4>
                                <p style="color: grey; margin-bottom:5px">Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href="#features" class="text-button" id="myButton">Discover More</a>
                            </div>

<!-----POP-UP WINDOW--->         

                            <div id="myPopup" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px">
                                  <h5 style="color:#ff571d; margin-left: 15px; text-align:left">
                                        HEADACHE 
                                        <br><br>
                                          <img src="./images/br5.png" alt="" style="float: left; margin-left: 25px; margin-right: 10px; width:180px; margin-bottom:40px">
                                          <p style="font-size:12px; line-height: 1; margin-left:40px margin-right20px; text-align:justify; color:grey">the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog;</p>
                                    </h5>
                                  
                                  <button id="closePopup" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:-50px; margin-right:5px; padding:0px 0px 0px 0px"></i></a>
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
                                <h4>High Blood Pressure</h4>
                                <p style="color: grey; margin-bottom:5px">If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href="#features" class="text-button" id="myButton2">Discover More</a>
                            </div>

<!-----POP-UP2 WINDOW--->  

                            <div id="myPopup2" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px">
                                  <h5 style="color:#ff571d; margin-left: 15px; text-align:left">
                                        HIGH BLOOD PRESSURE
                                        <br><br>
                                        <img src="./images/br5.png" alt="" style="float: left; margin-left: 25px; margin-right: 10px; width:180px; margin-bottom:40px">
                                        <p style="font-size:12px; line-height: 1; margin-left:40px margin-right20px; text-align:justify; color:grey">the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog;</p>
                                    </h5>
                                  
                                  <button id="closePopup2" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:-50px; margin-right:5px; padding:0px 0px 0px 0px"></i></a>
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
                                <h4>Muscle Problem</h4>
                                <p style="color: grey; margin-bottom:5px">Credit goes to <a rel="nofollow" href="#" target="_blank"></a> for images and video background used in this HTML template.</p>
                                <a href="#features" class="text-button" id="myButton3">Discover More</a>
                            </div>

<!-----POP-UP3 WINDOW--->                              
                            <div id="myPopup3" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px">
                                  <h5 style="color:#ff571d; margin-left: 15px; text-align:left">
                                        MUSCLE PROBLEM
                                        <br><br>
                                        <img src="./images/br5.png" alt="" style="float: left; margin-left: 25px; margin-right: 10px; width:180px; margin-bottom:40px">
                                        <p style="font-size:12px; line-height: 1; margin-left:40px margin-right20px; text-align:justify; color:grey">the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog;</p>
                                    </h5>
                                 
                                  <button id="closePopup3" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:-50px; margin-right:5px; padding:0px 0px 0px 0px"></i></a>
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
                                <h4>Child Medicine</h4>
                                <p style="color: grey; margin-bottom:5px">This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href="#features" class="text-button" id="myButton4">Discover More</a>
                            </div>

<!-----POP-UP4 WINDOW--->     

                            <div id="myPopup4" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px">
                                  <h5 style="color:#ff571d; margin-left: 15px; text-align:left">
                                        Child Medicine
                                        <br><br>
                                        <img src="./images/br5.png" alt="" style="float: left; margin-left: 25px; margin-right: 10px; width:180px; margin-bottom:40px">
                                        <p style="font-size:12px; line-height: 1; margin-left:40px margin-right20px; text-align:justify; color:grey">the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog;</p>
                                    </h5>
                                  
                                  <button id="closePopup4" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:-50px; margin-right:5px; padding:0px 0px 0px 0px"></i></a>
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
                                <h4>Mother's Guide</h4>
                                <p style="color: grey; margin-bottom:5px">This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href="#features" class="text-button" id="myButton5">Discover More</a>
                            </div>

<!-----POP-UP5 WINDOW--->     

                            <div id="myPopup5" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px">
                                  <h5 style="color:#ff571d; margin-left: 15px; text-align:left">
                                        Mother's Guide
                                        <br><br>
                                        <img src="./images/br5.png" alt="" style="float: left; margin-left: 25px; margin-right: 10px; width:180px; margin-bottom:40px">
                                        <p style="font-size:12px; line-height: 1; margin-left:40px margin-right20px; text-align:justify; color:grey">the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog;</p>
                                    </h5>
                                  
                                  <button id="closePopup5" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:-50px; margin-right:5px; padding:0px 0px 0px 0px"></i></a>
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
                                <h4>Branded & Generics</h4>
                                <p style="color: grey; margin-bottom:5px">Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="#features" class="text-button" id="myButton6">Discover More</a>
                            </div>

<!-----POP-UP6 WINDOW--->    

                            <div id="myPopup6" class="popup">
                                <div class="popup-content" style="width:70%; height:70%; display:flex; align-items: center; justify-content: center; margin-top:90px">
                                  <h5 style="color:#ff571d; margin-left: 15px; text-align:left">
                                        Branded & Generics
                                        <br><br>
                                        <img src="./images/br5.png" alt="" style="float: left; margin-left: 25px; margin-right: 10px; width:180px; margin-bottom:40px">
                                        <p style="font-size:12px; line-height: 1; margin-left:40px margin-right20px; text-align:justify; color:grey">the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog; the quick brown fox jump over the lazy dog;</p>
                                    </h5>
                                 
                                  <button id="closePopup6" style="background-color:#fff; border:none; text-decoration:none; margin-top:310px; margin-bottom:-50px; padding:0px 0px 0px 0px;">
                                  <a href="#features" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="background-color:#fff;color:#ff571d; border:none; text-decoration:none; width:5px; margin-bottom:-50px; margin-right:5px; padding:0px 0px 0px 0px"></i></a>
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
                                          <h3 style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; width:140%; text-align:justify; color: #fff; margin-top:30px; margin-bottom:30px;">"Share Love to Others"</h3>
                                          <p style="font-family: 'Poppins', sans-serif; font-size: 13px; font-weight:500; width:140%; text-align:justify; color: #fff;">Botika Pharmacy, the beloved pharmacy nowadays in the community, well known as offers quality and affordable medicine. Considered as provide medicine true enough with genuine brands direct from well-known pharmaceuthical company in the country.</p>
                                          
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
                                          <h4 style="font-size:15px; font-weight:bold;">May i know your exact location?</h4>
                                        </label>

                                        <div class="content-faq"><p style="font-size:13px;font-family: 'Poppins', sans-serif; color:#fff;color:#333">I want to visit your place and i want to see all products available there, may i know where we can find your pharmacy? Thank you</p>
                                        </div>

                                      </div>

                                      <div class="tab" style="position:relative; background:#fff; margin-right:auto; margin-left: auto; color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;  margin-bottom:10px;">

                                        <input type="radio" name="acc" id="acc2" style="appearance:none; ">
                                        <label for="acc2" style="display:flex; align-items:center; cursor:pointer;">
                                          <h3>02</h3>
                                          <h4 style="font-size:15px; font-weight:bold;">Is Generic a good medicine?</h4>
                                        </label>

                                        <div class="content-faq"><p style="font-size:13px;font-family: 'Poppins', sans-serif; color:#fff;color:#333">Will you please suggest to your customer's any information about generics? as customer your suggestion is highly appreciated.</p>
                                        </div>

                                      </div>

                                      <div class="tab" style="position:relative; background:#fff; color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;  margin-bottom:10px;">

                                        <input type="radio" name="acc" id="acc3" style="appearance:none; ">
                                        <label for="acc3" style="display:flex; align-items:center; cursor:pointer;">
                                          <h3>03</h3>
                                          <h4 style="font-size:15px; font-weight:bold;">What is your thought about branded and generic medicine?</h4>
                                        </label>

                                        <div class="content-faq"><p style="font-size:13px;font-family: 'Poppins', sans-serif; color:#fff;color:#333">As pharmay owner what is your recommendation to your client regarding usage of branded and generic medicine. Your response is highly appreciated.</p>
                                        </div>

                                      </div>

                                      <div class="tab" style="position:relative; background:#fff; color:#333; padding: 0 15px 15px; box-shadow: 0 15px 25px rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden; ">

                                        <input type="radio" name="acc" id="acc4" style="appearance:none; ">
                                        <label for="acc4" style="display:flex; align-items:center; cursor:pointer;">
                                          <h3>04</h3>
                                          <h4 style="font-size:15px; font-weight:bold;">Would you suggest any medication for my headache?</h4>
                                        </label>
                                        
                                        <div class="content-faq"><p style="font-size:13px; font-family: 'Poppins', sans-serif; color:#fff;color:#333;">I usually suffering headache and I don't have enought time to visit available doctor in town, I'm wondering if you would suggest medication for this?</p>
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
                                <div class="popup-info" style="width:80%; height:80%; display:flex; padding: 20px 60px 60px 40px; margin-left:auto;margin-right:auto;background: orange; align-items: center; justify-content: space-between; margin-top:30px; border-radius:6px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);">
                                  
                                    <div class="left-side" style="width:25%;height:100%;position:relative;margin-top:15px;display:flex;flex-direction:column;align-items: center;justify-content: center;">
                                      <div class="address details" style="margin:14px;text-align:center;">
                                        <i class="fa-solid fa-location-dot" style="font-size:20px;color:#fff;margin-bottom:10px"></i>
                                        <div class="topic" style="font-size:18px;font-weight:bold; color:#DF0000;">Address</div>
                                        <div class="text-one">Mahalan St., Maliwanag</div>
                                        <div class="text-two">Quezon City</div>
                                      </div>
                                      <div class="phone details" style="margin:14px;text-align:center;">
                                        <i class="fa-solid fa-phone" style="font-size:20px;color:#fff;margin-bottom:10px"></i>
                                        <div class="topic" style="font-size:18px;font-weight:bold; color:#DF0000">Phone</div>
                                        <div class="text-one">0999-999-9999</div>
                                        <div class="text-two">0918-1818-8888</div>
                                      </div>
                                      <div class="email details" style="margin:14px;text-align:center;">
                                        <i class="fa-solid fa-envelope" style="font-size:20px;color:#fff;margin-bottom:10px"></i>
                                        <div class="topic" style="font-size:18px;font-weight:bold;color:#DF0000">Email</div>
                                        <div class="text-one">test@test.com</div>
                                        <div class="text-two">botika@gmail.com</div>
                                      </div>
                                    </div>
                                    <div class="right-side" style="width:75%;">
                                      <div class="topic-text" style="font-size:23px; font-weight:500;margin-left:15px">Send Message</div>
                                      
                                    
                                      <form action="https://formsubmit.co/d0c7fd36aa00e3a3364c3ddd8ebe1716" method="POST">

                                        <!----HONEYPOT--->
                                        <input type="text" name="_honey" style="display: none;">
                                        <!----Disable Captcha--->
                                        <input type="hidden" name="_captcha" value="false">
                                        <input type="hidden" name="_next" value="http://localhost/Botika/user_area/success.html">

                                        <div class="input-box" style="height:50px;width:100%;margin:12px 0; border:none; border-radius:6px;padding:0 15px;">
                                          <input type="text" placeholder="name" required style="border-radius:5px; border:none;padding:0 15px;">
                                        </div>

                                        <div class="input-box" style="height:50px;width:100%; margin:12px 0; border: none; border-radius: 6px;padding:0 15px">
                                          <input type="text" placeholder="email" required style="border-radius:5px; border:none;padding:0 15px;">
                                        </div>

                                        <div class="input-box message-box" style="height:100%;width:100%; border:none; border-radius: 6px; margin-bottom:10px; padding:0 15px;">
                                          <textarea placeholder="Write your message" name="message" required style="height:100%;width:100%;border-radius:5px; border:none;padding:0 15px; min-height:110px; resize:none;"></textarea>
                                        </div>

                                        <div class="button">
                                          <input type="submit" value="Send Now" style="background:#ff571d; color:#fff;font-size: 16px;outline:none; border:none; border-radius:5px; padding: 8px 16px;margin-left:15px;display:inline-block;">
                                        </div>

                                      </form>
                                    </div>
                                 
                                  <button id="closePopup9" style="background-color:#fff; border:none; text-decoration:none;margin-top:-370px;">
                                  <a href="#information" style="text-decoration: none; color:#fff"><i class="fa-regular fa-circle-xmark" style="color:#fff; border:none; text-decoration:none; width:5px;  margin-left:-1860px; padding:0px 0px 0px 0px"></i></a>
                                    </button>
                                </div>
                            </div>
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
            if (event.target == myPopup8) {
                myPopup9.classList.remove("show");
                
            }
        });
        
          
    </script>
    </section>
<!--INCLUDE FOOTER---->    
  <div class="footer">
    <p style="margin-bottom: 5px">All rights reserved &nbsp;&#x26AB; Designed by A. A. Corbeta - 2023</p> 
       <span> <a href="https://www.facebook.com/" class="uil uil-facebook-f" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://ph.linkedin.com/" class="uil uil-linkedin" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://twitter.com/" class="uil uil-twitter" target="_blank"></a></span>&nbsp;&nbsp;  <span><a href="https://www.instagram.com/" class="uil uil-instagram-alt" target="_blank"></a></span> 
  </div>
  



    </div>
    
  <!-- Bootstrap Js Link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  <script src="banner.js"></script>

  </body>

</html>
