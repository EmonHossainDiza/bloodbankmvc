<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body align='center'>
	<h1 align='center'>User Panel</h1><hr>
	<div style='
		float:left;
		margin-left:3%;
		height:40%;
		width:43%;'>
	<table align='center'   >
				<h4>User Information</h3>
		<?php echo $this->session->userdata('login_emails').' Login Successfully'."<br><br>";?>
		
		
		<?php
		foreach( $result as $r){
	?>
			<tr><td>Name :</td><td> <?php echo $r['name']."<br />"?></td></tr>
			<tr><td>Password :</td><td><?php echo  $r['password']."<br />"; ?></td></tr>
			<tr><td>Phone :</td><td><?php echo  $r['phone']."<br />"; ?></td></tr>
			<tr><td>Gender :</td><td><?php echo  $r['gender']."<br />"; ?></td></tr>
			<tr><td>Email :</td><td><?php echo  $r['email']."<br />"; ?></td></tr>
			<tr><td>Address: </td><td><?php echo  $r['address']."<br />"; ?></td></tr>
			
		<?php } ?></table>
		<button type="button"><a style='text-decoration:none;' href="/ci226/user/updateuserinfo">Update Info</a></button>
		<hr>
		<table align='center'   >
		<h3>Purchase blood Information</h3>
		<table border="collapse" align="center" width="450">
		<td width="150" bgcolor="#d1d1e0">Date</td>
		<td width="150" bgcolor="#dddddd">Blood Group</td>
		<td width="150" bgcolor="#d1d1e0">Quantity</td>
		<td width="150" bgcolor="#dddddd">Price</td></table>
		<?php
		foreach( $bloodpurchase as $r){
	?>		<table border="collapse" align="center" width="450">
		<td width="150" bgcolor="#d1d1e0"><?php echo $r['date']."<br />"; ?></td>
			<td width="150"  bgcolor="dddddd"><?php echo $r['bloodtype']."<br />"?></td>
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['quantity']."<br />"; ?></td>
			<td width="150" bgcolor="dddddd"><?php echo $r['price']."<br />"; ?></td>
			
		<?php } ?>
	</table>
	
	</br>
	<button type="button"><a style='text-decoration:none;' href="/ci226/logout">L O G O U T</a></button></div>
	
	<div style='float:left;margin-left:4%;'>
		<hr style="width:0.5px; height:450px; position: absolute;"/></div></div>
	
	<div style='
		float:left;
		margin-left:8%;
		height:40%;
		width:43%;'>
		
		<h3 align='ecnter'>Blood Information In Blood Bank</h3>
		</br><form method="post">Select Blood Group
		<select name="blood">
					<?php foreach ($bloodtype as $blood){ ?>
						<option value="<?php echo $blood['bloodtype']; ?>">	<?php echo $blood['bloodtype']; ?></option>
					<?php } ?>
					</select>
					<input type="submit" name="infoblood" value="search"/>
				</form>
				</br></br>
		<table border="collapse" align="center" width="400">
		<td width="150" bgcolor="#dddddd">Blood Group</td>
		<td width="150" bgcolor="#d1d1e0">Quantity</td>
		<td width="150" bgcolor="#dddddd">Price/Q</td></table>
				<?php
		if($this->input->post('infoblood')){
		foreach($bl as $r){
	?>	<table border="collapse" align="center" width="400">
	
			<td width="150"  bgcolor="dddddd"><?php echo $r['bloodtype']."<br />"?></td>
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['quantity']."<br />"; ?></td>			
			<td width="150"  bgcolor="dddddd"><?php echo $r['price']."<br />"; ?></td>
		</table>
		<?php }} ?>
		</br></br></br><hr>
		
		<h3 align='center' >Blood Purchase</h3>
		<form method="post" action="/ci226/user/bloodpurchase">
			<table align='center'><tr><td>
			<td><input type="text" name="date" value="<?php echo date('d-m-Y');  ?>" readonly="readonly"/></td>
		</tr>
		
			<td>Blood Group: </td>
				<td><select name="blood">
			<?php foreach ($bloodtype as $blood){ ?>
			<option value="<?php echo $blood['bloodtype']; ?>">	<?php echo $blood['bloodtype']; ?></option>
			<?php } ?>
			</select></td>
		<tr>
			<td>Quantity: </td>
			<td><input type="text" name="quantity" ></td>
		</tr>
		<?php echo $mess;?>
		<!--<tr>	
			
				
			<td>Price: </td>
			<td><input type="text" name="price" value=""/></td>
			</tr>-->
		
		</br></br>
		<tr><td><td></br>
		<input type="submit" name="buttonpurchase" value="P U R C H A S E" onclick="return confirm('If u continue price will be calculated automatically by Price/Q!')" /></td></td></tr>
			</table></form>
			</div>
	
</body>
</html>
