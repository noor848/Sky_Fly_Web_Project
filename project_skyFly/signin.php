<?php 
session_start();
require('phpfile/signup.php');
require('phpfile/signin1.php');


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="signin.css">
    <link rel="icon" href="images/3.png" sizes="90x90">

<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@300&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js" integrity="sha256-J9avsZWTdcAPp1YASuhlEH42nySYLmm0Jw1txwkuqQw=" crossorigin="anonymous"></script>


    <title>SkyFly</title>

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
.image{

  padding:1px;

}



@media(max-width:960px) {
.xxx{
padding-bottom:80%;

padding-right:10%;

}

.zzz{

padding-bottom:30%;
border-radius:50px!important;
}
.image1{
 
 margin-top:20%;
font-size:20px;
}
.image h2{
font-size:70px;

}

.fade input {
  padding-right:10%;
width: 130px;

}
.erro{

font-size:10px !important;
color:red !important;


}




}

@media (max-width:476px){

  input{

width:100px!important;

}

.c{

  width:70px!important;
  margin-right:10%!important;
 
}

.title1{

margin-top:100px!important;

}

.title2{

margin-top:150px!important;

}

#inputEmail3{

  width:120px! important;
margin:0px!important;


}
#inputPassword3{
  width:120px! important;
margin:0px!important;



}

}



.star-rating {

  display:flex;
  flex-direction: row-reverse;
  font-size:2em;
  justify-content:space-around;
  padding:0 .2em;
  text-align:center;
  width:7em;
  align-items:center;
  margin-top:2%;
  margin-left:17%!important;
}

.star-rating input {
  display:none;
}

.star-rating label {
  color:#ccc;
  cursor:pointer;
}

.star-rating :checked ~ label {
  color:#f90;
}

.star-rating label:hover,
.star-rating label:hover ~ label {
  color:#fc0;
}

/* explanation */

article {
  background-color:#ffe;
  box-shadow:0 0 1em 1px rgba(0,0,0,.25);
  color:#006;
  font-family:cursive;
  font-style:italic;
  margin:4em;
  max-width:30em;
  padding:2em;
}
a {
  text-decoration: none;;
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
<section class="xxx  mt-2">
<div class="container  ">
 
<div class="row ">
<div class="col-xl-7 col-sm-12 form1  col-lg-8  col-md-8 ">
  <div class="column1">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sign in</a>
    </li>
 
  </ul>

  <div class="tab-content " id="myTabContent" style="padding-bottom:20%;" >
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="signup ">
      <form  method="post" action="signin" enctype="multipart/form-data" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">First Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="firstname"
            value="<?php  if(isset($_SESSION['f1'])) echo $_SESSION['f1'];?>"
            >
            <div class=" text-danger erro"  role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors['firstname']}"; ?></div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Last Name</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" name="Lastname"
             value="<?php if(isset($_SESSION['l1'])) echo $_SESSION['l1'];?>" />
            <div class=" text-danger erro"  role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors['Lastname']}"; ?></div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Email</label>
          <input type="Email" class="form-control" id="inputAddress" placeholder="Email" name="Email"
          
          value="<?php  if(isset($_SESSION['E1']))echo $_SESSION['E1'];?>"
          >
          <div class=" text-danger erro"  role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors['Email']}"; ?></div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Password</label>
          <input type="password" class="form-control" id="inputAddress2" placeholder="password" name="password"
          
          
          value="<?php  if(isset($_SESSION['pass'])) echo $_SESSION['pass'];?>"
          >
          <div class=" text-danger erro"  id="er" role="alert" style="font-size:15px; margin-left:10%;"> <?php echo "{$errors['password']}"; ?></div>
        </div>

        <div class="form-group">
          <label for="inputAddress3">Confirm Password</label>
          <input type="password" class="form-control" id="inputAddress3" placeholder="password" name="password"
          
          
          value="<?php  if(isset($_SESSION['pass'])) echo $_SESSION['pass'];?>"
          >
          <div class=" text-danger erro"  id="er2" role="alert" style="font-size:15px; margin-left:10%;"> <?php echo "{$errors['password']}"; ?></div>
        </div>




        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">passport</label>
            <input type="text" class="form-control" id="inputCity" name="passport" placeholder="passport"
         
            value="<?php    if(isset($_SESSION['p1'])) echo $_SESSION['p1'];?>"
            
            >
            <div class=" text-danger erro"   role="alert" style="font-size:15px; margin-left:20%;">
             <?php echo "{$errors['passport']}"; ?></div>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Identity</label>
            <input type="text" class="form-control" id="inputCity" name="Identity" placeholder="Identity" name="Identity"
            value="<?php if(isset($_SESSION['I1'])) echo $_SESSION['I1'];?>"
            >
            <div class=" text-danger erro"  role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors['identity']}"; ?></div>
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">MasterCard</label>
            <input type="text" class="form-control" id="inputZip" name="mastercard" placeholder="Number" name="master card"
            
            value="<?php  if(isset($_SESSION['M1'])) echo $_SESSION['M1'];?>"
            
            >
            <div class=" text-danger erro"  role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors['mastercard']}"; ?></div>
          </div>
        </div>
        <div class="form-group  " >
        <label for="inputZip" style="height:9px;">Image</label>
          <input type="file" name="image1" id="image"/>
        </div>
        <button type="submit" class="btn btn-primary but" name="signupButton"   >Sign up</button>
      </form>
</div>
    </div>




   
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" >

      <form  method="post" action="signin" >
        <div class="signin pt-3">
        <div class="form-group row">
          <label for="inputEmail3 " class="col-sm-2 col-form-label  ">Email</label>
          <div class="col-sm-10 ">
            <input type="text" class="form-control ml-4  c"id="inputEmail3" placeholder="Email" name="Email1">
            <div class=" text-danger" role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors1['Email']}"; ?></div>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3 " class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control ml-4 c" id="inputPassword3" placeholder="Password" name="password1">
            <div class=" text-danger" role="alert" style="font-size:15px; margin-left:20%;"> <?php echo "{$errors1['password']}"; ?></div>
          </div>
        </div>
       
    



        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary but" name="in" >Sign in</button>
          </div>
        </div>
      </form>



    </div>







      
    </div>

  </div>

</div>
</div>
</div>
</div>




</section> 


<div class="image col-md-12">
  <div class="col-md-10 image1  ">
<h2   class="title">
Welcome 
</h2>
<h2   class="title">
  Welcome 
  </h2>
  <h2  class="title title1">
    to
    </h2>
    <h2  class="title title1">
      to
      </h2>

      <h2  class="title title2">
      SkyFly
        </h2>
        <h2  class="title2">
          SkyFly
          </h2>
</div>
</div>


<?php
if(isset($_GET["out"])){
  
?>

<script>



Swal.fire({
  title: '<strong>Please Rating Us  &#128522</strong>',
  html: 
  '<form method="post" action="signin"><div class="star-rating">'+
 '<input type="radio" id="5-stars" name="rating" value="5" />' +
  '<label for="5-stars" class="star">&#9733;</label>'+
  '<input type="radio" id="4-stars" name="rating" value="4" />'+
 '<label for="4-stars" class="star">&#9733;</label>'+
  '<input type="radio" id="3-stars" name="rating" value="3" />'+
  '<label for="3-stars" class="star">&#9733;</label>'+
  '<input type="radio" id="2-stars" name="rating" value="2" />'+
  '<label for="2-stars" class="star">&#9733;</label>'+
  '<input type="radio" id="1-star" name="rating" value="1" />'+
  '<label for="1-star" class="star">&#9733;</label></div></form>',
  showCloseButton: true,
  focusConfirm: true,
  confirmButtonText:
    '<a href="signin"> <i class="fa fa-thumbs-up text-white font-weight-light"> Great!</i> </a>',
  confirmButtonAriaLabel: 'Thumbs up, great!',
 
})

</script>




<?php
}


  ?>

  



<script>

var pass=document.getElementById('inputAddress2');
var pass_c=document.getElementById('inputAddress3');
var error_pass=document.getElementById('er')
var error_pass2=document.getElementById('er2')
var regex=/[A-Za-z0-9]{7}/;
pass.addEventListener('keyup',function(){

if(regex.test(pass.value)){

pass.classList.add('is-valid')
pass.classList.remove('is-invalid')
error_pass.innerHTML =" "
}

else {

  pass.classList.remove('is-valid')
pass.classList.add('is-invalid')
error_pass.innerHTML ="Please Enter 7 Digits/Letters "
error_pass.style.width="100%"
error_pass.style.paddingTop="5px"
}


})
pass_c.addEventListener('keyup',function(){

if((pass.value==pass_c.value) && regex.test(pass_c.value)){

  pass_c.classList.add('is-valid')
  pass_c.classList.remove('is-invalid')
error_pass2.innerHTML =" "


}

else {

  pass_c.classList.remove('is-valid')
  pass_c.classList.add('is-invalid')
  error_pass2.innerHTML ="Invalid"
error_pass2.style.width="100%"
}


})


</script>
<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>

    <script src='js/jquery-min.js'></script>
    <script src='js/popper.min.js'></script>
    <script src='js/bootstrap.min.js'></script>

    
</body>
</html>