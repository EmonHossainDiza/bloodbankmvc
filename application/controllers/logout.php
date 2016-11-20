<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		//$this->load->view('view_welcome');
		$this->session->unset_userdata('login_emails');
		$this->session->unset_userdata('login_names');
		redirect('http://localhost/ci226/home');
		
	}
}