
<?php


require_once("include/connect.php");
session_start();
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
  
 move_uploaded_file($_FILES["file"]["tmp_name"],"profileimage/$name");


 $query="update user_u set image='$name'
 where id_u='{$_SESSION['id']}';";

mysqli_query($conn,$query);


}

?>