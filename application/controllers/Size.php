<?php
class Size extends CI_Controller
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
	  $data['sizeList']=$this->MasterModel->sizeList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('master/size/sizeList', $data);
      $this->load->view('template/footer'); 
  }
  public function Add()
  {
    $result = array('message'=>'');
    if($this->input->post('sizename')){
		$data = array(
			'size' => $this->input->post('sizename')						
		);
		$result['message'] = $this->MasterModel->sizeAdd($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('master/size/sizeAdd',$result);
    $this->load->view('template/footer');
  }
  public function Edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('sizename'))
    {
  		$data = array(
        'size' => $this->input->post('sizename')
  		);
  		$result['message'] = $this->MasterModel->sizeEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Size");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['size']=$this->MasterModel->sizeGet($id);
    $this->load->view('master/size/sizeEdit',$result);
    $this->load->view('template/footer');
  }
	public function Delete($id)
  {
    $result = $this->MasterModel->sizeDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Size");
      }
  }  
 
}
?>
