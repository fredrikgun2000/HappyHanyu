<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">
	a{
		color: black;
		border: none;

	}
	a:hover{
		border: none;
		color: black;
	}
</style>
<body style="background-color: #f1f3f8;">
	<nav class="navbar" style="background-color: #28df99;">
	  	<a class="navbar-brand text-light">Happy 汉语</a>
	    <div class="btn-group">
  <span  class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{Session::get('username')}}
  </span>
  <div class="dropdown-menu dropdown-menu-right">
    <a href="/logout" class="dropdown-item text-danger">Logout</a>
  </div>
</div>
	</nav>
	<input type="hidden" id="username" value="{{Session::get('username')}}">
	@yield('home')
	@yield('insertdata')
	@yield('data')

</body>
<script src="/assets/js/main.js"></script>
</html>