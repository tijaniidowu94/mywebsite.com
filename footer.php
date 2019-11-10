






<div class="footer col-12 col-s-12" style="height: 60px;">
   <p style="margin-top: 15px;">My Website...Copyright 2019.</p>
 </div>






<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
