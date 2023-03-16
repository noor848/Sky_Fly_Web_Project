<?php


require('../../include/connect.php');
session_start();
ob_start();
if(isset($_GET['show'])){


$_SESSION['user'] = $_GET['show'];




}
$user=$_SESSION['user'];

?>
  


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>Users-Hotels</title>

   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="icon" href="../../images/3.png" sizes="90x90">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../css/all.min.css">
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

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

    
    <a class="navbar-brand  " href="hotels" style="font-weight:bold;font-family: 'Source Serif Pro', serif; font-size:35px;">User Booking </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0 ml-5" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->

      <!-- Navbar -->
    

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->


      <ul class="sidebar navbar-nav bg-primary font-weight-bold ">

        <li class="nav-item active mt-3">
          <a class="nav-link" href="hotels">
          <i class="fas fa-hotel"></i>
            <span>Hotels</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="cars">
          <i class="fas fa-car"></i>
            <span>Cars</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="flight">
          <i class="fas fa-helicopter"></i>
            <span>Flights</span></a>
          
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">user</a>
            </li>
            <li class="breadcrumb-item active">Hotels</li>
          </ol>
        </div>
        <!-- /.container-fluid -->





<div class="container ">
<div class="table-responsive">
<table class="table table-striped table_id" id="example">
    <thead>
      <tr>
        <th scope="col">NAME</th>
        <th scope="col">PRICE_PER_DAY</th>
        <th scope="col">LOCATION</th>
        <th scope="col">DAYS</th>
        <th scope="col">DEPART</th>
        <th scope="col">Rooms</th>
        <th scope="col"></th>
      
      </tr>
    </thead>




    <tbody>
      <?php
        $idu=$_SESSION['id'];
        $query="SELECT hotels.name,hotels.idh,hotels.price,hotels.area ,book_hotel.Days,book_hotel.Depart,book_hotel.rooms FROM hotels INNER JOIN book_hotel ON hotels.idh = book_hotel.id_h
        where id_u='$user'
        ;";

       $x=mysqli_query($conn,$query);
       
       while($arr=mysqli_fetch_array($x)){

      ?>
      <tr>
        <td><?php echo $arr['name'] ; ?></td>
        <td><?php echo $arr['price'] ;?></td>
        <td><?php echo $arr['area'] ; ?></td>
        <td><?php echo $arr['Days'] ;?></td>
        <td><?php echo $arr['Depart'] ;?></td>
        <td><?php echo $arr['rooms'] ; ?></td>
        <td><a href='hotels.php?idh=<?php echo $arr['idh']; ?>' class='btn btn-danger'>Delete</a></td>
      </tr>
    <?php
       }
    ?>
<?php

if(isset($_GET['idh']))
{
$id_hotel=$_GET["idh"];
$id_user=$_SESSION['id'];
$query="delete from book_hotel where id_h='$id_hotel' and id_u='$user'";
if(mysqli_query($conn,$query))
{?>
<script>
Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Deleted',
  showConfirmButton: false,
  timer: 1700
})
</script>
<?php  

header("refresh:2;url=hotels");
}
}
?>

    </tbody>
  </table>
</div>
</div>






    <!-- Scroll to Top Button-->
 








    <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © SKYFLY 2021</span>
            </div>
          </div>
        </footer>




        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <!-- Bootstrap core JavaScript-->
   
    <script src='../js/jquery-min.js'></script>
      <script src='../js/popper.min.js'></script>
      <script src='../js/bootstrap.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js'></script>
      </script>


      <script >


$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
  </body>

</html>
