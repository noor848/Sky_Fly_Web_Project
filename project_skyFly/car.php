<?php


require('include/connect.php');
session_start();
ob_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>Book-Car</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="icon" href="images/3.png" sizes="90x90">


    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
          rel="stylesheet">
          <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="css/cars.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="icon" href="images/3.png" sizes="90x90">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="icon" href="images/3.png" sizes="90x90">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js" integrity="sha256-J9avsZWTdcAPp1YASuhlEH42nySYLmm0Jw1txwkuqQw=" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js" integrity="sha256-J9avsZWTdcAPp1YASuhlEH42nySYLmm0Jw1txwkuqQw=" crossorigin="anonymous"></script>

    <title>SkyFly</title>

<style>

*{

  font-family: 'Merriweather', serif;

}
.click{

margin-left:40%;
font-size:16px;
padding:2%;
width:70px!important;
margin-top:10px;
border-radius: 20%;
color:white;
}
.carousel-item{
border-radius:5%;

}
h4{
color:white;
text-align: center;

}
.social li{
color:white;
  margin-left:10%;
}




  </style>
    
    </head>
<body  style="background-image:url('https://wallpaperaccess.com/full/249763.jpg'); background-repeat:no-repeat;
width:100%;
background-size:     cover; 
background-repeat:   no-repeat;
background-position: center center;
background-color: black;

">



<header style="position:fixed;">
<nav id='cssmenu' >
<div class="logo"><a href="car" style="font-size:30px;">SkyFly </a></div>
<div id="head-mobile"></div>
<div class="button"></div>
<ul>
<li class='active'><a href='index' style="height:62px;padding-top:20px;">HOME</a></li>
<li><a href='#' style="height:62px;padding-top:20px;">Book</a>
   <ul>
      <li><a href='#'>Choose....</a>
         <ul>
            <li><a href='flight' >Flight</a></li>
            <li><a href='hotel'>Hotel</a></li>
         
         </ul>
      </li>
     
   </ul>
</li>
<li><a href='event1' style="height:62px;padding-top:20px;">Blog</a></li>
<li><a href='cancle/hotels' style="height:62px;padding-top:20px;">Your Book</a></li>

</ul>
</nav>
</header>
    <section style="padding-top:80px;font-size: 50px ;color:#68D800; margin-left:10%;font-family: 'Bangers', cursive;">
     Brand New Cars <br />Scroll + Book  <br />
      <span style="font-size: 95px;font-weight:bold;font-family: 'Bangers', cursive; letter-spacing:4px; " class="animate__animated animate__heartBeat" > Book Now !</span>
     </section>


  <div class="container-fluid " style=" width:100%; opacity:.9">
    <div class="carousel" style="height:500px">
       
    <?php 



$query ="select * from cars";
$x=mysqli_query($conn,$query);
while($arr=mysqli_fetch_array($x)){

    ?>
        <div class="carousel-item" style="background-color:black;height:420px;width:300px">
            <img src="cars/<?php echo $arr['image'];?>" height="200">
            <h4><?php echo $arr['name'];?></h4>
            <div class="social" style="margin-bottom:10%; ">
               <ul >
                <li>Fuel_Consumption : <?php echo $arr['fuel_consmption'];?></li>
                <li> Capacity : <?php echo $arr['capacity'];?> passengers</li>
                <li> Price_per_day : <?php echo $arr['price'];?> $</li>
              
               </ul>
              
            </div>
            <a  href="datep_h/dateh?idc=<?php echo $arr['idc']?>" class="click " style="
            background-color: red ; width:150px;" target="b" >Book</a>
        </div>

<?php 
}?>





















<!----------------------------------------------------->



    </div>
    


  </div>




    <script>
        $(document).ready(function(){
    $('.carousel').carousel();
  });
    </script>





<script>





(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);


</script>

<script>
    AOS.init();
  </script>


</body>
</html>