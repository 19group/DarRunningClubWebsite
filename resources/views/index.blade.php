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




<section class="main-slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div id="marathon_list" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <center><h4>Our Annual Races</h4></center>
        <div class="panel-group col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1" id="accordion">

          @foreach($races as $race)


          <div class="panel panel-default">
            <div id="race_title" class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle thee_title" data-toggle="collapse" data-parent="#accordion" href="#{{ $race->id }}">
                  {!! nl2br($race->title) !!}
                </a>
              </h4>
            </div>
            <div id="{{ $race->id }}" class="panel-collapse collapse">
              <div class="panel-body">
               {{ $race->description}}
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>


    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <!-- Carousel items -->
    <div class="carousel-inner">

      <!-- Slide 1 : Active -->
      <div class="item active">
        <img src="{{ URL::asset('img/darRunning4.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h3>Our shoes have more miles than your car.</h3>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide1 -->

      <!-- Slide 2 -->
      <div class="item ">
        <img src="{{ URL::asset('img/darRunning2.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h3>We don’t run to add years to our lives. We run to add life to our years 7 days without running makes one weak.</h3>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide2 -->

      <!-- Slide 3 -->
      <div class="item ">
        <img src="{{ URL::asset('img/darRunning3.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h3>Our sport is other sports’ punishment.</h3>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide3 -->

      <!-- Slide 4 -->
      <div class="item ">
        <img src="{{ URL::asset('img/darRunning1.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h3>Running won’t kill you, you’ll pass out first.</h3>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide4 -->

    </div><!-- /.carousel-inner -->


    <!-- Controls -->
    <div class="control-box">
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.control-box -->


  </div><!-- /#myCarousel -->
</section><!-- /.main-slider -->


<!--
   #
   # Our Profile (about us)
   #
  -->
<div class="row">
  <div class="col-md-6">
    <div class="col-md-8 col-md-offset-2 text-center">
      <br>
      <br>
      <h3>Achievements</h3><hr>
      <br>
      <span class="avg_font_size history_text">
        Running is an exercise that improves a persons mental and physical state. Jogging is considered one of the most popular forms of weight loss.
      </span><br><br><br>
      <div class="container-fluid text-center">
         <div class="col-md-4 text-center col-md-offset-4">
        <span class="bg-nos">{{ $achievements->marathons }}</span>
        <p>ANNUAL<br>MARATHONS</p>
      </div>
      </div>
      <div class="container-fluid text-center">
      <div class="col-md-4 text-center">
        <span class="bg-nos">{{ $achievements->experience }}</span>
        <p>YEARS OF<br>EXPERIENCE</p>
      </div>
      <div class="col-md-4 text-center">
        <span class="bg-nos">{{ $achievements->podium }}</span>
        <p>PODIUM<br>FINISHES</p>
      </div>
      <div class="col-md-4 text-center">
        <span class="bg-nos">{{ $achievements->medals }}</span>
        <p>WON<br>MEDALS</p>
      </div>
    </div><br><br>
    </div>
    
  </div>

  <!-- End of About us-->

  <!--
   #
   # Club & Runs
   #
  -->


  <div class="col-md-6 bg-dark">
     <div class="col-md-6 col-md-offset-3 text-light text-center">
      <br>
      <br>
      <h3>Runs</h3>
      <br>
    </div>

      <div class="col-md-12 col-xs-12">
      <div class="tabs-left">
        <ul class="runs-title col-sm-4 col-xs-6 list-style nav-tabs">

          @foreach( $runs as $run )

            <li class="<?php if($run->id=="1"){ echo 'active'; } ?>"><a href="#{{ $run->slug }}" class="p-3 row" data-toggle="tab"><span>{{ $run->title }}</span></a></li>

          @endforeach
        </ul>

        <div class="tab-content">

          @foreach ($runs as $info)

          <div style="min-height: 45vh;" class="col-md-8 col-sm-8 col-xs-6 border-left tab-pane <?php if($info->id=="1"){ echo 'active'; } ?>" id="{{ $info->slug }}">
              <table class="table container-fluid table-responsive text-light table-borderless">
                <tr>
                  <td class="text-right">Route : </td><td class="text-info text-">{{ $info->title }}</td>
                </tr>
                <tr>
                  <td class="text-right">Description: </td><td class="text-info text-">{{ $info->description }}</td>
                </tr>
                <tr>
                  <td class="text-right">Schedules : </td><td class="time text-info text-">{!! nl2br($info->schedules) !!}</td>
                </tr>
                <tr>
                  <td class="text-right">Contact : </td><td class="text-info text-">{{ ($info->contact) }}</td>
                </tr>
              </table>
          </div>

          @endforeach
          
        </div><!-- /tab-content -->
      </div><!-- /tabbable -->

        </div>
      </div>
      <!-- End of Clubs & Runs -->

  </div>
</div>


<!--
   #
   # History of the Club
   #
  -->

<div id="club_history" class=" text-light container-fluid bg-dark_grey">
  <div class="col-md-4 col-xs-6 col-sm-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-4 text-center"><br>
    <h3>Our Club</h3>

    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-4 col-md-offset-4 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>

  </div>

  <div class="col-md-12 col-sm-12 col-xs-12 history_text">
    <div class="col-md-12 text-center">
     <span class="text-secondary">
      <br>
        The Dar Running Club (#teamDRC) is a means for all to come together and share a love of running. It is low pressure and flexible, with members showing up when they have the time and often planning runs of our own. We have many levels of runners, from those who have never run before to marathoners and Ultra Marathoners. We have all age groups with diverse backgrounds. Pooling all of #teamDRC runners, we guarantee that there'll always be someone with whom you can run. If you come, you will be entering an environment that inspires running and that will keep you fit. So, whether you are looking to stay in shape, find a team, or just have a relaxing activity, come on out and join us for a run

      </span>
    </div>
     <div class="col-md-6 col-xs-12 col-sm-6 ">
      <br>
         <h4>Our Mission</h4><hr>
         <span class="text-secondary">
           
            Promote and encourage the sport of running.
            Promote and encourage the pleasure, exercise and recreation of runners.
            Promote sociability and friendship among the members of DRC.
            Manage and conduct running events, training runs, exercises and social meeting for the members of DRC and other runners.

          </span>
          <br>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-6">
        <br>
         <h4>Our Vision</h4><hr>
         <span class="text-secondary">

            To enable each individual to reach their full potential, win gold medals, break World Records and for our club to be recognized locally and internationally as a premier athletic/running club.

          </span>
          <br><br>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 pb-5">
        <br>
         <h4 class="">Our Values</h4><hr>
         <span class="text-secondary">
            <div class="col-md-6">
                <h4 class="text-light"><i>Inclusivity</i></h4>
                Runners of all ages, genders and athletic ability are welcomed to join.

                <h4 class="text-light"><i>Teamwork</i></h4>
                We believe in bonding with teammates through trainings, social events and other activities that leads to better personal and long lasting friendships.

                <h4 class="text-light"><i>Democracy</i></h4>
                We each have a voice, every club member’s opinion matters and each member has an equal vote in club elections.
                
                
            </div>
            <div class="col-md-6">
                <h4 class="text-light"><i>Flexibility</i></h4>
                We recognize that everyone has time consuming work and family obligations .DRC will schedule weekly runs to strengthen team dynamics and give a room for productive discussion for the development of our club.
                
                <h4 class="text-light"><i>Ambassadors</i></h4>
                We are proud advocates of Tanzania sports/running. We will represent our beloved country /sport of running with highest level of dignity and sportsmanship.
            </div>
          </span>
          <br><br><br>
    </div>
  </div>
</div>

<!-- End of History -->


<!--
   #
   # Gallery
   #
  -->


<div class=" text-light row bg-dark">
  <div class="col-md-4 col-md-offset-4 text-center">
    <h3>Our Gallery</h3>
    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>
  </div>
  <div id="gallery" class="col-md-12" style="margin-bottom: ">
    <div class="clearfix visible-sm"></div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners1.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners2.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners3.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners4.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners5.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners6.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners7.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners8.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners9.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners10.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners11.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners12.png') }}" alt=""></center><br>
    </div>
  </div>
</div>


<!-- Team info -->

<div class="container-fluid">
  <div class="col-md-6 col-md-offset-3 text-center">
    <br>
    <h3>Dar Runners Club</h3>
    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>
  </div>

  <div class="col-md-6">
    <br>
    <br>
    <br>
    <center><img class="img-responsive" src="{{ URL::asset('img/runners.jpg') }}" alt=""></center>
    <br>
    <br>
    <br>
  </div>
  <div class="col-md-6 pull-right text-center">
    <br>
    <br>
    <br>
    <p class="history_text">
      <b>Eruditi intellegebat in vix, est partem posidonium ea.</b><br><br> Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt. Et justo ullum patrioque per. No sit elitr dolorem, integre aliquam conclusionemque mel ei. Qui et modo periculis voluptatum, vis admodum accumsan scaevola cu.
    </p>
    <div class="text-center">
      <br>
      <br>
      <button class="btn btn-primary">Read more</button>
      <br>
      <br>
    </div>
  </div>
</div>


  <div class="container-fluid">
  <div class="col-md-12 text-light" style="background-color: #333333">
    <div class="col-md-3">
      <br>
      <img class="img-responsive" src="{{ URL::asset('img/coach-avatar.jpg') }}" alt="">
      <h4>Goodluck Elvis</h4>
      <span class="text-secondary"><i>President</i></span>
      <br>
      <br>
      <span>
        Athletics Enthusiast.Passionate about developing talents, staging athletic events and an experienced ultra-marathoner.Personal best time is 1hr 27mins in a half marathon.
      </span>
        <br>
        <br>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <br>
      <img class="img-responsive" src="{{ URL::asset('img/coach-avatar.jpg') }}" alt="">
      <h4>Eric Khawa</h4>
      <span class="text-secondary"><i>Secretary</i></span>
      <br>
      <br>
      <span>
        Very strong organizational skills. He is a 360 sportsman with strong knowledge on nutrition.See attached picture.
      </span>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <br>
      <img class="img-responsive" src="{{ URL::asset('img/coach-avatar.jpg') }}" alt="">
      <h4>Emmanuel Marwa</h4>
      <span class="text-secondary"><i>Coach</i></span>
      <br>
      <br>
      <span>
        Retired Professional Athlete. Very skilled in game plans, aerobics and nutrition.
      </span>
      <br>
      <br>
    </div>

  </div>

  <!-- <div class="col-md-12">
    <br>
   <div class="col-md-4 col-md-offset-4 text-center">
    <h2>Testimonies</h2>
    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="container-fluid">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <img class="pull-view col-md-4 col-sm-4 img-responsive rounded-circle" src="{{ URL::asset('img/coachsm.png') }}" alt="">
      </div>

    <br>
    <div class="col-md-8   col-sm-12 col-xs-12" style="background-color: #333333; padding: 15px">
      <span class="text-light" style="font-size: 17px;">
        Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt.
        <br>
      </span>
    </div>
    </div>
  </div>
  <br>

  <div class="col-md-12">
    <div class="container-fluid">
      <div class="col-md-4 col-sm-6 col-xs-12"><br>
        <img class="pull-view col-md-4 col-sm-4 img-responsive rounded-circle" src="{{ URL::asset('img/coachsm.png') }}" alt="">
      </div>

    <br>
    <div class="col-md-8 col-sm-12 col-xs-12" style="background-color: #333333; padding: 15px">
      <span class="text-light" style="font-size: 17px;">
        Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt.
        <br>
      </span>
    </div>
    </div>

  </div>

  <div class="col-md-12">
    <div class="container-fluid">
      <div class="col-md-4 col-sm-6 col-xs-12"><br>
        <img class="pull-view col-md-4 col-sm-4 img-responsive rounded-circle" src="{{ URL::asset('img/coachsm.png') }}" alt="">
      </div>

    <br>
    <div class="col-md-8 col-sm-12 col-xs-12" style="background-color: #333333; padding: 15px">
      <span class="text-light" style="font-size: 17px;">
        Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt.
        <br>
      </span>
    </div>
    </div>
  </div>-->

   

   
  </div>
</div>


<!-- Footer -->
  <br>
  <br>
  <br>
<div class="container-fluid bg-dark pb-3">
  <br>
  <div class="col-md-6 border-right border-black">
    <div class="col-md-6 pull-right">
    <h4 class="text-light text-center">Contact Information</h4><br>
      <p class="text-muted"><i class="glyphicon glyphicon-map-marker history_text"></i> &nbsp;&nbsp;Police Area, Oysterbay Dar es Salaam, Tanzania</p><br>
      <p class="text-muted"><i class="glyphicon glyphicon-phone-alt history_text"></i> &nbsp;&nbsp;+255 756 272 366</p><br>
      <p class="text-muted"><i class="glyphicon glyphicon-send history_text"></i> &nbsp;&nbsp;darrunningclub@gmail.com</p>
    </div>
  </div>

  <div class="col-md-6">
    <div class="col-md-6 text-center" style="font-size: 18px">
    <h4 class="text-light text-center">Useful Links</h4><br>
      <a href="{{ url('/about') }}">About Us</a><br>
      <a href="{{ url('/races') }}">Races</a><br>
      <a href="{{ url('/DRC-blog') }}">News & Events</a><br>
    </div>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-16">
    &copy; Dar Running Club Website 2018
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
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<script type="text/javascript">
  // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });

</script>


</body>
</html>
@endsection
