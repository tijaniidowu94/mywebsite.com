
<!--EXAMPLES OF "CRUD" IN DATABASE...(CREATE,READ,UPDATE,DELETE)
-->
<?php
 

  $connection = mysqli_connect('localhost', 'root', '', 'test2');

if (!$connection)
{
  die('Could not connect: ' . mysqli_error());
}

if (isset($_POST['submit'])){
       $id = $_POST['id'];
    echo 'DELETED';
  }  
 

  //UPDATE FROM DATABASE
    $query ="DELETE FROM members WHERE id='$id' ";

    $dosql = mysqli_query($connection, $query);
    if(!$dosql){
    die('Could not connect:');
   }

  
   
?>


<?php
//FUNCTION TO CALL DATA FROM DATABASE

function showAllData() {
  global $connection;
  $query = "SELECT * FROM members";
    
    $dosql = mysqli_query($connection, $query);

    if (!$dosql) {
      die('function FAILED' . mysqli_error());
    }


    while($row = mysqli_fetch_assoc($dosql)){
   $id = $row['id'];
   echo "<option value='$id'> $id </option>";
    }
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


   <p><b style="font-size: 20px;">Please select the Id you want to delete.</b></p>
<form class="w3-mobile" style="width: 600px;" method="POST" action="">
  
   <select name="id" id="" required>
      <option>Select ID</option>
      <?php
       showAllData();
      ?>
   </select>

   <input class="registerbtn" type="submit" name="submit" value="Delete" style="width: 100px; border-radius: 10px; margin-left: 30%;">

</form>   



  

