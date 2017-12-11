<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="<?php echo BASE_URL;?>index.php?url=Userlogin/loginAuth" method="post">
			<h1>User Login</h1>
			<div>
				<input type="text" placeholder="Email" required="" name="email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="<?php echo BASE_URL;?>index.php?url=Userlogin/register">SignUp</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
