<?php
$pageTitle = 'Login';


include "header.php"

 ?>
<body>

  <div class="container">
    <h2>Login</h2>
    <form action="../submit_success/login_success.php" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
        <?php
        if(isset($_GET['error'])=="emptyfields"){

          echo '<p class="error-class">Fill up all fields!</p>';
        }
        elseif (isset($_GET['pperror'])=="wrongpassword") {
          echo '<p class="error-class">Wrong Password!</p>';
        }
        elseif (isset($_GET['usernoerror'])=="nouser") {
          echo '<p class="error-class">User Not Found!</p>';
        }
        elseif (isset($_GET['error'])=="signup"){
          echo '<p class="error-class">Something went wrong!</p>';
        }
        ?>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
      </div>
    
      <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
    </form>
  </div>

</body>
<?php
include "footer.php"

 ?>
