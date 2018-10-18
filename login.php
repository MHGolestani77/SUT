<?php $ref = rand()*rand(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SUT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/styles.css?<?php echo $ref; ?>">
</head>
<body class="login">
	<div id="login" class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
				<img src="assets/img/logo.png" class="col-10">
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
				<div class="login rounded">
					<form action="">
						<input type="text" name="id" class="form-control" placeholder="نام کاربری">
						<input type="password" name="password" class="form-control" placeholder="گذرواژه">
						<button type="submit" class="btn btn-primary btn-lg btn-block">ورود</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
