<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="section">




<div class="header" style="	width: 30% ">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php" style="	width: 30%;">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Korisničko ime</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Šifra</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Nemate korisnički račun? <a href="register.php" style="color:rgb(247, 105, 105);">Registrujte se</a>
		</p>
	</form>

</div>





  <style>




</style> 



</body>
</html>