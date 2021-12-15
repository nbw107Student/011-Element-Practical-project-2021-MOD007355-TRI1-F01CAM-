
<?php include('registerdb.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="Register1.php">
  	<div class="fillingform">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="fillingform">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="fillingform">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="Login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
