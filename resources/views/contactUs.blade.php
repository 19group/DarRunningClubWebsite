@extends('layouts.app')
@section('content')
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
<link rel="stylesheet" href="{{ URL::asset('css/validate.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>



<body>

<!-- Header -->
<!--<header class="w3-display-container w3-content w3-wide" style="max-width:100%;" id="home">
  <img class="w3-image" src="https://i2-prod.dublinlive.ie/news/dublin-news/article12695699.ece/ALTERNATES/s615/CFI6.jpg" alt="Architecture" width="100%" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white">Dar<span class="w3-padding w3-black w3-opacity-min"><b>Runnnig</b></span>Clubs<span class="w3-hide-small w3-text-light-grey"></span></h1>
  </div>
</header>-->




<section class="main-slider2" style="background-image: url({{ URL::asset('img/darRunning3.png') }});">
</section><!-- /.main-slider -->


<div class="row">

</div>


<!--
   #
   # About the Club
   #
  -->

<div id="club_history" class=" text-light container-fluid bg-dark_grey">

  <div class="row">
    <div id="" class="col-md-3 contact_box">
      <br>
      <br>
      <center>
        <i class="glyphicon glyphicon-map-marker text-muted" style="font-size: 60px"></i>
      </center>
        <br>
        <div class="col-md-12">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h3 class="contact_title">Address</h3>
          </div>
          <div class="col-md-2 col-md-offset-5">
            <hr>
          </div>
        </div>
        <p class="text-center text-muted">
          Police Area Oysterbay, Dar es Salaam  
        </p>
        <br>
        <br>
    </div>

    <div class="col-md-3 contact_box">
      <br>
      <br>
      <center>
        <i class="glyphicon glyphicon-phone-alt text-muted" style="font-size: 60px"></i>
      </center>
        <br>
        <div class="col-md-12">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h3 class="contact_title">Telephone</h3>
          </div>
          <div class="col-md-2 col-md-offset-5">
            <hr>
          </div>
        </div>
        <p class="text-center text-muted">
           +255 756 272 366
        </p>
        <br>
        <br>
    </div>

    <div class="col-md-3 contact_box">
      <br>
      <br>
      <center>
        <i class="glyphicon glyphicon-envelope text-muted" style="font-size: 60px"></i>
      </center>
        <br>
        <div class="col-md-12">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h3 class="contact_title">Email</h3>
          </div>
          <div class="col-md-2 col-md-offset-5">
            <hr>
          </div>
        </div>
        <p class="text-center text-muted">
          darrunningclub@gmail.com
        </p>
        <br>
        <br>
    </div>

    <div class="col-md-3 contact_box">
      <br>
      <br>
      <center>
        <i class="glyphicon glyphicon-time text-muted" style="font-size: 60px"></i>
      </center>
        <br>
        <div class="col-md-12">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3 class="contact_title">Running Hours</h3>
          </div>
          <div class="col-md-2 col-md-offset-5">
            <hr>
          </div>
        </div>
        <p class="text-center text-muted">
          Mon-Sun: 5pm to 7pm
        </p>
        <br>
        <br>
    </div>

    <div class="col-md-6">
      <br>
      <h3 class="text-center">Where to find us</h3>
      
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.555683178484!2d39.27771835013623!3d-6.823765795044027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b00bd0fb58d%3A0xe45fb38a817f73a4!2sJakaya+Kikwete+Youth+Park.!5e0!3m2!1sen!2stz!4v1523879738177" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
      
    </div>
    <div class="col-md-5 text-center" style="padding-top: 15%;font-size: 16px">
      Lorem ipsum dolor sit amet, prima lucilius sensibus ex sit. Mundi antiopam no mel, at mel illud nominavi consectetuer, illum assentior cum at. Eruditi intellegebat in vix, est partem posidonium ea. Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at.

      Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt. Et justo ullum patrioque per.
      <br><br>
    </div>

  </div>
  <div id="social" class="row bg-dark" style="padding-top: 5%">
    <div class="col-md-4 col-md-offset-4">
      <div class="col-md-4 col-sm-4 col-xs-4">
        <center><a href=""><img class="rounded-circle" src="{{ URL::asset('img/media/facebookwhite.png')}}" width="40" height=""></a></center>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4">
        <center><a href=""><img class="rounded-circle" src="{{ URL::asset('img/media/instagramwhite.png')}}" width="40" height=""></a></center>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4">
       <center><a href=""><img class="" src="{{ URL::asset('img/media/tweeterwhite.png')}}" width="40" height=""></a></center>
        <br>
        <br>
      </div>
      
    </div>

  </div>

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

@endsection
