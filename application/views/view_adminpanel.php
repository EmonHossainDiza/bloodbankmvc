<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body align='center'>
	<h2 align='center'>AdminPanel</h2><hr>
	<div style='
		float:left;
		margin-left:3%;
		height:40%;
		width:43%;'>
		<table align='center'   >
	
		<?php echo $this->session->userdata('login_emails').' Login Successfully'."<br><br><br><br>";?>
 
		<?php
		foreach( $result as $r){
	?>		
			<tr><td>Name :</td><td><?php echo $r['name']."<br />"?></td></tr>
			<tr><td>Password :</td><td><?php echo $r['password']."<br />"; ?></td></tr>
		
		<?php } ?>
		</table>
		</br></br>
		
		
		
		</br></br>
	<button type="button"><a style='text-decoration:none;' href="/ci226/admin/userdb">U S E R __ D B</a></button>	</br></br>
	
	<button type="button"><a style='text-decoration:none;' href="/ci226/admin/blooddb">B L O O D __ D B</a></button>	</br></br>
	
	<button type="button"><a style='text-decoration:none;' href="/ci226/admin/bloodpurchasedb">B L O O D__P U R C H A S E __ D B</a></button>	</br></br></br>
		
	<button type="button"><a style='text-decoration:none;' href="/ci226/logout">L O G O U T</a></button>
	</div>
	
	<div style='float:left;margin-left:4%;'>
		<hr style="width:0.5px; height:450px; position: absolute;"/></div></div>
	
	<div style='
		float:left;
		margin-left:8%;
		height:40%;
		width:43%;'>
		
		
		<!--
		<form method="post"><select name="blood">
					<?php foreach ($bloodtype as $blood){ ?>
						<option value="<?php echo $blood['bloodtype']; ?>">	<?php echo $blood['bloodtype']; ?></option>
					<?php } ?>
					</select>
					<input type="submit" name="infoblood" value="search"/>
				</form>-->
				<?php
		/*if($this->input->post('infoblood')){
		foreach( $bl as $r){
	?>	<table align="center">
			<td><?php echo "bloodtype: ".$r['bloodtype']."<br />"?></td>
			<td><?php echo "quantity : ".$r['quantity']."<br />"; ?></td>			
			<td><?php echo "price : ".$r['price']."<br />"; ?></td>
		</table>
		<?php }} */?>
		
		
		<h3 align="center">Blood Storage Info</h3>
		<table border="collapse" align="center" width="400">
		<td width="150" bgcolor="#dddddd">Blood Group</td>
		<td width="150" bgcolor="#d1d1e0">Quantity</td>
		<td width="150" bgcolor="#dddddd">Price/Q</td></table>
		<?php
		foreach( $bl as $r){
		?>
			<table border="collapse" align="center" width="400">
	
			<td width="150"  bgcolor="dddddd"><?php echo $r['bloodtype']."<br />"?></td>
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['quantity']."<br />"; ?></td>			
			<td width="150"  bgcolor="dddddd"><?php echo $r['price']."<br />"; ?></td>
		</table>
		<?php } ?>
		



		<!--<form method="post">
	<table align='center'>
	<tr>
			<td>Required Blood Group: </td>
			<td>

				<select name="bloodtype">
				   <option name="bloodtype" value="A+">A</option>
				   <option name="bloodtype" value="bloodtype">A+</option>
				   <option name="bloodtype" value="opel">B</option>
				   <option name="bloodtype" value="audi">B+</option>
				   <option name="bloodtype" value="bloodtype">AB+</option>
				   <option name="bloodtype" value="bloodtype">AB-</option>
				   <option name="bloodtype" value="opel">O+</option>
				   <option name="bloodtype" value="audi">O-</option>
				</select>
			</td>
		</tr>
		<tr>
		<form method=post action="/ci226/admin/bloodinfo">
		
		<tr>
			<td>enter blood group: </td>
			<td><input type="text" name="bloodname"/></td>
		</tr><tr>
			<td><td><input type="submit" name="infoblood" value="search"/></td></td>
		</tr>
		</form>
		
		<!--	<td>		
			<button type="button" name='buttonSave'><a href="/ci226/home/bloodinfo">S A V E</a></button>
		
			<button type="button" name='buttonSave'>S A V E</button>
		
		</td>
		</tr>
		</form></table>	--><br><br><br><br>
		
		

	
</body>
</html>