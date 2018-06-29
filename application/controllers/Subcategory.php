<?php
class Subcategory extends CI_Controller
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
	  //$data = array('message'=>'');
	  $data['categoryList']=$this->MasterModel->subcategoryList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('master/subcategory/subcategoryList', $data);
      $this->load->view('template/footer'); 
  }
  public function Add()
  {
    $result = array('message'=>'');
    if($this->input->post('subcategoryname')){
		$data = array(
			'category_id' => $this->input->post('category_type'),						
			'sub_category' => $this->input->post('subcategoryname')						
		);
		$result['message'] = $this->MasterModel->subcategoryAdd($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('master/subcategory/subcategoryAdd',$result);
    $this->load->view('template/footer');
  }
  public function Edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('subcategoryname'))
    {
  		$data = array(
		'category_id' => $this->input->post('category_type'),
        'sub_category' => $this->input->post('subcategoryname')
  		);
  		$result['message'] = $this->MasterModel->subcategoryEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Subcategory");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['subcategory']=$this->MasterModel->subcategoryGet($id);
    $this->load->view('master/subcategory/subcategoryEdit',$result);
    $this->load->view('template/footer');
  }
	public function Delete($id)
  {
    $result = $this->MasterModel->subcategoryDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Subcategory");
      }
  }

	// Product list filter based up working here
	
	function ProductList()
	  {
		  $this->load->model('FrontModel');
		  $data['scid'] = $this->uri->segment(3);
		  //$data = array('message'=>'');
		  $data['category']=$this->FrontModel->Category();
		 // $data['productList']=$this->FrontModel->ProductList();
		  $this->load->view('front/template/header',$data);
		  $this->load->view('front/subcategoryList', $data);
		  $this->load->view('front/template/footer'); 
	  }
 
}
?>
