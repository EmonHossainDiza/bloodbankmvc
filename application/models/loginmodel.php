<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	
	public function login($email,$password)
	{
		
		$this->load->database();
		$this->db->select('type');
			$this->db->from('users');
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			
		$query=$this->db->get();
		$result=$query->row_array();
		//print_r($result);
		//print_r($name);
		$this->session->set_userdata('login_emails',"$email");
		
		
				
		return $result;	

		/*if($result['type']==admin)
		{
			$fuck=admin;
			$this->session->set_userdata('login_type',"$fuck");
			return true;
			//redirect('http://localhost/ci226/admin');
		}
		else if($result['type']==user){redirect('http://localhost/ci226/user');}
		else {return false;}  */
			
	}
	
}