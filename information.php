<?php 

// sessions

session_start();
if(isset($_SESSION['username'])){
    echo "Welcome".$_SESSION['username'];
    echo "<br>";
    echo "Enter your password".$_SESSION['password'];
    echo "<br>";
    echo "Enter your email ".$_SESSION['email'];
}else{
    echo "Login again to continue.";
}


?>