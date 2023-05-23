<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="{{asset('login/https://kit.fontawesome.com/a81368914c.js')}}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="login/img/mba.png">
	<div class="container">
		<div class="img">
			<img src="login/img/logos.png" style="width:300px ; margin-right:100px" >
		</div>
		<div class="login-content">
			<form action="{{route('postlogin')}}" method="post">
				{{csrf_field()}}
				<h1>FINANCE KOMITE</h1>
				<h2 class="title">Sign In</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login/js/main.js"></script>

	@include('sweetalert::alert')
</body>
</html>