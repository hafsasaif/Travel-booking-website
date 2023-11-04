<html>
<title>FlyFlow</title>
<link rel = "icon" href ="https://5zznly.com/p/2020/11/KRQTe_%D8%B4%D8%B9%D8%A7%D8%B1_%D9%83%D9%86%D8%B9%D8%AF_5555.png"type = "image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/About.css">
<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="Home.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Home</a>
    <a href="Contact.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Contact</a>
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Information</a>
    <a href="About.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black">About</a>
    <a href="admin/index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Admin</a>
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
<header class="w3-center w3-margin-bottom">
  <div class="w3-clear"></div>
<img src="https://5zznly.com/p/2020/11/nO75f_logo.png" alt="Avatar" style="width:200px">
  <hr style="background-color:NavajoWhite">
  <h1><b>Information </h1></p>
</header>
</div>
<!------------------>

<div class="container">
  <img src="https://5zznly.com/p/2020/11/do4yA_F9F88E72-01B5-44F6-AA1C-AEEE65B8FDFC.jpeg" alt="Snow" style="width:100%;">
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

</body>
</html>
