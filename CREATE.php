
<!--EXAMPLES OF "CRUD" IN DATABASE...(CREATE,READ,UPDATE,DELETE)
-->

<?php
  
  $connection = mysqli_connect('localhost', 'root', '', 'test2');

if (!$connection)
{
  die('Could not connect: ' . mysql_error());
}

 if (isset($_POST['submit'])){
       $name = $_POST['name']; 
       $email = $_POST['email']; 
       $phoneno = $_POST['phoneno']; 
       $password = $_POST['password']; 
       $comment = $_POST['Comment']; 

$name = mysqli_real_escape_string($connection, $name);
$email = mysqli_real_escape_string($connection, $email);
$password =mysqli_real_escape_string($connection, $password);
$phoneno = mysqli_real_escape_string($connection, $phoneno);
$comment = mysqli_real_escape_string($connection, $comment);
      
$imagename = mysqli_real_escape_string($connection, $_FILES["image"]["name"]);
$imagedata = mysqli_real_escape_string($connection, file_get_contents($_FILES["image"]["tmp_name"]));
$imagetype = mysqli_real_escape_string($connection, $_FILES["image"]["type"]);


if (substr($imagetype,0,5) !== "image") {
  
   die('Invalid Type of Image.' . mysqli_error($imagetype));

} else { 

 }

 //CREATE INTO DATABASE
    $query = "INSERT  INTO members(name,phoneno,email,pasword,status,timed,comment,imagename,image) values ('$name','$phoneno','$email','$password', '1', CURRENT_TIMESTAMP,'$comment','$imagename','$imagedata')";

    $dosql = mysqli_query($connection, $query);
   if(!$dosql){
    die('Could not connect: ' . mysql_error());
   }
}
    

 ?>


<?php include 'read.php'; ?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.1/cosmo/bootstrap.min.css">


<style> 

.card {background-color: white;
       width: 170px;  
       border: 1px solid red; 
       border-radius: 10px; 
       text-align: center;
       box-shadow: 4px 3px  grey;
       font-size: 13px
      

}

.card a {
       font-size: 15px
       width: 170px;
   }

.card a:hover {color: blue;
     background-color: #f7f3d9 ;
      border-radius: 10px; 
       width: 170px;  
      padding-top:5px;
       padding-bottom:5px;
       font-size: 13px
      }


</style>

</head>
<body>


<div class="col-7 col-s-9 container w3-mobile" style="width: 650px; margin-top: 40px; margin-left: 10%; border: 3px solid black;">


   <p><b  style="font-size: 20px;">Please input your info to Register.</b></p>
<form class="w3-mobile" style="width: 600px;" method="POST" action="" enctype="multipart/form-data">
    
    <input id="name"  type="text" name="name" placeholder="Name" >
    <input id="email"  type="text" name="email" placeholder="Email" required>
    <input id="phoneno"  type="text" name="phoneno" placeholder="Phone number" >
   
    <input id="password"  type="password" name="password" placeholder="Not less than 8" > 
    <textarea class="form-control"  placeholder="Comment:" name="Comment" ></textarea>

    <input type="file" name="image" style="margin-top:15px;">

    <input class="registerbtn" type="submit" name="submit" value="Create" style="width: 100px; border-radius: 10px; margin-left: 40%;">
   
</form>   

