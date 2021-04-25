<!DOCTYPE html>
<html>
<head>
  <title>MoneyPay Registartion</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="header">
    <div align="center">
  	<h2>
      <b>MoneyPay Registration</b>
    </h2>
  </div>
	
  <form method="post" action="registration.php">
  	<div class="from-group">
      <div align="center" class="container">

  	  <label for="fname">Username</label>
  	  <input type="text" id="fname" name="user" class="form-control">
  	</div>
  </div>
  <div class="from-group" align="center">
    <label>Mobile Number</label>
    <input type="Number" name="Mobile" class="form-control">
  </div>
  <div class="from-group" align="center">
    <label>Email</label>
    <input type="Email" name="Email" class="form-control">
  </div>
  <div class="from-group" align="center">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter Your Address" id="address" required="required">
  </div>
  <div class="from-group" align="center">
    <label>City</label>
    <input type="text" name="City" class="form-control">
  </div>
  <div class="from-group" align="center">
    <label>State</label>
    <input type="text" name="state" class="form-control">
  </div>
  <div class="from-group" align="center">
    <label>Aadhar Number</label>
    <input type="Number" name="Aadhar" class="form-control">
  </div>
  <div class="from-group" align="center">
    <label>Pancard Number</label>
    <input type="text" name="pan" class="form-control">
  </div>
  	<div class="from-group">
     <div align="center">
      <label> Password</label>
      <input type="Password" name="password" class="form-control">
  	</div>
  </div>
  <div align="center">
  	
  	  <button type="submit" class="btn btn-primary">Register</button>
  </div>
</div>
  <div align="center">
  	<p>
  		Already a member? <a href="login1.php">Login</a>
  	</p>
  </div>
  </form>
</body>
</html>