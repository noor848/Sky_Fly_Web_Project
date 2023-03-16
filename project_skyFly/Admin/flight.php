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
    <title>Admin-Flights</title>
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
        <li class="nav-item active">
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
        <li class="nav-item ">
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
              <a href="#">EDIT</a>
            </li>
            <li class="breadcrumb-item active">Flights</li>
          </ol>
        </div>
        <!-- /.container-fluid -->




        <!----------------------------------------->

  <div class="container">
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Update\Delete </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Add</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


  <div class="container ">
  <div class="table-responsive">

<table class="table table-striped table_id" id="example">
    <thead>
      <tr>
      <th scope="col">IDF</th>
            <th scope="col">DEPARTDATE</th>
            <th scope="col">RETURNDATE</th>
            <th scope="col">DEPARTTIME</th>
            <th scope="col">RETURNTIME</th>
            <th scope="col">PRICE</th>
            <th scope="col">FLOCATION</th>
            <th scope="col"></th>
      
      </tr>
    </thead>




    <tbody>
      <?php
        $query="SELECT * FROM flight
        ;";

       $x=mysqli_query($conn,$query);
       
       while($arr=mysqli_fetch_array($x)){

      ?>
      <tr>
      <th scope="row"><?php echo $arr['idf'];?></th>
            <td><?php echo $arr['departd'] ;?></td>
            <td><?php echo $arr['returnd'] ; ?></td>
            <td><?php echo $arr['departt'] ; ?></td>
            <td><?php echo $arr['returnt'] ; ?></td>
            <td><?php echo $arr['price'] ; ?>$</td>
            <td><img src="../areas/<?php echo $arr['flocation'] ; ?>" alt="" height=30; width=40;></td>
        <td  class="d-flex">
          <a href='flight.php?delete=<?php echo $arr['idf']; ?>' class='btn btn-danger mr-1'>Delete</a>
        <a href='flight.php?update=<?php echo $arr['idf']; ?>' class='btn btn-primary'>Edit</a>
      </td>
        
      </tr>
    <?php
       }
    ?>
<?php

if(isset($_GET['delete']))
{
$id_flight=$_GET["delete"];
$query="delete from flight where idf='$id_flight'";
if(mysqli_query($conn,$query)){

?>



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

 
header("refresh:2;url=flight");
}}
?>

<?php

if(isset($_GET['update']))
{

  $query="select * from flight where idf='{$_GET['update']}'";
 $x= mysqli_query($conn,$query);
  $arr=mysqli_fetch_array($x);
  $id=$arr['idf'];
?>
<div class="table-responsive">

  <table class="table table-sm">
  <thead>
    <tr>
    <th scope="col">IDF</th>
    <th scope="col">DEPARTDATE</th>
            <th scope="col">RETURNDATE</th>
            <th scope="col">DEPARTTIME</th>
            <th scope="col">RETURNTIME</th>
            <th scope="col">PRICE</th>
            <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <form method="post" action="flight.php">
      <input type="hidden" name="flight" value=<?php echo $id;?>/>
      <th scope="row"><?php echo $id;?></th>
      <td><input  name="departd" type="text" value=<?php  echo $arr['departd'];?>></td>
      <td><input  name="returnd"  type="text" value=<?php  echo $arr['returnd'];?> ></td>
      <td><input  name="departt"  type="text" value=<?php  echo $arr['departt'];?> ></td>
      <td><input  name="returnt"  type="text" value=<?php  echo $arr['returnt'];?> ></td>
      <td><input  name="price"  type="text" value=<?php  echo $arr['price'];?> ></td>
      <td>  <button type="submit" class="btn btn-primary" name="submit">Edit</button></td>
      </form>
    </tr>
  </tbody>
</table>

</div>
<?php

}

if(isset($_POST['submit'])){
$id_flight=$_POST['flight'];
$departd=$_POST['departd'];
$returnd=$_POST['returnd'];
$departt=$_POST['departt'];
$returnt=$_POST['returnt'];
$price=$_POST['price'];

$query="update flight set price='$price' , returnt='$returnt' , departt='$departt' , returnd='$returnd' , departd='$departd'
where idf='$id_flight';";
if(mysqli_query($conn,$query)){?>



<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php



header('refresh:2;flight');
}}



?>



    </tbody>
  </table>
</div>
</div>



  
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="container ">
  <div class="row-md-8">
    <div class="col-md-5">
<form method="post" action="flight.php" enctype="multipart/form-data">
    

  <div class="form-group">
    <label for="exampleInputEmail1">depart_Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="depart_Date" name="depart_Date">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">return_Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="return_Date" name="return_Date">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">depart_Time</label>
    <input type="time" class="form-control" id="exampleInputPassword1"  height="150" name="depart_Time"placeholder="depart_Time" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">return_Time</label>
    <input type="time" class="form-control" id="exampleInputPassword1"  height="150" name="return_Time"placeholder="return_Time" >  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">price</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  height="150" name="price"placeholder="price" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Location</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name='Location'>
  </div>
  <button type="submit" class="btn btn-primary" name="add">Add</button>
</form>
</div>
</div>
</div>

  </div>

</div>


</div>
<?php
if(isset($_POST['add'])){
 
$depart_Date = $_POST['depart_Date'];
$return_Date=$_POST['return_Date'];
$depart_Time = $_POST['depart_Time'];
$return_Time = $_POST['return_Time'];
$price=$_POST['price'];
$filename1=$_FILES['Location']['name'];
$tempname1=$_FILES['Location']['tmp_name'];
 $randomString=uniqid();
$imageType=pathinfo($filename1,PATHINFO_EXTENSION);
 $filename1=$randomString.'.'.$imageType;
 move_uploaded_file($tempname1,"../areas/$filename1");


$query="insert into flight (departd,returnd,departt,returnt,price,flocation)values('$depart_Date','$return_Date','$depart_Time','$return_Time','$price','$filename1');";
if(mysqli_query($conn,$query)){?>

<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Added',
  showConfirmButton: false,
  timer: 1700
})
</script>

<?php
header('refresh:2;flight');}
}?>






        <!--------------------------->





    <!-- Scroll to Top Button-->
 








    <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © SKYFLY 2021</span>
            </div>
          </div>
        </footer> -->




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
