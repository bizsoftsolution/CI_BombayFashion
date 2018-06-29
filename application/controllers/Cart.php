<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            //load model
           // $this->load->model('dashboard_model');
            //$this->load->model('Category_Model');
            $this->load->model('FrontModel');
           // $this->load->model('Product_Model',"product_model");
            $this->load->library('cart');
            $this->load->helper('url');  
            $this->load->helper('form');  
            $this->load->library('session');
            $this->load->database();
			
            //$this->load->library('encrypt');
           // $this->cart->product_name_rules = '[:print:]';
        }


        public function index()
        {
			//$data['category_list'] = $this->Category_Model->get_list();
            //$data['subcate'] = $this->Subcategory_Model->viewSubCategoryList();
			$data['category']=$this->FrontModel->Category();
			$this->load->view('front/template/header',$data);
			$this->load->view('front/cart');
			$this->load->view('front/template/footer'); 
            
        }
       
            function add()
            {
                $image =  $this->input->post('image');
                $insert_data = array(
                        'id' => $this->input->post('id'),
                        'name' => $this->input->post('name'),
                        'price' => $this->input->post('price'),
                        'image' => $this->input->post('image'),
                        'color' => $this->input->post('color'),
                        'size' => $this->input->post('size'),
                        'qty' => $this->input->post('qty')
                );		
                $this->cart->insert($insert_data);
				
				/* $send ='Front/ProductDescription/'.$this->input->post('id');
				$send ='Front/ProductList/'.$this->input->post('id');
				$send ='Subcategory/ProductList/'.$this->input->post('id');
				$send ='Front';
				$send ='Front/SearchList/'.$this->input->post('id');
				
				if(isset($send))
				{
					redirect('Front/ProductDescription/'.$this->input->post('id'));
				}
				elseif(isset($send))
				{
					redirect('Front');
				} */
				
				
               redirect('Cart');
            }
            function remove($rowid) {
                   
		if ($rowid==="all"){
                   	$this->cart->destroy();
		}else{
                   	$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                   	$this->cart->update($data);
		}
            	redirect('Cart');
	}
	
        function update_cart(){
            // Recieve post values,calcute them and update
            echo $cart_info =  $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
            {	
                $rowid = $cart['rowid'];
                $price = $cart['price'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];

                    $data = array(
                            'rowid'   => $rowid,
                            'price'   => $price,
                            'amount' =>  $amount,
                            'qty'     => $qty
                    );

                    $this->cart->update($data);
            }
            redirect('Cart');        
	}
       
	
}
