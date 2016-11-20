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
	
		<?php echo $this->session->userdata('login_emails').' Login Successfully';?>
		<form action="/ci226/admin/myuserdb" method = 'post'>
		<p align="center">Search: <input type="text" name = 'search_name'  placeholder="Type User Name"> 
		<input type="submit" value="Search" name= "buttonsearch" style="background-color:#A4A4A4; height:25px; width:80px"></p>
		
		<p align="center">Suggestions: <?php 
			if($this->input->post('buttonsearch')){
				foreach ($results as $val)
				{
					if($val['name'] == null) 
					{	
						
						echo "not found";
					}
					else{
						echo $val['name']." ";
						
					}
					
				}
			}?></p>
			
			
		</form>
		
		
		</table>
		<table border="collapse" align="center" width="1200">
		<td width="120" bgcolor="#d1d1e0">Name</td>
		<td width="115" bgcolor="#dddddd">Password</td>
		<td width="130" bgcolor="#d1d1e0">Gender</td>
		<td width="170" bgcolor="#dddddd">Phone</td>
		<td width="160" bgcolor="#dddddd">Email</td>
		<td width="160" bgcolor="#d1d1e0">Addrress</td>
		<td width="100" bgcolor="#d1d1e0">update</td>		
		<td width="100" bgcolor="#d1d1e0">purchase information</td>		
		<td width="100" bgcolor="#d1d1e0">Delete User Information</td>
		</table>
		<?php
		foreach( $result as $r){
	?><form method="post" action="/ci226/admin/userdbedit">
		<table border="collapse" align="center" width="1200">
			<td width="130" bgcolor="#d1d1e0"><?php echo $r['name']; ?></td>
			<td width="130" bgcolor="#dddddd"><?php echo $r['password']; ?></td>
			<td width="150" bgcolor="#d1d1e0"><?php echo $r['gender']; ?></td>			
			<td width="150" bgcolor="#dddddd"><input type="text" name="phone" value="<?php echo $r['phone']; ?>"</td>
			<td width="160" bgcolor="#dddddd"><?php echo $r['email']; ?></td>
			<td width="150" bgcolor="#d1d1e0"><input type="text" name="address" value="<?php echo $r['address']; ?>"/></td>
			<td width="100" bgcolor="#dddddd"><input type="submit" name="updatebuttonSubmit" value="update" /></td>
			<td width="100" bgcolor="#dddddd"><button type="submit" name="purchaseblooddbcheck" formaction="/ci226/admin/purchaseblooddbcheck/<?php echo $r['name'] ?>" >check</button></td>
			<td width="100" bgcolor="#dddddd"><button type="submit" name="deleteuser" formaction="/ci226/admin/deleteuser/<?php echo $r['name'] ?>" onclick="return confirm('Are you confirm to delete this user?')" >delete</button></td>
			<input type="hidden" name="hemail" value="<?php echo $r['email'] ?>"/>
			<input type="hidden" name="hname" value="<?php echo $r['name'] ?>"/>
	</form></tr>
		<?php } ?>
		</table>
<?php echo $message;?>


	<br><button type="button"> <a style="text-decoration:none" href="/ci226/admin">B A C K</a></button></br></br>

	</br><button type="button"><a style="text-decoration:none" href="/ci226/logout">L O G O U T</a></button>
	
</body>
</html>