<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bloodmodel extends CI_Model {

	/*public function insert($u_name,$u_password,$u_phone,$u_email,$u_gender,$u_address)
	{
		$sql1 = "INSERT INTO userinfo VALUES ('$u_name','$u_password','$u_phone','$u_email','$u_gender','$u_address')";
		
		$sql2 = "INSERT INTO users VALUES ('$u_name','$u_password','user')";
		$this->load->database();
		$this->db->query($sql1);
		$this->db->query($sql2);
	}*/
	
	//get blood info for single user
	public function get($t)
	{
		$this->load->database();
		$sql = "SELECT * FROM bloodinfo WHERE bloodtype='$t'";
		$result = $this->db->query($sql);
		return $result->row_array();
		//return $result->result_array();
	}
	
	//get blood info for all user
	public function getAll()
	{
		$this->load->database();
		$sql="SELECT * FROM bloodinfo";
		$result = $this->db->query($sql);
		return $result->result_array();
		
		
	}
	//all blood database
	public function blooddb()
	{
		$sql = "SELECT * FROM bloodinfo";
		$this->load->database();
		$this->db->query($sql);
		$result = $this->db->query($sql);
		return $result->result_array();
		
	}
	
	
	//blood database edit
	public function update( $bloodtype,$quantity, $price)
	{	
	
		$sql = "UPDATE bloodinfo SET bloodtype='$bloodtype',quantity='$quantity',price='$price' WHERE bloodtype='$bloodtype'";
		$this->db->query($sql);
		$result = $this->db->query($sql,array( $bloodtype,$quantity, $price));

	}
	public function updatebloodpurchase($t,$quantity)
	{	
	
		$sql = "UPDATE bloodinfo SET bloodtype='$t',quantity=(quantity - ('$quantity'/2)) WHERE bloodtype='$t'";
		$this->db->query($sql);
		$result = $this->db->query($sql);

	}
	
	//get blood purchase info for admin
	public function getpurchaseinfo($t)
	{
		$this->load->database();
		$sql = "SELECT * FROM `userpurchase` WHERE `name`='$t'";
		$result = $this->db->query($sql);
		return $result->result_array();
		//return $result->result_array();
	}
	
}

