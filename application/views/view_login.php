<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body align='center'>

	<h1 align='center'>DisplayInfo</h1><hr>

	<table align='center'>
	<?php $name=$infos['name'];
	$password=$infos['password'];
	$message=$infos['message'];
		echo $this->session->userdata('login_names').' Login Successfully'."<br><br><br><br>";

//		echo $name."<br>".$message."<br><br><br><br>";
		echo "Name :  ".$name."<br>";
		echo "Password :  ".$password."<br>";
	
	
	?></br></br>
	
	<table align='center' border="1">
		<tr>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>PHONE</th>
			<th>EMAIL</th>
			<th>GENDER</th>
			<th>ADDDRESS</th>
			<th colspan="6">ACTIONS</th>
		</tr>
		{cats}
		<tr>
			<td>{name}</td>
			<td>{phone}</td>
			<td><a href="/ci226/categories/edit/{cat_id}">Edit</a></td>
			<td><a href="/ci226/categories/delete/{cat_name}">Delete</a></td>
		</tr>
		{/cats}
	</table>
	</br></br></br></br>
	<button type="button"><a href="/ci226/home">L O G O U T</a></button>
	</table>
	
</body>
</html>