<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{	

		if($this->input->post('buttonSubmit'))
		{
		
		if(!$this->form_validation->run('login'))
			{
				$data['message'] = validation_errors();
				//$data['message'] = '';
				$this->load->model('bloodmodel');
				$data['bloodtype'] = $this->bloodmodel->getAll();
				//$data['message'] = '';
				//$this->load->view('view_welcome', $data);
				$this->load->view('view_welcome', $data);
			}
			else
			{
				
			$email= $this->input->post('email');
			$password= $this->input->post('password');

			$this->load->model('Loginmodel');
			
			if($this->Loginmodel->login($email,$password))
			{
				
			$result=$this->Loginmodel->login($email,$password);
			//print_r($result);
			if($result['type']==admin){redirect('http://localhost/ci226/admin');}
			else if($result['type']==user)
			{
				redirect('http://localhost/ci226/user');
			}
			}	 
			else
			{
				$data['message'] = "user name(id) or password is incorrect";
					//$data['message'] = '';
				$this->load->model('bloodmodel');
				$data['bloodtype'] = $this->bloodmodel->getAll();
				//$data['message'] = '';
				//$this->load->view('view_welcome', $data);
				$this->load->view('view_welcome', $data);
			}
			}
			return;
			
		}
		else if($this->input->post('infoblood'))
		{
			$data['message'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
		
		
			$t=$this->input->post('blood');
			$this->load->model('bloodmodel');
			//$data['bl'] = $this->bloodmodel->get($t);
			 $r=$this->bloodmodel->get($t);
			 $data['bl']=array($r);
			
			$this->load->view('view_welcome', $data);
		}
		else{$data['message'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
			$data['message'] = '';
			$this->load->view('view_welcome', $data);
			//$this->load->view('view_userpanel', $data);
			}
		/*else
		{
			$data['message'] = '';
			$this->load->view('view_welcome', $data);
		}*/
		
	}

	/*	
	public function reg()
	{	
		
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = 'failed';

			
			$this->load->view('view_reg', $data);
		}
		else
		{
			//echo $this->input->post('cat');
			$u_name = $this->input->post('name');
			$u_password=$this->input->post('password');
			$u_phone=$this->input->post('phone');
			$u_email=$this->input->post('email');
			$u_gender=$this->input->post('gender');
			$u_address=$this->input->post('address');
		//gender
			$this->load->model('usermodel');
			$this->usermodel->insert($u_name,$u_password,$u_phone,$u_email,$u_gender,$u_address);
			redirect('http://localhost/ci226/home');
		}
		
	}
public function bloodinfo()
	{	
			$this->session->set_userdata('blood_types',$bloodtype);
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';

			
			$this->load->view('view_adminpanel',$data);
		}
		else
		{
			if($this->input->post('buttonSave')){
			$bloodtype = $this->input->post('bloodtype');
			//$bloodtype =$this->session->userdata('blood_types');
		
			$this->load->database();
			$sql = "SELECT * FROM bloodinfo WHERE bloodtype=$bloodtype";
			$result = $this->db->query($sql);
			//return $result->result_array();
	
		foreach( $result as $r){
	
			 $btype = $r['bloodtype'];
			 $bq = $r['quantity'];
			 
			
			
		}
		}
		$this->load->view('view_adminpanel',$result);
			
			
			/*$bloodtype=$this->input->post('bloodtype');
		
			$this->load->model('bloodmodel');
			//$this->load->model('adminmodel');
			$data['type']=$this->bloodmodel->getAll($bloodtype);
			
			
			$this->load->view('view_adminpanel',$data);
		}
		
	}*/

	

	
}
