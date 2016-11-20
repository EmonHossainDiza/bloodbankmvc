<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');
		$this->load->database();
	}
	
	public function index()
	{	

		if($this->input->post('buttonSubmit'))
		{
		
		if(!$this->form_validation->run('register'))
			{
				$data['message'] = validation_errors();
				$this->load->view('view_reg', $data);
			}
			else
		{
			//echo $this->input->post('cat');
			$u_name = $this->input->post('name');
			$u_password=$this->input->post('password');
			$_conpassword=$this->input->post('confpassword');
			$u_phone=$this->input->post('phone');
			$u_email=$this->input->post('email');
			$u_gender=$this->input->post('gender');
			$u_address=$this->input->post('address');
		//gender
			$this->load->model('usermodel');
			$this->usermodel->insert($u_name,$u_phone,$u_email,$u_address,$u_gender,$u_password);
			redirect('http://localhost/ci226/home');
		}
			
			
		}
		else
		{
			$data['message'] = '';
			$this->load->view('view_reg', $data);
		}
		
	}
}

	
