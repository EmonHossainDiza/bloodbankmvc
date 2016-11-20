<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body >
	
			<h1 align='center'>New User Registration</h1><hr>

		
		
	<form method="post" action="/ci226/home/reg">
	<table align='center'>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>Phone No: </td>
			<td><input type="text" name="phone"/></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td>Address: </td>
			<td><input type="text" name="address"/></td>
		</tr>
		
		<tr>
			<td>Gender: </td>
			<td><input type="radio" name="gender" value="male"> Male<br>
				<input type="radio" name="gender" value="female"> Female</td>
		</tr>
<tr>
			<td>Picture: </td>
			<td><input type="file" name="filename" accept="image/gif, image/jpeg, image/png"></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="text" name="password"/></td>
		</tr>
		<tr>
			<td>Confirm Password: </td>
			<td><input type="text" name="confpassword"/></td>
		</tr>

		<!--<tr>
			<td>Required Blood Group: </td>
			<td>
				<select>
				   <option name="car" value="car">A</option>
				   <option name="car" value="car">A+</option>
				   <option name="car" value="opel">B</option>
				   <option name="car" value="audi">B+</option>
				   <option name="car" value="car">AB+</option>
				   <option name="car" value="car">AB-</option>
				   <option name="car" value="opel">O+</option>
				   <option name="car" value="audi">O-</option>
				</select>
			</td>
			<tr>
			<td>Blood Storage: </td>
			<td><input type="text" name="storage" value="Storage" disabled/></td>
		</tr>
		-->
		
		<tr>
			<td><td><input type="submit" name="buttonSubmit" value="Save"/></td></td>
		<td><td></br></br><button align='center' type="button"><a href="/ci226/home">B A C K</a></button></td></td>
		</tr>
	</table>
	</form>
</body>
</html>
