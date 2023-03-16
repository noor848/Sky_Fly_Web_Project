<?php

require('include/connect.php');
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hotels.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <title>SkyFly</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="icon" href="images/3.png" sizes="90x90">

<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
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
margin:0px;padding:0px;
  font-family: 'Merriweather', serif;

}
.checked {
  color: orange;
  text-align: center;
 
  
}
.stars{
  font-size: 20px;
 

}

@media (max-width:960px){
.image {


margin-top:35%;


}
.image img{

height:100px;


}
.image h2{

margin-top:50%;

}
.image h6{

margin-top:50%;

}

}

/*----------------------------------*/
.slideshow{
width: 100%;
height:100vh;
position: relative;
overflow: hidden;
}



.slideshow-item{
width:inherit;
height: inherit;
position: absolute;
opacity: 0;
animation :cycleimage 31s infinite;
}
.slideshow-item img{

width: 100%;
height: 100%;
object-fit: cover;
animation :zoom 31s infinite;

}

.slideshow-item:nth-child(1),.slideshow-item:nth-child(1) img{

animation-delay: 0s;


}
.slideshow-item:nth-child(2),.slideshow-item:nth-child(2) img{

animation-delay: 10s;


}
.slideshow-item:nth-child(3),.slideshow-item:nth-child(3) img{

animation-delay: 20s;


}


.slideshow-item-text{
max-width: 50%;
position: absolute;
top: 50%;
left: 0;
transform: translateY(-50%);
background-color: rgba(0, 0, 0,.8 );
color: white;
padding: 8rem 3rem;

}
.slideshow-item-text h5{

font-size: 3rem;
font-family: 'Raleway',sans-serif;
text-transform: uppercase;
letter-spacing: 1px;
margin-bottom: 2.5rem;

}
.slideshow-item-text p{


font-family: 'Roboto',sans-serif;
text-transform: uppercase;
letter-spacing: 1px;
font-size:15px;
margin-bottom: 2.5rem;
font-weight:300 ;
}

@keyframes cycleimage
{

25%{
opacity: 1;
}
40%{

 opacity: 0;   
}


}


@keyframes zoom{

100%{

transform:scale(1.3);

}


}


@media screen and (max-width:1000px){


    .slideshow-item-text{
max-width: 70%;

padding: 5rem 1rem;

}


}
html{
scroll-behavior:smooth;


}

.object {
  animation: MoveUpDown 1s linear infinite;
 position:relative;
bottom:10px;
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
height:90px! important;

}
.title5 .logo{
  width:100%!important;
height:110px! important;

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


.fas{
font-size:60px;
color:rgb(0,123,94);

}

.intro:hover{

background-color:white!important;
-webkit-box-shadow: -1px 4px 12px 3px rgba(0,0,0,0.67); 
box-shadow: -1px 4px 12px 3px rgba(0,0,0,0.67);
}
</style>


</head>
<body>

    <header>
 
    
        <nav class="navbar navbar-expand-lg navbar-light  nav1" id="nav1" >
        <a class=" navbar-brand  title5 " style="width:20%; height:110px; margin-left:15%;"  id="title2"  href="#">
  <img src="images/3.png "class="logo" style="height:120px;width:100%;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav "> 
            <li class="nav-item active  li1 ml-1" id="ele">
              <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
            </li>



            <li class="nav-item dropdown drop1  ml-4">
              <a  id="ele1" class="nav-link dropdown-toggle " style="color: #007bff;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Book
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item li1 text-primary" href="flight">Flight</a>
                <a class="dropdown-item li1 text-primary" href="car">Cars</a>
              </div>
            </li>
            <li class="nav-item    li1 ml-2"  id="ele">
        <a class="nav-link" href="cancle/hotels">Your Books</a>
      </li>
            <li class="nav-item active  li1 ml-4" id="ele">
              <a class="nav-link" href="event1">Blog <span class="sr-only">(current)</span></a>
            </li>
         
          
          </ul>
        </div>
      </nav>
      

   
      
      </header>


<div class="slideshow image">
<div class="slideshow-item">

<img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="">
<div class="slideshow-item-text">
    <h5>
      HUGE POOL
    </h5>
    <p style="text-transform: uppercase;line-height:30px;">
    HUGE pool area’s with Landscape Design, Anice and   a unique  Creative Place Identity that will shape unique experiences for the travelers, and Invested in high-end design sunbeds & umbrellas that promote the guests’ long stay 
    </p>
</div>


</div>

<div class="slideshow-item">

<img src="https://i.pinimg.com/originals/c6/60/24/c66024ea79527d9bbafe79ed171558b9.jpg" alt="">
<div class="slideshow-item-text">
    <h5>
       Rooms
    </h5>
    <p style="text-transform: uppercase; line-height:30px;">
      Perfect for solo travelers,  cozy rooms offers a single or a queen bed. Views stretch to the mountain landscape or picturesque ,expansive windows open to views
    </p>
</div>


</div>
<div class="slideshow-item">

<img src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_3333/x_0,y_260,w_5000,h_2812,r_0,c_crop,q_80,fl_progressive/w_900,f_auto,c_fit/vits-luxury-business-hotel-aurangabad/Coffee_Shop_Hotel_VITS_Aurangabad_4_uihgry" alt="">
<div class="slideshow-item-text" >
    <h5>
    RESTAURANTS
    </h5>
    <p style="text-transform: uppercase; line-height:30px;">
       Introduce with high  level bofeh with wonderful view on the see and super delicious food
    </p>
</div>


</div>
    </div>






















<section id="team" class="" style="background-iamge:url('')">


    <div class="container ">
    <div class="text-center " style="margin-bottom:10%;">
<h1 style="font-family: 'Acme', sans-serif; font-size:90px;" data-aos="fade-down">Available Hotels</h1>
<p  data-aos="fade-up" class="mt-1" style="font-family: 'Libre Baskerville', serif; font-size:15px;">
We introduce to you high class hotels with high rating views that fit you desires,flip card<br>  and Book what you prefer</h6>
</p>
<div class="stars"  data-aos="fade-down">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>




<div class="container mb-5" data-aos="fade-up">

<div class="row ">

<div class="col-xl-4 col-sm-12  col-lg-4  col-md-4 ">
  <div class="d">
  <div class="card intro " style=" background-color:rgb(238,238,238);">
  <div class="card-body">
    <div class="row  no-gutter">
    <div class="col-md-12 col-xl-4 ">
        <div>
   <i class="fas fa-utensils margin-top:5px; "></i></div></div>
   <div class="col-md-8 ">

   <h5 style="display: inline-block; margin-top:10%; ">Food & Drink</h5>

   </div>
   </div>
   <p style="font-family: 'Libre Baskerville', serif; font-size:15px;">Find the best spots daily to eat and drink trends and menu ideas</p>
    
  </div>
</div>
  </div>
</div>


<div class="col-xl-4 col-sm-12  col-lg-4  col-md-4 ">
  <div class="d">
  <div class="card intro" style=" background-color:rgb(238,238,238);">
  <div class="card-body">
  <div class="row  gutter">
  <div class="col-md-12 col-xl-4 ">
        <div>
   <i class="fas fa-taxi margin-top:5px;"></i></div></div>
   <div class="col-md-8 ">

   <h5 style="display: inline-block; margin-top:10%; ">Airport Taxi</h5>

   </div>
   </div>
  
   <p style="font-family: 'Libre Baskerville', serif; font-size:15px;">transfers to and from the airport. Whether you're flying solo or with a group, we've got you covered.</p>

    
  </div>
</div>
  </div>
</div>
<div class="col-xl-4 col-sm-12  col-lg-4  col-md-4 ">
  <div class="d">
  <div class="card intro" style=" background-color:rgb(238,238,238);">
  <div class="card-body">
  <div class="row  gutter">
  <div class="col-md-12 col-xl-3 ">
        <div>
   <i class="fas fa-hotel margin-top:5px;"></i></div></div>
   <div class="col-md-9 ">

   <h5 style="display: inline-block; margin-top:10%; ">Best Hotel Rooms</h5>

   </div>
   </div>
   <p style="font-family: 'Libre Baskerville', serif; font-size:15px;">Our luxury sample hotel  modernity with classic elegance. and convenience of newly redesigned rooms</p>

  </div>
</div>
  </div>
</div>

</div>


</div>








<div class="container">
        <div class="row">
            <!-- Team member -->


<?php 

$query="select * from hotels limit 3,3";
$x=mysqli_query($conn,$query);
while($arr=mysqli_fetch_array($x)){


?>
            <div class="col-xs-12 col-sm-6 col-md-4" style="font-family: 'Libre Baskerville', serif;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">

                            <div class="card">
                                <div class="card-body text-center">
                                    <div  class=" bg-danger" style="mragin-bottom:2px; height:280px;  margin-right:1%;">
                                      <img class=" w-100 rounded img-fluid" src="hotels/<?php echo $arr['image']?>" alt="card image" style="height:280px;"></div>
                                    <h4 class="card-title mt-2" style="font-family: 'Acme', sans-serif;"><?php echo $arr['name']?></h4>
                                    <p class="card-text" style="font-family: 'Libre Baskerville', serif;">Flip Card To Get information.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                <h6 class="card-title">
 <img height="30" src="areas/<?php echo $arr['flag']?>"/>


                </h6>
                <h5 style="font-family:'Libre Baskerville', serif; color:rgb(0,123,94);" >Price_per_day :<?php echo $arr['price']?>$</h5>
                <p class="card-text" style="font-family: 'Libre Baskerville', serif;!important;"><?php echo $arr['description']?></p>


                                    <a href="hdes?id=<?php echo $arr['idh']?>"  class="btn btn-success text-white" target="a">Read more</a>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php
}





?>



  
            <!-- ./Team member -->
      

        </div>
    </div>
<div>
  

<section>

<div class="container d-flex justify-content-center">

<nav aria-label="...">
  <ul class="pagination pagination-lg">
  <li class="page-item ">
      <a class="page-link" href="hotel" >Previous</a>
    </li>
    <li class="page-item ">
      <a class="page-link" href="hotel" >1</a>
    </li>
    <li class="page-item  disabled" ><a class="page-link" href="hotel2" tabindex="-1">2</a></li>
    <li class="page-item "><a class="page-link" href="hotel3">3</a></li>
    <li class="page-item ">
      <a class="page-link" href="hotel3" >Next</a>
    </li>
  </ul>
</nav>
</div>

</section>


</div>
    <a class="scroll-to-top rounded-circle object  " style="margin-left:48%;" href="#nav1" >
      <i class="fas fa-angle-up"></i>
    </a>
</section>
<!-- Team -->



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

  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery-min.js'></script>
<script src='js/popper.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({

duration:500

    });
  </script>
</body>
</html>