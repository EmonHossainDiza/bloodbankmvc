<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function index()
	{	
		$data['message'] = '';
		//$data['mess'] = '';
		$data['bl'] = '';
		$data['bloodpurchase'] ='';
		$name=$this->session->userdata('login_emails');
		$this->load->model('usermodel');
		$r= $this->usermodel->getAll();
		$data['result']=array($r);
		//print_r($r);
		$name2=$r['name'];
		$this->session->set_userdata('login_names',"$name2");
		
		$data['bloodpurchase'] = $this->usermodel->get($name);
		
		
		

		if(!$this->input->post('infoblood'))
		{
			$data['message'] = '';
			$data['mess'] = '';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
			$this->load->view('view_userpanel', $data);
		}
		else
		{	
			
			$data['message'] = '';
			$data['mess']='';
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
		
		
			$t=$this->input->post('blood');
			$this->load->model('bloodmodel');
			//$data['bl'] = $this->bloodmodel->get($t);
			 $r=$this->bloodmodel->get($t);
			 $data['bl']=array($r);
			
			$this->load->view('view_userpanel', $data);
		}
		
		
	}
	public function bloodpurchase()
	{	
		
		if(!$this->input->post('buttonpurchase'))
		{
			$data['message'] = '';
			$data['mess'] = validation_errors();
					
				$data['bl'] = '';
				$data['bloodpurchase'] ='';
				$name=$this->session->userdata('login_emails');
				$this->load->model('usermodel');
				$r= $this->usermodel->getAll();
				$data['result']=array($r);
				//print_r($r);
				$name2=$r['name'];
				$this->session->set_userdata('login_names',"$name2");
				
				$data['bloodpurchase'] = $this->usermodel->get($name);
			
			if(!$this->input->post('infoblood'))
			{
				$data['message'] = '';
				$data['mess'] = validation_errors();
				$this->load->model('bloodmodel');
				$data['bloodtype'] = $this->bloodmodel->getAll();
				$this->load->view('view_userpanel', $data);
			}
			else
			{	
			
			$data['message'] = '';
			$data['mess'] = validation_errors();
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
		
		
			$t=$this->input->post('blood');
			$this->load->model('bloodmodel');
			//$data['bl'] = $this->bloodmodel->get($t);
			 $r=$this->bloodmodel->get($t);
			 $data['bl']=array($r);
			
			$this->load->view('view_userpanel', $data);
			}

			
			//$this->load->view('view_userpanel', $data);
		}
		
		else
			
		{
			if(!$this->form_validation->run('purchaseblood'))
		{
			$data['mess'] = validation_errors();
			$data['message'] = '';
		
			$name=$this->session->userdata('login_emails');
			$this->load->model('usermodel');
			$r= $this->usermodel->getAll();
			$data['result']=array($r);
			//print_r($r);
			$name2=$r['name'];
			$this->session->set_userdata('login_names',"$name2");
			
			$data['bloodpurchase'] = $this->usermodel->get($name);
			
			if(!$this->input->post('infoblood'))
		{
			$data['message'] = '';
			$data['mess'] = validation_errors();
			$this->load->model('bloodmodel');
			$data['bloodtype'] = $this->bloodmodel->getAll();
			$this->load->view('view_userpanel', $data);
		}
		else
		{	
			
		$data['message'] = '';
		//$data['mess'] = '';
		$data['bl'] = '';
		$data['bloodpurchase'] ='';
		$name=$this->session->userdata('login_emails');
		$this->load->model('usermodel');
		$r= $this->usermodel->getAll();
		$data['result']=array($r);
		//print_r($r);
		$name2=$r['name'];
		$this->session->set_userdata('login_names',"$name2");
		
		$data['bloodpurchase'] = $this->usermodel->get($name);
		$this->load->view('view_userpanel', $data);
		}
		
		
			
		
		
				
				//$this->load->view('view_userpanel', $data);
		}
			else
			{
			//echo $this->input->post('cat');
			$t = $this->input->post('blood');
			$quantity=$this->input->post('quantity');
			//$price=$this->input->post('price');			
			$date=$this->input->post('date');
			
			
			$this->load->model('bloodmodel');
			$r=$this->bloodmodel->get($t);
			//print_r($r);
			$price=$r['price'];
			$this->load->model('usermodel');
			$r=$this->usermodel->getuinfo();
			
			//print_r($r);
			$email=$r['email'];$phone=$r['phone'];
			//print_r($r['email']);
			$this->bloodmodel->updatebloodpurchase($t,$quantity,$price);
			//$this->load->model('usermodel');
			
			$this->usermodel->insertblood($t,$quantity,$price,$date,$email,$phone);
			
			//$this->bloodmodel->updatebloodpurchase($bloodtype,$quantity);
			redirect('http://localhost/ci226/user');
		}
		}
		
		}
	
	
	public function updateuserinfo()
	{
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->model('usermodel');
			$data['result'] = $this->usermodel->getAll();
			//print_r($data);
			$this->load->view('view_updateuserinfo',$data);
			
		}
		else
		{
			if(!$this->form_validation->run('userinfoupdate'))
			{
				$data['message'] = validation_errors();
				$this->load->model('usermodel');
				$data['result'] = $this->usermodel->getAll();
				//print_r($data);
				$this->load->view('view_updateuserinfo',$data);
				
			}
			else 
			{
			$name = $this->input->post('name');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$gender = $this->input->post('gender');
			$email = $this->input->post('email');
			$address = $this->input->post('address');
			
			$this->load->model('usermodel');
			$this->usermodel->updateuserinfo($name,$password,$phone,$gender,$email,$address);
			
			redirect('http://localhost/ci226/user');
			}
		
		}
	}
	public function val_check($str)
        {
               $str=$this->input->post('quantity') ;
			   $t = $this->input->post('blood');
			   $this->load->model('bloodmodel');
			   $r=$this->bloodmodel->get($t);
				//print_r($r);
				$quan=$r['quantity'];
				if($str >=$quan)
				{$this->form_validation->set_message('val_check', 'we do not have sufficient quantity');
					return FALSE;
				}
				 else
                {
                        return TRUE;
                }
			   
        }
}	
//backup
/*
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
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
		$name=$this->session->userdata('login_names');
		$this->load->model('usermodel');
		$data['result'] = $this->usermodel->getAll();
		
		// $data['message'] = '';
		// $data['bl'] = '';
		// $name=$this->session->userdata('login_names');
		// $this->load->model('usermodel');
		// $data['result'] = $this->usermodel->getAll();
       
		// $this->load->model('bloodmodel');
		//$data['bl'] = $this->bloodmodel->getAll();
		// $this->load->view('view_userpanel', $data);

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
		//	$this->load->view('view_adminpanel', $data);
		
		
			$type=$this->input->post('blood');
			$this->load->model('bloodmodel');
			$data['bl'] = $this->bloodmodel->get($type);
			$this->load->view('view_userpanel', $data);
		}
		
	}
	
	public function bloodpurchase()
	{	
		
		if(!$this->input->post('buttonpurchase'))
		{
			$data['message'] = 'failed';

			
			$this->load->view('view_login', $data);
		}
		else
		{
			//echo $this->input->post('cat');
			$bloodtype = $this->input->post('bloodtype');
			$quantity=$this->input->post('quantity');
			$price=$this->input->post('price');			
			$date=$this->input->post('date');
		//gender
			$this->load->model('usermodel');
			$this->usermodel->insertblood($bloodtype,$quantity,$price,$date);
			redirect('http://localhost/ci226/user');
		}
	}
}	*/