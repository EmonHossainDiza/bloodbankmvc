<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
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
		$name=$this->session->userdata('login_emails');
		$this->load->model('adminmodel');
		$data['result'] = $this->adminmodel->getAll();
		
		$this->load->model('bloodmodel');
		$data['bl'] = $this->bloodmodel->getAll();
		$this->load->view('view_adminpanel', $data);
		
		/*if(!$this->input->post('infoblood'))
		{
			$data['message'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
			$this->load->view('view_adminpanel', $data);
		}
		else
		{	
			$data['message'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
		//	$this->load->view('view_adminpanel', $data);
		
		
			$type=$this->input->post('blood');
			$this->load->model('bloodmodel');
			$data['bl'] = $this->bloodmodel->get($type);
			$this->load->view('view_adminpanel', $data);
		}*/
		
		
	
	}
	public function userdb()
	{	
		if($this->input->post('search_name'))
		{
			$search_name = $this->input->post('search_name');
			
			$data['message'] = '';
			
			$this->load->model('adminmodel');
			$data['results']=$this->adminmodel->getUsername($search_name);
			
		$data['message']='';
		// $name=$this->session->userdata('login_names');
		// $this->load->model('adminmodel');
		// $data['result'] = $this->adminmodel->getAll();
		$this->load->model('usermodel');
		$data['result']=$this->usermodel->userdb();
		$data['bloodpurchase']=$this->usermodel->getinfopurchaseblood();
        $this->load->view('view_userdb',$data);
		
			
			}
		else{
		
		
		$data['message']='';
		// $name=$this->session->userdata('login_names');
		// $this->load->model('adminmodel');
		// $data['result'] = $this->adminmodel->getAll();
		$this->load->model('usermodel');
		$data['result']=$this->usermodel->userdb();
		$data['bloodpurchase']=$this->usermodel->getinfopurchaseblood();
        $this->load->view('view_userdb',$data);
		}
	
	}
	public function bloodpurchasedb()
	{	
		$data['message']='';
		
		$this->load->model('usermodel');
		$data['bloodpurchase']=$this->usermodel->getinfopurchaseblood();
		//$r=$this->usermodel->gettotaltrans();
		//print_r($r);
		$data['total']=$this->usermodel->gettotaltrans();
		//print_r($data['total']);
        $this->load->view('view_bloodpurchasedb',$data);
	}
	
	public function blooddb()
	{	
		// $name=$this->session->userdata('login_names');
		// $this->load->model('adminmodel');
		// $data['result'] = $this->adminmodel->getAll();
		$this->load->model('bloodmodel');
		$data['result']=$this->bloodmodel->blooddb();
		
        $this->load->view('view_blooddb',$data);
		
	
	}
	
	
	public function blooddbedit($t=0)
	{
		if(!$this->input->post('buttonSubmit'))
		{
		$data['message']='';
		$this->load->model('bloodmodel');
		$type=$this->bloodmodel->get($t);
		
		$data['res'] = $type;
		//print_r($data['res']);
		//$data['res'] = $this->bloodmodel->get($t);
		
		$this->load->view('view_blooddbedit',$data);
		
		}
		else
		{
			if(!$this->form_validation->run('updatebloodinfo'))
			{
				$data['message']=validation_errors();
				$this->load->model('bloodmodel');
				$type=$this->bloodmodel->get($t);
				
				$data['res'] = $type;
				
				
				$this->load->view('view_blooddbedit',$data);
				
			}
			else{
			$quantity=$this->input->post('quantity');
			$price=$this->input->post('price');
			$bloodtype=$this->input->post('btype');
			$this->load->model('bloodmodel');
			$this->bloodmodel->update($bloodtype,$quantity,$price);
			redirect('http://localhost:/ci226/admin/blooddb');
			}
		}
		
	}
	
	
	public function purchaseblooddbcheck()
	{
		$data['message']='';
		
		//$this->load->view('view_purchaseblooddbcheck');
		$this->load->model('bloodmodel');
		$t=$this->input->post('hname');

		$data['res']=$this->bloodmodel->getpurchaseinfo($t);
		
		$this->load->view('view_purchaseblooddbcheck',$data);
		
		
		
	}
	
	public function userdbedit()
	{
		if(!$this->input->post('updatebuttonSubmit'))
		{
		$data['message']='';
		$this->load->model('usermodel');
		$data['result']=$this->usermodel->userdb();
		$this->load->view('view_userdb',$data);
		
		}
		else
		{
			if(!$this->form_validation->run('userupdateasadmin'))
			{
			$data['message']= validation_errors();
			$this->load->model('usermodel');
			$data['result']=$this->usermodel->userdb();
			$data['bloodpurchase']=$this->usermodel->getinfopurchaseblood();
			$this->load->view('view_userdb',$data);
			//redirect('http://localhost:/ci226/admin/userdb',$data);
			}
			else
			{
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$hemail=$this->input->post('hemail');
			
			$this->load->model('usermodel');
			$this->usermodel->update($hemail,$phone,$address);
			//$this->load->model('bloodmodel');
			//$data['bl'] = $this->bloodmodel->getAll();
			//$data['bloodpurchase']=$this->usermodel->getinfopurchaseblood();
			//$this->load->view('view_adminpanel', $data);
			redirect('http://localhost:/ci226/admin/userdb');
			}
		}
		
	}
	
	public function deleteuser()
	{
		$data['message']='';
		
		//$this->load->view('view_purchaseblooddbcheck');
		$this->load->model('adminmodel');
		$t=$this->input->post('hname');

		$this->adminmodel->deleteuser($t);
		redirect('http://localhost:/ci226/admin/userdb');
		
		
		
	}
	
	public function myuserdb()
	{	
		$search_name=$this->input->post('search_name');
		$data['message'] = '';
			
		$this->load->model('adminmodel');
		$data['results']=$this->adminmodel->getUsername($search_name);
		
		$this->load->model('usermodel');
		$data['result']=$this->usermodel->jserch($search_name);
		//print_r($r);
		//$data['r']=array($r);
		$this->load->view('view_userdb',$data);
		
			
	
	}
	
	
	
}	