<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 	
 	<center>
 	<div class = "login" >
	<div class="kotak_judul" style="background-color: #283244">
		<p class="tulisan_login">Sign In</p>
	</div>
 		<div class= "kotak_login">
         <form method="post" action="{{url('loginPost')}}"><br>
         
	    {{ csrf_field() }}	
			<input type="text" name="username" class="form_login" placeholder="username">
			<div class="form-border"></div>
 		<br><br>
			<input type="password" name="password" class="form_login" placeholder="password">
			<div class="form-border"></div>
 		<br><br>

 		<center>
            <button type="submit" style="color: white; background-color: #283244; border-radius: 15px; padding: 5px 15px; margin: 1px auto">LOGIN</button>
 			<div class="row">
 				<div class="col-sm-1 text-center tombol">
 			</div><br>
 			<div class="col-sm-1 text-center tombol"></div>
			<a href="/" style="color: white; background-color: #A05968; border-radius: 15px; padding: 5px 10px;">CANCEL</a>
		</div>
			<br>
			<br>
			<link rel="stylesheet" type="text/css"><a href="#" style="color: #706C6C;">Forgot your password?</link></a>
 		</center>
		</form>
	</div>
</div>
</center> 
</body>
</html>