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
		$name=$this->input->post('search_name');
		$this->load->model('usermodel');
		$r=$this->usermodel->jserch($name);
		//print_r($r);
		
	}
}

	
