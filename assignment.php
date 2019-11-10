<?php
if(isset($_POST["submit"])){
          $name = $_POST["name"];
       $test1 = $_POST["test1"];
          $test2 = $_POST["test2"];
          $op = $_POST["op"];
          
          

       if ($op == "+"){
       $total = $test1 + $test2;
       
        } elseif($op == "-"){
        $total = $test1 - $test2;
      
        } elseif($op == "/"){
        $total = $test1 / $test2;
       
        } elseif($op == "%"){
        $total = $test1 % $test2;
       
        } elseif($op == "*"){
        $total = $test1 * $test2;
       } 
      
          


      if (!empty($test1) && !empty($test2) && !empty($name)){
        $result ="Hi," . $name . ", your score is " . $total . "." ;
        } else {$result = "Error: All text box cannot be empty.";}
       }
?>




<!DOCTYPE html>
      
<html>
<head>
  <title>Assignment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
  input {
    border-radius: 10px;
    padding: 3px;
    margin-bottom: 7px;
    width:250px;
    height: 40px;

  }

button {
  background-color: red;
  color: white;
  margin-left: 90px;
  height: 35px;
  border-radius: 15px;
}

button:Hover{
  background-color: blue;
  color: white;
  margin-left: 90px;
  height: 35px;
  border-radius: 15px;
  padding-bottom: 5px;
}
</style>
</head>
<body>



<form method="POST" action="" name="mycal" style="margin-top: 100px; ">
  <div class="container" style="background-color: green; padding-top: 30px; padding-bottom: 30px; width: 500px; border-radius: 10px; padding-left: 120px;">


  <input   value="<?php echo $result; ?>" style="margin-bottom: 30px; height: 100px;">
<br>
    
    <input id="name" type="text" name="name" placeholder="Name:">
<br>
    
    <input id="test1" type="number" name="test1" 
    placeholder="Test1:" >

 
  <br>
    <select id="op" name="op" style="margin-bottom: 5px; margin-left: 90px; width: 75px; height: 35px; border-radius: 10px;">
      <option id="op" name="op" > + </option>
      <option id="op"  name="op" > - </option>
        <option id="op"  name="op" > / </option>
        <option id="op"  name="op" > * </option>
        <option id="op"  name="op" > % </optionop    </select>
 <br>
    <input id="test2" type="number" name="test2" placeholder="Test2:" >
    
 <br>

    
      <button id="calculate" type="submit" name="submit" style="margin-top: 10px;">Calculate
      </button>
    
  



</div>


</form>
 





</body>


</html>
