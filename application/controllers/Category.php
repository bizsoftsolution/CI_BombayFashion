<?php
class Category extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('MasterModel');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
  }
  function index()
  {
	  $data = array('message'=>'');
	  $data['categoryList']=$this->MasterModel->categoryList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('master/category/categoryList', $data);
      $this->load->view('template/footer'); 
  }
  public function Add()
  {
    $result = array('message'=>'');
    if($this->input->post('categoryname')){
		$data = array(
			'category' => $this->input->post('categoryname')						
		);
		$result['message'] = $this->MasterModel->Add($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('master/category/categoryAdd',$result);
    $this->load->view('template/footer');
  }
  public function Edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('categoryname'))
    {
  		$data = array(
        'category' => $this->input->post('categoryname')
  		);
  		$result['message'] = $this->MasterModel->Edit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Category");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['category']=$this->MasterModel->Get($id);
    $this->load->view('master/category/categoryEdit',$result);
    $this->load->view('template/footer');
  }
	public function Delete($id)
  {
    $result = $this->MasterModel->Delete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Category");
      }
  }  
 
}
?>
