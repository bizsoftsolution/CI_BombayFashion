<?php
class CheckoutModel extends CI_Model
{
	function __construct() {
        // Call the Model constructor
        parent::__construct();

		$this->load->database();
        }

       function addcheckout($data1)
        {
          	if($this->db->insert('tbl_checkout', $data1))
			{
				return true;
			}
        }
		function insertcart($total, $shippingchrge, $gst)
        {
			$today = "BC_";
			$rand = strtoupper(substr(uniqid(sha1(time())),0,8));
			$unique = $today . $rand;
			
			$data2 = array(
			"grandtotal"=>$total,
			"shipping_charge"=>$shippingchrge,
			"gst"=>$gst,
			"customer_id"=>$this->session->userdata('user_id'),
			"tax_amt"=>"",
			"order_no"=>$unique,
			"order_date"=>date('Y-m-d')
			);
			$this->db->insert('tbl_order', $data2);
			return true;
        }
		function insertcartproductdetail($insert_id,$pid,$pname,$qty,$price,$size,$color,$psubtotal)
        {
			$this->db->set('order_id',$insert_id);
			$this->db->set('product_id',$pid);
			$this->db->set('product_name',$pname);
			$this->db->set('qty',$qty);
			$this->db->set('product_price',$price);
			$this->db->set('size_id',$size);
			$this->db->set('color_id',$color);
			$this->db->set('sub_total',$psubtotal);	
			$this->db->insert('tbl_order_details');
			
			$data7 = $this->db->get_where("tbl_product", array("id"=>$pid))->result();
			foreach($data7 as $rowdata7)
			{
				$idd = $rowdata7->id;
				$qtyy = $rowdata7->quantity - $qty;
			}
			$this->db->set('quantity',$qtyy);
			$this->db->where("id", $idd);
			$this->db->update("tbl_product");
        }
		function addsale($byname,$total1,$createby,$qu)
        {
            $this->db->set('buyer_name',$byname);
			$this->db->set('grand_amount',$total1);
			$this->db->set('created_by',$createby);
			$this->db->set('issue_date',date('Y-m-d'));
			$this->db->set('total_quantity',$qu);
		   	$this->db->set('status','active');
			$this->db->insert('tbl_sales');              
        }
		function addcheckoutcart($cid,$in,$uid)
        {
			$this->db->set('sale_id',$cid);
			$this->db->where('checkout_id',$in);
			$this->db->where('customer_id',$uid);
			$this->db->update('tbl_checkout');                    
        }
		function getcartdata($uid)
		{
			$query = $this->db->select('tbl_cart.*,tbl_cart_product.*,tbl_product.product_code');
			$query = $this->db->from('tbl_cart');
			$query= $this->db->join('tbl_cart_product','tbl_cart.cart_id = tbl_cart_product.product_cart_id');
			$query= $this->db->join('tbl_product','tbl_product.id = tbl_cart_product.product_id');
			$query = $this->db->where('tbl_cart.userid',$uid);
			$query = $this->db->where('tbl_cart.is_shipped',0);
			$query = $this->db->get();
			return $query->result();
		}
		function addsaledetail($insert,$select4)
        {
			$this->db->set('sale_id',$insert);
			$this->db->set('product_code',$select4->product_code);
			$this->db->set('quantity',$select4->quantity);
			$this->db->set('color_id',$select4->color_id);
			$this->db->set('size_id',$select4->size_id);
			$this->db->set('product_price',$select4->product_price);
			$this->db->insert('tbl_sales_detail');   
        }
			
		
}