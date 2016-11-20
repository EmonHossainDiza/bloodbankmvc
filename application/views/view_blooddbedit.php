<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body align='center'>
	<h1 align='center'>Update Blood Bank Information</h1><hr>
			<?php echo $this->session->userdata('login_emails').' Login Successfully';?><br/><br/>
	
	<label><?php echo $message; ?></label><br/><br/>
	<table align='center'>

	<form method="post">
		quantity: <input type="text" name="quantity" value="<?php echo $res['quantity'] ?>"/>
		price: <input type="text" name="price" value="<?php echo $res['price'] ?>"/><br/><br/><br/><br/>
		<input type="submit" name="buttonSubmit" onclick="return confirm('Are you confirm to update this bloodtype info?')" value="Save" />
		<input type="hidden" name="btype"  value="<?php echo $res['bloodtype'] ?>">
	</form>
	<br/>
			<br/><br/><br><button type="button"> <a style="text-decoration:none" href="/ci226/admin/blooddb">B A C K</a></button></br></br>

	</br><button type="button"><a style="text-decoration:none" href="/ci226/logout">L O G O U T</a></button></table>
	
</body>
</html>

	
