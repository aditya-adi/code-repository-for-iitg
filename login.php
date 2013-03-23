<!DOCTYPE html>
<?php
if(isset($_GET['user'])) $user =  $_GET['user'];
else //redirect
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel = "stylesheet" href="assets/css/bootstrap.min.css">
	<title>IITG Code Repository</title>
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
		padding-left: 60px;
		padding-right: 60px;
	  }
    </style>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container">
			  <a class="brand disabled" href="#">Code Repo</a>
			  <form class="form-inline pull-right">
				  <input type="text" class="input" placeholder="Email">
				  <input type="password" class="input" placeholder="Password">
				  <label class="checkbox">
					<input type="checkbox"><span class="label label-inverse">Remember me</span>
				  </label>
				  <button type="submit" class="btn">Sign in</button>
				</form>
			</div>
		  </div>
	</div>
	<div class="container-fluid">
		<h1>Create A New Account</h1>
		<form class="form-horizontal" method="POST" action="">
		  <div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
			<div class="controls">
			  <input type="text" id="inputEmail" placeholder="Email">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="first_name">First Name</label>
			<div class="controls">
			  <input type="text" id="inputFirstName" placeholder="First Name">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="last_name">Last Name</label>
			<div class="controls">
			  <input type="text" id="inputLastName" placeholder="Last Name">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
			  <input type="password" id="inputPassword" placeholder="Password">
			</div>
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <label class="checkbox">
				<input type="checkbox"> Remember me
			  </label>
			  <button type="submit" class="btn">Sign in</button>
			</div>
		  </div>
		</form>
	</div>
	
	
	<script src="assets/js/jquery-1.9.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	</body>
</html>
