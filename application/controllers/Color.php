<?php
class Color extends CI_Controller
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
	  $data['colorList']=$this->MasterModel->colorList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('master/color/colorList', $data);
      $this->load->view('template/footer'); 
  }
  public function Add()
  {
    $result = array('message'=>'');
    if($this->input->post('colorname')){
		$data = array(
			'color' => $this->input->post('colorname'),
			'color_code' => $this->input->post('choosecolor')
		);
		$result['message'] = $this->MasterModel->colorAdd($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('master/color/colorAdd',$result);
    $this->load->view('template/footer');
  }
  public function Edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('colorname'))
    {
  		$data = array(
        'color' => $this->input->post('colorname'),
        'color_code' => $this->input->post('choosecolor')
  		);
  		$result['message'] = $this->MasterModel->colorEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Color");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['color']=$this->MasterModel->colorGet($id);
    $this->load->view('master/color/colorEdit',$result);
    $this->load->view('template/footer');
  }
	public function Delete($id)
  {
    $result = $this->MasterModel->colorDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Color");
      }
  }  
 
}
?>
