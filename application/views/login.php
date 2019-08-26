<!DOCTYPE html>
<html>
<head>
	<title>SPK - Duta Genre (metode ahp)</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?>">
	
</head>
<body>

<nav class="navbar fixed-top navbar-dark bg-dark" style="background-color: #77E592;">
<center><h1>SPK - Duta Genre (Metode AHP)</h1></center>
</nav>
	<div class="container">
		
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8"></div>
			<div class="col-xs-12 col-sm-8 col-md-4">


			<div class="panel panel-default"><div class="panel-body">
				<div class="text-center"><h2>Login</h2></div>
				<form action="<?php echo base_url('autentication/login') ?>" method="post" >
				<div class="form-group">
					<label for="InputUsername">Username</label>
					<input type="text" class="form-control" type="text" name="username" id="InputUsername" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label for="InputPassword">Password</label>
					<input type="password" class="form-control" type="password" name="password" id="password" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>

				</form>		
			</div>
			
		</div>

</body>
</html>