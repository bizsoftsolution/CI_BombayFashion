<?php
class Front extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('FrontModel');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
  }
  function index()
  {
	$data['slider']=$this->FrontModel->Slider();
	$data['category']=$this->FrontModel->Category();
    $this->load->view('front/template/header',$data);
    $this->load->view('front/slider',$data);
    $this->load->view('front/index',$data);
    $this->load->view('front/template/footer'); 
  }
  function ContactUs()
  {
	$data['category']=$this->FrontModel->Category();
    $this->load->view('front/template/header',$data);
    $this->load->view('front/contactus');
    $this->load->view('front/template/footer'); 
  }
  function ProductList()
  {
	  $data['cid'] = $this->uri->segment(3);
	  //$data = array('message'=>'');
	  $data['category']=$this->FrontModel->Category();
	 // $data['productList']=$this->FrontModel->ProductList();
      $this->load->view('front/template/header',$data);
      $this->load->view('front/productList', $data);
      $this->load->view('front/template/footer'); 
  }
  function ProductDescription()
  {
	  $id = $this->uri->segment(3);
	  //$data = array('message'=>'');
	  $data['category']=$this->FrontModel->Category();
	  $data['productDescription']=$this->FrontModel->ProductDescription($id);
      $this->load->view('front/template/header',$data);
      $this->load->view('front/productDescription', $data);
      $this->load->view('front/template/footer'); 
  }
function SearchList()
{
	$cid = $this->input->post('searchCategory');
	$data['category']=$this->FrontModel->Category();
	$data['data3']=$this->FrontModel->SearchList($cid);
	$data['cid']=$cid;
	$this->load->view('front/template/header',$data);
	$this->load->view('front/searchList', $data);
	$this->load->view('front/template/footer'); 
}
function InsertReview()
{
	$data = array(
		'quality_rating'=>$this->input->post('product_qty'),
		'price_rating'=>$this->input->post('product_price'),
		'value_rating'=>$this->input->post('product_value'),
		'name'=>$this->input->post('nname'),
		'description'=>$this->input->post('review'),
		'product_id'=>$this->input->post('cus_id'),
		'customer_id'=>$this->session->userdata('user_id'),
		'date'=>date("Y-m-d")
		);
	$this->FrontModel->InsertReview($data);
}

}
?>
