@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href=" {{ asset('css/mycourse.css') }}">
        <link src="{{asset('js/addCourse.js')}}">
        <!-- css-->
<link href="https://xypnos-labs.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/css/style.css" rel="stylesheet">
  <link href="https://xypnos-labs.com/assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!--js-->
  <script src="https://xypnos-labs.com/assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://xypnos-labs.com/assets/js/main.js"></script>
  <meta name="viewport" content="width=device-width">
<link href="https://npmcdn.com/flickity@2/dist/flickity.css" rel="stylesheet">
<link rel="stylesheet" href="/path/to/flickity.css" media="screen">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="/path/to/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
<body>
  <!--navbar-->
    <div class="st">
       <header id="header" class="fixed-top d-flex align-items-center  ">
         <div class="container d-flex align-items-center">
              <div class="logo mr-auto">
                 <h1 class="text-light"><a href="index.html"><img src="https://xypnos-labs.com/assets/img/xypnos.png" alt=""></a></h1>
              </div>
          <nav class="nav-menu d-none d-lg-block d-flex ">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#"> Programs </a></li>
              <li><a href="#"> My Profil </a></li>
              <li><a href="#"> Logout </a></li>
            </ul>
          </nav>
         </div>
        </header>
    </div>

         <h4 style="margin-top: 7%;margin-left: 3%;color:#49c1d4 ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">{{ $course->Category->name }}/{{ $course->title }}</h4></strong>
           <!--Progress and tests boxes-->
           <div class="row row1" style="margin-top: 2%;">
            <div class="col ms">
             <div >
              
             <h3 style="margin-top: 15px;">My Progress</h3>
             <div class="progress-pie-chart" data-percent="100"style="margin-left:50%;margin-top:20px;">
              <div class="ppc-progress">
                <div class="ppc-progress-fill"></div>
              </div>
              <div class="ppc-percents">
                <div class="pcc-percents-wrapper">
                  <span>%</span>
                </div>
              </div>
            </div>
            </div>
             </div>
            <div class="col ms ">
               <div>
           <h3 style="margin-top: 15px;">Assignments</h3>
             <tr>
           <th> QUIZ &nbsp &nbsp&nbsp</th>
           <th  > <small>Statics Quiz</small>
            <hr style="margin-left: 60px;margin-top:3px;">
           </th> 
           </tr>
           <tr>
            <th> TEST &nbsp &nbsp&nbsp</th>
            <th><small> Pandas data</small>
             <hr style= "margin-left: 60px;margin-top:3px;">
            </th> 
            
            </tr>
             <div class="vl"></div>
            </div>
            </div>
          </div>
          <style>
.row1{
    width: 900px;
    height: 170px;
    
    border-radius: 25px ;
    box-shadow: 3px 3px rgb(187, 176, 176);

    margin-top: 10%;
    margin-left:20% !important ;
    border: 2px  gray;
    border-style: solid;
}
.vl {
  border-left: 2px solid gray;
  height: 120px;
  position: absolute;
  left: 50%;
  margin-left: -260px;
  margin-top: -120px;

}


.progress-pie-chart {
	 width: 50px;
	 height: 50px;
	 border-radius: 50%;
	 background-color: #e5e5e5;
	 position: relative;
}
 .progress-pie-chart.gt-50 {
	 background-color: #33354a;
}
 .ppc-progress {
	 content: "";
	 position: absolute;
	 border-radius: 50%;
	 left: calc(50% - 50px);
	 top: calc(50% - 50px);
	 width: 100px;
	 height: 100px;
	 clip: rect(0, 100px, 100px 50px);
}
 .ppc-progress .ppc-progress-fill {
	 content: "";
	 position: absolute;
	 border-radius: 50%;
	 left: calc(50% - 50px);
	 top: calc(50% - 50px);
	 width: 100px;
	 height: 100px;
	 clip: rect(0 50px100px, 0);
	 background: #33354a;
	 transform: rotate(60deg);
}
 .gt-50 .ppc-progress {
	 clip: rect(0 50px100px, 0);
}
 .gt-50 .ppc-progress .ppc-progress-fill {
	 clip: rect(0, 100px, 100px 50px);
	 background: #e5e5e5;
}
 .ppc-percents {
	 content: "";
	 position: absolute;
	 border-radius: 50%;
	 left: calc(50% - 86.9565217391px/2);
	 top: calc(50% - 86.9565217391px/2);
	 width: 86.9565217391px;
	 height: 86.9565217391px;
	 background: #fff;
	 text-align: center;
	 display: table;
}
 .ppc-percents span {
	 display: block;
	 font-size: 20px;
	 font-weight: bold;
	 color: #33354a;
}
 .pcc-percents-wrapper {
	 display: table-cell;
	 vertical-align: middle;
}

 .progress-pie-chart {
	 margin: 50px auto 0;
}
</style>
<script>
 $(function(){
  var $ppc = $('.progress-pie-chart'),
    percent = parseInt($ppc.data('percent')),
    deg = 360*percent/100;
  if (percent < 50) {
    $ppc.addClass('gt-50');
  }
  $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
  $('.ppc-percents span').html(percent+'%');
});
  </script>

<!--course-->
<div id="wrapper" class="playlist-wrapper" style="margin-top: 5%;">
  <div id="player" class="player-wrapper">
    <figure>
      <video width="1000" height="500" controls>

        <source src="/storage/{{ $course->title }}/{!! $chapter->video !!}" type="video/mp4"/>
        Your browser does not support the video element.
      </video>

        <p>/storage/{{ $chapter->video }}</p>

    </figure>
    
 </div>
 <div class="playlist-thumb-container">
   <ul id="" class="playlist-thumb">
     <li> Chapters<li>
         @foreach ($course->Chapters as $chapter )
    <li class="courseTitle"> {{ $chapter->name }}
      @if( Auth::user()->id == $tutor->id)
          <form action="{{ url('/myspace/class/delete') }}" method="post">
            @csrf
          <input class="btn btn-default" type="submit" value="Delete" />
          <input type="hidden" name="course_id" value="{{ $course->id }}" />
          <input type="hidden" name="chapter" value="{{ $chapter->id }}" />
          <input type="hidden" name="_method" value="delete" />
          </form>
      @endif
         @endforeach
         @if( Auth::user()->id == $tutor->id)
          <form method="POST" action="/myspace/class" enctype="multipart/form-data">
          @csrf
          <input name="video" type="file">
          <input name="name" type="text" placeholder="title">
          <input name='course_id' type="hidden" value="{{ $course->id }}"><br/><br/><br/><br/><br/><br/><br/><br/>
          <button type='submit'>submit</button>
          </form>
         @endif
        </li>

   </ul>

 </div>
</div>
<style>
  .courseTitle{
    color: lightslategray;
    font-family:'cursive';
  }
  .playlist-wrapper {
  display: flex;
  width: 1170px;
  margin: 0 auto;
}

.player-wrapper {
  height: 500px;
  flex: 1 0 auto;
  margin-right: 40px;
  position: relative;
}

.playlist-thumb-container {
  flex: 0 0 325px;
}

ul {
  margin: 0;
  list-style: none;
  padding: 0;
  height: 500px;
  overflow-y: auto;
  overflow-x: hidden;
}

ul::-webkit-scrollbar {
    width: 5px;
    display: none;
}

/* Track */
ul::-webkit-scrollbar-track {
    background: transparent;
}
 
/* Handle */
ul::-webkit-scrollbar-thumb {
    background: #46c5d3; 
    border-radius: 10px;
}

/* Handle on hover */
ul::-webkit-scrollbar-thumb:hover {
    background: #46c5d3; 
}

ul:hover::-webkit-scrollbar {
  display: block;
}

li {
  cursor: pointer;
  position: relative;
  width: 320px;
  margin-bottom: 20px;
}

li:last-of-type {
  margin-bottom: 0;
}

button {
  background: none;
  border: 0;
  width: 50px;
  height: 30px;
  position: absolute;
  top: 0; right: 0; bottom: 0; left: 0;
  margin: auto;
  outline: none;
  cursor: pointer;
}




@keyframes saving {
    to {
        transform: rotate(360deg);
    }
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<script>

  /*
  "use strict";

var player 					  = document.getElementById('player');
var playlistThumb 		= document.getElementById('playlistThumb');

var apiUrl 			= 'https://youtu.be/psaDHhZ0cPs';
var apiKey	 		= 'AIzaSyBmn9tD95L_dbCfy_VQ33kwoaQCo8l5IN4';
var playlistId 	= 'PLLUnHbvt2R4zSyb-jTCDAOduk3DsZNIsH';

getPlaylistData(playlistId, apiUrl, apiKey);

// Makes a single request to Youtube Data API
function getPlaylistData(playlistID, apiUrl, apiKey) {  
  var options = {
    part: "snippet",
    playlistId: playlistId,
    key: apiKey,
    maxResults: 25
  };
  var defautVideoIndex = 0;
  
  $.getJSON(apiUrl, options, function(response) {
    var item = response.items[defautVideoIndex];
    var medium = item.snippet.thumbnails.medium;
    var videoId = item.snippet.resourceId.videoId;
    
    player.innerHTML = '<iframe id="iframe-player" data-id="' + videoId + '" width="100%" height="100%" src="//www.youtube.com/embed/' + videoId + '?rel=0;enablejsapi=1&version=3&playerapiid=ytplayer1" frameborder="0" sandbox="allow-scripts allow-same-origin allow-presentation"></iframe>';
    
    for (var i = 0; i < response.items.length; i++) {
          item = response.items[i];
          medium = item.snippet.thumbnails.medium;
          videoId = item.snippet.resourceId.videoId;
    	$(playlistThumb).append(
      	'<li data-vid="'+ videoId +'"><img src="'+ medium.url +'" width="'+ medium.width +'" height="'+ medium.height +'" />'+
          '<button class="ytp-large-play-button ytp-button" aria-label="Play">'+
						'<svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">'+
              '<path class="ytp-md-pay-btn" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#212121" fill-opacity="0.8"></path>'+
              '<path d="M 43,24 30,17 30,31" fill="#FFF"></path>'+
        		'</svg>'+
         	'</button>'+
         '</li>'
       );
    }
    $(document).on('click', '[data-vid]', function() {
        
 		   	videoId = this.dataset.vid;
        if (!videoId) return;
        var iframe = document.getElementById('iframe-player');
        if (!iframe) return;
        if (iframe.dataset.id === videoId) return;
         player.innerHTML = '<iframe id="iframe-player" data-id="' + videoId + '" width="100%" height="100%" onload="playYtpVideo()" src="https://www.youtube.com/embed/' + videoId + '?rel=0;enablejsapi=1&version=3&playerapiid=ytplayer1" frameborder="0" sandbox="allow-scripts allow-same-origin allow-presentation"></iframe>';
        $(player).append('<div class="save_spinner"></div>');
    });

	});
} */
</script>
<!--TUOR/FILES-->
<hr style="height:1px ;background-color: lightgrey; margin-left:35%; width: 30%;margin-top: 5%;">
<p style="color: grey; margin-left:38%;">Python for data science and machine learning</p>
<div class="row" style="margin-top: 2%;">
 <div class="col ms">
    <div>
   <p style="margin-left: 25%;font-size: 20px;">Shared files</h3>
    <div class="playlist-thumb-container">
      <ul id="" class="playlist-thumb">
      <li style="margin-left: 25%;" >  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="30px" height="40px">
        <a href="#" style="font-size: 15px; color: darkgray;"> informations.pdf <hr style="height:1px ;background-color: lightgrey;margin-left: 11%;margin-top: -5px;">
         </a></li>
         <li style="margin-left: 25%;" >  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="30px" height="40px">
          <a href="#" style="font-size: 15px; color: darkgray;"> informations.pdf <hr style="height:1px ;background-color: lightgrey;margin-left: 11%;margin-top: -5px;">
           </a></li>
           <li style="margin-left: 25%;" >  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="30px" height="40px">
            <a href="#" style="font-size: 15px; color: darkgray;"> informations.pdf <hr style="height:1px ;background-color: lightgrey;margin-left: 11%;margin-top: -5px;">
             </a></li>
             <li style="margin-left: 25%;" >  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="30px" height="40px">
              <a href="#" style="font-size: 15px; color: darkgray;"> informations.pdf <hr style="height:1px ;background-color: lightgrey;margin-left: 11%;margin-top: -5px;">
               </a></li>
    </ul>
    </div>
     </div>
  </div>
  <div class="col ms ">
    <p style="margin-left: 17%; font-size: 20px;">Tutor</p>
    <div class="profile-image"  style="margin-left: 30%;">
      <img id="img" src="/storage/profiles_pics/{{ $tutor->profile_pic }}" alt="">
      <p style="margin-left: 9%;margin-top: 15px;">{{ $tutor->name }} </p>
      <p style="margin-left: 5%; color:grey">web developer </p>
      <div class="vl2"></div>
    </div>
    </div>
 </div>
    <style>
#img{
  border-radius: 50%;

}
.vl2 {
  border-left: 2px solid gray;
  height: 250px;
  position: absolute;
  left: 50%;
  margin-left: -260px;
  margin-top: -270px;

}
    </style>
    <hr style="height:1px ;background-color: lightgrey; margin-left:35%; width: 30%;margin-top: -7%;">
<div style="margin-left: 10%;margin-top: 3%;">
  <trong><h3 style="color: gray; font-size: 25px; ">Chapter 1:introduction</h3></trong>
  <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem<br> ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem <br>ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
  </p>
</div>
<div style="margin-left: 10%;margin-top: 3%;">
  <trong><h3 style="color: gray; font-size: 25px; ">Chapter 1:introduction</h3></trong>
  <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem<br> ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem <br>ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
  </p>
</div>
<div style="margin-left: 10%;margin-top: 3%;">
  <trong><h3 style="color: gray; font-size: 25px; ">Chapter 1:introduction</h3></trong>
  <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem<br> ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem <br>ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
  </p>
</div>
<!--Class members-->
  <div class="slideshow js-slideshow"> 
    <div class="slide">
      <div class="profile">
        <img class="img" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/07/Anais_Saint-Jude_L4388_SQ.jpg.jpeg" width="138px" height="138px" style="box-shadow:3px 4px lightgrey ;">
        <h4 style="margin-top: -47%; color: black;">User Name</h4>
        <div  style="margin-top: -50%;">
          <img src="https://www.nicepng.com/png/detail/208-2085876_message-comments-message-icon-black-png.png" width="25px" height="25px"  style="margin-top: -60%;margin-left: 6%;">
        </div>
      </div>
    </div>
    <div class="slide">
      <div class="profile">
        <img class="img" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/07/Anais_Saint-Jude_L4388_SQ.jpg.jpeg" width="138px" height="138px" style="box-shadow:3px 4px lightgrey ;">
        <h4 style="margin-top: -47%; color: black;">User Name</h4>
        <div  style="margin-top: -50%;">
          <img src="https://www.nicepng.com/png/detail/208-2085876_message-comments-message-icon-black-png.png" width="25px" height="25px"  style="margin-top: -60%;margin-left: 6%;">
        </div>
      </div>
    </div> <div class="slide">
      <div class="profile">
        <img class="img" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/07/Anais_Saint-Jude_L4388_SQ.jpg.jpeg" width="138px" height="138px" style="box-shadow:3px 4px lightgrey ;">
        <h4 style="margin-top: -47%; color: black;">User Name</h4>
        <div  style="margin-top: -50%;">
          <img src="https://www.nicepng.com/png/detail/208-2085876_message-comments-message-icon-black-png.png" width="25px" height="25px"  style="margin-top: -60%;margin-left: 6%;">
        </div>
      </div>
    </div> <div class="slide">
      <div class="profile">
        <img class="img" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/07/Anais_Saint-Jude_L4388_SQ.jpg.jpeg" width="138px" height="138px" style="box-shadow:3px 4px lightgrey ;">
        <h4 style="margin-top: -47%; color: black;">User Name</h4>
        <div  style="margin-top: -50%;">
          <img src="https://www.nicepng.com/png/detail/208-2085876_message-comments-message-icon-black-png.png" width="25px" height="25px"  style="margin-top: -60%;margin-left: 6%;">
        </div>
      </div>
    </div> <div class="slide">
      <div class="profile">
        <img class="img" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/07/Anais_Saint-Jude_L4388_SQ.jpg.jpeg" width="138px" height="138px" style="box-shadow:3px 4px lightgrey ;">
        <h4 style="margin-top: -47%; color: black;">User Name</h4>
        <div  style="margin-top: -50%;">
          <img src="https://www.nicepng.com/png/detail/208-2085876_message-comments-message-icon-black-png.png" width="25px" height="25px"  style="margin-top: -60%;margin-left: 6%;">
        </div>
      </div>
    </div> <div class="slide">
      <div class="profile">
        <img class="img" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/07/Anais_Saint-Jude_L4388_SQ.jpg.jpeg" width="138px" height="138px" style="box-shadow:3px 4px lightgrey ;">
        <h4 style="margin-top: -47%; color: black;">User Name</h4>
        <div  style="margin-top: -50%;">
          <img src="https://www.nicepng.com/png/detail/208-2085876_message-comments-message-icon-black-png.png" width="25px" height="25px"  style="margin-top: -60%;margin-left: 6%;">
        </div>
      </div>
    </div>
  </div>
<style>
  .img{
    border-radius: 50%;
  }
  .profile{
   
    margin-top: -40%;
    margin-left: 10px;
  }
  .slideshow {
	 margin-top: calc(50vh - 25vh);
	 padding-bottom: 4vw;
}
 .slide {
	 width: 230px;
   height: 250px;
	 max-resolution: 4vw;
	 margin-right: 4vw;
	 text-align: center;
   /*box-shadow: 10px 10px #888888;
   /*border-style: solid;
   border-color: gray;*/
	
	 background-color: #fff;
	 border-radius: 6px;
	 color: #fff;
	 font-family: 'Helvetica Neue', helvetica, arial;
	 font-size: 24px;
	 line-height: 50vh;
}


</style>
<script type="text/babel">
//
//   Variables
//
//////////////////////////////////////////////////////////////////////

// Play with this value to change the speed
let tickerSpeed = 2;

let flickity = null;
let isPaused = false;
const slideshowEl = document.querySelector('.js-slideshow');


//
//   Functions
//
//////////////////////////////////////////////////////////////////////

const update = () => {
  if (isPaused) return;
  if (flickity.slides) {
    flickity.x = (flickity.x - tickerSpeed) % flickity.slideableWidth;
    flickity.selectedIndex = flickity.dragEndRestingSelect();
    flickity.updateSelectedSlide();
    flickity.settle(flickity.x);
  }
  window.requestAnimationFrame(update);
};

const pause = () => {
  isPaused = true;
};

const play = () => {
  if (isPaused) {
    isPaused = false;
    window.requestAnimationFrame(update);
  }
};


//
//   Create Flickity
//
//////////////////////////////////////////////////////////////////////

flickity = new Flickity(slideshowEl, {
  autoPlay: false,
  prevNextButtons: true,
  pageDots: false,
  draggable: true,
  wrapAround: true,
  selectedAttraction: 0.015,
  friction: 0.25
});
flickity.x = 0;


//
//   Add Event Listeners
//
//////////////////////////////////////////////////////////////////////


flickity.on('dragStart', () => {
  isPaused = true;
});


//
//   Start Ticker
//
//////////////////////////////////////////////////////////////////////
</script>
<div class="square square-lg" style="background: #313346 ;height: 70px; width: 100%" ></div>
@endsection