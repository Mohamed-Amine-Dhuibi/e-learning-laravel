
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://use.fontawesome.com/8c01f7817d.js"></script>
<!--NAVBAR-->
  <title>XYPNOS - LABS </title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Favicons -->
  <link href="https://xypnos-labs.com/assets/img/favicon.png" rel="icon">
  <link href="https://xypnos-labs.com/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="https://xypnos-labs.com/assets/css/style.css" rel="stylesheet">
  <link rel ="stylesheet" type ="text/css" href="css/home.css">
  <link  type ="JavaScript" href= "js/home.js">

</head>

<body>
  @foreach ($errors->all() as $error )
      
  <div class="alert alert-danger" role="alert" style='position: absolute ; right :43%'>
      {{ $error }}
  </div>

@endforeach

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent " >
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="https://xypnos-labs.com/assets/img/xypnos.png" alt=""></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/courses">Courses</a></li>
          @if (Auth::check())
          <li><a href="/myspace">My Courses</a></li>
          <li><a href="/logout">Logout</a></li>
          @if (Auth::User()->privilege=='admin')
          <li><a href="/myspace/dashboard">My Space</a></li>
          @endif
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif

        </ul>
      </nav><!-- .nav-menu -->

    </div>
    <script src="https://xypnos-labs.com/assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://xypnos-labs.com/assets/js/main.js"></script>

  </header><!-- End Header -->

   






    @yield('content')


     <!--footer-->
  

     <footer id="footer">
        <div class="container">
          <h3>XYPNOS LABS</h3>
          <p>get access to your full training

          </p>
          <div class="social-links">
            <a href="https://www.facebook.com/xypnoslabs" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.linkedin.com/company/xypnos-labs" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <div class="copyright">
            © Copyright <strong><span>XYPNOS LABS</span></strong>. All Rights Reserved
          </div>
         
        </div>
      </footer>
      