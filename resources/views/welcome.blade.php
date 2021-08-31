@extends ('layouts.app')
@section('content')
<!--WAVES-->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">XYPNOS<span> Training</span></h2>
          <p class="animate__animated fanimate__adeInUp" style="color: #eee;">We are a team of <span style="color: #e9bf06; font-weight: bold;">Software Developers</span> , <span style="color: #47c3d4; font-weight: bold;">Creative Designers </span>,<br> <strong> Digital Marketers</strong> and <strong> Strategists </strong>who work together to foster a dynamic and cohesive work environment. </p>
          
        </div>
      </div>

     

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(104,71,137, 1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(104,104,104, 0.5)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="rgba(71,195,212, 0.9)">
      </g>
    </svg>

  </section><!-- End Hero -->

<!-- Vendor JS Files -->
  <script src="https://xypnos-labs.com/assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://xypnos-labs.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://xypnos-labs.com/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="https://xypnos-labs.com/assets/js/validator.min.js"></script>
  <script src="https://xypnos-labs.com/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://xypnos-labs.com/assets/vendor/venobox/venobox.min.js"></script>
  
  <script src="https://xypnos-labs.com/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="https://xypnos-labs.com/assets/js/main.js"></script>




 





















    <!--images-->
    
    
    <div class="row" >
     <div class="column">
        <img id="img1" src="images/Rectangle 1466.png" witdh="100%  ">
        <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color:#47C3D4 ; margin-left: 40px;">Find the right online course for you </p>
            </div>
            <div class="col-md-4">
                <img id="img2"  src="images/Rectangle 1467.png" witdh="100%">
                <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color:#47C3D4 ; margin-left:150px;">Learning has never been easier</p>
                    </div>
                <div class="col-md-4">
                    <img id="img3"  src="images/Rectangle 1471.png" witdh="100%">
                    <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color:#47C3D4 ; margin-left:180px ; margin-top: 5px;" >Gain new skills and grow </p>
                        </div>
                    </div>
    <!-- WHY EXPNOSE-->
    
    <h5> XYP</h5>
    
    
    
    
    
    
    
    
    
    
    <h1 style="text-align: center; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 40px;color: #747474; margin-top: 70px;">WHY EXPNOSE LABS?</h1>
    
    <h4 style="margin-top: 150px ; margin-left: 270px; color: #684789; font-family:'Franklin Gothic Medium' ;font-size: 20px;">A vision and a roadmap for a strong digital impact</h4>
    <h4  style="margin-top: 50px ; margin-left: 270px; color:#47C3D4 ; font-family: 'Franklin Gothic Medium';font-size: 20px;">Linking high-tech research to education</h4>
    <h4  style="margin-top: 50px ; margin-left: 270px; color: #DAB30B; font-family:'Franklin Gothic Medium' ;font-size: 20px;">In-depth technological research to visionary innovation</h4>
    <h4  style="margin-top: 50px ; margin-left: 270px; color: #684789; font-family: 'Franklin Gothic Medium';font-size: 20px;">A strong brand and visibility within the ecosystem</h4>
      
    
    <h5> XYP</h5>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <h1 style="margin-left: 90px;  margin-top: 2%;"> Activities</h1>
      <!-- images row one -->
    <div class="" style="margin-left: 0%;">


      <div class="row " >
@foreach ( $events as $event )
<div class="col-sm ">
  <div class="thumbnail" style="border: 0">
    
    <img src="/storage/cover_images/{{ $event->cover_image }}" alt="Green coffee cup and saucer filled with a latte" >
<br/><br/>
    <h3 style="color:#47c3d4">{{ $event->name }}</h3>
    <p>{!! $event->description !!}</p>

</div>
</div>
@endforeach
          

    </div>
    
  </div>
      <h5> XYP</h5>
    
    
      <!--PROGRAMS-->
      
    <h1 style="margin-left: 60px; margin-top: 10%;">Our Programs</h1>
    
    
    <div id="slider">
      <input type="radio" name="slider" id="s1" checked>
      <input type="radio" name="slider" id="s2">
      <input type="radio" name="slider" id="s3">
      <input type="radio" name="slider" id="s4">
      <input type="radio" name="slider" id="s5">
    
      <label for="s1" id="slide1">1</label>
      <label for="s2" id="slide2">2</label>
      <label for="s3" id="slide3">3</label>
      <label for="s4" id="slide4">4</label>
      <label for="s5" id="slide5">5</label>
    </div>
    
    

    
   
    
    <h3 style="text-align: center;">Find your own degree</h3>
    
    <h5> XYP</h5>
    
    
    <!--our team-->
    <h1 style="margin-left: 60px; margin-top: 10%;">Our team</h1>
      
    
    <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
              </div>
              <div class="team-content">
                <h3 class="name">Michele Miller</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              <ul class="social">
                <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
              </div>
              <div class="team-content">
                <h3 class="name">Patricia Knott</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              <ul class="social">
                <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
              </div>
              <div class="team-content">
                <h3 class="name">Justin Ramos</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              <ul class="social">
                <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href=" " class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            </div>
          </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
              </div>
              <div class="team-content">
                <h3 class="name">Mary Huntley</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              <ul class="social">
                <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <h5>XYP</h5>











@endsection