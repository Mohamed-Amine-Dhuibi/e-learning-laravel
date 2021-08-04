
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href={{ asset('css/style.css') }}>
        
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-3 mt-5 ">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{ asset('images/logo.jpg') }});"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
                <a class="side-nav" href="#">Dashboard</a>
              </li>
	          <li>
	              <a class="side-nav" href="/myspace/courses">Courses</a>
              </li>
              <li>
                <a class="side-nav" href="/myspace/users">users</a>
            </li>
            <li>
                <a class="side-nav" href="/myspace/enrolments">Subscriptions</a>
            </li>
            <li>
                <a class="side-nav" href="#">Inbox</a>
            </li>
	          
	        </ul>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" >
        <nav class="navbar navbar-expand " style="background:#192231;">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          </div>
        </nav>
      <div>
      <div class="p-5">
      @yield('content')
      </div>
		</div>
        <script type="text/javascript">
        const currentLocation = location.href ; 
        const menuItem = document.querySelectorAll('a.side-nav') ; 
        const menuLength = menuItem.length; 
        var i = 0 ; 
        for( i ; i<menuLength ;i++){
            
            if(menuItem[i].href == currentLocation){
                menuItem[i].classList.add('active');}
            }
        </script>
    <script src={{ asset('js/jquery.min.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/popper.js') }}></script>
    <script src={{ asset('js/main.js') }}></script>
  </body>
</html>

