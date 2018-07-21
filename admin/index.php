<?php
	session_start();
	if(!empty($_SESSION['moradaadmin'])){
		echo "<script>window.location.replace('dashboard.php')</script>";
	}
	include('Connection/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Morada's Trading </title>
	<link rel= "stylesheet" type="text/css" href="CSS/indexstyle.css">
	<link rel= "icon" type="text/css" href="pictures/logo.jpg">
</head>
<body>
	<div id="main">
	<div id="loginheader">
		<h2> Morada's Trading </h2>
	</div>
		<form method="POST">
		<table>
			<tr>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<tr>
					<?php
					if(!empty($_COOKIE['username'])){ 
						echo"<td><input type='text' id= 'txtUsername' placeholder='Username' name='txtUsername' value='".$_COOKIE['username']."'required></td>";
					}
					if(empty($_COOKIE['username'])){
						echo"<td><input type='text' id= 'txtPassword' placeholder='Username' name='txtUsername' required></td>";
					}
					?>
				</tr>
				<tr>
					<?php
					if(!empty($_COOKIE['password'])){
						echo"<td><input type='password' id= 'txtUsername' placeholder='Password' name='txtPassword' value='".$_COOKIE['password']."'required></td>";
					}
					if(empty($_COOKIE['password'])){
						echo"<td><input type='password' id= 'txtPassword' placeholder='Password' name='txtPassword' required></td>";
					}
					?>
				</tr>
				<tr>
				<?php
				if(!empty($_COOKIE['username'])){
					echo"<td><input type= 'checkbox' name='remembermecheckbox' id='remembermecheckbox' checked='true'>";
					echo "<label id='lblrememberme'>Keep Me Logged In </label></td>";
				}
				else{
					echo"<td><input type= 'checkbox' name='remembermecheckbox' id='remembermecheckbox'>";
					echo "<label id='lblrememberme'>Keep Me Logged In </label></td>";					
				}
				?>
				</tr>
		</table>
		<input type='submit' name='loginbtn' value='Log In' id='btnlogin'>
		</form>
	</div>
</body>
</html>