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
        <span class="text-secondary text-center">
        Lorem ipsum dolor sit amet, prima lucilius sensibus ex sit. Mundi antiopam no mel, at mel illud nominavi consectetuer, illum assentior cum at. Eruditi intellegebat in vix, est partem posidonium ea. Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at.

        Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt. Et justo ullum patrioque per.

        No sit elitr dolorem, integre aliquam conclusionemque mel ei. Qui et modo periculis voluptatum, vis admodum accumsan scaevola cu.
        <br>
        <br>
        </span>
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
            <div id="{{ $race->id }}" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-md-12">
                  <h2 class="text-black">Intro</h2>
                    {{ $race->description}}
                    <br>
                    <br>

                  <h2 class="text-black clearfix">Event Details</h2>
                    {{ $race->description}}
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                    <div class="col-md-10 col-md-offset-1">
                      <img src="{{ URL::asset('img/darRunning.png') }}" width="100%">
                      <p class="img_caption">
                        The picture caption
                      </p>
                    </div>
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                    <div class="col-md-10 col-md-offset-1">
                      <img src="{{ URL::asset('img/darRunning.png') }}" width="100%">
                      <p class="img_caption">
                        The picture caption
                      </p>
                    </div>
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                    <div class="col-md-10 col-md-offset-1">
                      <img src="{{ URL::asset('img/darRunning.png') }}" width="100%">
                      <p class="img_caption">
                        The picture caption
                      </p>
                    </div>
                </div>

                <div class="col-md-12">
                  <br>
                  <br>
                  <h2 class="text-black">An Interactive Route Map</h2>
                    <iframe width="100%" style="border: none; height:600px;position:relative"
                    src="https://kili.28east.co.za/"></iframe>
                </div>

                <div class="col-md-12">
                  <br>
                  <br>
                  <h2 class="text-black text-center">Sponsors</h2>
                  <br>
                  <br>
                   <center>
                     <div class="col-md-4">
                      <div class="col-md-10 col-md-offset-1">
                        <img width="100%" src="{{ URL::asset('img/sponsors/grandmalt-logo.png') }}">
                      </div>
                     </div>
                   </center>

                   <center>
                     <div class="col-md-4">
                      <div class="col-md-10 col-md-offset-1">
                        <img width="100%" src="{{ URL::asset('img/sponsors/kilibeer-logo.png') }}">
                      </div>
                     </div>
                   </center>

                   <center>
                     <div class="col-md-4">
                      <div class="col-md-10 col-md-offset-1">
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
