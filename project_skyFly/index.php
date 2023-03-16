

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="css/choose.css">
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
  <title>SkyFly</title>



  
<style>
*{

  margin: 0;
  padding: 0;
  box-sizing:border-box;
font-family: 'Merriweather', serif;
}
.wrapper{
  width: 960px;
  margin: 10% auto 0;
}
a{
  text-decoration:none;
}

.single-portfolio{
  background-size:cover!important;
}

.single-portfolio {
  position: relative;
  width: 300px;
  height: 300px;
  float: left;
  margin: 4px;
  background-size: 100%;
  background-position: center;
  transition: 0.5s;
  overflow: hidden;
  font-family: poppins;
  line-height: 1.2;
}

.single-portfolio::before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  transform: translateY(90%);
  background-color: #262626;
  color: #fff;
  padding: 0 8px;
  content: attr(data-title);
  font-size: 24px;
  text-align: center;
}

.single-portfolio::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  color: #fff;
  opacity: 0;
  text-align: center;
  padding-top: 35%;
  font-size: 35px;
  text-transform: uppercase;
  content: attr(data-text);
  transition: 0.5s;
  margin-top: 8px;
  transform: translateY(100%);
}

.single-portfolio:hover:after{
  transform:translateY(0);
  transition:0.5s 0.1s;
  opacity:1;
}
.single-portfolio:hover:before{
  transform:translateY(0);
  padding:8px;
  background-color:rgba(0,0,0,0.9);
  transition:0.5s;
}




/* ignore the code below */


.link-area
{
  position:fixed;
  bottom:20px;
  left:20px;  
  padding:15px;
  border-radius:40px;
  background:#262626;
}
.link-area a
{
  text-decoration:none;
  color:#fff;
  font-size:25px;
}

.xx{

  margin-left:10% !important;
margin-top:1% !important;
padding-bottom:5% !important;

}

.m{
  text-align:center;

margin-top:2% !important;
font-weight:bold !important;
font-family: 'Merriweather', serif;

}
hr{
width:30%;
text-align:center;
position:center;
margin-left:34%;
margin-bottom:2%;
}


@media (max-width:1000px){
#up{

margin-right:10%;

}
.title5{
width:40%!important;
height:100px! important;

}
.title5 .logo{
  width:100%!important;
height:110px! important;

}
#ele a{


  color:white!important;
}
#ele1{

  color:white!important;


}

.navbar-toggler{

margin-right:10% !important;

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
background-color:white !important;
transition:width .3s;

}
.li1 a:hover::after{
width:30%;
transition:width .3s;
    }


}
html{
scroll-behavior:smooth;


}
.fa-chevron-circle-up{


font-size:55px! important;


}

.fa-chevron-circle-up:hover{

border-radius:100%;
border:5px solid rgb(68,132,206);

}

body{
 margin:0px;
 padding:0px;
 width:100%;
 height:100%;
overflow-x:hidden;

}
</style>


</head>
<body>
 <header id="he">
 <div class="container-fluid" style="overflow:auto;">
   <div class="row">
    
  <nav class="navbar navbar-expand-lg navbar-light   nav1" id="nav1" >
  <a class=" navbar-brand title5" style="width:14%; height:90px; margin-left:10%;"  id="title2"  href="#">
  <img src="images/3.png "class="logo" style="height:110px;width:90%;" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  " style="margin-left:5%!important;" id="navbarNavDropdown">
    <ul class="navbar-nav "> 
      <li class="nav-item active li1" id="ele">
        <a class="nav-link active" href="index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item    li1  ml-2 "  id="ele" >
        <a class="nav-link" href="#contactus1">Contact Us</a>
      </li>
      <li class="nav-item    li1 ml-2"  id="ele">
        <a class="nav-link" href="profile">Your Profile</a>
      </li>
      <li class="nav-item    li1 ml-2"  id="ele">
        <a class="nav-link" href="cancle/hotels">Your Books</a>
      </li>
      <li class="nav-item    li1 ml-2"  id="ele">
        <a class="nav-link" href="event1">Blog</a>
      </li>
      <li class="nav-item dropdown drop1  ml-2"  id="ele1" > 
        <a  id="ele1" class="nav-link dropdown-toggle " style="color: #007bff;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Book
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item li1" href="flight">Flight</a>
          <a class="dropdown-item li1" href="hotel">Hotels</a>
          <a class="dropdown-item li1" href="car">Cars</a>
        </div>
      </li>
      <li class="nav-item    li1 ml-4"  id="ele">
        <a class="nav-link" href="signin?out=5">Sign Out</a>
      </li>
    </ul>
  </div>
</nav>

</div>
 </div>
</header>



<div class="container-fluid  " style=";">
<div class="row">
  <div class="map" style="width:100%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14573616.797593445!2d-114.46662386898306!3d33.43312370576816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e1!3m2!1sen!2sus!4v1609703059720!5m2!1sen!2sus" width="100%"  height="100% "frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div></div>
</div>


<section>

  <div class="container mt-5 mb-5"  >

<div class="row ">

<div class="col-xl-3  col-sm-12  col-lg-6 col-md-6 "   class="hov ">

  <div class="card  flex-column justify-content-center align-items-center mt-2  pt-3" >
    <i class="fas fa-plane "></i>
    <div class="card-body">
      <h4>Book a flight</h4>
      <p class="card-text" style="font-family: 'Merriweather', serif;">Find the best deals for your next flight, high class flight and low cost ticket</p>
    </div>
  </div>




</div>

<div class="col-xl-3 col-sm-12 col-lg-6 col-md-6 "  >
 
    <div class="card  flex-column justify-content-center align-items-center mt-2  pt-3" >
      <i class="fas fa-hotel"></i>
      <div class="card-body">
        <h4>Book Hotels</h4>
          <p class="card-text" style="font-family: 'Merriweather', serif;">Find the best available booking Hotel, best accomodations  </p>
      </div>
    </div>
  
  
  
  

  
  
  
  
  </div>

  <div class="col-xl-3  col-sm-12 col-lg-6 col-md-6 " >

    
      <div class="card  flex-column justify-content-center align-items-center mt-2  pt-3" >
        <i class="fas fa-car"></i>
        <div class="card-body">
          <h4>Renting Cars</h4>
            <p class="card-text" style="font-family: 'Merriweather', serif;">Be the captain of your own trip, get the best renting  deals from the system on our site .</p>
        </div>
      </div>
    
    
    
    
   
    
    
    
    </div>

    <div class="col-xl-3 col-sm-12 col-lg-6 col-md-6 ">
        <div class="card  flex-column justify-content-center align-items-center mt-2  pt-3" >
          <i class="fas fa-ban"></i>
          <div class="card-body">
            <h4>Cancle
            </h4>
            <p class="card-text" style="font-family: 'Merriweather', serif;">Organize your travel plan in easy steps, visit Cancle page on top of page  </p>
          </div>
        </div>
      
      
      
      
   
      
      
      
      </div>

  </div>


  </div>




  </section>



  <!-- <div class="container-fluid mt-5" style="background-color:rgb(238,239,240);padding:1px;" id="destinat">
<div class="row">

<h2 data-aos="fade-up"  style="font-family: 'Merriweather', serif; font-weight:light; margin-left: 50%; margin-top:1%;transform:translateX(-50%);"> Our Destinations</h2>
  <hr></div>


<div class="row xx " style="">

    <div  class=" ">
      <div>
      <a href="#" class="single-portfolio" style="background-image:url(https://jiss.org.il/wp-content/uploads/2019/05/bigstock-egyptian-pyramids-in-sand-dese-265254931.jpg) ;" data-title="^" data-text="Egypt"></a>
    
      <a href="#" class="single-portfolio" style="background-image:url(https://www.planetware.com/wpimages/2019/12/united-arab-emirates-in-pictures-beautiful-places-to-photograph-the-palm-jumeirah.jpg);" data-title="^" data-text="UAE"></a>
      </div>
    </div>
    <div  class="">
      <a href="#" class="single-portfolio" style="background-image:url(https://i0.wp.com/www.traveloffpath.com/wp-content/uploads/2020/06/who-can-travel-to-france.jpg?resize=759%2C500&ssl=1);" data-title="^" data-text="France"></a>

      <a href="#" class="single-portfolio" style="background-image:url(https://www.topdeck.travel/sites/default/files/styles/hero_image_mobile/public/2018-09/HERO%201920x540-Europe-Spain.jpg?itok=hEc5cdOB);" data-title="^" data-text="spain"></a>
    </div>
    <div  class="">
    <a href="#" class="single-portfolio" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtCI0sDWifRi55V-ZsTFd34KjKJQxbxsrNXg&usqp=CAU);" data-title="^" data-text="USA"></a>
  
    <a href="#" class="single-portfolio" style="background-image:url(https://placebrandobserver.com/wp-content/uploads/Turkey-country-brand-image-strategy-800x445.jpg);" data-title="^" data-text="Turkey"></a>

  
    </div>
  
    
    </div>
   







 -->



<section>

<div class="container " >
<div class="tit col-sm-12" >
<h2 data-aos="fade-up" >Destinations</h2>
<p  style="font-family: 'Merriweather', serif;">We Choose for You Best locations that You Can visit with Best price and accomodation that fit you ,and with high Range of Quality Which Fit Your Desire and with a Good Service  .
</p>



</div>


<div class="row " style="margin-top:5%;">

<div class="col-sm-12 col-md-4 col-xl-4 col-lg-6  mb-4">

<div class="card1 ddd sss" >
  <img class="card-img-top  img-fluid" src="https://jiss.org.il/wp-content/uploads/2019/05/bigstock-egyptian-pyramids-in-sand-dese-265254931.jpg" alt="Card image cap">
  <div class="u">
 <!-- <div class="bd1"><i class="fas fa-arrow-up"></i></div> -->

 <h2>Egypt</h2>
 </div>
 <div class="bd"><i class="fas fa-arrow-up"></i></div>


</div>
</div>
<div class="col-sm-12 col-md-4 col-xl-4 col-lg-6 mb-4">

<div class="card1 ddd sss" >
  <img class="card-img-top  img-fluid" src="https://www.planetware.com/wpimages/2019/12/united-arab-emirates-in-pictures-beautiful-places-to-photograph-the-palm-jumeirah.jpg" alt="Card image cap">
  <div class="u">
 <!-- <div class="bd1"><i class="fas fa-arrow-up"></i></div> -->

 <h2>UAE</h2>
 </div>
 <div class="bd"><i class="fas fa-arrow-up"></i></div>


</div>
</div>


<div class="col-sm-12 col-md-4 col-xl-4 col-lg-6 mb-4"><div class="card1 ddd sss" >
  <img class="card-img-top  img-fluid" src="https://i0.wp.com/www.traveloffpath.com/wp-content/uploads/2020/06/who-can-travel-to-france.jpg?resize=759%2C500&ssl=1" alt="Card image cap">
  <div class="u">
 <!-- <div class="bd1"><i class="fas fa-arrow-up"></i></div> -->

 <h2>Paris</h2>
 </div>
 <div class="bd"><i class="fas fa-arrow-up"></i></div>


</div>
</div>



<div class="col-sm-12 col-md-4 col-xl-4 col-lg-6">
<div class="card1 ddd sss" >
  <img class="card-img-top" src="https://www.topdeck.travel/sites/default/files/styles/hero_image_mobile/public/2018-09/HERO%201920x540-Europe-Spain.jpg?itok=hEc5cdOB" alt="Card image cap">
  <div class="u">
 <!-- <div class="bd1"><i class="fas fa-arrow-up"></i></div> -->

 <h2>Spain</h2>
 </div>
 <div class="bd"><i class="fas fa-arrow-up"></i></div>


</div>
</div>
<div class="col-sm-12 col-md-4 col-xl-4 col-lg-6">
<div class="card1 ddd sss" >
  <img class="card-img-top  img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtCI0sDWifRi55V-ZsTFd34KjKJQxbxsrNXg&usqp=CAU" alt="Card image cap">
  <div class="u">
 <!-- <div class="bd1"><i class="fas fa-arrow-up"></i></div> -->

 <h2>USA</h2>
 </div>
 <div class="bd"><i class="fas fa-arrow-up"></i></div>


</div>

</div>
<div class="col-sm-12 col-md-4 col-xl-4 col-lg-6">
<div class="card1 ddd sss" >
  <img class="card-img-top  img-fluid" src="https://placebrandobserver.com/wp-content/uploads/Turkey-country-brand-image-strategy-800x445.jpg" alt="Card image cap">
  <div class="u">
 <!-- <div class="bd1"><i class="fas fa-arrow-up"></i></div> -->

 <h2>Turkey</h2>
 </div>
 <div class="bd"><i class="fas fa-arrow-up"></i></div>


</div>
</div></div>


</div>

</div>




</section>









<div class="container-fluid contactfrom " id="contactus1">
<div class="row row3">


<div class="col-md-6">

<div class="contacteus" style="font-family: 'Merriweather', serif;">
  <h2 class="mt-5 p-1 mb-3 " style="font-family: 'Merriweather', serif;">Contact Us</h2>
  <p class="mb-4">Our Team is happy to answer your questions ,fill the form bellow and we will be in touch soon</p>
  
  
  <form>

    <div class="form-group">
       <textarea class="form-control" id="editor1" rows="7" placeholder=" Type  your Message here....." name="message"></textarea>
       <button type="submit" class="btn btn-primary mt-2 ml-2" name="send">Submit</button>
    
    </div>
  </form>
</div>
</div>



<div class="col-md-6 mt-5">


  <div class="wpb_wrapper" style="font-family: 'Merriweather', serif;">
    <p><span style="color: #222222;"><strong>Visit us at:</strong></span></p>
<p>Unit 1090, 122 The Street,</p>
<p>Westfield Stratford City, Montfichet Road,</p>
<p>London E20 1EN, United Kingdom</p>
<p>&nbsp;</p>
<p><span style="color: #222222;"><strong>Working Hours</strong>:</span></p>
<p>Monday — Friday (<span style="color: #222222;"><strong>08:00 — 17:00</strong></span>)</p>
<p>Saturday (<span style="color: #222222;"><strong>09:00 — 15:00</strong></span>)</p>
<p>&nbsp;</p>
<p><span style="color: #222222;"><strong>Or ring our phones:</strong></span></p>
<p><a href="tel:44-20-3457-5495">+44 20 3457 5495</a> (UK)</p>
<p><a href="tel:353-1-878-3944">+353 1 878 3944</a> (Ireland)</p>

  </div>



</div>










</div>





</div>


<div class="page" style="height:50px; width:50px;position:fixed; background-color:transparent; top:50%; left:0;" data-toggle="tooltip" data-placement="left" title="Messenger">
<div style="height:50px;"><a href="https://www.messenger.com/" target="xx"><i class="fab fa-facebook-messenger" style="font-size:50px; color:rgb(0,132,255)"></a></i></div>



</div>



<a id="up"  href="#he" style="height:20px; width:20px;position:fixed; background-color:transparent; top:50%; right:6%;" >
<i class="fas fa-chevron-circle-up" ></i>

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
   	var u=document.getElementById('up');
      var  nav = document.getElementById('nav1');
      var  drop= document.getElementById('ele1');
      var  element = document.getElementsByClassName('li1'); 
      var  title = document.getElementById('title2'); 
      window.onscroll = function(){

      	if (window.pageYOffset >500) {
          nav.style.background = "transparent";
          nav.style.boxShadow = "none";
          title.style.opacity = "0";
          drop.style.opacity = "0";
          u.style.opacity = "1";
          element[0].style.opacity = "0";
          element[1].style.opacity = "0";
          element[2].style.opacity = "0";
          element[3].style.opacity = "0";
          element[4].style.opacity = "0";
          element[5].style.opacity = "0";
          element[6].style.opacity = "0";
          element[7].style.opacity = "0";
          element[8].style.opacity = "0";
        
        }
      	else{
          u.style.opacity = "0";
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
          element[8].style.opacity = "1";
      	///	nav.style.boxShadow = "0px 4px 2px blue";
      	
      	}
      }




</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='js/popper.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'editor1' );</script>

  <script>
  
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})




  </script>
  
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
     AOS.init({
offset:300,
duration:500



    });
  </script>

<script>

$(function () {

$('form').on('submit', function (e) {

    e.preventDefault();

    $.ajax({
        type:'post',
        url: 'phpfile/conttus.php',
        data: $('form').serialize(),
        success: function () {
   
          Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Message Sent',
  showConfirmButton: false,
  timer: 1500
})
        }
    });

});

});
</script>


</body>
</html>