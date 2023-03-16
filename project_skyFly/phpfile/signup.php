<?php
require('include/connect.php');
$fname=$lname=$email=$passport=$password=$identity=$mastercard='';
$errors=array("firstname"=>'',"Lastname"=>'',"Email"=>'',"passport"=>'',"password"=>'',"identity"=>'',"mastercard"=>'');
if(isset($_POST['signupButton'])){    
$filename=$_FILES['image1']['name'];
$filetemp=$_FILES['image1']['tmp_name'];
$randomname=uniqid();
$ext=pathinfo($filename,PATHINFO_EXTENSION);
$filename="$randomname"."."."$ext";
move_uploaded_file($filetemp,"profileimage/$filename");
     
            



if(empty($_POST['firstname'])){
$errors['firstname']="required";
$_SESSION['f1']="";

}
    else{

        $fname=$_POST['firstname'];
          $_SESSION['f1']=$fname;
         
    
    }


    if(empty($_POST['Lastname'])){
        $errors['Lastname']="required";
        $_SESSION['l1']="";
    }
        else{
        $lname=$_POST['Lastname'];
        $_SESSION['l1']=$_POST['Lastname'];
        }

        if(empty($_POST['Email'])){
            $errors['Email']="required";
            $_SESSION['E1']="";
            
            }
else{

    $email=$_POST['Email'];
    $_SESSION['E1']=$_POST['Email'];
}


            if(empty($_POST['passport'])){
                $errors['passport']="required";
                $_SESSION['passport']="";

                
                }
                else{

                    $passport= $_POST['passport'];
                    $_SESSION['p1']=$_POST['passport'];
                }   
                
            if(empty($_POST['Identity'])){
                $errors['identity']="required";
                $_SESSION['identity']="";
                
                }      
                else{

                    $identity=$_POST['Identity'];
                    $_SESSION['I1']=$_POST['Identity'];

                }

                if(empty($_POST['mastercard'])){
                    $errors['mastercard']="required";
                    $_SESSION['mastercard']="";
                    
                    }      
                    else{
                        $mastercard= $_POST['mastercard'];
                        $_SESSION['M1']=$_POST['mastercard'];

                    }

                    if(empty($_POST['password'])){
                        $errors['password']="required";
                        $_SESSION['password']="";
                        ?>




                        <?php
                        }
                        else{




                            $password=$_POST['password'];
                            $_SESSION['pass']=$_POST['password'];
                            
                        }

                        if(!array_filter($errors)){
                       /// require_once("phpfile/verify.php");

 $password=password_hash($password,PASSWORD_DEFAULT);

 $query="insert into `user_u` (id_u,Fname,Lname,Email,password,passport,M_card,image) 
   VALUES ('$identity','$fname','$lname','$email','$password','$passport','$mastercard','$filename');";
  

        if(mysqli_query($conn,$query)){
           session_destroy();
           $_SESSION['pass']="";
            require_once("phpfile/s.php");
        
      header("Refresh:2; url=signin");  

        } 
        
        

        else{

require_once("phpfile/e.php");
header("Refresh:2; url=signin");  

        }
                   
                        }
                 
                        
                        
                        
                        
                        }?>

