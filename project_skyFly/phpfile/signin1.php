<?php 


$email1=$id=$password1='';
$flag=1;
//session_start();
$errors1=array("Email"=>'',"password"=>'');

if(isset($_POST['in'])){
    if(empty($_POST['Email1'])){
    $errors1['Email']="required";
    

    }
    else{
       $email1= $_POST['Email1'];

    }


    if(empty($_POST['password1'])){
        $errors1['password']="required";
        }
        else{
            $password1= $_POST['password1'];

        }




  if(!array_filter($errors1)){

if($email1=="Admin" and $password1=="123")
header("location:Admin/hotels");
else{
$query="select password,Email,id_u from user_u";
        $x=mysqli_query($conn,$query);
    

while($arr=mysqli_fetch_array($x)){
if($arr['Email']==$email1 && password_verify($password1,$arr['password'])){
    $_SESSION['id']=$arr['id_u'];
    $_SESSION['email']= $email1;
    $_SESSION['password']= $password1;
    $flag=0;
    header("Refresh:0; url=index");  

    }
    
  
}

if($flag){
require_once('phpfile/error.php');
header("Refresh:2; url=signin");  
}
  }}
}
    ?>


    