 <?php
     $connection = mysqli_connect('localhost', 'root', '', 'login');

      
if(isset($_POST['register'])){
      $fname = $_POST['fname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $rpassword = $_POST['rpassword'];
      $pnumber = $_POST['pnumber'];


      $query = "SELECT * FROM users WHERE username='$username' || email='$email'";
      $dosql = mysqli_query($connection, $query);
   
  if (mysqli_num_rows($dosql) > 0) {
      
      echo "<script>alert('Username/Email Already Exist... Registration not successful.');</script>";
    } else {
      $fname = mysqli_real_escape_string($connection, $fname);
      $email = mysqli_real_escape_string($connection, $email);
      $username = mysqli_real_escape_string($connection,      $username);
      $password = mysqli_real_escape_string($connection,      $password);
      $pnumber = mysqli_real_escape_string($connection, $pnumber);
   
    if ($rpassword !== $password){
      echo "<script>alert('Password do not match, Registration not successful.');</script>";
     }  else {
     $query = "INSERT INTO users( Name,username,email,password,PhoneN,status)";
     $query .= "VALUES ('$fname','$username','$email','$password','$pnumber', '1')";
     $dosql = mysqli_query($connection, $query);

    if (!$dosql) {
      die('Query FAILED' . mysqli_error());
      } else{ echo "<script>alert('Registration successful.');</script>";

     }
   }
  }
 }

?>






<?php include 'header.php'; ?>





<div class="col-7 col-s-9 container w3-mobile" style="width: 770px; margin-top: 10px; padding-left: 2%; border: 3px solid black;">
  



<form class="w3-mobile" style="width: 600px;"  method="POST" action="">
  <div class="container w3-mobile" style="width: 500px;">
  <div style="background-color: black; color: white; text-align: center;"><h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
  </div>
    <label for="fname"><b>Full Name</b></label>
    <input type="text" placeholder="Full Name" name="fname" required>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="minimum of 8" name="password" required>

    <label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpassword" required>
   
   <label for="pnumber"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="pnumber" required>

    

    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  
  <div class="container  w3-mobile signin" style="width: 500px;">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>



</div>

<?php include 'blog.php'; ?>

<?php include 'footer.php'; ?>
