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
	<h1>Edit user</h1>
	<form method="post">
		NAME: <input type="text" name="name" value="<?php echo $cat['name'] ?>"/>
		<br/>
		<input type="submit" name="buttonSubmit" value="Save" />
		<input type="hidden" name="name" value="<?php echo $cat['name'] ?>">
	</form>
	<br/>
	<label><?php echo $message; ?></label>
	
</body>
</html>