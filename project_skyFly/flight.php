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
    <link rel="stylesheet" href="css/flights.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
</style>

</head>
<body>
   
    <header>
 
    
        <nav class="navbar navbar-expand-lg navbar-light   nav1" id="nav1">
        <a class=" navbar-brand  title5" style="width:17%; height:110px; margin-left:15%;"  id="title2"  href="#">
  <img src="images/3.png "class="logo" style="height:120px;width:100%;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  coll" id="navbarNavDropdown">
          <ul class="navbar-nav "> 
            <li class="nav-item active  li1 ml-1" id="ele">
              <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown drop1  ml-4">
              <a  id="ele1" class="nav-link dropdown-toggle font-weight-bold text-5" style="color: #007bff;font-size:20px;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Book
              </a>
              <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item li1 text-primary" href="hotel">Hotels</a>
                <a class="dropdown-item li1 text-primary" href="car">Cars</a>
              </div>
            </li>
            <li class="nav-item    li1 ml-2"  id="ele">
        <a class="nav-link" href="cancle/hotels">Your Books</a>
      </li>




      
            <li class="nav-item    li1 ml-4" id="ele" >
              <a class="nav-link" href="event1">Blog</a>
            </li>
           

          
         
          </ul>
        </div>
      </nav>
      
      

      <div class="container-fluid image ">


        <img class="img-fluid mt-5" src="https://demokaliumsites-laborator.netdna-ssl.com/travel/wp-content/uploads/2017/06/map-2.png?id=354" alt="image1">
      




      </div>
      

      <h2 class="position-absolute text-center  destination">  Pick Up Your flight </h2>
      <h6 class="position-absolute text-center destination2">start your journey by getting tickets for flights,high class flight and low cost ticket.</h6>
      </header>










    <!------------------------------------------->



<div class="container mb-5">

<div class="row col-xl-12 col-sm-12   col-lg-8  col-md-8 ">
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
  
              $query="select * from flight";
  
             $x=mysqli_query($conn,$query);
  
             while($arr=mysqli_fetch_array($x)){
  
            ?>
            <tr>
              <th scope="row"><?php echo $arr['idf'];?></th>
              <td><?php echo date("j F Y",strtotime($arr['departd'])) ;?></td>
              <td><?php echo date("j F Y", strtotime($arr['returnd'])) ; ?></td>
              <td><?php echo $arr['departt'] ; ?></td>
              <td><?php echo $arr['returnt'] ; ?></td>
              <td><?php echo $arr['price']."$"; ?></td>
              <td><img src="areas/<?php echo $arr['flocation'] ; ?>" alt="" height=30; width=40;></td>
              <td><a href='flight?idf=<?php echo $arr['idf']; ?>'  class=" btn btn-danger"   >Book</a></td>
            </tr>
  
  
  
          <?php
             }
          ?>
  
  
          </tbody>
        </table>
  </div>
</div>
    </div>
  





      <script src='js/jquery-min.js'></script>
      <script src='js/popper.min.js'></script>
      <script src='js/bootstrap.min.js'></script>
    
<script src='https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js'></script>
      </script>


<script >


$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

<?php

if(isset($_GET['idf']))
{
 $id_plane=$_GET["idf"];
 $id_user=$_SESSION['id'];
$query="insert into get_plane(id_u,id_p)values('$id_user','$id_plane');";
if(mysqli_query($conn,$query))
{
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
      header("Refresh:2; url=flight");      
        }  

}
?>
</body>
</html>