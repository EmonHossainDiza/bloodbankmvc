<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blood Bank</title>
	<style type="text/css">
		p{
			color: red;
		}
	</style>
</head>
<body align='center'>

	<h1 align='center'>Welcome to Online Blood Bank Management System</h1>
	<h3 align='center' style="color:blue;">*** You have to enough educated to understand this project ***</h3><hr>
	<div style='
		float:left;
		margin-left:3%;
		height:40%;
		width:43%;'><h2 align='center'>L O G I N</h2><hr>

		
		
	<form method="post" >
	
	<table align='center'>
	<tr>
	
	<td><p><?php echo $message; ?></p></td>
	<br/><br/>
	<br/><br/>
	</tr>
		<tr>
			<td>USER EMAIL </td>
			<td><input type="text" name="email" placeholder="user email"/></td>
		</tr>
		<tr>
			<td>P A S S W O R D </td>
			<td><input type="text" name="password"placeholder="password"/></td>
		</tr>
		<tr>
			<td><td><input type="submit" name="buttonSubmit" value="L O G I N"/></td></td>
		</tr>
	</table>
	
	<br/><br/><br/><hr></br>
	<button><a style='text-decoration:none;font-size:14px;' href="/ci226/registration"> R E G I S T R A T I O N __ H E R E </a></button><br/></br><hr>
	</form></div>

<div style='float:left;margin-left:4%;'>
		<hr style="width:0.5px; height:450px; position: absolute;"/></div></div>
	
	<div style='
		float:left;
		margin-left:8%;
		height:40%;
		width:43%;'>
		
		<h2 align='center'>For Non Registerd User</h2>
		<hr>
		<h3 align='center'>Blood Storage in BloodBnak</h2>
		</br></br><form method="post">Select Blood Group
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
		</br></br></br></br></br><hr>
		<div>
		
</body>
</html>