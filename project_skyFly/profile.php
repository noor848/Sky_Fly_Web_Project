<?php

require_once("include/connect.php");

ob_start();
session_start();

$query = "SELECT * FROM user_u where id_u ='{$_SESSION['id']}'";
$arr=mysqli_fetch_array(mysqli_query($conn,$query));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js" integrity="sha256-J9avsZWTdcAPp1YASuhlEH42nySYLmm0Jw1txwkuqQw=" crossorigin="anonymous"></script>


  
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" href="images/3.png" sizes="90x90">

    <title>Profile</title>
    <link rel="stylesheet" href="css/lightbox.min.css">
<script src="js/lightbox-plus-jquery.min.js"></script>

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

img:hover{

transform: scale(1.1);


}
    .edit{

color: rgb(0,123,255);

    }
.edit:hover{
background-color:rgb(0,123,255);
color:rgb(255,255,255);

}

.fa-camera{
position: absolute;
font-size:23px;
background-color:white;
color:rgb(0,123,255);
top:43%;
border-radius:100%;
padding:10px;
right:28%;

}
.fa-camera:hover{
background-color:rgb(0,123,255);
color:white;


}

.breadcrumb-item:hover a
{

text-decoration:none;

}

.iamge{


transition:.5s;


}
.iamge:hover{

  filter: grayscale(100%);
transform:scale(1.1);

}


</style>

</head>
<body style="background-color:rgb(226,232,240);">
   <section >
<div class="container  mt-5 ">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item"><a href="index">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Profile</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit-Profile</li>
  </ol>
</nav>

<div class="row  gutters mt-5">

<div class="col-lg-4 ">
    <div class="card" style="width: 22rem; border-radius:4%; height:24em; ">
  <div class="card-body flex-column text-center justify-content-center " >
      <div class="mt-2 rounded-circle" style="height:176px!important;width:185px!important;overflow: hidden;!important;margin-left:20%; border:3px solid  rgb(0,123,255);" >
  <a href="profileimage/<?php echo $arr['image']; ?>" data-lightbox="ff" data-title="<?php echo $arr['Fname'];?>"
  
  
  ><img src="profileimage/<?php echo $arr['image']; ?>" class=" rounded-circle iamge" alt="" style="height:176px;width:185px;!important; "></a> 
   <label   class="fas fa-camera" for="file" ></label>

</div>
    <h3 class="mt-3"><?php echo $arr['Fname'];?></h3>
    <p class="text-muted">Subscriber</p>
    <div class="mt-3 ">
<a href="profile.php?delete=<?php echo $arr['id_u']?>" class="btn btn-danger n-del" >Delete Account</a>
<button  onclick="ena()"
class="btn btn-white border border-primary  edit">Edit</button>
  </div>
  </div>
</div>

</div>

<div class="col-lg-7 mt-2">
  <form action="profile.php" method="post"  enctype="multipart/form-data">
<div class="card" style="width:100%!important;border-radius:4%!important;">

  <ul class="list-group list-group-flush" style="width:100%!important; ">

    <li class="list-group-item ">
      <h6 class="d-inline-block ">Full Name</h6> <input style="border-color :transparent!important;text-align:center;background-color :transparent!important" class="d-inline-block ml-2 w-25  text-muted " type="text" value="<?php

    echo $arr["Fname"]." ".$arr['Lname'];
    ?>"  disabled></li>
    <li class="list-group-item"><h6 class="d-inline-block"> Email</h6><input   style="border-color :transparent !important;background-color :transparent!important"  class="d-inline-block ml-5 w-50 text-muted  change" type="text" name="email" value="<?php

    echo $arr["Email"];
    ?>"  disabled></li>

    <li class="list-group-item"> <h6 class="d-inline-block" > Password</h6><input   onkeyup="xx(this)" name="password"  style="border-color :transparent !important;background-color :transparent!important"  class=" form-control d-inline-block ml-4 w-25 text-muted  change " type="text" value="<?php

    echo $_SESSION['password'];
    ?>"  disabled>
 
 <div class="alert alert-danger  mt-3"  style="display:none"id="error" role="alert">
  Invalid Please Enter 7 digits or characters
</div>
<div class="alert alert-success mt-3" style="display:none" id="valid" role="alert">
  Valid
</div>
    </li>

 

    <li class="list-group-item"> <h6 class="d-inline-block">Identity</h6><input   style="border-color :transparent !important; background-color :transparent!important"  class="d-inline-block ml-5 w-25 text-muted  " type="text"
    value="<?php

    echo $arr["id_u"];
    ?>" disabled > </li>
    <li class="list-group-item"> <h6 class="d-inline-block">Master Card</h6> <input name="master"   style="border-color :transparent !important; background-color :transparent!important" class="d-inline-block ml-2 w-25 text-muted  change" type="text" value="<?php

    echo $arr["M_card"];
    ?>" disabled ></li>
   <li class="list-group-item"> <h6 class="d-inline-block">Passport Number </h6><input name="passport"  style="border-color :transparent !important;background-color :transparent!important"  class="d-inline-block ml-4 w-25 text-muted  change" type="text" value="<?php

    echo $arr["passport"];
    ?>"  disabled></li>
  </ul>

</div>
<div class="d-flex justify-content-center mt-2 mr-3">
<button type="submit"  onclick="f1()" class=" btn btn-primary disabled w-50" id="done" name="submit">Done <i class="fas fa-spinner fa-spin invisible"></i></button></div>



</div>
</form>
</div>
</div>


</section>

<div >
  
  <input type="file" id="file" name="file"  hidden>
  
</div>

<script>
var regex=/^[A-Za-z0-9]{7}$/;
var error=document.getElementById('error');
var valid=document.getElementById('valid');
function xx(xxx) {
if(regex.test(xxx.value)){
xxx.classList.add('is-valid')
xxx.classList.remove('is-invalid')

error.style.display="none";
valid.style.display="block";
}

else {

  xxx.classList.remove('is-valid')
xxx.classList.add('is-invalid')

error.style.display="block";
valid.style.display="none";
}


}
</script>



<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
 
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"update.php",
    method:"POST",
    data:form_data,
    contentType: false,
    cache: false,
    processData: false,  
    success: function() {
  location.reload();
} 
  
   });
  
 });
});


</script>




<?php
if(isset($_POST['submit'])){
  $email=$_POST['email'];
$password=$_POST['password'];
$passport=$_POST['passport'];
$_SESSION['password']=$password;
$master=$_POST['master'];
$password=password_hash($password,PASSWORD_DEFAULT);
$query="update user_u set Email='$email',password='$password',passport='$passport',M_card='$master'
 where id_u='{$_SESSION['id']}';";

if(mysqli_query($conn,$query)){

}?>

<script>
   Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your Data has been save',
  showConfirmButton: false,
  timer: 1500
})
</script>


<?php

header("refresh:1;profile");
}
?>





<?php
// require_once("include/connect.php");
if(isset($_GET['delete'])){
    $i=$_GET['delete'];
$query="delete from user_u where id_u='$i'";
if(mysqli_query($conn,$query)){


?>
<script>
   Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Deleted',
  showConfirmButton: false,
  timer: 2000
})
</script>


<?php
header("refresh:2;url=signin");

     }}
?>





    <script >
  function submit(){

document.getElementById("myForm").submit();
}
  </script>


<script>


 function f1(){
var name=document.getElementsByClassName("fa-spin ");
name[0].classList.remove("invisible");




 }





function ena(){
    console.log("hi");
 var element = document.getElementsByClassName("change");
 for (var i = 0; i < element.length; i++) {
 element[i].disabled =false;
 element[i].style.borderColor="rgb(108,117,125)";
 element[i].style.border="1px solid";

}


 var done=document.getElementById('done');
 done.classList.remove("disabled");


}

</script>



<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
  <script src='js/popper.min.js'></script>
  <script src='js/bootstrap.min.js'></script>


  <script>
$('.n-del').on('click',function(e){
e.preventDefault();
const href=$(this).attr('href');
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
  document.location.href =href;

  }
})

})

</script>



<script>
    $("i").click(function () {
  $("input[type='file']").trigger('click');
});

$('input[type="file"]').on('change', function() {
  var val = $(this).val();
  $(this).siblings('span').text(val);
})




  </script>




<script src='js/jquery-min.js'></script>
  <script src='js/popper.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 
</body>
</html>