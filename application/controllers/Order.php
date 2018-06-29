<?php
class Order extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('OrderModel');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
  }
  function index()
  {
	  $data = array('message'=>'');
	  $data['orderList']=$this->OrderModel->orderList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('orderplaced/orderPlacedList', $data);
      $this->load->view('template/footer'); 
  }

  public function View($id)
  {
    $result = array('message'=>'');
    if($this->input->post('submit'))
    {
  		$data = array(
        'status' => $this->input->post('orderstatus')
  		);
		
  		$result['message'] = $this->OrderModel->orderEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		 /*  $htmlContent = '<h1>HTML email testing by CodeIgniter Email Library</h1>';
			$htmlContent .= '<p>You can use any HTML tags and content in this email.</p>';
    
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
		*/
		/* $config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'mail@denariusoft.com', // change it to yours
		  'smtp_pass' => 'test123!@#', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  //'charset' => 'utf-8',
		  'wordwrap' => TRUE
		); */
		 //Load email library 
		 $this->load->library('email'); 
		
		$from_email = "rajkumar.bizsoft@gmail.com"; 
		 $to_email = $this->input->post('emailid'); 
		 $this->email->from($from_email, 'Bombay Fashion'); 
		 $this->email->to($to_email);
		 $this->email->subject('Bombay Fashion'); 
		 $this->email->message('Your Order Successfully Delivered!!'); 
   
		 //Send mail 
		 if($this->email->send()) 
		 {
			$messge = array('message' => 'Your Order successfully Delivered','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Order");
			
			 //$this->session->set_flashdata('SUCCESSMSG','Your Order Successfully Placed!!');
			 //redirect('Checkout/Confirmation');
		 }
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    //$result['orderPlace']=$this->OrderModel->orderGet($id);
    //$result['orderPlace']=$id;
    $this->load->view('orderplaced/orderPlacedView');
    $this->load->view('template/footer');
  }
	/* public function Delete($id)
  {
    $result = $this->OrderModel->sizeDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Size");
      }
  }   */
	function deliveredList()
  {
	  $data['deliveredList']=$this->OrderModel->deliveredList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('orderplaced/deliveredList', $data);
      $this->load->view('template/footer'); 
  }
 
}
?>
