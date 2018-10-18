<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SUT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="login">

	<!-- <div class="container">
		<img src="assets/img/logo.png" class="img-responsive">
		<div class="login">
			<form >
				<input type="text" name="id" class="form-control" placeholder="نام کاربری">
				<input type="password" name="password" class="form-control" placeholder="گذر واژه">
				<button type="submit" class="btn btn-primary btn-lg btn-block">ورود</button>
			</form>
		</div>
	</div> -->
	<div id="login" class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4">
				<img src="assets/img/logo.png" class="col-10">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-md-4">
				<div class="login rounded">
					<form action="">
						<input type="text" name="id" class="form-control" placeholder="نام کاربری">
						<input type="password" name="password" class="form-control" placeholder="گذر واژه">
						<button type="submit" class="btn btn-primary btn-lg btn-block">ورود</button>
					</form>
				</div>
			</div>
		</div>
	</div>


<?php 
	include "footer.php";
?>
