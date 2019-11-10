<?php include 'header.php'; ?>

<?php 
   //message Vars
$msg='';
$msgClass='';


   //check for submit
if(filter_has_var(INPUT_POST, 'submit')){
     //get for data
  $name= htmlspecialchars($_POST['name']);
  $email=  htmlspecialchars($_POST['email']);
  $message=  htmlspecialchars($_POST['message']);


 //check required fields
  if (!empty($email) && !empty($name) && !empty($message)){
    //passed
    
    //check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)=== true){
      //failed
      $msg= 'Please use a valid email';
      $msgClass='alert-danger';
  } else {
    //passed
   

    $email = 'tijaniidowu94@gmail.com';
    $subject = 'Contact Request Form'. $name;
    $body = '<h2>Contact Request</h2>
             <h4>Name>/h4><p>'.$name.'</p>
             <h4>Email>/h4><p>'.$email.'</p>
             <h4>Message>/h4><p>'.$message.'</p>
    ';

    //Email Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . 
         "\r\n";

    //Additional Headers
        $headers .= "From:" .$name. "<".$email.">"."\r\n";
     if(mail($email, $subject, $body, $headers)){
        //Email Sent
       $msg= 'Your email has been sent';
       $msgClass='alert-success';
     } else {
      //failed
      $msg= 'Your email was not sent';
       $msgClass='alert-danger';

     }

  }

  } else { 
    //failed
    $msg= 'Please fil in all fields';
    $msgClass='alert-danger';
   }
}
?>




<div class="col-7 col-s-9 container w3-mobile" style="width: 650px; padding-left: 7%;">

  
  
    
      <nav class="navbar navbar-default" style=" margin-top: 10px;">
      <a class="navbar-brand" style=" padding-left:30%;"> Reach Us Through This Space</a>
      </nav>
    
 


<?php if($msg != ''): ?>
  <div class="alert <?php echo $msgClass; ?>">
    <?php echo $msg; ?> </div>
<?php endif; ?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?> ">
    </div>
    <br>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?> ">
    </div>
    <br>
    <div class="form-group">
      <label>Message</label>
      <textarea name="message" class="form-control"> 
      <?php echo isset($_POST['message']) ? $message : ''; ?> </textarea>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary" style="background-color: green; margin-left: 40%; border-radius: 15px;"> Submit</button>
  
  </form>

</div>




<?php include 'blog.php'; ?>


<?php include 'footer.php'; ?>
