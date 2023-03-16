<?php


require('../include/connect.php');
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>Admin-Charts</title>
    <link rel="icon" href="../images/3.png" sizes="90x90">

   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/all.min.css">


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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
<?php

$query="select count(*) as count_h from book_hotel
";
$query1="select count(*) as count_f from get_plane
";
$query2="select count(*) as count_c from get_car
";
$x=mysqli_query($conn,$query);
$arr=mysqli_fetch_array($x);
$x1=mysqli_query($conn,$query1);
$arr2=mysqli_fetch_array($x1);
$x2=mysqli_query($conn,$query2);
$arr3=mysqli_fetch_array($x2);
?>
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Number of Booking'],
          ['Booked_Hotels', <?php echo $arr['count_h'];?>],
          ['Flight_Tickets', <?php echo $arr2['count_f'];?>],
          ['Cars', <?php echo $arr3['count_c'];?>]
       
        ]);

        var options = {
          title: 'Number of Booking for each Category'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>



<!--------------->


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

<?php
$query1="select sum(hotels.price*book_hotel.Days*book_hotel.rooms)as total_price from book_hotel INNER join hotels on hotels.idh=book_hotel.id_h
";
$arr1=mysqli_fetch_array(mysqli_query($conn,$query1));
$query2="SELECT sum(flight.price) as total_price from flight inner JOIN get_plane on flight.idf=get_plane.id_p";
$arr2=mysqli_fetch_array(mysqli_query($conn,$query2));

$query3="SELECT sum(get_car.Days*cars.price)as total_price from get_car INNER JOIN cars on cars.idc=get_car.id_c
";
$arr3=mysqli_fetch_array(mysqli_query($conn,$query3));

?>


    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Booked_Cars", "Total_Price", { role: "style" } ],
        ["Booked_Tickets",<?php echo $arr2['total_price'];?>, "red"],
        ["Booked_Cars", <?php echo $arr3['total_price'];?>, "silver"],
        ["Booked_Hotels", <?php echo $arr1['total_price'];?>, "gold"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total Price for Each Booked category",
        width: 600,
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

      <a class="navbar-brand  " href="hotels.php" style="font-weight:bold;font-family: 'Source Serif Pro', serif; font-size:30px;">Admin Page</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->

      <!-- Navbar -->
    

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->


      <ul class="sidebar navbar-nav bg-primary font-weight-bold  p-2">

      <div class="photo bg-white  img-fluid" style="  width:100px;height:100px; border:2px solid black; border-radius:100%;
      background-image: url('../images/director.jpg'); background-repeat: no-repeat; background-position:center;background-size:100%;"></div>
   
        <li class="nav-item ">
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
        <li class="nav-item ">
          <a class="nav-link" href="Blog">
          <i class="fab fa-blogger-b"></i>
            <span>Blogs</span></a>
          
        </li>

        <li class="nav-item">
          <a class="nav-link" href="users.php">
          <i class="fas fa-user-friends"></i>
            <span>Subscribers</span></a>
          
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Chart">
          <i class="fas fa-chart-area"></i>
                      <span>Chart</span></a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../signin">
          <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span></a>
          
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Show</a>
            </li>
            <li class="breadcrumb-item active">Chart</li>
          </ol>
        </div>
        <!-- /.container-fluid -->




        <!----------------------------------------->

 

<!------------>
<div class="container-fluid">
<div class="table-responsive">
<div class="row">


<div class="col-md-6 ">
  <div>
<div id="piechart" style="width:700px; height: 500px;"></div>
</div>
</div>
<div class="col-md-6">
  <div>
<div id="columnchart_values" style="width:500px; height: 300px;"></div>
</div>
</div>
</div>

</div>
</div>






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
