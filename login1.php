<!DOCTYPE html>
<html>
<head>
  <title>MoneyPay Registartion</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
  <div class="header">
    <div align="center">
  	<h2>
      <b>MoneyPay Registration</b>
    </h2>
  </div>
	
  <form method="post" action="mainlogin.php">
  	<div class="from-group">
      <div align="center">
  	  <label>Username</label>
  	  <input type="text" name="user" class="form-control">
  	</div>
  </div>
 
  	<div class="from-group">
     <div align="center">
      <label> Password</label>
      <input type="Password" name="password" class="form-control">
  	</div>
  </div>
  <div align="center">
  	
  	  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</div>
  <div align="center">
  	<p>
  		Already a member? <a href="login.php">New User Registration</a>
  	</p>
  </div>
  </form>
</body>
</html>