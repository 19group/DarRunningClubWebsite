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

<div id="" class="container-fluid">

      <div class="container-fluid history_text">
        <br>
        <h1>Runs & Marathons</h1>
       
      </div>

        <div class="row" id="accordion">
        <br>
          @foreach($races as $race)


          <div class="panel panel-default container-fluid">
            <div id="race_title" class="panel-heading" style="background-image: url({{ URL::asset('img/darRunning3.png') }});">
              <h4 class="panel-title">
                <a class="accordion-toggle thee_title" data-toggle="collapse" data-parent="#accordion" href="#{{ $race->id }}">
                  <h1 class="jumbotron text-center">{{ $race->title}}</h1>
                    <center>
                      <button class="btn btn-lg btn-info"> Join / Register </button><br>
                      <a href=""><i class="glyphicon glyphicon-triangle-bottom " style="font-size: 40px"></i></a>
                    </center>
                </a>
              </h4>
            </div>
            <div id="{{ $race->id }}" class="panel-collapse ">
              <div class="panel-body">
                <div class="col-md-12">
                  <h2 class="text-black">Intro</h2>

                    <span class="history_text">
                        The Dar Running Club (#teamDRC) is a means for all to come together and share a love of running. It is low pressure and flexible, with members showing up when they have the time and often planning runs of our own. We have many levels of runners, from those who have never run before to marathoners and Ultra Marathoners.<br> We have all age groups with diverse backgrounds. Pooling all of #teamDRC runners, we guarantee that there'll always be someone with whom you can run. If you come, you will be entering an environment that inspires running and that will keep you fit. So, whether you are looking to stay in shape, find a team, or just have a relaxing activity, come on out and join us for a run.
                    </span>
                    <br>
                    <br>

                  <h2 class="text-black clearfix">Event Details</h2>
                    <span class="history_text">
                      {!! nl2br($race->description) !!}
                    </span>
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                    <div class="col-md-10 col-md-offset-1">
                      <img src="{{ URL::asset('img/runners8.png') }}" width="100%">
                      <p class="img_caption">
                        Running in packs keeps the motivation alive
                      </p>
                    </div>
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                    <div class="col-md-10 col-md-offset-1">
                      <img src="{{ URL::asset('img/runners7.png') }}" width="100%">
                      <p class="img_caption">
                        Fuel up on the go
                      </p>
                    </div>
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                    <div class="col-md-10 col-md-offset-1">
                      <img src="{{ URL::asset('img/marathon1.jpg') }}" width="100%">
                      <p class="img_caption">
                        The goal is to finish
                      </p>
                    </div>
                </div>

                <div class="col-md-12">
                  <br>
                  <br>
                  <h2 class="text-black">An Interactive Route Map</h2>
                    <!--<iframe width="100%" style="border: none; height:600px;position:relative"
                    src="https://kili.28east.co.za/"></iframe>-->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d26653.587501195514!2d39.26621980250734!3d-6.76016198193883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x185c4c5e5db078fb%3A0x9fd70c6c44d47d79!2sOyster+Bay%2C+Dar+es+Salaam!3m2!1d-6.7736667!2d39.276505!4m5!1s0x185c4d084147b0e5%3A0xa2c90d938443433e!2sMasaki%2C+Dar+es+Salaam!3m2!1d-6.7473712!2d39.281697099999995!5e0!3m2!1sen!2stz!4v1525765146896" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>

                <div class="col-md-12">
                  <br>
                  <br>
                  <h2 class="text-black text-center">Sponsors</h2>
                  <br>
                  <br>
                   <center>
                     <div class="col-md-4">
                      <div class="col-md-8 col-md-offset-2">
                        <img width="100%" src="{{ URL::asset('img/sponsors/grandmalt-logo.png') }}">
                      </div>
                     </div>
                   </center>

                   <center>
                     <div class="col-md-4">
                      <div class="col-md-8 col-md-offset-2">
                        <img width="100%" src="{{ URL::asset('img/sponsors/kilibeer-logo.png') }}">
                      </div>
                     </div>
                   </center>

                   <center>
                     <div class="col-md-4">
                      <div class="col-md-8 col-md-offset-2">
                        <img width="100%" src="{{ URL::asset('img/sponsors/kiliwater-logo.png') }}">
                      </div>
                     </div>
                   </center>
                     
                </div>
              </div>
            </div>
          </div>
        

          @endforeach

        </div>
      </div>


<!--
   #
   # About the Club
   #
  -->





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
