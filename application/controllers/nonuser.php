<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nonuser extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function index()
	{	
		
		$data['message'] = '';
		$data['bl'] = '';
		$data['bloodpurchase'] ='';
		$name=$this->session->userdata('login_names');
		$this->load->model('usermodel');
		$data['result'] = $this->usermodel->getAll();
		$data['bloodpurchase'] = $this->usermodel->get($name);
		
		
		
		

		if(!$this->input->post('infoblood'))
		{
			$data['message'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
			$this->load->view('view_userpanel', $data);
		}
		else
		{	
			$data['message'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
		
		
			$t=$this->input->post('blood');
			$this->load->model('bloodmodel');
			//$data['bl'] = $this->bloodmodel->get($t);
			 $r=$this->bloodmodel->get($t);
			 $data['bl']=$r;
			
			$this->load->view('view_userpanel', $data);
		}
		
	}
}