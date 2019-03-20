<?php
if(isset($_POST['submit_button'])){
  include '../templates/db_connection.php';

   $first_name = $_POST["first_name"];
   $last_name = $_POST["last_name"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $confirm_password = $_POST["cpassword"];
   $username = $_POST["username"];
   if(empty($first_name)|| empty($last_name) ||empty($username)||empty($email) ||empty($password) || empty($confirm_password)){

     header("Location:../templates/signup.php?error=emptyfields&first_name=".$first_name."&last_name=".$last_name."&email=".$email."&username=".$username);
     exit();
   }
   elseif (!preg_match("/^[A-Za-z][A-Za-z0-9]*$/", $username)) {
     header("Location:../templates/signup.php?uerror=username_error&usrname=".$username);

     exit();
   }

   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     header("Location:../templates/signup.php?eerror=invalidemail&email=".$email);
     exit();
}

elseif ($password!==$confirm_password) {
  header("Location:../templates/signup.php?perror=passwordmismatch&email=".$email);
  exit();
}

elseif($username && $email){

  $sql="SELECT * FROM User WHERE  (username='$username' or email='$email');";
              $res=mysqli_query($conn,$sql);
              if (mysqli_num_rows($res) > 0) {
              // output data of each row
              $row = mysqli_fetch_assoc($res);
              if ($username==$row['username'])
              {
                header("Location:../templates/signup.php?useralreadyerror=useralreadyexists&email=".$email);
                exit();
              }
              elseif($email==$row['email'])
              {
                header("Location:../templates/signup.php?emailalreadyerror=useralreadyexists&email=".$email);
                exit();
              }
}
}
else{
  $password_hashed = password_hash($password,PASSWORD_DEFAULT);
  $query_save ="INSERT INTO User(first_name,last_name,email,username,password) VALUES ('$first_name','$last_name','$email','$username','$password_hashed')";
  $conn->query($query_save);
  header("Location:../templates/signup.php?successs=signup");
  exit();

}
}
else{
  header("Location:../templates/signup.php?error=signup");
  exit();

}
