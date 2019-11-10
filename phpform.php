<?php
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



   	$username = $_POST['username'];
   	$password = $_POST['password'];

 if (isset($_POST['password'])){
 	 echo "My username is " . $username . "<br>";
 	 echo "My password is " . $password;
 }



$server = "localhost";
$username = "root";
$password = "eminitfait";
$db = "test2";

$connection = mysqli_connect('localhost', 'root', 'eminitfait', 'login');


if ($connection){
   	  	echo "<br> we are connected <br>";
   	  	 } else {
   	  	 	die("we are not connected");
   	  	 }





   	  	 
 ?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.1/cosmo/bootstrap.min.css">

</head>
<body>


<div class="col-7 col-s-9 container w3-mobile" style="width: 650px; margin-top: 40px; margin-left: 10%; border: 3px solid black;">


	 <p><b style="font-size: 20px;">Please input your info to login.</b></p>
<form class="w3-mobile" style="width: 600px;" method="POST" action="phpform.php">
		<b>Username:</b> 
		<input id="username"  type="text" name="username" placeholder="Username">
		<br> <b>Password:</b> 
		<input id="capslock"  type="password" name="password" placeholder="Not less than 8"> <p id="text">WARNING! Caps lock is ON.</p>
		<input class="registerbtn" type="submit" name="submit" value="submit" style="width: 100px; border-radius: 10px; margin-left: 40%;">
</form>   

<p>

  

<?php

function myFunc($name){
  return "goodmorning" . " " . $name;
}    


$greet =  myFunc("Idowu");
 echo $greet;



