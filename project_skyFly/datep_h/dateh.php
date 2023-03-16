<?php
require('../include/connect.php');
session_start();
ob_start();
if(isset($_GET['idc'])){

    $_SESSION['id_c']=$_GET['idc'];
    $e= $_SESSION['id_c'];
$query="select name from cars where idc='$e'";
$x=mysqli_query($conn,$query);
$arr=mysqli_fetch_array($x);
$_SESSION['name_car']=$arr['name'];

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">
    <link rel="icon" href="../images/3.png" sizes="90x90">
    <!-- Title Page-->
    <title>Fill detailes</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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

</style>

</head>

<body>
    <div class="page-wrapper bg-img-1   p-b-100" style="padding:1px; background: url('https://tipsmake.com/data/images/20-super-cool-hd-car-wallpapers-picture-1-m1j2NUxJw.jpg')
    left center/auto no-repeat !important;">
        <div class="wrapper wrapper--w680"  style="margin-top:4%; padding:1px; ">
            <div class="card card-1">
                <div class="card-body">
                    <ul class="tab-list" style="background-color:rgb(165,2,3);">
                        <li class="tab-list__item active"  >
                            <a class="tab-list__link" href="#tab1" data-toggle="tab"  style=" font-family: 'Merriweather', serif;"><?php echo $_SESSION['name_car']."  Car"; ?></a>
                        </li>
                    </ul>
                    <div class="tab-content" >
                     
                   
                        <div class="tab-pane active" id="tab3">
                            <form method="POST" action="dateh.php">
                
                                <div class="input-group">
                                    <label class="label">Days</label>
                                    <input class="input--style-1" type="text" name="destination" placeholder="Type Number of Days" required="required">
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Recieving Date:</label>
                                            <input class="input--style-1" type="date" name="check-in" placeholder="mm/dd/yyyy" id="input-start-2">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Time:</label>
                                            <input class="input--style-1" type="time" name="check-out" placeholder="mm/dd/yyyy" id="input-end-2">
                                        </div>
                                    </div>
                                </div>
                         
                                <input  class="btn-submit" type="submit" name="click"  value="Submit"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php



if(isset($_POST['click'])){

$days=$_POST['destination'];
$date=$_POST['check-in'];
$time=$_POST['check-out'];
$id_u=$_SESSION['id'];
$id_c=$_SESSION['id_c'];
$query="insert into get_car (id_u,id_c,Receiving_date,Days,Time)values('$id_u','$id_c','$date','$days','$time');";
if(mysqli_query($conn,$query)){
 
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


}}?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
   
    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
