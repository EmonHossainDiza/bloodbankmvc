<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
	label{
		color: red;
	}
</style>
</head>
<body>
	<h1>Add Product</h1>
	<form method="post">
		NAME: <input type="text" name="name"/>
		<br/>
		PASSWORD: <input type="text" name="password" />
		<br/>
		PHONE: <input type="text" name="phone" />
		<br/>
		EMAIL: <input type="text" name="email"/>
		<br/>
		ADDRESS: <input type="text" name="address" />
		<br/>
		
		<input type="submit" name="buttonSubmit" value="Save" />
	</form>
	<br/>
	<label><?php echo $message; ?></label>
	
</body>
</html>