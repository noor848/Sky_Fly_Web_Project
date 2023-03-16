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
    <title>Admin-Hotels</title>
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
   
        <li class="nav-item active">
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
        <li class="nav-item">
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
            <li class="breadcrumb-item active">Hotels</li>
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


  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#xx" role="tab" aria-controls="pills-profile" aria-selected="false">Add-page-information</a>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


  <div class="container ">
  <div class="table-responsive">
<table class="table table-striped table_id" id="example">
    <thead>
      <tr>
        <th scope="col">IDH</th>
        <th scope="col">NAME</th>
        <th scope="col">PRICE_PER_DAY</th>
        <th scope="col">Description</th>
        <th scope="col">LOCATION</th>
        <th scope="col">IMAGE</th>
        <th scope="col"></th>
      
      </tr>
    </thead>




    <tbody>
      <?php
        $query="SELECT * FROM hotels
        ;";

       $x=mysqli_query($conn,$query);
       
       while($arr=mysqli_fetch_array($x)){

      ?>
      <tr>
        <th scope="row"><?php echo $arr['idh'] ;?></th>
        <td class="w-10"><?php echo $arr['name'] ; ?></td>
        <td class="w-10"><?php echo $arr['price'] ;?></td>
        <td ><?php echo  $arr['description'] ;?></td>
        <td><img class="img-fluid text-center" src= "../areas/<?php echo $arr['flag'];?>" height="30"width="30" alt=""/></td>
        <td><img  class="img-fluid"src="../hotels/<?php echo $arr['image'];?>"  width="100" alt=""/></td>
        <td class="d-flex"><a href='hotels.php?delete=<?php echo $arr['idh']; ?>' class='btn btn-danger  mr-1'>Delete</a>
        <a href='hotels.php?update=<?php echo $arr['idh']; ?>' class='btn btn-primary'>Edit</a>
      </td>
        
      </tr>
    <?php
       }
    ?>


<?php

if(isset($_GET['update']))
{

  $query="select * from hotels where idh='{$_GET['update']}'";
 $x= mysqli_query($conn,$query);
  $arr=mysqli_fetch_array($x);
  $id=$arr['idh'];
?>

<div class="table-responsive">

  <table class="table table-sm">
  <thead>
    <tr>
  
        <th scope="col" >NAME</th>
        <th scope="col">PRICE_PER_DAY</th>
        <th scope="col">Area</th>
        <th scope="col">Description</th>
        <th scope="col">LongD</th>
        <th scope="col"></>
    </tr>
  </thead>
  <tbody>
    <tr>
      <form method="post" action="hotels.php">
      <input type="hidden" name="hotel" value=<?php echo $id;?>>
   
      <td ><input  name="name1" type="text" value=<?php  echo $arr['name'];?>></td>
      <td><input   name="price1"  type="text" value=<?php  echo $arr['price'];?> ></td>
      <td><input  name="area1"  type="text" value=<?php  echo $arr['area'];?> ></td>
      <td><textarea   name="description"  type="text" cols="25" rows="7" id="editor2"><?php  echo $arr['description'];?></textarea></td>
      <td><textarea   name="long"  type="text" cols="25" rows="7" id="editor"><?php  echo $arr['long_desc'];?></textarea></td>
      <td>  <button type="submit" class="btn btn-primary" name="submit">Edit</button></td>
      </form>
    </tr>
  </tbody>
  
</table>

</div>
<?php

}

if(isset($_POST['submit'])){
$id_hotel=$_POST['hotel'];
$price=$_POST['price1'];
$name=$_POST['name1'];
$area=$_POST['area1'];
$long=$_POST['long'];

$descr=$_POST['description']; 
$query="update hotels set price='$price',name='$name',description='$descr',area='$area',long_desc='$long' where idh='$id_hotel';";

if(mysqli_query($conn,$query)){

?>


<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1700
})
</script>


<?php
header('refresh:2;hotels.php');
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
<form method="post" action="hotels.php" enctype="multipart/form-data">
    

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name....." name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price_Per_day</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Area</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Area" name="area">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Description</label>
    <textArea type="text" class="form-control"   height="150" name="description"placeholder="Description"  id="editor3"></textArea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Loaction</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name='image1'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name='image2'>
  </div>
  <button type="submit" class="btn btn-primary" name="add">Add</button>
</form>
</div>
</div>
</div>

  </div>



  <div class="tab-pane fade ml-4 mt-3" id="xx" role="tabpanel" aria-labelledby="pills-profile-tab">
 


<div class="container">
  <div class="row">
  <form method="post" action="hotels" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Number Of Hotel</label>
    <input type="text" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Hotel Number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" name="i_h" id="exampleFormControlFile1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="adx">Add</button>
</form>
    </div>
    </div>


    </div>
</div>


</div>

<?php

if(isset($_POST['adx'])){

$no= $_POST['number'];
$filename=$_FILES['i_h']['name'];
$templocation=$_FILES['i_h']['tmp_name'];
$randomString=uniqid();
$p=pathinfo($filename,PATHINFO_EXTENSION);
$filename=$randomString.'.'.$p;
move_uploaded_file($templocation,"../h_images/$filename");
$query1="insert into hotel_description (id_h1,images)values('$no','$filename');";
if(mysqli_query($conn,$query1)){


  ?>

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
header('refresh:2;hotels');
}
}




?>











<?php
if(isset($_POST['add'])){
 
$name = $_POST['name'];
$price2=$_POST['price'];
$description = $_POST['description'];

$filename1=$_FILES['image1']['name'];
$tempname1=$_FILES['image1']['tmp_name'];
 $randomString=uniqid();
$imageType=pathinfo($filename1,PATHINFO_EXTENSION);
 $filename1=$randomString.'.'.$imageType;
 move_uploaded_file($tempname1,"../areas/$filename1");


 $filename2=$_FILES['image2']['name'];
 $tempname2=$_FILES['image2']['tmp_name'];
  $randomString2=uniqid();
 $imageType2=pathinfo($filename2,PATHINFO_EXTENSION);
  $filename2=$randomString2.'.'.$imageType2;
  move_uploaded_file($tempname2,"../hotels/$filename2");

$area=$_POST['area'];


$query="insert into hotels (name,price,image,flag,description,area)values('$name','$price2','$filename2','$filename1','$description','$area');";
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
header('refresh:2;hotels');}
}?>






        <!--------------------------->





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

<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?php




if(isset($_GET['delete']))
{
$id_hotel=$_GET["delete"];
$query="delete from hotels where idh='$id_hotel'";
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


 
header("refresh:2;url=hotels.php");
}}
?>


<scrip src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.min.js"></>
  </body>

</html>
