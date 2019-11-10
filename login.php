<?php 
 $connection = mysqli_connect('localhost', 'root', '', 'login');

  if (isset($_POST['submit'])){
        $username = $_POST['username']; 
        $email = $_POST['username']; 
        $password = $_POST['password'];
         // email & password combination
        $query = "SELECT * FROM users WHERE (username = '$username' || email='$email') AND (password = '$password')";
        $dosql = mysqli_query($connection, $query);
    if(!$dosql){
      die('Could not connect: ' . mysql_error());
      }
        
       $rows = mysqli_num_rows($dosql);
    if($rows>0){
       $_SESSION['username'] = $username;

       // Redirect user to profile.php
       header("Location: profile.php");
      } else {
        echo "<script>alert('Username/password incorrect.');</script>";
    }

  }
?>




<?php include 'header.php'; ?>

<style>
#text {display:none;color:red}
</style>


<div class="col-7 col-s-9 container w3-mobile" style="width: 775px; margin-top: 10px; padding-left: 7%; border: 3px solid black;">


	 <p><b style="font-size: 20px;">Please input your info to login.</b></p>
  <form class="w3-mobile" id="form" name="form" style="width: 600px;" method="POST" action="" >
   <b>Username/Email:</b> <input id="username"  type="text" name="username" placeholder="Username" required>
   <br> <b>Password:</b> <input id="password"  type="password" name="password" placeholder="Enter Password" required> <p id="text">WARNING! Caps lock is ON.</p>
    <input class="registerbtn" type="submit" name="submit" value="Login" >

    <div class="container  w3-mobile signin" style="width: 500px;">
    <p>Dont have an account? <a href="register.php">Create One.</a> <br> <a href="">Forgot Password?</a></p>
  </div>
  </form>   

<p>

   



 

</div>




<?php include 'blog.php'; ?>


<?php include 'footer.php'; ?>


<script>
var input = document.getElementById("myInput");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>




<script  type="text/javascript">
 function reset(){
var form=document.getElementById("password");
form.reset();
alert("Form has been reset.");
}
 window.onload=reset();
  </script> 