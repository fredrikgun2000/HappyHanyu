<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	
 	@media (max-width: 575.98px) {
 		.col-xss-6{
 			width: 50%;
 		}
	}
</style>
<body>
	<h3 style="text-align: center;" class="my-3">Happy <span style="color: #28df99;">汉语</span></h3>
	<div class="container-fluid">
		<form method="POST" action="/login/post">
			@csrf
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-xss-6">Username</div>
				<div class="col-lg-6 col-sm-6 col-xss-6">Password</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-xss-6">
					<input type="text" name="username" class="form-control">
				</div>
				<div class="col-lg-6 col-sm-6 col-xss-6">
					<input type="password" name="password" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button type="submit" class="form-control my-3" style="background-color: #28df99; color: white;">submit</button>
				</div>
			</div>
		</form>
		<a href="/register">Dont have a Account</a>
	</div>
</body>
</html>