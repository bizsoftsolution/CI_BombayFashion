<?php
class Product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	function index()
	{
	  $data['productList']=$this->ProductModel->productList();
	  $this->load->view('template/header');
	  $this->load->view('template/sidebar');
	  $this->load->view('product/productList', $data);
	  $this->load->view('template/footer'); 
	}
	function viewSubCategory($category)
	{
	 header('Content-Type: application/x-json; charset=utf-8');
	 echo(json_encode($this->ProductModel->viewSubCategory($category)));
	}
	
	function genret_code() 
	{
		$pass = "";
		$chars = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

		for ($i = 0; $i < 15; $i++) {
			$pass .= $chars[mt_rand(0, count($chars) - 1)];
		}
		return $pass;
	}
	public function product_code()
	{
		$code = $this->genret_code();
		$response = $this->ProductModel->check_existance($code);
		if ($response) {
				$this->productCode();
		   } else {
			   echo $code;
			   exit;
		   }
		   exit;
	}
		
	public function Add()
	  {
		$result = array('message'=>'');
		if($this->input->post('Submit_product_data')){
			
			//Check whether Banner picture Upload
            if(!empty($_FILES['bg_banner']['name'])){
                $config['upload_path'] = './upload/products/banner/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG';
                $config['file_name'] = $_FILES['bg_banner']['name'];
                $config['max_size']	= '0'; //204800
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('bg_banner')){
                    $uploadData = $this->upload->data();
                    $bg_picture = $uploadData['file_name'];
                }else{
                    $bg_picture = '';
                }
            }else{
                $bg_picture = '';
            }
			
			//Check whether user upload picture
			$files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];

				$config['upload_path'] = './upload/products/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file'))
				{
					$this->upload->data();
					$images[] = $_FILES['file']['name'];
				}
			}
			$fileName = implode(',',$images);
				
			/* $productsubcategory = $this->input->post('productsubcategory');
			$productsubcategory1 ="";
			if(isset($productsubcategory) && is_array($productsubcategory)){
				$productsubcategory1 = implode(",", $productsubcategory); 
			} */
			$productcolor = $this->input->post('productcolor');
			$productcolor1 ="";
			if(isset($productcolor) && is_array($productcolor)){
				$productcolor1 = implode(",", $productcolor); 
			}
			$productsize = $this->input->post('productsize');
			$productsize1 ="";
			if(isset($productsize) && is_array($productsize)){
				$productsize1 = implode(",", $productsize); 
			}
			$relatedproduct = $this->input->post('relatedproduct');
			$relatedproduct1 ="";
			if(isset($relatedproduct) && is_array($relatedproduct)){
				$relatedproduct1 = implode(",", $relatedproduct); 
			}
			
			$data = array(
				'product_name' => $this->input->post('productname'),						
				'product_description' => $this->input->post('productdescription'),					
				'product_price' => $this->input->post('numbers'),						
				'banner_image' => $bg_picture,						
				'product_image' => $fileName,						
				'category_id' => $this->input->post('productcategory'),					
				'sub_category_id' =>$this->input->post('productsubcategory'),				
				'color_id' =>$productcolor1,						
				'size_id' =>$productsize1,						
				'related_product' =>$relatedproduct1,											
				'quantity' =>$this->input->post('digits'),						
				'discount' =>$this->input->post('discount'),						
				'gross_amount' =>$this->input->post('grossamount'),						
				'net_amount' =>$this->input->post('netamount'),						
				'gst' =>$this->input->post('gst'),						
				'created_date' =>date("Y-m-d H:i:s"),						
				'created_by' =>$this->session->userdata('user_id')					
			);
			$result['message'] = $this->ProductModel->Add($data);
		  }
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('product/productAdd',$result);
		$this->load->view('template/footer');
	  }
	  public function Edit($id)
	  {
		$result = array('message'=>'');
		if($this->input->post('Update_product_data'))
		{
			
			if(!empty($_FILES['edit_bg_image']['name'])){
			$config['upload_path'] = './upload/products/banner/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['edit_bg_image']['name']; 
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
				
				if($this->upload->do_upload('edit_bg_image')){
					$uploadData = $this->upload->data();
					$edit_bg_picture = $uploadData['file_name'];
				}else{
					$edit_bg_picture = '';
				}
			}else{
				$edit_bg_picture = $this->input->post('already_bannerimg');
			}
			
		  //Check whether user upload picture
			$files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
			$config['upload_path'] = './upload/products/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('file'))
			{
				$this->upload->data();
				$images[] = $_FILES['file']['name'];
			}
			}
			$fileName = implode(',',$images);
			$already_get_img = $this->input->post('already_img');
			$fileName1 = implode(',',$already_get_img);
			$fileName2 = $fileName.','.$fileName1;
				
			/* $productsubcategory = $this->input->post('productsubcategory');
			$productsubcategory1 ="";
			if(isset($productsubcategory) && is_array($productsubcategory)){
				$productsubcategory1 = implode(",", $productsubcategory); 
			} */
			$productcolor = $this->input->post('productcolor');
			$productcolor1 ="";
			if(isset($productcolor) && is_array($productcolor)){
				$productcolor1 = implode(",", $productcolor); 
			}
			$productsize = $this->input->post('productsize');
			$productsize1 ="";
			if(isset($productsize) && is_array($productsize)){
				$productsize1 = implode(",", $productsize); 
			}
			$relatedproduct = $this->input->post('relatedproduct');
			$relatedproduct1 ="";
			if(isset($relatedproduct) && is_array($relatedproduct)){
				$relatedproduct1 = implode(",", $relatedproduct); 
			}
			
			$data = array(
				'product_name' => $this->input->post('productname'),						
				'product_description' => $this->input->post('productdescription'),					
				'product_price' => $this->input->post('numbers'),						
				'banner_image' => $edit_bg_picture,						
				'product_image' => $fileName2,						
				'category_id' => $this->input->post('productcategory'),					
				'sub_category_id' =>$this->input->post('productsubcategory'),				
				'color_id' =>$productcolor1,						
				'size_id' =>$productsize1,						
				'related_product' =>$relatedproduct1,						
				'quantity' =>$this->input->post('digits'),						
				'discount' =>$this->input->post('discount'),						
				'gross_amount' =>$this->input->post('grossamount'),						
				'net_amount' =>$this->input->post('netamount'),	
				'gst' =>$this->input->post('gst'),
				'modified_date' =>date("Y-m-d H:i:s"),						
				'modified_by' =>$this->session->userdata('user_id')					
			);
			
		  $result['message'] = $this->ProductModel->Edit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Product details updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Product");
		  }
		}
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$result['product']=$this->ProductModel->Get($id);
		$this->load->view('product/productEdit',$result);
		$this->load->view('template/footer');
	  }
	public function Delete($id)
	{
	 $tid  = $this->ProductModel->get_product_by_id($id);
	   if($tid){
			$this->db->query("Delete from tbl_product where id = '".$tid->id."'");
			// remove uploaded student image
			$img = explode(',', trim($tid->product_image, ','));
			foreach($img as $img_val)
			{
				$data10 = $this->db->get_where('tbl_product', array('product_image'=>$img_val))->result();
				foreach($data10 as $data10_row)
				{
					unlink("upload/products/".$data10_row);
				}
			}
			//unlink("upload/products/".$id->product_image);
			$messge = array('message' => 'Product details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Product");
	   }
  } 
function product_status($id,$status)
{
	$this->ProductModel->ProdcutStatus($id,$status);
	$messge = array('message' => 'Product status successfully updated.','class' => 'alert alert-success fade in');
	$this->session->set_flashdata('notification', $messge);
	$base_url=base_url();
	redirect("$base_url"."Product");
}  
function feature_status($id,$status)
{
	$this->ProductModel->FeatureStatus($id,$status);
	$messge = array('message' => 'Product status successfully updated.','class' => 'alert alert-success fade in');
	$this->session->set_flashdata('notification', $messge);
	$base_url=base_url();
	redirect("$base_url"."Product");
}
function latest_status($id,$status)
{
	$this->ProductModel->LatestStatus($id,$status);
	$messge = array('message' => 'Product status successfully updated.','class' => 'alert alert-success fade in');
	$this->session->set_flashdata('notification', $messge);
	$base_url=base_url();
	redirect("$base_url"."Product");
}    
 
}
?>
