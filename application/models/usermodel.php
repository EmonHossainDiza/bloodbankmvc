<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function insert($u_name,$u_phone,$u_email,$u_address,$u_gender,$u_password)
	{
		
		$this->load->database();
		$sql1 = "INSERT INTO userinfo VALUES ('$u_name','$u_phone','$u_email','$u_address','$u_gender','$u_password')";
		$sql2 = "INSERT INTO users VALUES ('$u_name','$u_password','user','$u_email')";
		
		$this->db->query($sql1);
		$this->db->query($sql2);
	}
	public function getAll()
	{
		
		
		$this->load->database();
		$name=$this->session->userdata('login_emails');
		$sql = "SELECT * FROM userinfo WHERE email='$name'";
		$result = $this->db->query($sql);
		return $result->row_array();
		
	}
	public function userdb()
	{
		$sql = "SELECT * FROM userinfo";
		$this->load->database();
		$this->db->query($sql);
		$result = $this->db->query($sql);
		return $result->result_array();
		
	}
	public function username()
	{
		
		$this->load->database();
		
		$sql = "SELECT * FROM userinfo";
		$res = $this->db->query($sql);
		
		//print_r($res);
		$resname = $res->row_array();
		//$this->session->userdata('login_admin', '$email');
		return $resname;
	
		
	}
	
	//purchase blood info insert
	public function insertblood($t,$quantity,$price,$date,$email,$phone)
	{	
		$name=$this->session->userdata('login_names');
		$tprice=$quantity*$price;
		$sql1 = "INSERT INTO userpurchase(name,email,phone,bloodtype,quantity,price,date) VALUES ('$name','$email','$phone','$t','$quantity','$tprice','$date')";
		$this->load->database();
		$this->db->query($sql1);	
	}
	
	//get purchase blood info for single user
	public function get($name)
	{
		$this->load->database();
		$name=$this->session->userdata('login_names');
		$sql="SELECT * FROM userpurchase WHERE name='$name'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	//get purchase blood info for all user
	public function getinfopurchaseblood()
	{
		$this->load->database();
		$sql="SELECT * FROM userpurchase";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	public function updateuserinfo ($name,$password,$phone,$gender,$email,$address)
	{
		
		$this->load->database();
		
		$sql = "UPDATE userinfo SET name='$name',phone='$phone',address='$address' WHERE email='$email'";
		$this->db->query($sql);
	}
	
	//user db update
	public function update($hemail,$phone,$address)
	{	
		$sql = "UPDATE userinfo SET phone='$phone',address='$address' WHERE email='$hemail'";
		$this->db->query($sql);
		$result = $this->db->query($sql,array($hemail,$phone,$address));

	}
	
	public function gettotaltrans()
	{	
		$sql = "SELECT SUM(price) FROM userpurchase";
		$result = $this->db->query($sql);
		return $result->row_array();

	}
	public function getuinfo()
	{	
		$this->load->database();
		$name=$this->session->userdata('login_names');
		$sql="SELECT * FROM userinfo WHERE name='$name'";
		$result = $this->db->query($sql);
		return $result->row_array();

	}
	
	public function jserch($name)
	{
		$sql = "SELECT * FROM userinfo WHERE name LIKE '$name%'";
		$this->load->database();
		//$this->db->query($sql);
		$result = $this->db->query($sql);
		return $result->result_array();
		
	}
	
}