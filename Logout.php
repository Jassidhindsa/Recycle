<?php 
 
 session_start();
 $username = $_SESSION['email']; 
 
 unset($_SESSION['email']); 
 session_destroy(); 
 header("location: LoginForm.html");
 exit();
 
 if(!isset($_SESSION['email']))
 {
 echo 'You are not logged in. <a href="Login.php">Click here</a> to log in.';
 header("location:LoginForm.html");
 }
?>