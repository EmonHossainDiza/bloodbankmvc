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
	<h1 align='center'>Purchase blood Information</h1><hr>

	<table align='center'>
	
		<?php echo $this->session->userdata('login_emails').' Login Successfully';?><br/><br/>
			<h4 style="color:red;">Total Transection upto today :<?php echo " ".$total['SUM(price)']."/- TK";?></h4><br/>
		
<?php echo $message;?>		
		<table border="collapse" align="center" " width="1000">
		<td width="100" bgcolor="#d1d1e0">Name</td>
		
		<td width="150" bgcolor="#d1d1e0">email</td>
		<td width="150" bgcolor="#dddddd"> phone</td>
		<td width="150" bgcolor="#d1d1e0">Date</td>
		<td width="150" bgcolor="#dddddd">Blood Group</td>
		<td width="100" bgcolor="#d1d1e0">Quantity</td>
		<td width="100" bgcolor="#dddddd">Price</td></table>
		<?php
		foreach( $bloodpurchase as $r){
	?>		<table border="collapse" align="center" width="1000">
		<td width="100" bgcolor="#d1d1e0"><?php echo $r['name']."<br />"; ?></td>
		
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['email']."<br />"; ?></td>
			<td width="150" bgcolor="dddddd"><?php echo $r['phone']."<br />"; ?></td>
			
			<td width="150"  bgcolor="dddddd"><?php echo $r['date']."<br />"?></td>
			<td width="150"  bgcolor="dddddd"><?php echo $r['bloodtype']."<br />"?></td>
			<td width="100" bgcolor="#d1d1e0"><?php echo $r['quantity']."<br />"; ?></td>
			<td width="100" bgcolor="dddddd"><?php echo $r['price']."<br />"; ?></td>
			
		<?php } ?>
	</table>
	
			<br/><br/><br><button type="button"> <a style="text-decoration:none" href="/ci226/admin">B A C K</a></button></br></br>

	</br><button type="button"><a style="text-decoration:none" href="/ci226/logout">L O G O U T</a></button></table>	
</body>
</html>