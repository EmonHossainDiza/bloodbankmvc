<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	/*public function insert($u_name,$u_password,$u_phone,$u_email,$u_gender,$u_address)
	{
		$sql1 = "INSERT INTO userinfo VALUES ('$u_name','$u_password','$u_phone','$u_email','$u_gender','$u_address')";
		
		$sql2 = "INSERT INTO users VALUES ('$u_name','$u_password','user')";
		$this->load->database();
		$this->db->query($sql1);
		$this->db->query($sql2);
	}*/
	
	
	
		
	public function getAll()
	{
		$this->load->database();
		$name=$this->session->userdata('login_emails');
		$sql = "SELECT * FROM admin WHERE email='$name'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	
	public function deleteuser($t)
	{
		$this->load->database();
		$name=$this->session->userdata('login_emails');
		$sql1 = "DELETE FROM userinfo WHERE name='$t'";
		$sql2 = "DELETE FROM users WHERE name='$t'";
		$this->db->query($sql1);
		$this->db->query($sql2);
		//return $result->result_array();
	}
	
	public function getUsername($search_name)
	{
		$this->load->database();
		/*$sql = "SELECT BookName FROM booklist where BookName like '$search_bname%'";
		$resbname = $this->db->query($sql);
		
		print_r($resbname);
		return $resbname->result_array();*/
		
		$this->db->select('name');
        $this->db->from('userinfo');
        $this->db->like('name',$search_name,'right');

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
	}
	
}

