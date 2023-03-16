<?php 

require("include/connect.php");
ob_start();
session_start();

$xx=$_SESSION['id_blog'];
$query="SELECT user_u.Fname,user_u.Lname,user_u.image,comments.comment ,comments.id_B,user_u.id_u from user_u INNER join comments on user_u.id_u=comments.id_u where id_B='$xx'
";
$x=mysqli_query($conn,$query);



while($arr=mysqli_fetch_array($x)){
  ?>
  <div style="width:100%;" class=" border border-secondary mb-3">
  
<img src="profileimage/<?php echo $arr['image'];?>" width="70" height="70" alt=""  class="rounded-circle mb-2  ml-2 mt-1 " style="; border:2px solid ;  display:inline-block">
<h4 style=" display:inline-block ;margin-left:2%;" class=""><?php echo $arr['Fname']." ".$arr['Lname'];?></h4>

<br>
<h6 style=" display:inline-block ;margin-left:2%;" class=""><?php echo $arr['comment'];?>


<h6 class="del"><a href="event<?php echo $_SESSION['num'];?>?i=<?php echo $arr['id_B'];?>&j=<?php echo $arr['id_u'];?>" class="btn btn-danger 

<?php if ($arr['id_u']!= $_SESSION['id']){ ?> d-none <?php   }?>" style="margin-left:83%" name="del"  onclick="getData(); return false" >Delete</a></h6>


</h6>
</div>
<?php

} 


?>

