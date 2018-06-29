<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
            $this->load->library('cart');
            $this->load->helper('url');  
            $this->load->helper('form');  
            $this->load->library('session');
            $this->load->database();
            //$this->load->library('encrypt');
            $this->load->model('CheckoutModel');
            $this->load->model('FrontModel');
			if ($this->session->userdata('user_type') != 'Customer') {
				redirect('Customer');
			}
        }
        public function index()
		{
			$data['category']=$this->FrontModel->Category();
			$this->load->view('front/template/header',$data);
            $this->load->view('front/checkout');
			$this->load->view('front/template/footer');
        }
   
       public function Addcart()
        {
			if($this->input->post('add_checkout_data'))
			{
				//add to cart in database
				if($this->cart->contents()!="")
				{
					//$total = 0;
					//$qu=0;
					$shippingchrge = $this->input->post('Order_chrge');
					$gst = $this->input->post('gst_value');
					$totall = $this->cart->total();
					
					$total2 = $totall * $gst / 100;
					$total = $totall + $shippingchrge + $total2;
					
					$today = "BC_";
					$rand = strtoupper(substr(uniqid(sha1(time())),0,8));
					$unique = $today . $rand;
			
					$this->CheckoutModel->insertcart($total, $shippingchrge, $gst,$unique);
					$insert_id=$this->db->insert_id();
					// Add cart product details to tbl_cart_product
					foreach ($this->cart->contents() as $items)
					{
						$this->CheckoutModel->insertcartproductdetail($insert_id,$items['id'],$items['name'],$items['qty'],$items['price'],$items['size'],$items['color'],$items['subtotal']);
					}
					
					$uid=$this->session->userdata('user_id');
					$data1 = array(
						"firstname"=>$this->input->post('fname'),
						"lastname"=>$this->input->post('lname'),
						"address1"=>$this->input->post('address1'),
						"address2"=>$this->input->post('address2'),
						"phone"=>$this->input->post('phone'),
						"email"=>$this->input->post('email'),
						"country"=>$this->input->post('country'),
						"city"=>$this->input->post('city'),
						"province"=>$this->input->post('state'),
						"postcode"=>$this->input->post('postcode'),
						"customer_id"=>$uid,
						"order_date"=>date('Y-m-d H:i:s'),
						"sale_id"=>$insert_id
					);
					$this->CheckoutModel->addcheckout($data1);
					//Destroy and update tbl_cart in database					
					$this->cart->destroy();
					
					$data = array(
						"orderno"=> $unique,
						"orderdate"=> date('Y-m-d H:i:s'),
						"address1"=>$this->input->post('address1'),
						"address2"=>$this->input->post('address2'),
						"phone"=>$this->input->post('phone'),
						"country"=>$this->input->post('country'),
						"city"=>$this->input->post('city'),
						"province"=>$this->input->post('state'),
						"postcode"=>$this->input->post('postcode'),
						"shippingchrge"=>$this->input->post('Order_chrge'),
						"gst"=>$this->input->post('gst_value'),
						"ototal"=>$totall
						 );
				 
					$message = $this->load->view('front/orderSummary', $data, TRUE);
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
					 $to_email = $this->input->post('email'); 
			   
					 $this->email->from($from_email, 'Bombay Fashion'); 
					 $this->email->to($to_email);
					 $this->email->subject('Bombay Fashion'); 
					 $this->email->message($message); 
			   
					 //Send mail 
					 if($this->email->send()) 
					 {
						 $this->session->set_flashdata('SUCCESSMSG','Your Order Successfully Placed!!');
						 redirect('Checkout/Confirmation');
					 }
					 //$this->session->set_flashdata("email_sent","Email sent successfully."); 
					// else 
					// $this->session->set_flashdata("email_sent","Error in sending Email."); 
					// $this->load->view('email_form');
		 
					
				}
			}         
		}

	function Confirmation()
	{
		$data['category']=$this->FrontModel->Category();
		$this->load->view('front/template/header',$data);
		$this->load->view('front/confirmation');
		$this->load->view('front/template/footer');
	}
	
	
}
