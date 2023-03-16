


<?php

require('include/connect.php');
session_start();
ob_start();



if(isset($_GET['id'])){


    $_SESSION['id_h']=$_GET['id'];
    $e= $_SESSION['id_h'];
    
$query="select * from hotels where idh='$e'";
$x=mysqli_query($conn,$query);
$arr=mysqli_fetch_array($x);
$_SESSION['name_hotel']=$arr['name'];
$_SESSION['area_hotel']=$arr['area'];
$_SESSION['description_h']=$arr['long_desc'];
$d=$_SESSION['description_h'];

$_SESSION["image_h"]=$arr['image'];
$query1="select images from hotel_description where id_h1=$e;";
$x1=mysqli_query($conn,$query1);
$arr2=mysqli_fetch_assoc($x1);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['name_hotel']." Hotel-Book";?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">'
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <link rel="icon" href="images/3.png" sizes="90x90">
<link rel="stylesheet" href="css/lightbox.min.css">
<script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js" integrity="sha256-J9avsZWTdcAPp1YASuhlEH42nySYLmm0Jw1txwkuqQw=" crossorigin="anonymous"></script>
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
        .checked {
  color: orange;
}
.cx:hover{

    -webkit-text-stroke: .5px  rgb(255,193,7);



}

.image_edit{

transition:1s;


}
.image_edit:hover{

filter:greyscale(100%);
transform:scale(1.1);

}


    </style>
</head>
<body>
    
<div class="container mt-5 mb-5 " style="-webkit-box-shadow: 7px -4px 19px 5px rgba(0,0,0,0.58); 
box-shadow: 7px -4px 19px 5px rgba(0,0,0,0.58); background-color: #F5FEFF; ">
<div class="row">
<div class="col-md-3 ">
<div class="mt-4 " style=" overflow:hidden;">
  <a href="hotels/<?php echo $_SESSION["image_h"];?>"  data-lightbox="mygallarey" data-title="<?php 
  echo $_SESSION['name_hotel'];
  
  ?>"> <img src="hotels/<?php echo $_SESSION["image_h"];?>" class="img-fluid image_edit"  alt="" ></a> 
</div>





<div class="mt-4">

    <form method="post" action="hdes.php">
        <div class="form-group">
          <label for="exampleInputEmail1 " style="font-weight:bold;font-family: 'Libre Baskerville';">Rooms</label>
          <input type="text"  name="rooms"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type number of Rooms">
         
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight:bold;font-family: 'Libre Baskerville';">Date</label>
          <input type="date" class="form-control" name="depart" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" style="font-weight:bold;font-family: 'Libre Baskerville';">Days</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="return">
          </div>
        <button type="submit" class="btn btn-warning text-white w-75 text-center ml-4 mt-2 mb-2"  style="font-family: 'Libre Baskerville';"name="book">Book</button>
      </form>


</div>

</div>




<div class="col-md-9 ">
<div>
<div class="row">
<h1 class="mt-4 ml-1 cx" style="font-family: 'Libre Baskerville';font-weight: bold;font-size:45px;"><?php echo  "{$_SESSION['name_hotel']}"." Hotel";?></h1>

</div>

<div class="row ">
    <div class="ml-3 mt-2">
        <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
    </div>
</div>
<div class="row mt-3 ml-2 d-flex">
    <i class="fas fa-map-marker-alt ml-1" style="color: blue;"></i>
    <h6 class="ml-2 " style="font-size:13px;"><?php echo $_SESSION['area_hotel'];?></h6>
</div>
<div class="row mt-4">
    <div class="col-md-11  ml-1" >
    <p style="line-height:2 ;font-size:17px ;font-family:'Libre Baskerville'!important;">
    <?php echo $_SESSION['description_h'];?>
</p>
</div>

<div class="row no-gutters mt-4 mb-4 "  style="width:95%;margin-left: 3%;">


<?php 

    $query1="select images from hotel_description where id_h1={$_SESSION['id_h']};";
    $x1=mysqli_query($conn,$query1);
    $arr2=mysqli_fetch_assoc($x1);

    while($arr2=mysqli_fetch_array($x1)){?>
<div class="col-md-3 m-1 ">
    <div style="height:120px;overflow: hidden;">
    
      <a href="h_images/<?php echo $arr2['images'];?>"data-lightbox="images"> <img src="h_images/<?php echo $arr2['images'];?>" class=" image_edit"  width="205" height="120" alt="" /></a> 
    </div>
</div>
<?php  }?>
</div>
</div>




    </div>

 

</div>

<div class="row d-flex justify-content-md-end  bg-success mt-4">
    <!-- <a class="btn btn-primary mr-5 "href="#" role="button" style="width:15%;">Link</a> -->

</div>

</div>

</div>







<?php
if(isset($_POST['book'])){

 

    $rooms=$_POST['rooms'];
  
    $depart=$_POST['depart'];
    $return=$_POST['return'];
    $id_u=$_SESSION['id'];
    $id_h=$_SESSION['id_h'];
    
    $query3="insert into book_hotel(id_u,id_h,Depart,rooms,Days)values('$id_u','$id_h','$depart','$rooms','$return');";
    if(mysqli_query($conn,$query3)){

?>

<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Booked',
  showConfirmButton: false,
  timer: 1700
})
</script>


<?php
      header("Refresh:2; url=hdes");      
        }  

}
?>
    




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>