<?php

require("include/connect.php");
ob_start();
session_start();

$_SESSION['num']=2;
 

?>

<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>Blog -SkyFly</title>
   
    <!-- Goole Font -->
  
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!-- main style-->
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css2/style.css" />
    <link rel="icon" href="images/3.png" sizes="90x90">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js" integrity="sha256-J9avsZWTdcAPp1YASuhlEH42nySYLmm0Jw1txwkuqQw=" crossorigin="anonymous"></script>
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
.rating {
  display: inline-block;
  width: 100%;
font-size:10px;
}

.like,
.dislike {
  display: inline-block;
  cursor: pointer;
  margin-right: 10px;
}

.dislike:hover,
.like:hover {
  color: #2EBDD1;
  transition: all .2s ease-in-out;
  transform: scale(1.1);

}

.active {
  color: #2EBDD1;
}
.com{

  display: block!important;
}
@media (max-width:960px){


  .v{
  margin-top: 5%;
}

.A{
font-size:40px!important;

}

.X{

  margin-top:45%!important;
}

.bounce{


  
  margin-top: 10px;
}


.four{
margin-top:55%;



}
.four h5{
color:rgb(145,145,145);
font-size:16px!important;
}
.events-area {

margin-top:50%!important;


}

.del{

margin-left:5%;
}

}


.rating {
  display: inline-block;
  width: 100%;
margin-top:1%;
font-size:9px;
  text-align: left;
}

.like,
.dislike {
  display: inline-block;
  cursor: pointer;
  margin: 5px;
}

.dislike:hover,
.like:hover {
  color: #2EBDD1;
  transition: all .2s ease-in-out;
  transform: scale(1.1);
}

.active {
  color: #2EBDD1;
}

.im{

  transition: all .3s ease-in-out;
}

.im:hover{


  transform: scale(1.2); 
}


.four h3{

  font-size:35px!important;
  margin-bottom:8%!important;


}
.four h5{
color:rgb(145,145,145);
font-size:18px!important;
margin-top:7%;
margin-left:12%;
}

.four img:hover{
transform: scale(1.1);


}

html{
scroll-behavior:smooth;


}

.object {
  animation: MoveUpDown 1s linear infinite;
 position:relative;

}

@keyframes MoveUpDown {
  0%, 100% {
    bottom: 0;
  }
  50% {
    bottom: 50px;
  }
}



@media (max-width:1000px){

.title5{
width:40%!important;
height:100px! important;

}
.title5 .logo{
  width:100%!important;
height:110px! important;

}
.big-card{


margin-top:400px!important;


}

.li1 a{
font-weight: bold;
font-size: 19px;
color:#007bff !important;
}
.li1 a::after{
content:' ';
display:block;
width:0;
height:2px;
background-color:#007bff !important;
transition:width .3s;

}
.li1 a:hover::after{
width:30%;
transition:width .3s;
    }


}

.ff{

background-image: url('https://images.unsplash.com/photo-1555489020-a98a84149129?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=333&q=80');

height:300px;
background-repeat: no-repeat;
background-size:100%;
background-position:center;

width:100%!important;
}

.im1{
    background-image: url('https://images.unsplash.com/photo-1570050785780-3c79854c7813?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=353&q=80');

height:300px;
background-repeat: no-repeat;
background-size:100%;
background-position:center;

width:100%!important;
}

.im2{
    background-image: url('https://images.unsplash.com/photo-1605530967244-1f03ed27f61e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80');

height:300px;
background-repeat: no-repeat;
background-size:100%;
background-position:center;

width:100%!important;
}

.im3{
    background-image: url('https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=699&q=80');

    height:300px;
background-repeat: no-repeat;
background-size:100%;
background-position:center;

width:100%!important;
}

.im4{
    background-image: url('https://images.unsplash.com/photo-1528543606781-2f6e6857f318?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8bGlmZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');
height:300px;
background-repeat: no-repeat;
background-size:100%;
background-position:center;

width:100%!important;
}

.im5{
    background-image: url('https://images.unsplash.com/photo-1516747550015-8e234a06e039?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTV8fG91dHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');

    height:300px;
background-repeat: no-repeat;
background-size:100%;
background-position:center;

width:100%!important;
}

.overlay{

width:100%;
height:300px;
position:absolute;
opacity: .9;
background-color: #f4623a;

opacity: 0;


}

.category{


    font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 3rem;
    font-weight: 600;
  
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
    margin-top:25%;
    margin-left: 30%;
    margin-right: 29%; 

}


.overlay:hover {

  transition:.5s;
opacity: .9;

}


.k h2{

font-size: 32px;
font-weight: 700;
text-transform: uppercase;
position: relative;
text-align: center;
padding-bottom: 10px;
margin-top: 20px;
margin-left: 50%;
transform: translateX(-50%);

}

.k h2::after{

content: "";
display: block;

width: 50px;
height: 3px;
background: #3fbbc0;
margin-left: calc(50% - 25px);
margin-top: 20px;


}


.k{


text-align: center;

padding:1px;

font-size: 1.1rem;
}


.tabv .tabv{

color: rgb(85,85,85);
width:350px!important;

}
.tabv h4{

font-size:1rem!important;
width: 311px;
height:21px;

}
/*1 .imf{

width:250px !important;

}
.imf img{

height:250px!important;
width:100% !important;
vertical-align: center;

} */

.ii1 p{
text-align: left;
width: 100%;
color:#777777;
margin-left: 5%;
font-size: 1.1rem;
}

.x1 {

margin-left:1%;


}

.k h2{

font-size: 32px;
font-weight: 700;
text-transform: uppercase;
position: relative;
text-align: center;
padding-bottom: 10px;
margin-top: 20px;
margin-left: 50%;
transform: translateX(-50%);

}

.k h2::after{

content: "";
display: block;

width: 50px;
height: 3px;
background: #3fbbc0;
margin-left: calc(50% - 25px);
margin-top: 20px;


}


.k{


text-align: center;

padding:1px;

font-size: 1.1rem;
}


.tabv .tabv{

color: rgb(85,85,85);
width:350px!important;

}
.tabv h4{

font-size:1rem!important;
width: 311px;
height:21px;

}
/*1 .imf{

width:250px !important;

}
.imf img{

height:250px!important;
width:100% !important;
vertical-align: center;

} */

.ii1 p{
text-align: left;
width: 100%;
color:#777777;
margin-left: 5%;
font-size: 1.1rem;
}

.x1 {

margin-left:1%;


}

.x1 h3{

color: #3fbbc0;
font-weight: 700;

}

.tabv {
margin-bottom: 5px!important;
height: 100px;
background-color: rgb(247,252,252)!important;
border:none;

}

.tabv h4{
color: rgb(85,85,85);
font-weight: 700;


}
.tabv p{

color: #777777;


}
.tabv.active{
text-align: center;
font-size:19px;
background-color: rgb(240,250,250)!important;

border-left:rgb(63,187,192) 5px solid;

}

.tabv.active h4{
  color:#3fbbc0!important;


}

.b2
{

    font-family: "Roboto", sans-serif;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 14px 32px;
    border-radius: 4px;
    transition: 0.5s;
    line-height: 1;
    color: #fff;
    background: #3fbbc0;


}
.b2:hover,.b1:hover {
    background: #65c9cd;
    color: white;
  }



  .ee{

display:flex;
justify-content:space-evenly;
align-items: center;

direction:row;
margin-left: 1%;
margin-top: 3%;
  }

  .l1{

font-size:50px;

color: rgb(94,198,202);

  }

  .m1{


    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
  color:black;
  margin-top:2%;
  line-height:28px;

  }
  .card-text{


    font-size: 15px;
  color: #848484;
 line-height:28px;
  

  }
  .card{

  
    position: relative;
    /* overflow: hidden; */
    background: #fff;
    box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
   overflow: hidden;
    border-radius: 8px;
 
  }


  .up{
  padding: 20px;
background-color: rgb(94,198,202);
height:100%;
width:100%;
position: absolute;
transition: all .2s ease-in-out;
transform:translateY(100%);

  } 
  .card:hover .up{

    transform:translateY(0%);


  }

  .l2{

    font-size:50px;
    
    color: white;
    
      }

      .m2{


        font-weight: 700;
        margin-bottom: 15px;
        font-size: 18px;
      color:white;
      margin-top:2%;
      line-height:28px;
    
      }
      .card-text2{


        font-size: 15px;
      color:white;
     line-height:28px;
      
    
      }

  </style>

</head>
<body>



<header>
 
    
 <nav class="navbar navbar-expand-lg navbar-light nav1" id="nav1" >
 <a class=" navbar-brand  title5 " style="width:20%; height:110px; margin-left:15%;"  id="title2"  href="#">
<img src="images/3.png "class="logo" style="height:120px;width:100%;" /></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse " id="navbarNavDropdown">
   <ul class="navbar-nav "> 
     <li class="nav-item active  li1 " id="ele">
       <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item    li1 ml-2"  id="ele">
 <a class="nav-link" href="cancle/hotels">Your Books</a>
</li>



<li class="nav-item dropdown drop1  ml-4"  id="ele1" > 
       <a  id="ele1" class="nav-link dropdown-toggle " style="color: rgb(255,90,44);" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Book
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item li1"  href="flight">Flight</a>
         <a class="dropdown-item li1" href="hotel">Hotels</a>
         <a class="dropdown-item li1" href="car">Cars</a>
       </div>
     </li>
   
     <li class="nav-item    li1 ml-4"  id="ele">
       <a class="nav-link" href="signin">Sign Out</a>
     </li>




   </ul>
 </div>
</nav>


</header>




<section class="" style="margin-top:10%!important; ">
<div class="container-fluid X">
<div class="row  " style="margin-left:23%;">
<div class="col-md-10 "style="display:flex;width:70%;">
<div  class="">
<img width="150" class="img-fluid bounce mr-3" src="https://www.pixelscrapper.com/sites/default/files/styles/456_scale/public/s3fs-user-content/graphic-image/user-2725/node-173654/at-the-zoo-our-word-art-graphic-element-embellishment-snippet-tag-strip-rectangle-saying-printing.png" alt="">
<img width="500" class="img-fluid slideLeft" src="https://www.onblastblog.com/wp-content/uploads/2017/08/blogger-logo.jpg" alt="">
</div>
</div></div>
</div>

</section>





<section class="">
<div class="container" class="">
<div class="row mb-5">
<div class=" A "style="margin-top:7%;color:rgb(255,90,44); width:100%; height:150px; text-align:center;font-size:80px;margin-left:5%, cursive;text-shadow: 8px -8px 3px #FF9072; font-weight:bold">
<p style="" data-aos="fade-up">
WHAT's NEW !
</p>

</div>
<p style="margin-botton:15%;color:rgb(255,90,44); width:100%; height:70px; text-align:center;font-size:20px;" data-aos="fade-down">
Let's Travel Far Enough
</p>
</div>
</div>
</section>
<section >

<div class="container-fluid ">
<div class="row no-gutters">
<div class="col-md-4 bg-danger">
<div class="ff">


<div class="overlay">
<div class="category"  style="font-family: 'Merriweather', serif;">
Explore
</div>
</div>


</div>
</div>
<div class="col-md-4">
<div class="im1 w-100">

<div class="overlay">
<div class="category" style="font-family: 'Merriweather', serif;">
Dream
</div>

</div>


</div>

</div>
<div class="col-md-4">
<div class="im2">
<div class="overlay">
<div class="category" style="font-family: 'Merriweather', serif;">
roam
</div>

</div>

</div>

</div>
<div class="col-md-4">
<div class="im3">
<div class="overlay">
<div class="category" style="font-family: 'Merriweather', serif;">
Travel
</div>

</div>

</div>
</div>
<div class="col-md-4">
<div class="im4">
<div class="overlay">
<div class="category" style="font-family: 'Merriweather', serif;">
voyage
</div>

</div>

</div>

</div>
<div class="col-md-4">
<div class="im5">
<div class="overlay">
<div class="category" style="font-family: 'Merriweather', serif;">
wander</div>

</div>

</div>

</div>

</div>

</div>

</div>





</section>

<section class="four mt-5 mb-5">
<h2 data-aos="fade-right" class="text-center mb-5 ti" style="font-family: 'Bodoni Moda', serif;color: rgb(255,90,44);">Why travellers love renting Private Villas</h2>
<div class="container ">


<div class="row  d-flex justify-content-around text-center"  data-aos="fade-down">

<div class=" col-sm-2">
<div>
<img  src="https://cdn6.agoda.net/images/accommodation/popular-choice/PrivateVilla-1.png" alt="">
<h5 data-aos="fade-right"  class="mt-3" style="font-family: 'Bodoni Moda', serif;">Shared or private pool</h5>
</div>
</div>

<div class=" col-sm-2">
<div>
<img src="https://cdn6.agoda.net/images/accommodation/popular-choice/PrivateVilla-2.png" alt="">
<h5 data-aos="fade-right" class="mt-3" style="font-family: 'Bodoni Moda', serif;">Separate bedrooms
</h5>
</div>
</div>
<div class=" col-sm-2">
<div>
<img src="https://cdn6.agoda.net/images/accommodation/popular-choice/PrivateVilla-3.png" alt="">
<h5 data-aos="fade-right" class="mt-3" style="font-family: 'Bodoni Moda', serif;">Unique design and style</h5>
</div>
</div>
<div class=" col-sm-2">
<div>
<img src="https://cdn6.agoda.net/images/accommodation/popular-choice/PrivateVilla-4.png" alt="">
<h5 data-aos="fade-right"  class="mt-3"style="font-family: 'Bodoni Moda', serif;">100% yours for total privacy</h5>
</div>

</div>
<div class=" col-sm-2 ">
<div>
<img src="https://cdn6.agoda.net/images/accommodation/popular-choice/PrivateVilla-5.png" alt="">
<h5 data-aos="fade-right" class="mt-3" style="font-family: 'Bodoni Moda', serif;">High-end amenities</h5>
</div>

</div>


</div>




</div>






</section>




<section class="mb-5 mt-5">
<div class="container ">

<div class="row k">
  <h2>Explore Best in Travel 2021
  </h2>
  <p  style="color:#777777;  font: size 1.2em;">Discover ther world and plan you trip,Explore places on Lonely Planet
   So Get back on the road
when you're ready to travel again, we're here
  </p>
</div>

<div class="container mt-3">
<div class="row">
  <div class="row">
    <div class="col-md-4 col-sm-12">
      <div class="list-group" id="list-tab" role="tablist">
        
        <a class="list-group-item list-group-item-action active  tabv" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><h4>A seven-mile underwater</h4>
        
        </a>

        <a class="list-group-item list-group-item-action tabv" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><h4>What it's like to travel to Jamaica ?
</h4>
        <p></p> </a>
        <a class="list-group-item list-group-item-action tabv" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><h4>Here are the new rules for visiting the Caribbean</h4>
        </a>
        <a class="list-group-item list-group-item-action tabv" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"> <h4>Discover the secret to the Lofoten</h4></a>
      </div>
    </div>
    <div class="col-md-8 col-sm-12">
      
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

<div class="container">

  <div class="row x1">
<h3>A seven-mile underwater</h3>
<p style="color:#777777;  font-size:1.1rem; ">A new underwater sculpture park is coming to Miami Beach. Called the ReefLine it will function as an artificial reef to protect and preserve Miami's marine life, while serving divers as a dazzling underwater snorkel trail.
</p>
  </div>
<div class="row ">
<div class="col-md-4 col-sm-12 ">
 
  <img src="https://lp-cms-production.imgix.net/2020-11/ReefLine%20Sculpture%20Park%20zoomed%20in.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850&q=75&dpr=1" alt="" class="img-fluid"></div>

<div class="col-md-8  col-sm-12 ii1 h-25">
  <p>Following the news that The Underline is set to open in Miami, there's now another new compelling reason to visit The Magic City when the ReefLine launches. It's a seven-mile underwater public sculpture park, snorkel trail and artificial reef that will debut in December 2021 off Miami Beach’s shoreline, providing a critical habitat for endangered reef organisms, promoting biodiversity and enhancing coastal resilience, according to organizers.

</p>
</div>
</div>

</div>
</div>



        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

          <div class="container">

            <div class="row x1">
          <h3>What it's like to travel to Jamaica
          </h3>
          <p style="color:#777777; font-size:1.1rem;">In early November, after two weeks spent quarantining at my home in Canada following an investigative trip to Cuba, I shrugged off my mounting cabin fever and started planning stage two of my mission to rediscover the world post-coronavirus.   
</p>
            </div>
          <div class="row ">
            <div class="col-md-4 col-sm-12 ">
         
            <img src="https://lp-cms-production.imgix.net/2020-11/500pxRF_79221003.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850&q=75&dpr=1" class="img-fluid" alt=""></div>
    
          <div class="col-md-8 ii1 h-25">
            <p>Cuba’s reopening had been a revelation. Impressed by its high standards of hygiene and efficient COVID-19 screening system, I was keen to see how other countries were formulating safe and responsible policies to lure back tourists. After some exhaustive searching, Jamaica emerged as a viable contender.

Editor's note: during COVID-19 there are restrictions on travel, and some areas are under lockdown. Check the latest guidance before departure, and always follow local health advice.</p>
          </div>
          </div>
          
          </div>
          
          



        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">


          <div class="container">

            <div class="row x1">
          <h3>Here are the new rules for visiting the Caribbean</h3>
          <p style="color:#777777; font-size:1.1rem;">As COVID-19 restrictions ease all over the world,</p>
            </div>
          <div class="row ">
            <div class="col-md-4 col-sm-12 ">
            <div class="imf">
            <img src="https://lp-cms-production.imgix.net/2020-11/GettyRF_155285028.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850&q=75&dpr=1" class="img-fluid" alt=""></div>
          </div>
          <div class="col-md-8 ii1 h-25">
            <p>, Caribbean countries have begun the process of reopening to tourists for the summer months. Each country has instituted a series of strict guidelines to protect not only its citizens but visitors to the respective island as well. As a whole, the Caribbean responded quickly to the COVID-19 pandemic and as a result, infection numbers have remained fairly low. To maintain that level of success, governments are taking reopening seriously. Here's what you need to know before traveling to the Caribbean. 
</p>
          </div>
          </div>
          
          </div>
          
          



        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

          <div class="container">

            <div class="row x1">
          <h3>Pediatrics</h3>
          <p style="color:#777777; font-size:1.1rem;">Islands' beauty (hint: it's in the water),Dramatic granite peaks loom over the pretty fishing village of Reine, which circles a placid lagoon on the western island of Moskenesøy</p>
            </div>
          <div class="row ">
            <div class="col-md-4 col-sm-12 ">
     
            <img src="https://lp-cms-production.imgix.net/2020-12/LPT0210_019.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850&q=75&dpr=1"  class="img-fluid" alt=""></div>
      
          <div class="col-md-8 ii1 h-25">
            <p>With so much of the world inaccessible right now, we’re taking a look through our archive of travel writing to revisit our past trips and to look at how Lonely Planet has spent decades exploring the world in the hope of better understanding it.
In this piece from 2010, writer Orla Thomas visits Norway’s Lofoten Islands to find that the surrounding Arctic waters are far more than a scenic backdrop – the sea is the islands’ lifeblood, a source of great wealth and unforgettable stories.</p>
          </div>
          </div>
          
          </div>
          
          


        </div>
      </div>
    </div>
  </div>


</div>


</div>
</div>




</section>








<div class="colored mb-2" style=" background-image: -webkit-gradient(linear, left top, right top, from(#fece6d), to(#fe6a6a));
background-image: linear-gradient(90deg, #fece6d, #fe6a6a); height:110px;">
</div>

<div class="container">

  <div class="row">
  <div class="row k">
    <h2>Travel inspiration
    </h2>
    <p  style="color:#777777;  font: size 1.2em;">live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventures we can have if only we seek them with our eyes open. What your are waiting for
    </div>
    </p></div>
  </div>






  <section>

<div class="container">
    <div class="row no-gutters ">
     
    <div class="col-md-3 col-sm-12">
    <div class="element">

        <div class="card">
            <div class="card-body">
            <i class="far fa-compass l1"></i>
              <h6 class="card-subtitle mb-2 m1">Adventure</h6>
              <p class="card-text">Explore ther corner distancce of the world.Have stories to tell not stuff to show</p>
        
            </div>
<div class="up">

<i class="far fa-compass l2"></i>
    <h6 class="card-subtitle mb-2 m2">Adventure</h6>
    <p class="card-text2">Explore ther corner distancce of the world.Have stories to tell not stuff to show</p>


</div>



          </div>
        
    </div>
</div>

<div class="col-md-3 col-sm-12">
    <div class="element">

        <div class="card">
            <div class="card-body">
            <i class="fas fa-place-of-worship l1"></i>
              <h6 class="card-subtitle mb-2 m1">Art & Culture</h6>
              <p class="card-text">When you are teaching art, you're helping people realise who and what they are</p>
        
            </div>

<div class="up">
<i class="fas fa-place-of-worship l2"></i>
    <h6 class="card-subtitle mb-2 m2">Art & Culture</h6>
    <p class="card-text2">When you are teaching art, you're helping people realise who and what they are</p>


</div>

          </div>
        
    </div>
</div>
<div class="col-md-3 col-sm-12">
    <div class="element">

        <div class="card">
            <div class="card-body">
            <i class="far fa-money-bill-alt l1"></i>
              <h6 class="card-subtitle mb-2 m1">budget</h6>
              <p class="card-text"> Traveling is only way making you richer ,book ticket and just leave  go where yo feel most  alive </p>
        
            </div>
            <div class="up">
            <i class="far fa-money-bill-alt l2"></i>                <h6 class="card-subtitle mb-2 m2">budget</h6>
                <p class="card-text2"> Traveling is only way making you richer ,book ticket and just leave go where yo feel most  alive  </p>
          



            </div>
          </div>
        
    </div>
</div>
<div class="col-md-3 col-sm-12">
    <div class="element">

        <div class="card">
            <div class="card-body">
            <i class="fas fa-users l1"></i>
              <h6 class="card-subtitle mb-2 m1">Family</h6>
              <p class="card-text">Great satisfaction comes from sharing with others,getting with others is better</p>
        
            </div>
            <div class="up">


            <i class="fas fa-users l2"></i>
                <h6 class="card-subtitle mb-2 m2">Family</h6>
                <p class="card-text2">Great satisfaction comes from sharing with others,getting with others is better</p>
          
            </div>
          </div>
        
    </div>
</div>

    </div>
</div>



</section>








<section style=" height: 75vh; ">
<div class="container-fluid " >
<div class="row"  style="  
height: 50vh;">
 <div class="col-md-12">
   <div class="slider ml-lg-5 ml-md-5 mt-5 py-lg-5">
     <div class="row">
       <div class="col-md-4">
         <div
           class="imgContainer ml-lg-n5 mt-lg-0 mt-md-0 ml-md-n5 mt-n5"
         >


<?php
         $query2="select * from blogs limit 0,3 ";
$d=mysqli_query($conn, $query2);

;  

while($x2=mysqli_fetch_array($d)){

           ?>
           <div class="image">
             <img src="blogs_images/<?php echo $x2['image']?>" />
           </div>
 <?php }?>
         </div>
       </div>
       <div class="col-md-8">
         <!-- slider -->
         <div
           id="productSlider"
           class="carousel slide carousel-fade pr-lg-5 py-lg-0 py-4"
           data-ride="carousel"
         >
           <div class="carousel-inner">
             <div class="carousel-item active">
               <div class="content">
                 <div class="date">
                   26 Dec 12:00:01
                 </div>
                 <div class="title">
                 Bye
           </div>
                 <div class="desc">
                 Working from home during the pandemic has allowed many of us to be released from the daily grind and commuting to and from the office. Now it seems that people are reluctant to go back to their old routines. With the possibility of remote work becoming a long-term reality, it looks promising for those who are able to travel and set up their office anywhere – from a desk overlooking a serene lake to swapping your mountain screensaver for a real-life alpine backdrop.


                 </div>
                 <div
                   class="d-flex justify-content-center justify-content-lg-start"
                 >
                   <!-- <button class="btn readMoreBtn">
                     Read More
                   </button> -->
                 </div>
               </div>
             </div>
             <?php
$query2="select * from blogs limit 1,2 ";
$d=mysqli_query($conn, $query2);

;  

while($x2=mysqli_fetch_array($d)){

           ?>
             <div class="carousel-item">
               <div class="content">
                 <div class="date">
                 <?php  echo $x2["day"]." ".$x2["month"]." ".$x2['time'] ;?>
                 </div>
                 <div class="title">
             <?php  echo $x2["Title"] ;?>
                 </div>
                 <div class="desc">
                 <?php  echo $x2["content"] ;?>
                 </div>
                 <div
                   class="d-flex justify-content-center justify-content-lg-start"
                 >
              
                 </div>
               </div>
             </div>

<?php  } ?>
            
           </div>

           <!-- indicators -->
           <ol class="carousel-indicators indicators">
             <li
               data-target="#productSlider"
               data-slide-to="0"
               class="active"
             ></li>
             <li data-target="#productSlider" data-slide-to="1"></li>
             <li data-target="#productSlider" data-slide-to="2"></li>
           </ol>
           <!-- indicators -->
         </div>
         <!-- slider -->
       </div>
     </div>
   </div>
 </div>
</div>
</div>

</section>

<!-- Start Events Area Section -->



<section class="events-area big-card " style="
">




    <div class="container">
        <div class="row ">

        <?php
        $query1="select * from blogs  ";
        $x1=mysqli_query($conn, $query1);
        $c=mysqli_num_rows($x1);
       $c=$c-3;
$query1="select * from blogs limit 1 offset 4";
$x1=mysqli_query($conn, $query1);
while($arr1=mysqli_fetch_array($x1)){
?>
            <div class="col-sm-12 events_full_box bg-white "  data-aos="fade-right" id="i">
                <div class="events_single ">
                    <div class="event_banner  bg-danger" style="overflow: hidden">
                    
                        <a href="#" ><img src="blogs_images/<?php echo $arr1['image']?>" alt="" class=" im " height="350" ></a>
                    </div>
                    <div class="event_info">
                        <h3><a href="#" title=""><?php echo $arr1['Title'];?></a></h3>
                        <div class="events_time">
                            <span class="time"><i class="far fa-clock"></i><?php echo $arr1['time'];?></span>
                            <span><i class="fas fa-map-marker-alt"></i><?php echo $arr1['position'];?></span>
                        </div>
                     
                        <p style=" text-align:left;"><?php echo $arr1['content'];?></p>

                        <div class="container-fluid "  style="width:100%;height:50px;">
           <div class="row">
  <div class="rating">
 
  <div class="like grow ">
    <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
  </div>
  <!-- Thumbs down -->
  <div class="dislike grow">
    <i class="fa fa-thumbs-down fa-3x like" aria-hidden="true"></i>
  </div>
  </div>
</div>
</div>
 <form id="form2">

  
<input type="hidden" name="id" value="<?php echo $arr1['id_B']?>"/>
                        <div class="mt-2">
                        <input type="text" name="comment" id="" placeholder=" Leave Comment....." style="margin-top:2%;  width:80%; height:50px; border:1px solid lightgrey" class="rounded"> 
                   <button class="btn btn-primary v" name="c" type="submit" >Comment</button>
                        </div>
    
  <div class="list h-50  mt-4">

<h2 style="font-family: 'Lora', serif;">Comments</h2>

</form> 


<div  style="overflow:auto ; height:110px; border:1px solid lightgrey;" id="box">
<?php 
$_SESSION['id_blog']=$arr1['id_B'];
$xx=$arr1['id_B'];
$query="SELECT user_u.Fname,user_u.Lname,user_u.image,comments.comment ,comments.id_B,user_u.id_u from user_u INNER join comments on user_u.id_u=comments.id_u where id_B='$xx'
";
$x=mysqli_query($conn,$query);



while($arr=mysqli_fetch_array($x)){
  ?>
  <div style="width:100%;" class=" border border-secondary mb-1">
  
<img src="profileimage/<?php echo $arr['image'];?>" width="70" height="70" alt=""  class="rounded-circle mb-2  ml-2 mt-1 " style="; border:2px solid ;  display:inline-block">
<h4 style=" display:inline-block ;margin-left:2%;" class=""><?php echo $arr['Fname']." ".$arr['Lname'];?></h4>

<br>
<h6 style=" display:inline-block ;margin-left:2%;" class=""><?php echo $arr['comment'];?>

</h6>
<?php
$_SESSION['id_blog']=$arr['id_B'];
$xx=$arr['id_B'];
$_SESSION['num']=2;
?>

<form id="form2">
<h6 class="del"><a href="event2?i=<?php echo $arr['id_B'];?>&j=<?php echo $arr['id_u'];?>" class="btn btn-danger 
<?php if ($arr['id_u']!= $_SESSION['id']){ ?> d-none <?php   }?>

" style="margin-left:83%" name="del"   >Delete</a></h6>


</form>

</div> 

<?php } ?>
</div>
                    </div>  

                    
                     

                     
                        <div class="event_dete"  style="font-weight:bold;">
                            <span class=""><?php echo $arr1['day']?></span>
                            <span><?php echo $arr1['month']?></span>
                        </div>
                    </div>
                </div>  
            </div>
<?php  }?>
            
<?php

if(isset($_GET['i'])){
  if($_GET['j']==$_SESSION['id']){
  $x=$_GET['i'];
  $y=$_SESSION['id'];
$q="delete from comments where id_B='$x' and id_u='$y'";
  if(mysqli_query($conn, $q))
 {
?>


<script>

Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Deleted',
  showConfirmButton: false,
  timer: 1500
});




</script>



<?php 

header("refresh:1;url=http://localhost/project_skyFly/event2#i");
 }
}}?>
<?php

if(isset($_POST['comment'])){
$id_b=$_POST['id'];
$comment=$_POST['comment'];
$user_id=$_SESSION['id'];
$query=" insert into comments (id_u,id_B,comment)values('$user_id','$id_b','$comment');";
mysqli_query($conn,$query);

}

?>
           
        </div>
    </div>
</section><!-- ./ End Events Area section -->


<div class="container d-flex justify-content-center">
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item ">
      <a class="page-link" href="http://localhost/project_skyFly/event1#i">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="http://localhost/project_skyFly/event1#i">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="http://localhost/project_skyFly/event2#i">
        2
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="http://localhost/project_skyFly/event3#i">3</a></li>
    <li class="page-item ">
      <a class="page-link" href="http://localhost/project_skyFly/event3#i">Next</a>
    </li>
  </ul>
</nav>
</div>





<a class="scroll-to-top rounded object " style="margin-left:47%;" href="#nav1" >
      <i class="fas fa-angle-up"></i>
    </a>
<footer class="sticky-footer" style="height:100px; display:flex;background-color:white; font-weight:bold">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span class="">Copyright © SKYFLY 2021</span>
              <div class="icon mt-1"   >
              <i class="fab fa-facebook-f "  style="font-size:15px; margin-right:7px;"></i>
              <i class="fab fa-linkedin-in" style="font-size:15px; margin-right:7px;"></i>
              <i class="fab fa-instagram" style="font-size:15px; margin-right:7px;"></i>
              <i class="fab fa-twitter" style="font-size:15px; margin-right:7px;"></i>
              </div>
            </div>
          </div>
        </footer>

<script type="text/javascript">
   	
    var  nav = document.getElementById('nav1');
    var  drop= document.getElementById('ele1');
    var  element = document.getElementsByClassName('li1'); 
    var  title = document.getElementById('title2'); 
    window.onscroll = function(){

        if (window.pageYOffset >300) {
        nav.style.background = "transparent";
        nav.style.boxShadow = "none";
        title.style.opacity = "0";
        drop.style.opacity = "0";
        element[0].style.opacity = "0";
        element[1].style.opacity = "0";
        element[2].style.opacity = "0";
        element[3].style.opacity = "0";
        element[4].style.opacity = "0";
        element[5].style.opacity = "0";
        element[6].style.opacity = "0";
        element[7].style.opacity = "0";
   
      
      }
        else{
        title.style.opacity = "1";
        nav.style.background = "white";
        drop.style.opacity = "1";
     
        element[0].style.opacity = "1";
        element[1].style.opacity = "1";
        element[2].style.opacity = "1";
        element[3].style.opacity = "1";
        element[4].style.opacity = "1";
        element[5].style.opacity = "1";
        element[6].style.opacity = "1";
        element[7].style.opacity = "1";
    
        ///	nav.style.boxShadow = "0px 4px 2px blue";
        
        }
    }




</script>




<script>

$('.like, .dislike').on('click', function() {
    event.preventDefault();
    $('.active').removeClass('active');
    $(this).addClass('active');

   // alert($('.active').getvalue);
});

</script>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
offset:300,
duration:500



    });
  </script>  
<script>
$('.like, .dislike').on('click', function() {
    event.preventDefault();
    $('.active').removeClass('active');
    $(this).addClass('active');
});</script>


<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
      integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04="
      crossorigin="anonymous"
    ></script> -->
    <script src="./js1/script.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='js/popper.min.js'></script>
<script src='js/bootstrap.min.js'></script>

<script>
$('.like, .dislike').on('click', function() {
    event.preventDefault();
    $('.active').removeClass('active');
    $(this).addClass('active');
});
</script>


<script>
     
     $('form').on('submit', function (e) {

e.preventDefault();

$.ajax({
    type: 'post',
    url: 'event2',
    data: $('form').serialize(),
    success: function () {
      $("#box").load('handl');
      Swal.fire({
position: 'center',
icon: 'success',
title: 'Thank You!',
showConfirmButton: false,
timer: 1500
});
    }
});

});  


    </script>

<script>
  var x=document.getElementById('g1');
if(x.classList.contains('active'){

x.style.color ="red";
}


</script>

</body>


</html>
