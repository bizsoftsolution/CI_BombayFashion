<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	 public function __construct()
	{
            parent::__construct();
            //load model
            $this->load->model('FrontModel');
			$this->load->model('Customermodel');
            $this->load->library('cart');
            $this->load->helper('url');  
            $this->load->helper('form');  
            $this->load->library('session');
            $this->load->database();
            //$this->load->library('encrypt');
			/* if ($this->session->userdata('user_type') == 'Customer') {
				redirect('Customer');
			} */
        }

	public function index()
	{
		$data['category']=$this->FrontModel->Category();
		$this->load->view('front/template/header',$data);
		$this->load->view('front/customerlogin');
		$this->load->view('front/template/footer');
		
	}
	public function varifyUser()
	{	
		
	   //$this->load->library('session');
	   		//$this->load->helper('url');
        /* if($this->session->userdata('logged_in')==TRUE){
        redirect('Dashboard');
        }  */
        $email=$this->input->post('email',true);
        $password=$this->input->post('password',true);
        if($this->Customermodel->login($email,$password))
		{
			redirect('Front');
        }
		else
		{
			$this->session->set_flashdata('login_msg', 'Invalid User Name or Password');
			redirect('Customer');
        }

	}
	public function logout()
	{
	   	$this->Customermodel->logout($this->session->userdata('user_id'));
		redirect(base_url());
	}
	function Signup()
	{
		if($this->input->post('submit_registration'))
		{
			$cdata = array(
				"first_name"=>$this->input->post('fname'),
				"last_name"=>$this->input->post('lname'),
				"email"=>$this->input->post('email'),
				"phone"=>$this->input->post('phone'),
				"password"=>$this->input->post('pwd')
			);
			if($this->Customermodel->Signup($cdata))
			{
				$this->session->set_flashdata('signup', 'Registration Successfully Completed.');
				redirect('Customer');
			}
		}
		else
		{
			$data['category']=$this->FrontModel->Category();
			$this->load->view('front/template/header',$data);
			$this->load->view('front/signup');
			$this->load->view('front/template/footer');
		}
	}
	function profile()
	{
		$data['category']=$this->FrontModel->Category();
		$data['cprofile']=$this->Customermodel->cProfile();
		$this->load->view('front/template/header',$data);
		$this->load->view('front/customerProfile', $data);
		$this->load->view('front/template/footer');
	}
	function customerEdit($id)
	{
		if($this->input->post('Update_customer_profile'))
		{
			if (!empty($_FILES['file']['name'])) {
				$config['upload_path']   = './upload/cprofile/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name']     = $_FILES['file']['name'];
				
				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file')) {
					$uploadData         = $this->upload->data();
					$cprofile_picture = $uploadData['file_name'];
				} else {
					$cprofile_picture = '';
				}
			} else {
				$cprofile_picture = $this->input->post('hidden_img');
			}
			$cdata = array(
				"first_name"=>$this->input->post('fname'),
				"last_name"=>$this->input->post('lname'),
				"email"=>$this->input->post('email'),
				"phone"=>$this->input->post('phone'),
				"billing_address1"=>$this->input->post('baddress1'),
				"billing_address2"=>$this->input->post('baddress2'),
				"billing_city"=>$this->input->post('bcity'),
				"billing_state"=>$this->input->post('bstate'),
				"billing_country"=>$this->input->post('bcountry'),
				"billing_zip"=>$this->input->post('bzip'),
				"shipping_address1"=>$this->input->post('sadd11'),
				"shipping_address2"=>$this->input->post('sadd22'),
				"shipping_city"=>$this->input->post('scity1'),
				"shipping_state"=>$this->input->post('sstate1'),
				"shipping_country"=>$this->input->post('scountry1'),
				"shipping_zip"=>$this->input->post('szip1'),
				"uploadFile"=>$cprofile_picture,
				"modified_by"=>$this->session->userdata('user_id'),
				"modified_date"=>date("Y-m-d")
			);
			if($this->Customermodel->customerEdit($cdata, $id))
			{
				$this->session->set_flashdata('signup', 'Update Successfully.');
				redirect('Customer/profile');
			}
		}
	}
	function pwd_update($id)
	{
		if($this->input->post('submit_change_password'))
		{
			$old_pwd=$this->input->post('old_password');
			if($this->Customermodel->pwdCheck($old_pwd, $id))
			{
				$npassword = array("password"=>$this->input->post('new_password'));
				$this->Customermodel->pwdChange($npassword, $id);
				$this->session->set_flashdata('signup', 'Password Changed Successfully!!!.');
				redirect('Customer/profile');
			}
			else
			{
				$this->session->set_flashdata('chnagepassword', 'Old Password Does not Match!!!.');
				redirect('Customer/profile');
			}
			
		}
	}

}
