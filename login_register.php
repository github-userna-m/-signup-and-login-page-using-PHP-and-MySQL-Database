<?php

require('connection.php');
session_start();

//this is for registration

if(isset($_POST['register'])){

//   $user_exist_query="SELECT EXISTS( SELECT * FROM mysql.user WHERE user='username')";
//   $result=mysqli_query($con,$user_exist_query);

$name=$_POST['username'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="SELECT username, email  FROM registrartion_user WHERE username='$name' OR email='$email' ";
$result=mysqli_query($con , $sql);
$num=mysqli_num_rows($result);


  if($result){
       if($num>0){
          $result_fetch=mysqli_fetch_assoc($result);
          if($result_fetch['username']===$name ){
             echo "<script> alert('$result_fetch[username].Username already taken') ;
              window.location.href='index.php';
             </script>";
            }
            else{
               echo "<script> alert('$result_fetch[email].Email already taken') ;
               window.location.href='index.php';
               </script>";
            }
        }
       else{ 
         // it will be executed when user is new

         $password=password_hash($pass,PASSWORD_BCRYPT);
           $query=" INSERT INTO registrartion_user (full_name , username , email , password ) VALUES ('$fullname','$name','$email','$password') ";

           $ans=mysqli_query($con , $query);
           if($ans){

               echo "<script> alert('Registration Successful.') ;
               window.location.href='index.php';
              </script>";
           }
           else{

               echo "<script> alert('Query can not run.') ;
               window.location.href='index.php';
              </script>";
           }
        }
    }
    else 
    {

        
      echo "
      die('sorry we failed to connect:'' . mysqli_connect_error());<script> alert('can not run the query') ;
        window.location.href='index.php';
       </script>";
       
    }
}


// this is for login form 

$email=$_POST['email_username'];
$pass=$_POST['password'];

if(isset($_POST['login'])){
   $query=" SELECT *  FROM registrartion_user WHERE email='$email' OR username='$email'  ";
   $result=mysqli_query($con, $query);
   if($result){

      if(mysqli_num_rows($result)==1){
         $result_fetch=mysqli_fetch_assoc($result);
         if(password_verify($pass ,$result_fetch['password'])){

            $_SESSION['logged_in']=true;
            $_SESSION['username']=$result_fetch['username'];
           header('location:index.php');
         }
         else{
            // if incorrect pass
            echo "<script> alert('PASSWORD Incorrect.') ;
               window.location.href='index.php';
              </script>";
         }

      }else{

         echo "<script> alert('EMAIL OR USERNAME not Registered.') ;
               window.location.href='home.php';
              </script>";
      }
   }
   else{
      echo "<script> alert('Query can not run.') ;
               window.location.href='index.php';
              </script>";
   }
}



?> 