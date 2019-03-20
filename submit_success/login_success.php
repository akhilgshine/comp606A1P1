<?php
if(isset($_POST['login-submit'])){
  include '../templates/db_connection.php';

   $email = $_POST["email"];
   $password = $_POST["password"];

   if(empty($email) ||empty($password)){


     header("Location:../templates/login.php?error=emptyfields&usrname=".$email);

     exit();
   }
   else {
     $query_save = "SELECT * FROM User WHERE email=? AND username=?";
     $sql="SELECT * FROM User WHERE  (username='$email' or email='$email');";
     $res=mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($res);
       if($row){
         $password_decrypt = password_verify($password,$row['password']);
         if($password_decrypt==false){
           header("Location:../templates/login.php?pperror=wrongpassword");
           exit();
         }
         elseif($password_decrypt==true){
           session_start();
           $_SESSION['user_id'] = $row['id'];
           $_SESSION['user_name'] = $row['username'];
            header("Location:../submit_success/user_page.php?login=success");
            exit();
         }
       }
       else {
         header("Location:../templates/login.php?usernoerror=nouser");
         exit();
       }


     }

   }

else{
  header("Location:../templates/signup.php?error=signup");
  exit();

}
