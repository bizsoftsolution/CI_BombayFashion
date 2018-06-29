<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	 public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('Adminmodel');
		$this->load->helper('url');  
		$this->load->helper('form');  
		$this->load->library('session');
		$this->load->database();
    }

	public function CustomerList()
	{
		$data['customerList']=$this->Adminmodel->customerList();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('customer/customerList',$data);
		$this->load->view('template/footer');	
	}
	function customer_status($id,$status)
	{
		$this->Adminmodel->CustomerStatus($id,$status);
		$messge = array('message' => 'Customer status successfully updated.','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
		$base_url=base_url();
		redirect("$base_url"."Admin/CustomerList");
	}

}
