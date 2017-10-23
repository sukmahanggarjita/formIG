<?php
	$fullname=$_POST["fullname"];
	$email=$_POST["email"];
	$user=$_POST["user"];
	$pw=$_POST["pw"];
	if (empty($fullname) )
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
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
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="Login with Facebook"></a>
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
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="Please insert Mobile Number of Email!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="Please insert Full Name!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="Please insert Username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="Please Insert Password!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
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
<?php }
else if (empty($email) )
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
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
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="Login with Facebook"></a>
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
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="Please insert Mobile Number of Email!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="Please insert Full Name!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="Please insert Username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="Please Insert Password!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
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
<?php }
else if (empty($user))
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
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
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="Login with Facebook"></a>
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
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="Please insert Mobile Number of Email!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="Please insert Full Name!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="Please insert Username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="Please Insert Password!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
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
<?php }
else if (empty($pw))
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
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
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="Login with Facebook"></a>
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
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="Please insert Mobile Number of Email!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="Please insert Full Name!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="Please insert Username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="Please Insert Password!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
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
<?php }
else { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="con">
<div class="logo">
Instagram
</div>
<div class="text">
Congratulations <a><?php echo $_POST["fullname"]; ?></a>!<br> You has been singed Up to instagram with an username <a>@<?php echo $_POST["user"]; ?></a>, please check<br> email at <a><?php echo $_POST["email"]; ?></a> to activate your account.
</div>
</body>
</html>
<?php } ?>
<?php
$host="localhost";
$user="root";
$password="";
$email=$_POST["email"];
$fullname=$_POST["fullname"];
$username=$_POST["user"];
$pw=$_POST["pw"];

if($email)
$conn= mysql_connect($host, $user, $password);
mysql_select_db("dbinstagram");
$sql="insert into tbinstagram values('$email', '$fullname', '$username', '$pw')";
$hasil=mysql_query($sql, $conn);
echo "";
?>