<?php
$pageTitle = "Signup";
include "header.php"
 ?>

<body>

  <div class="container">
    <h2>Signup</h2>
    <form action="../submit_success/signup_success.php" method="POST">
      <div class="form-group">
        <?php
        if(isset($_GET['error'])=="emptyfields"){
          echo '<p class="error-class">Fill up all fields!</p>';
        }
        elseif((isset($_GET['useralreadyerror'])=="useralreadyexists")){
          echo '<p class="error-class">Username Taken!</p>';
        }
        elseif((isset($_GET['emailalreadyerror'])=="useralreadyexists")){
          echo '<p class="error-class">Email already exists!</p>';
        }
        elseif((isset($_GET['successs'])=="signup")){
          echo '<p class="error-class">User Registered Succesfully</p>';
        }
         ?>
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" placeholder="First Name" name="first_name">
      </div>
      <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="Username" name="username">
        <?php
        if(isset($_GET['uerror'])=="username_error"){
          echo '<p class="error-class">Invalid UserName</p>';
        }
        ?>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" placeholder="Email" name="email">
        <?php
        if(isset($_GET['eerror'])=="invalidemail"){
          echo '<p class="error-class">Invalid UserName</p>';
        }
        ?>
      </div>

      <div class="form-group">
        <label for="password1">Password:</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <div class="form-group">
        <label for="password2">Confirm Password:</label>
        <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
      </div>
      <?php
      if(isset($_GET['perror'])=="passwordmismatch"){
        echo '<p class="error-class">Invalid UserName</p>';
      }
      ?>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <button type="submit" name="submit_button" class="btn btn-success">Signup</button>
      <button type="submit" class="btn btn-danger">Cancel</button>

    </form>
  </div>

</body>
<?php
include "footer.php"

 ?>
