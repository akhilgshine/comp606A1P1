<?php
$pageTitle = "Signup";
include "header.php"
 ?>
<body>

  <div class="container">
    <h2>Signup</h2>
    <form action="/signup_page.php" method="POST">
      <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" id="" placeholder="First Name" name="fname">
      </div>
      <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" id="" placeholder="Last Name" name="lname">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label for="password1">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
      </div>
      <div class="form-group">
        <label for="password2">Confirm Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Confirm Password" name="cpassword">
      </div>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <button type="submit" class="btn btn-success">Signup</button>
      <button type="submit" class="btn btn-danger">Cancel</button>

    </form>
  </div>

</body>
<?php
include "footer.php"

 ?>
