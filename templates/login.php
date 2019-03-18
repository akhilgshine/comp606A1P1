<?php
$pageTitle = 'Login';

include "header.php"
 ?>
<body>

  <div class="container">
    <h2>Login</h2>
    <form action="/action_page.php" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>

      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>

</body>
<?php
include "footer.php"

 ?>
