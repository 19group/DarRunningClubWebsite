<!DOCTYPE html>
<html>
<title>Dar Running Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>



<body>

<!-- Navbar (sit on top) -->
<div class="" id="menu">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="text-muted w3-bar-item w3-button"><b>Logo</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="links w3-hide-small">
      <a class="w3-bar-item w3-button"></a>
      <a href="{{ url('/') }}" class="w3-bar-item w3-button">Home</a>
      <a href="{{ url('/about') }}" class="w3-bar-item w3-button">About Us</a>
      <a href="{{ url('/events') }}" class="w3-bar-item w3-button">Races</a>
      <a href="{{ url('/events') }}" class="w3-bar-item w3-button">News & Events</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact Us</a>
    </div>
  </div>
</div>

<!-- Header -->
<!--<header class="w3-display-container w3-content w3-wide" style="max-width:100%;" id="home">
  <img class="w3-image" src="https://i2-prod.dublinlive.ie/news/dublin-news/article12695699.ece/ALTERNATES/s615/CFI6.jpg" alt="Architecture" width="100%" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white">Dar<span class="w3-padding w3-black w3-opacity-min"><b>Runnnig</b></span>Clubs<span class="w3-hide-small w3-text-light-grey"></span></h1>
  </div>
</header>-->




<section class="main-slider3" style="background-image: url({{ URL::asset('img/darRunning4.png') }});">
  <br>
  <center><h1 class="jumbotron"><b>The Annul Kilimarathon</b></h1>
    <button class="btn btn-lg btn-info"> Join / Register </button>
    <br>
    <a href=""><i class="glyphicon glyphicon-triangle-bottom " style="font-size: 40px"></i></a>
  </center>
</section><!-- /.main-slider -->
<section class="main-slider3" style="background-image: url({{ URL::asset('img/darRunning1.png') }});">
   <br>
  <center><h1 class="jumbotron text-light"><b>The Annul Dasani Marathon</b></h1>
    <button class="btn btn-lg btn-info"> Join / Register </button>
    <br>
    <a href=""><i class="glyphicon glyphicon-triangle-bottom " style="font-size: 40px"></i></a>
  </center>
</section><!-- /.main-slider -->


<div class="row">

</div>


<!--
   #
   # About the Club
   #
  -->

<div id="club_history" class=" text-light container-fluid bg-dark_grey">


</div>



<!--
   #
   # Contact Information
   #
  -->

  


<!-- Footer -->

<footer class="w3-center w3-black w3-padding-16">
  &copy; Dar Running Club Website <?php echo date("Y"); ?> &#0153;
</footer>



<!--

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
 <!-- <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your and our next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>-->
  
<!-- End page content 
</div>

<!-- Google Map 
<div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>-->

<!-- Footer -->


<!-- Add Google Maps -->
<script>

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->



</body>
</html>
