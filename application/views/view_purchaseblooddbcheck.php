<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		p{
			color: red;
		}
	</style>

</head>
<body align='center'>
	<h1 align='center'>Users Information</h1><hr>

	<table align='center'>
	
		<?php echo $this->session->userdata('login_names').' Login Successfully';?>
		
<?php echo $message;?>		
		<h3>Purchase blood Information</h3>
		<table border="collapse" align="center" " width="450">
		<td width="150" bgcolor="#d1d1e0">Name</td>
		<td width="150" bgcolor="#d1d1e0">Date</td>
		<td width="150" bgcolor="#dddddd">Blood Group</td>
		<td width="150" bgcolor="#d1d1e0">Quantity</td>
		<td width="150" bgcolor="#dddddd">Price</td></table>
		<?php
		foreach( $res as $r){
	?>		<table border="collapse" align="center" width="450">
		<td width="150" bgcolor="#d1d1e0"><?php echo $r['name']."<br />"; ?></td>
			<td width="150"  bgcolor="dddddd"><?php echo $r['date']."<br />"?></td>
			<td width="150"  bgcolor="dddddd"><?php echo $r['bloodtype']."<br />"?></td>
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['quantity']."<br />"; ?></td>
			<td width="150" bgcolor="dddddd"><?php echo $r['price']."<br />"; ?></td>
			
		<?php } ?>
	</table>
	
	</br><button type="button"><a href="/ci226/home">L O G O U T</a></button>
	
</body>
</html>