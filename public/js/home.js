var $popup = $('<div id="popup"></div>');
var $image = $("<img>");
var $caption = $("<p> </p>");

//Append image and caption to popup before we append popup to body
$popup.append($image);
$popup.append($caption);

//Append popup div to html
$("body").append($popup);

// Capture click event on link
$("div a").click(function(event) {
 event.preventDefault();
 var href =  $(this).attr("href");
  
  //Set src as href from link clicked
  $image.attr("src", href);
  $popup.show();
});

//Get alt text to set caption
var captionText = $("div.thumbnail").find("img").attr("alt");
$caption.text(captionText);

//Hide popup when clicked
$popup.click(function() {
  $popup.hide();
});





$(window).resize(function() {
    //update stuff
  });
  
  //Change pos/background/padding/add shadow on nav when scroll event happens 
  $(function(){
      var navbar = $('.navbar');
      var navDropdown = $('.dropdown-menu');
      
      $(window).scroll(function(){
          if($(window).scrollTop() <= 40){
              navbar.removeClass('navbar-scroll');
              navDropdown.removeClass('nav-dropdown-scroll');
              $('.top').hide();
          } else {
              navbar.addClass('navbar-scroll');
              navDropdown.addClass('nav-dropdown-scroll');
              $('.top').show();
          }
      });
      $('.navbar-toggle').click(function(){
          if($(window).scrollTop() <= 40){
             navbar.addClass('navbar-scroll');
          }
      });
  });
  
  
  //Close collapse nav when scroll spy page link is clicked
  $('.navbar-nav a[href*="#spy"]').click(function(){
      $('.navbar-collapse').collapse('hide');
      if($(window).scrollTop() <= 40){
         $('.navbar').removeClass('navbar-scroll');
      }
  });



