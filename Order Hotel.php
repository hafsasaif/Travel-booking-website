<html>
<title>FlyFlow</title>
<link rel = "icon" href ="https://5zznly.com/p/2020/11/KRQTe_%D8%B4%D8%B9%D8%A7%D8%B1_%D9%83%D9%86%D8%B9%D8%AF_5555.png"type = "image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Order Hotel.css">
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
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
  <hr>
  <H1><b>Hotels </b></H1>
  <p><b>This page is for booking hotels in various cities</b></p>
</header>
</div>
<!-- Photo Grid -->

<body>
  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="https://cdn.hipwallpaper.com/i/81/87/JIzLd3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="https://images2.alphacoders.com/677/677605.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="https://img5.goodfon.com/wallpaper/nbig/a/25/maldivy-indiiskii-okean-okean-zakat-most.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="https://img3.goodfon.com/wallpaper/nbig/b/53/maldives-kurort-okean-pirs.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="https://wallpapercave.com/wp/wp4377125.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="https://i.pinimg.com/originals/2b/2b/11/2b2b1110569856cc7b4962abf6695e9c.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
<!-- Page content -------------------------------------------------------------------------------------------------------------------->

<h1 style="text-align:center;" >THE CITIES</h1>
<div class="w3-container w3-margin-top" id="rooms">

  <p style="text-align:center;"><i class="fa fa fa-university w3-text-red"></i>     Choose the right city for you to enjoy the best offers and the best trip for you through our website : </p>
</div>
<div id="myBtnContainer">
  <button  class="btn active" onclick="filterSelection('all')"> Show all</button>


<div class="w3-content" style="max-width:1532px;">
    <div class="column Europe">
      <div class="content">
      <img src="https://imageproxy.themaven.net//https%3A%2F%2Fwww.history.com%2F.image%2FMTYyNDg1MjE3MTI1Mjc5Mzk4%2Ftopic-london-gettyimages-760251843-promo.jpg" alt="London" style="width:100%"><br>
       <label class="container" href="london">London</label>
        <p>London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times.</p>
        <button class="button" ><span><a href="booking\London.html">Choose</a></span></button>
      </div>
    </div>
    <div class="column Europe">
      <div class="content">
        <img src="https://www.fodors.com/wp-content/uploads/2018/10/HERO_UltimateRome_Hero_shutterstock789412159.jpg" alt="Rome" style="width:100%">
        <label class="container">Rome</label>
        <p>Rome is the capital city and a special comune of Italy, as well as the capital of the Lazio region. </p>
        <button class="button" ><span><a href="booking\Rome.html">Choose</a></span></button>
      </div>
      </div>

    <div class="column Europe">
      <div class="content">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Geneve_2005_001_Ork.ch.jpg" alt="Geneve" style="width:100%">
        <label class="container">Geneve</label>
        <p>Geneva is a city in Switzerland that lies at the southern tip of expansive Lac Léman (Lake Geneva).</p>
        <button class="button" ><span><a href="booking\Geneve.html">Choose</a></span></button>
      </div>
      </div>


    <div class="column Europe">
      <div class="content">
        <img src="https://images.adsttc.com/media/images/5d44/14fa/284d/d1fd/3a00/003d/newsletter/eiffel-tower-in-paris-151-medium.jpg?1564742900" alt="Paris" style="width:100%">
        <label class="container">Paris</label>
        <p>Paris, France's capital, is a major European city and a global center for art, fashion, gastronomy and culture. </p>
        <button class="button" ><span><a href="booking\Paris.html">Choose</a></span></button>
      </div>
      </div>

    <div class="column Europe">
      <div class="content">
        <img src="https://cdn.contexttravel.com/image/upload/c_fill,q_60,w_2600/v1555940004/production/city/hero_image_16_1555940004.jpg" alt="Madrid" style="width:100%">
         <label class="container">Madrid</label>
        <p>Madrid, Spain's central capital, is a city of elegant boulevards and expansive, manicured parks.</p>
        <button class="button" ><span><a href="booking\Madrid.html">Choose</a></span></button>
      </div>
    </div>

    <div class="column Australia">
      <div class="content">
        <img src="https://lp-cms-production.imgix.net/2019-06/65830387.jpg?auto=compress&fit=crop&fm=auto&sharp=10&vib=20&w=1200" alt="Sydney" style="width:100%">
         <label class="container">Sydney</label>
        <p>Sydney, capital of New South Wales and one of Australia's largest cities, is best known for its harbourfront Sydney.</p>
        <button class="button" ><span><a href="booking\Sydney.html">Choose</a></span></button>
      </div>
     </div>

    <div class="column Europe">
    <div class="content">
    <img src="https://www.telegraph.co.uk/content/dam/insurance/2016/04/06/amsterdam.jpg" alt="Amsterdam" style="width:100%">
     <label class="container">Amsterdam</label>
      <p>Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses.</p>
      <button class="button" ><span><a href="booking\Amsterdam.html">Choose</a> </span></button>
    </div>
    </div>
  <div class="column Europe" "Australia">

</div>
</div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div class="w3-row-padding" id="about">
  <div class="w3-col l4 12">
    <h3 style="color:Orange;">Why flyflow is the best in hotel booking?</h3>
  <h6 style="color:DodgerBlue;"><i>Because it is the best and fastest in line with the age of speed, as well as being a security site you can not book with a fake credit card, by sending an email to the user to confirm the booking.
Flyflow deals with the world's most renowned and best highly rated hotels.</i></h6>
<p style="color:Olive;">We accept: <i style="color:Crimson;" class="fa fa-credit-card w3-large"></i> <i style="color:Crimson;" class="fa fa-cc-mastercard w3-large"></i> <i style="color:Crimson;" class="fa fa-cc-amex w3-large"></i> <i style="color:Crimson;" class="fa fa-cc-cc-visa w3-large"></i><i style="color:Crimson" class="fa fa-cc-paypal w3-large"></i></p>
<a target="_blank" href="img_forest.jpg">
<img src="https://5zznly.com/p/2020/11/o9kQG_WhatsApp_Image_2020-11-17_at_6.24.39_PM.jpeg" alt="Forest" style="width:150px">
</a>
</div>
  <div class="w3-col l8 12">
    <!-- Image of location/map -->
    <img src="http://sfwallpaper.com/images/computer-wallpaper-hd-free-download-28.jpg" class="w3-image w3-greyscale" style="width:100%;">
  </div>
</div>

  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Bowsher, Muscat, OMAN</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +968 0000000</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: flyflow130@gmail.com</div>
  </div>
  <div class="w3-panel w3-Gray w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  </div>

  <div class="w3-container">
    <h3>Our Hotels</h3>
    <h6>You can find our hotels anywhere in the world:</h6>
  </div>

  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://cf.bstatic.com/images/hotel/max1280x900/209/209953736.jpg" alt="Oman" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Oman</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/hoshinoya-kyoto-floating-tearoom-3-1549906559.jpg" alt="Japan" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Japan</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://dimg04.c-ctrip.com/images//220410000000ob28d4022_R_550_412.jpg" alt="America" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">America</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.planetware.com/wpimages/2019/05/china-beijing-best-hotels-the-peninsula-beijing.jpg" alt="china" style="width:100%">
          <span class="w3-display-bottomleft w3-padding">China</span>
          </div>
        </div>
      </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://s7d2.scene7.com/is/image/ritzcarlton/50467949-RC_Moscow_127999-1" alt="Moscow" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Moscow</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-container w3-padding-32 w3-Gray w3-opacity w3-card w3-hover-opacity-off" style="margin:32px 0;">
    <h2>Get the best offers first!</h2>
    <p>Join our newsletter.</p>
    <label>E-mail</label>
    <input class="w3-input w3-border" type="text" placeholder="Your Email address">
    <button type="button" class="w3-button w3-Orange w3-margin-top">Subscribe</button>
  </div>



<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
  <a href="https://www.facebook.com/fly.flow.923" class="fa fa-facebook"></a>
  <a href="https://twitter.com/FlyFlow13?s=09" class="fa fa-twitter"></a>
  <a href="https://www.instagram.com/flyflow13/?igshid=1l6emde3d9144" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-pinterest"></a>
  <a href="#" class="fa fa-snapchat-ghost"></a>

  <p class="w3-medium">Powered by <a href="About.php" target="_blank" class="w3-hover-text-green">FlyFlow </a></p>
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
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>
