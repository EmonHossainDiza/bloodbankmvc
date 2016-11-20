<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		p{
			color: red;
		}
	</style>
	
</head>
<body >
<h1 align='center'>New User Registration</h1><hr>
	<div style='
		float:left;
		margin-left:4%;
		height:40%;
		width:70%;'>
			

		
		
	<form method="post" action="/ci226/registration">
	<table align='center'>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" placeholder="username"/></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="text" name="password" placeholder="password"/></td>
		</tr>
		<tr>
			<td>Confirm Password: </td>
			<td><input type="text" name="confpassword" placeholder="confirm password" /></td>
		</tr>
		<tr>
			<td>Phone No: </td>
			<td><input type="text" name="phone" placeholder="phone no" /></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email" placeholder="Email" /></td>
		</tr>
		<tr>
			<td>Address: </td>
			<td><input type="text" name="address" placeholder="Address" /></td>
		</tr>
		
		<tr>
			<td>Gender: </td>
			<td><input type="radio" name="gender" value="male"> Male
				<input type="radio" name="gender" value="female"> Female</td>
		</tr>
		</br>
		<tr>
			<td><td></br><input type="submit" name="buttonSubmit" value="Register"/></td></td>
		<td><td><br><button type="button"> <a style="text-decoration:none" href="/ci226/home">B A C K</a></button></td></td>
		</tr>
	</table>
	</form></div>
	
<div style='
		float:left;
		margin-left:0%;
		height:40%;
		width:23%;'></br>
		<?php echo $message;?>
	</div>
	
</body>
</html>
