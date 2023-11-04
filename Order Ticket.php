<html>
<title>FlyFlow</title>
<link rel = "icon" href ="https://5zznly.com/p/2020/11/KRQTe_%D8%B4%D8%B9%D8%A7%D8%B1_%D9%83%D9%86%D8%B9%D8%AF_5555.png"type = "image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Order Ticket.css">
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
  <H1><b>Ticket </b></H1>
  <p><b>This is a page for booking for owners and travel to various countries</b></p>
</header>
</div>

<!-- Photo Grid -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="https://www.travelprofessionalnews.com/wp-content/uploads/2019/04/AdobeStock_203970462.jpeg" alt="http://sfwallpaper.com/" style="min-width:1000px" width="1500" height="800">

  <div class="w3-display-left w3-padding w3-col l6 m8">
      <div class="w3-container w3-Grey">
        <h2><i class="fa fa-Plane w3-margin-right"></i>Order Ticket<h2>
      </div>
      <div class="w3-container w3-white w3-padding-16">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="col-md-6">
                <fieldset>
                    <label for="from">From:</label>
                    <select required name='from' onchange='this.form.()'>
    <option value="">Select a location...</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="India">India</option>
    <option value="Oman">Oman</option>
    <option value="Dubai">Dubai</option>
    <option value="Qatar">Qatar</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Yemen">Yemen</option>
    <option value="Iraq">Iraq</option>
    <option value="Japan">Japan</option>
    <option value="Korea">Korea</option>
    <option value="Laos">Laos</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Singapore">Singapore</option>
    <option value="Thailand">Thailand</option>
    <option value="Vietnam">Vietnam</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <label for="to">To:</label>
    <select required name='to' onchange='this.form.()'>
    <option value="">Select a location...</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="India">India</option>
    <option value="Oman">Oman</option>
    <option value="Dubai">Dubai</option>
    <option value="Qatar">Qatar</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Yemen">Yemen</option>
    <option value="Iraq">Iraq</option>
    <option value="Japan">Japan</option>
    <option value="Korea">Korea</option>
    <option value="Laos">Laos</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Singapore">Singapore</option>
    <option value="Thailand">Thailand</option>
    <option value="Vietnam">Vietnam</option>
                    </select>
                </fieldset>
            </div>
          </div>
          <div class="col-md-6">
              <fieldset>
                  <label for="departure">Departure date:</label>
                  <input name="deparure" type="text" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
              </fieldset>
          </div>
          <div class="col-md-6">
              <fieldset>
                  <label for="return">Return date:</label>
                  <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
              </fieldset>
          </div>
          <div class="col-md-6">
              <div class="radio-select">
                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label for="round">Round</label>
                          <input type="radio" name="trip" id="round" value="round" required="required"onchange='this.form.()'>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label for="oneway">Oneway</label>
                          <input type="radio" name="trip" id="oneway" value="one-way" required="required"onchange='this.form.()'>
                      </div>
                  </div>
              </div>
          </div>
          <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Order Ticket Now</button>
        </form>
      </div>
    </div>
</header>



<hr style="background-color:NavajoWhite">

<!_______________________________________________________>
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="https://imageproxy.themaven.net//https%3A%2F%2Fwww.history.com%2F.image%2FMTYyNDg1MjE3MTI1Mjc5Mzk4%2Ftopic-london-gettyimages-760251843-promo.jpg" alt="http://sfwallpaper.com/" style="width:100%">
      <div class="w3-container w3-white">
        <h3>London</h3>
        <h6 class="w3-opacity"><li>6AM <span>26&deg;</span></li></h6>
        <p><li>6AM <span>20&deg;</span></li></p>
        <p><li>10AM <span>19&deg;</span></p>
          <p><li>11AM <span>19&deg;</span></p>
            <p><li>1PM <span>21&deg;</span></p>
              <p><li>5AM <span>15&deg;</span></p>
        <p><li>10PM <span>14&deg;</span></li></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"></button>
      </div>

    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://images.adsttc.com/media/images/5d44/14fa/284d/d1fd/3a00/003d/newsletter/eiffel-tower-in-paris-151-medium.jpg?1564742900" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Paris</h3>
        <h6 class="w3-opacity"><li>6AM <span>26&deg;</span></h6>
        <p><li>6AM <span>21&deg;</span></p>
          <p><li>12AM <span>16&deg;</span></p>
            <p><li>5AM <span>13&deg;</span></p>
              <p><li>8AM <span>26&deg;</span></p>
                <p><li>6PM <span>25&deg;</span></p>

        <p><li>7PM <span>26&deg;</span></p>

        <button class="w3-button w3-block w3-black w3-margin-bottom"></button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://cdn.contexttravel.com/image/upload/c_fill,q_60,w_2600/v1555940004/production/city/hero_image_16_1555940004.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Madrid</h3>
        <h6 class="w3-opacity"><li>12AM <span>5&deg;</span></h6>
        <p><li>6AM <span>2&deg;</span></p>
          <p><li>10AM <span>10&deg;</span></p>
            <p><li>6PM <span>15&deg;</span></p>
              <p><li>8AM <span>16&deg;</span></p>
                <p><li>1PM <span>26&deg;</span></p>

        <p><li>6pM <span>20&deg;</span></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"></button>
      </div>

    </div>


  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>About</h3>
      <h6>‏Oman has been known since ancient times for its maritime leadership and its great historical links with ancient civilizations for cultural exchange and economic activity, especially the Sumerian, Babylonian, Pharaonic, Roman and other nations and civilizations in different eras. Omanis were at the forefront of frequenting the sea and the navigational craft, and their adventures and travels were considered as an example to be followed And boldness and courage to communicate with peoples and civilizations, and to spread religion through treatment, honesty and honesty, and among these concerns is laying basic foundations for cultural and economic communication.
‏Just as the Omani was the first to overcome difficulties and make them easy and available to Omanis and non-Omanis, in compliance
‏With the grandparents and their deep journey in facilitating the ways of wading the seas, land, travel and trade, this FlyFlow website was designed to serve the community and the world all by facilitating travel and Booking tickets.</h6>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="https://c1.wallpaperflare.com/preview/828/747/643/muscat-oman-harbor-travel.jpg" class="w3-image w3-greyscale" style="width:100%;">
    </div>
  </div>

  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Bowsher, Muscat, OMAN</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +968 0000000</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: flyflow130@gmail.com</div>
  </div>

  <div class="w3-panel w3-Gray w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i>In the event that he is late for the specified travel time, we are not responsible for that and not refund the amount.</h6>
  </div>

  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://image.freepik.com/free-photo/halong-bay-vietnam_105865-72.jpg" alt="https://www.freepik.com/" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.fodors.com/wp-content/uploads/2018/10/HERO_UltimateRome_Hero_shutterstock789412159.jpg" alt="Rome" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Rome</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="http://sfwallpaper.com/images/computer-wallpaper-hd-free-download-28.jpg" alt="india" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">India</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Geneve_2005_001_Ork.ch.jpg" alt="Geneve" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Geneve</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://myskhotels.com/wp-content/uploads/2018/07/59871-Muscat.jpg" alt="oman" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Oman</span>
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

</body>
</html>
