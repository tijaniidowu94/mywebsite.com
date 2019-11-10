


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.1/cosmo/bootstrap.min.css">

<style>

</style>
</head>
<body>

<div id="navbar">
  <div><a href="index.php" style=" float:left; font-size:25px; "> <b><u>MY -WEBSITE</u></b> </a> </div>
  <p>
 <div class="col-6-1" style="margin-right:10px; "> <a href="search.php"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  
  <a href="register.php"><i class="fa fa-fw fa-user"></i> Register</a>
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>


  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> </div>
<p>


</div>

<div class="" style="padding: 10px;">
<div class="col-2 col-s-3 menu" style="background-color: #555; margin-top: 10px;">
    <ul>
      <a href=""> <li>Our Services</li> </a>
     <a href=""> <li>Business</li> </a>
     <a href=""> <li>Subscription</li> </a>
     <a href="">  <li>Social Media</li> </a>
    </ul>
</div>











<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>