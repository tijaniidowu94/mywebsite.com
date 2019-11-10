<!--EXAMPLES OF "CRUD" IN DATABASE...(CREATE,READ,UPDATE,DELETE)
-->

<?php
  
  $connection = mysqli_connect('localhost', 'root', '', 'test2');

if (!$connection)
{
  die('Could not connect: ' . mysql_error());
}
  
  //ASCENDING ORDER
  //$query = "SELECT * FROM `members` order by id desc limit 5";

  //ORDER BY RANDOM 
  //$query = "SELECT * FROM `members` order by rand()"; 

  //ORDER BY EMAIL
  //$query = "SELECT * FROM `members` WHERE 'email' = '$email'";

  //READ FROM DATABASE
    $query = "SELECT * FROM members WHERE status =1";
    $dosql = mysqli_query($connection, $query);
    if(!$dosql){
    die('Could not connect: ' . mysql_error());
   }

  while($row = mysqli_fetch_assoc($dosql)){
         $id = $row['id'];
         $name = $row['name'];
         $email = $row['email'];
         $phoneno = $row['phoneno'];
         $password = $row['pasword'];
         $comment = $row['Comment'];
         $mytime = $row['timed'];
         $imagedata = $row['image'];


 
 echo "  <div style='background-color:green; border-radius:30px; width:100%; color:white; margin-bottom:30px;  padding-left:30px;'>
     <p style=padding:2px; />
      Name: $name <p style=padding:2px; />
      Email:     $email <p style=padding:2px; />
      Phone-no: $phoneno <p style=padding:2px; />
      password: $password <p style=padding:2px; />
      Comment: $comment <p style=padding:2px; />
      Timed: $mytime <p style=padding:2px; />
      Photo: <img  width:100px; height:100px; src= '$imagedata'>
       <br>
       id: $id
    </div>
  ";

  }

?>

