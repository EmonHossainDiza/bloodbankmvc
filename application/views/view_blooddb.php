<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body align='center'>
	<h1 align='center'>Update Blood Bank Information</h1><hr>

	<table align='center'>
	
		<?php echo $this->session->userdata('login_emails').' Login Successfully'."<br><br>";?>
		
		<table align="center">
		<table border="collapse" align="center" width="600">
		<td width="150" bgcolor="#dddddd">Blood Group</td>
		<td width="150" bgcolor="#d1d1e0">Quantity</td>
		<td width="150" bgcolor="#dddddd">Price/Q</td>
		<td width="150" bgcolor="#dddddd">Edit info</td></table>
		<?php
		foreach( $result as $r){
	?>
			<table border="collapse" align="center" width="600">
	
			<td width="150"  bgcolor="dddddd"><?php echo $r['bloodtype']; ?></td>
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['quantity']; ?></td>			
			<td width="150"  bgcolor="dddddd"><?php echo $r['price']."<br />"; ?></td>			
			<td width="150"  bgcolor="dddddd"><button type="button"> <a style="text-decoration:none;" href="/ci226/admin/blooddbedit/<?php echo $r['bloodtype']; ?>">Edit</a></button></td>
		</table>
		<?php } ?>
			<br><button type="button"> <a style="text-decoration:none" href="/ci226/admin">B A C K</a></button></br></br>

	</br><button type="button"><a href="/ci226/logout">L O G O U T</a></button></table>
	
</body>
</html>
<!---->