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
<h1 align='center'>Update user Information</h1><hr>
	<div style='
		float:left;
		margin-left:4%;
		height:40%;
		width:70%;'>
	<table align='center'>
	<form method="post">
		</br></br><tr>
			<td>NAME:</td><td> <input type="text" name="name" value="<?php echo $result['name'] ?>"/></td></tr>
		
		<tr>
			<td>PASSWORD:</td><td>  <input type="text" name="password" value="<?php echo $result['password'] ?>" readonly /></td>
		</tr>
		<tr>
			<td>PHONE: </td><td> <input type="text" name="phone" value="<?php echo $result['phone'] ?>" /></td>
		</tr>
		<tr>
			<td>Gender:</td><td>  <input type="text" name="gender" value="<?php echo $result['gender'] ?> " readonly /></td>
		</tr>
		<tr>
			<td>EMAIL: </td><td> <input type="text" name="email" value="<?php echo $result['email'] ?>"readonly /></td>
		</tr>
		<tr>
			<td>ADDRESS:</td><td>  <input type="text" name="address" value="<?php echo $result['address'] ?>"/></br></br></td>
		</tr>
		<td> <td><input type="submit" name="buttonSubmit" value="update" /></td></td>
		<td><td><button type="button"> <a style="text-decoration:none" href="/ci226/user">B A C K</a></button></td></td>
		
		</tr></table>
	</form>
	</div>
	
	
<div style='
		float:left;
		margin-left:0%;
		height:40%;
		width:23%;'></br>
	<label><?php echo $message; ?></label>
	</div>
	
</body>
</html>
