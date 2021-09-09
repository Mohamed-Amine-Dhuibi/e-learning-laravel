@extends('admin.layouts.admin') 
@section('content')
<h2 style="margin-left: 20%;color:gainsboro;">{{ $user->name }}</h2>
      <p><img src="/storage/profiles_pics/{{ $user->profile_pic }}" alt="Pineapple" style="width:130px;height:130px;margin-right:30px; margin-left:8%;">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
      Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio,<br>
       vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor .</p>
      <button class="button button1">Contact</button>
      <hr style="background-color: #fff;">
      
      <form action="#">

        <header>
          <h2 style="margin-top: 5%;margin-left: 10%; color:gainsboro;">Personal Infos</h2>
         
        </header>
        
        <div>
          <label class="desc" id="title1" for="Field1"   > Name:</label>
          <div>
             {{ $user->name }}
          </div>
        </div>
      
      

        <div>
          <label class="desc" id="title1" for="Field1"> Phone number:</label>
          <div>
           {{ $user->phone_number }}
          </div>
        </div>
        <div>
          <label class="desc" id="title1" for="Field1">Email:</label>
            <div>
              {{ $user->email }}
            </div>
        </div>
        
   
          
          
        <div>
          <label class="desc" id="title1" for="Field1" > member Since : </label>
          <div>
            {{ $user->created_at}}
            
          </div>
            
        </div>
        
      </form>

<style>
h2{
    margin-top: 10%;
    margin-left: 5%;
  }
  form header {
    margin: 0 0 10px 0; 
  }
  form header div {
    font-size: 90%;
    color: #999;
  }
  form header h2 {
    margin: 0 0 5px 0;
  }
  form > div {
    clear: both;
    overflow: hidden;
    padding: 1px;
    margin: 0 0 10px 0;
  }
  form > div > fieldset > div > div {
    margin: 0 0 5px 0;
  }
  form > div > label
  {
    width: 25%;
    float: left;
    padding-right: 10px;
  }
  form > div > div,
  form > div > fieldset > div {
    width: 75%;
    float: right;
  }
  form > div > fieldset label {
    font-size: 90%;
  }
  fieldset {
    border: 0;
    padding: 0;
  }
  
  
  
  @media (max-width: 600px) {
    form > div {
      margin: 0 0 15px 0; 
    }
    form > div > label
    {
      width: 100%;
      float: none;
      margin: 0 0 5px 0;
    }
    form > div > div,
    form > div > fieldset > div {
      width: 100%;
      float: none;
    }
    
  }
  @media (min-width: 1200px) {
    form > div > label
    {
      text-align: right;
    }
  }
  #title1{
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

  img {
  float: left;
  border-radius:500px;
  margin-top:-40px;
  
}
h2{
margin-left:200px;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid lightskyblue;
  margin-left:50%;
}

.button1:hover {
  background-color:lightskyblue;
  color: white;
}

</style>
<!--Subsriptions-->
<h2 style="margin-left: 10%; color:#fff; margin-top:5%;">Subscriptions</h2>
<div class="container-fluid" style="margin-top:5%;">
   <div class="row">
     <div class="col-md-12">
       <div class="card">
         <div class="card-header card-header-primary">
           <h4 class="card-title ">Subscriptions</h4>
         </div>
         <div class="card-body">
           <div class="table-responsive">
             <table class="table">
               <thead class=" text-primary">
                 <th>
                  course
                 </th>
                 <th>
                   status
                 </th>
                 <th>
                   started at 
                 </th>
                 <th>
                   finished at
                 </th>
               </thead>
               <tbody>
              @foreach ( $user->Enrolments as $enrolment)
               @if ($enrolment->Course && $enrolment->subsription_is_paid==1 )
               <tr>
                <td>
                 {{ $enrolment->Course->title }}
               </td>
               <td>
                 amazing!
               </td>
               <td>
                 {{ $enrolment->created_at }}
               </td>
               <td>
                {{ $enrolment->updated_at }}
               </td>
             </tr>
               @endif
                 @endforeach 
               </tbody>

             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <hr style="background-color: #ffff; width: 200px; margin-left: 40%;">
 <!--Pie chart-->
<main style="margin-left: 300px;margin-top: 5%;">
 <!-- SVG chart -->
<div class="pie-yum">
   <svg width="100" height="100" margin-top="100px" viewBox="0 0 32 32">
     <circle r="16" cx="16" cy="16" fill="#42A4F7" stroke="#BBD7EF" stroke-width="32" stroke-dasharray="38 100" />
     <!-- stroke-dasharray value = "percentage" of light pink -->
   </svg>
 </div>
 <!-- SVG chart -->
<div style="margin-left: 20%; margin-top: 4%;">
 <ul class="pieID legend">
   <li>
     <em>Humans</em>
     <span>718</span>
   </li>
   <li>
     <em>Dogs</em>
     <span>531</span>
   </li>
 </ul>
</div>
</main>
<hr style="background-color: #ffff; width: 200px; margin-left: 40%;margin-top:5%;">
<style>
main {
 display: flex;
flex-wrap: wrap;
justify-content: center;
}
.pie-yum {

margin-top: 10px;
}
svg {
transform: rotate(-90deg);
border-radius: 50%;
width: 130px;
height: 130px;
}
.css-pie {
border-radius: 50%;
background: #5c63a9;
background-image: linear-gradient(to right, transparent 50%, pink 0);
width: 130px;
height: 130px;
}
.css-pie:before {
content: "";
margin-left: 50%;
display: block;
border-radius: 0 100% 100% 0 / 50%;
background-color: inherit;
transform-origin: left;
height: 100%;
transform: rotate(0.2turn);
}
.css-pie-2 {
border-radius: 50%;
background: #221a46;
background-image: linear-gradient(to right, transparent 50%, pink 0);
width: 130px;
height: 130px;
}
.css-pie-2:before {
content: "";
margin-left: 50%;
display: block;
border-radius: 0 100% 100% 0 / 50%;
background-color: inherit;
transform-origin: left;
height: 100%;
transform: rotate(0.45turn);
}
.value {
padding: 0.6em;
display: block;
text-align: center;
color: #333;
font-size: 1.5em;
}

.legend {
list-style-type: none;
padding: 0;
margin: 0;

padding: 15px;
font-size: 13px;
box-shadow: 1px 1px 0 violet,
           2px 2px 0 #BBB;
}
.legend li {
width: 110px;
height: 1.25em;
margin-bottom: 0.7em;
padding-left: 0.5em;
border-left: 1.25em solid #BBD7EF;
color: #fff;
}
.legend em {
font-style: normal;
}
.legend span {
float: right;
}
</style>


<!--Chart-->
 <div class="wrapper">
   <div style="width:50%;height: 50%; margin-left:30%;">
     <div class="content" >
       <div class="row"style="width:10px;height:10px; margin-left:7%;margin-top:5%;">
        <h2 style="margin-left:-50px;"> perfermance</h2>
         <div class="col-12" >
           <div class="card card-chart">
             <div class="card-body" >
               <div class="chart-area" >
                 <canvas id="chartBig1"></canvas>
               </div>
             </div>
           </div>
         </div>
       </div>
   </div>
   
<canvas id="chartLinePurple"></canvas>
 <canvas id="CountryChart"></canvas>
              
 
 <!--   Core JS Files   -->
 <script src="../assets/js/core/jquery.min.js"></script>
 <script src="../assets/js/core/popper.min.js"></script>
 <script src="../assets/js/core/bootstrap.min.js"></script>
 <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 <!--  Google Maps Plugin    -->
 <!-- Place this tag in your head or just before your close body tag. -->
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!-- Chart JS -->
 <script src="../assets/js/plugins/chartjs.min.js"></script>
 <!--  Notifications Plugin    -->
 <script src="../assets/js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
 <script src="../assets/demo/demo.js"></script>

 
 <script>
   $(document).ready(function() {
     // Javascript method's body can be found in assets/js/demos.js
     demo.initDashboardPageCharts();

   });
 </script>
 <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

</body>
<!--Grades-->
<hr style="background-color: #ffff; width: 200px; margin-left: 40%;margin-top:5%;">
<h2 style="margin-left: 10%; color:#fff">Grades</h2>
<div class="container-fluid" style="margin-top:5%;">
 <div class="row">
   <div class="col-md-12">
     <div class="card">
       <div class="card-header card-header-primary">
         <h4 class="card-title "> Grades</h4>
       </div>
       <div class="card-body">
         <div class="table-responsive">
           <table class="table">
             <thead class=" text-primary">
               <th>
                course
               </th>
               <th>
                 status
               </th>
               <th>
                 started at 
               </th>
               <th>
                 finished at
               </th>
             </thead>
            
               <tr>
                 
                 <td>
                   web development
                 </td>
                 <td>
                   amazing!
                 </td>
                 <td>
                   2021/03/08
                 </td>
                 <td>
                  2021/04/08
                 </td>
               </tr>
              
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<hr style="background-color: #ffff; width: 200px; margin-left: 40%;">
<!--badges-->
<div class='row'>
<h2 style="margin-left: 10%; color:#fff">Badges Xypnos</h2>
<div class="badge red" style="margin-left:15%; margin-top:5%;">
 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="216px" height="232px" viewBox="0 0 216 232">
   <path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
 <p class="title">BRUTEFORCE EXPERT</p>
 <p class="subtitle">CTF 365</p>
 <p style="margin-top:9%; color:#fff"> jksjksjfkvfdfd</p>
 <p style="margin-top:9%; color:#fff"> 2021/04/05</p>
</div>

<div class="badge green">
 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="216px" height="232px" viewBox="0 0 216 232">
   <path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
 <p class="title">SQLi MASTER</p>
 <p class="subtitle">CTF 365</p>
 <p style="margin-top:9%; color:#fff"> jksjksjfkvfdfd</p>
 <p style="margin-top:9%; color:#fff"> 2021/04/05</p>
</div>

<div class="badge gray">
 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="216px" height="232px" viewBox="0 0 216 232">
   <path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
 <p class="title">SNIFFER COMMANDER</p>
 <p class="subtitle">CTF 365</p>
 <p style="margin-top:9%; color:#fff"> jksjksjfkvfdfd</p>
 <p style="margin-top:9%; color:#fff"> 2021/04/05</p>
</div>
</div>
<style>
@import "compass/css3";
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
@import url('https://fonts.googleapis.com/css?family=Fjalla+One');
.badge {
  position: relative;
  width: 247px;
  display: inline-block;
  margin: 40px;
 
}
.badge .title {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 1.7em;
  position: absolute;
  top: -28px;
  border-radius: 8px 8px 0 0;
  text-align: center;
  width: 100%;
  background: red;
  padding: 30px 0;
}
.badge .subtitle {
  position: absolute;
  font-family: "Fjalla One", sans-serif;
  font-size: 1.8em;
  width: 100%;
  text-align: center;
  color: white;
  position: absolute;
  top: 100px;
}
.badge .subtitle:after {
  content: "★ ★ ★";
  display: block;
  font-size: 0.4em;
  position: relative;
  margin: 15px 0 0;
  transition: all 0.3s;
}
.badge:hover .subtitle:after {
  word-spacing: 30px;
}
.red .title {
  background: #dc514e;
}
.red .subtitle:after {
  color: #dc514e;
}
.green .title {
  background: #2ecc71;
}
.green .subtitle:after {
  color: #2ecc71;
}
.gray .title {
  background: #95a5a6;
}
.gray .subtitle:after {
  color: #95a5a6;
}
.yellow .title {
  background: #f1c40f;
}
.yellow .subtitle:after {
  color: #f1c40f;
}
.blue .title {
  background: #3498db;
}
.blue .subtitle:after {
  color: #3498db;
}


</style>
@endsection
