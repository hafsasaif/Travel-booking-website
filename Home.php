<?php
include('db.php');
?>
<html>
<title>FlyFlow</title>
<link rel = "icon" href ="https://5zznly.com/p/2020/11/KRQTe_%D8%B4%D8%B9%D8%A7%D8%B1_%D9%83%D9%86%D8%B9%D8%AF_5555.png"type = "image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Home.css">
</head>
<body>

<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="Home.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Home</a>
    <a href="Contact.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Contact</a>
  <a href="Information.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Information</a>
	<a href="About.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">About</a>
  <a href="admin/index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Admin</a>
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
<img src="https://5zznly.com/p/2020/11/nO75f_logo.png" alt="Avatar" style="width:200px">
<p><b>Welcome to FlyFlow website to booking hotel and ticke</b></p>
</header>
</div>

<!-- Photo Grid -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="https://pbs.twimg.com/media/CtcAhWlWYAAO0bO.jpg:large" alt="London" width="1600" height="500">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-Orange">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Flight</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-bed w3-margin-right"></i>Hotel</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Campsite');"><i class='fas fa-campground'></i>Campsite</button>

    </div>

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>To Booking travel tickets </h3>
      <p>Book a tickets with us and get the best fares and promotions.</p>
      <p><button class="w3-button w3-dark-grey"><a href="Order Ticket.php" target="_blank" class="w3-hover-text-green">Order Ticket</button></a></p>
    </div>

    <div id="Hotel" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3>
      <p>Book a  with us and get the best fares and promotions.</p>
      <p>We know hotels - we know comfort.</p>
      <p><button class="w3-button w3-dark-grey"><a href="Order Hotel.php" target="_blank" class="w3-hover-text-green">Search Hotels</button></a></p>
    </div>

    <div id="Campsite" class="w3-container w3-white w3-padding-16 myLink">
     <h3>Find the best Campsite </h3>
     <p>We know camping places. Book with us and listen with the best places, prices and comfort</p>
     <p><button class="w3-button w3-dark-grey"><a href="Campsite Hotel.php" target="_blank" class="w3-hover-text-green">Search Hotels</button></a></p>
   </div>

  </header>
  <hr>
  <!_________________________>
  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://i1.wp.com/www.omanobserver.om/wp-content/uploads/2020/06/Oman-Post-National-Day-Stamp-Competition-Eng-e1593344212418.png?fit=2000%2C1475&ssl=1" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="https://www.businessliveme.com/wp-content/uploads/2020/11/National-Day-of-Oman.png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="https://www.ibrahimnazer.com/wp-content/uploads/2018/11/Oman-National-Day-770x460.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <hr>
  <!------------------------------------------->
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
  <a href="https://www.facebook.com/fly.flow.923" class="fa fa-facebook"></a>
  <a href="https://twitter.com/FlyFlow13?s=09" class="fa fa-twitter"></a>
  <a href="https://www.instagram.com/flyflow13/?igshid=1l6emde3d9144" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-pinterest"></a>
  <a href="#" class="fa fa-snapchat-ghost"></a>

  <p class="w3-medium">Powered by <a href="About.php" target="_blank" class="w3-hover-text-green">FlyFlow</a></p>
   <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else {
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
