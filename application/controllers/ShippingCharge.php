<?php
class ShippingCharge extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('MasterModel');
    $this->load->helper('url');
	$this->load->library('excel');//load PHPExcel library  
    $this->load->library('session');
    $this->load->database();
	
  }
  function index()
  {
	  $data = array('message'=>'');
	  $data['shippingchargeList']=$this->MasterModel->shippingchargeList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('master/shippingcharge/shippingchargeList', $data);
      $this->load->view('template/footer'); 
  }
/*   function Add1()	{ 

//Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)	 
         $configUpload['upload_path'] = FCPATH.'upload/excel/shippingcharge/';
         $configUpload['allowed_types'] = 'xls|xlsx|csv';
         $configUpload['max_size'] = '5000';
         $this->load->library('upload', $configUpload);
         $this->upload->do_upload('excelfilename');	
         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
         $file_name = $upload_data['file_name']; //uploded file name
		 $extension=$upload_data['file_ext'];    // uploded file extension
		
//$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003 
 $objReader= PHPExcel_IOFactory::createReader('Excel2007');	// For excel 2007 	  
          //Set to read only
          $objReader->setReadDataOnly(true); 		  
        //Load excel file
		 $objPHPExcel=$objReader->load(FCPATH.'upload/excel//shippingcharge/'.$file_name);		 
         $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();   //Count Numbe of rows avalable in excel      	 
         $objWorksheet=$objPHPExcel->setActiveSheetIndex(0);                
          //loop from first data untill last data
          for($i=2;$i<=$totalrows;$i++)
          {
              $city_name= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();			
              $shipping_charge= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
			  //$Email= $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
			 // $Mobile=$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
			  //$Address=$objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); //Excel Column 4
			  $data_user=array('city_name'=>$city_name, 'shipping_charge'=>$shipping_charge);
			  $this->MasterModel->shippingchargeAdd($data_user);
              
						  
          }
             unlink('upload/excel/shippingcharge/'.$file_name); //File Deleted After uploading in database .			 
             redirect(base_url() . "put link were you want to redirect");
	           
       
     } */
	public function Add()
    {
	  if(isset($_POST["import"]))
		{
			$filename=$_FILES["file"]["tmp_name"];
			if($_FILES["file"]["size"] > 0)
			  {
				$file = fopen($filename, "r");
				 while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
				 {
						$data = array(
							'city_name' => $importdata[0],
							'shipping_charge' =>$importdata[1],
							'created_date' => date('Y-m-d'),
							);
				 $insert = $this->MasterModel->shippingchargeAdd($data);
				 }                    
				fclose($file);
				
				$messge = array('message' => 'Data are imported successfully..','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('item', $messge);
				
				//$this->session->set_flashdata('message', 'Data are imported successfully..');
					redirect('ShippingCharge/Add');
			  }else{
				$messge = array('message' => 'Something went wrong..','class' => 'alert alert-danger fade in');
				$this->session->set_flashdata('item', $messge);
				
				//$this->session->set_flashdata('message', 'Something went wrong..');
				redirect('ShippingCharge/Add');
			}
		}
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/shippingcharge/shippingchargeAdd');
		$this->load->view('template/footer');
	}
	
  public function Edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('submit'))
    {
  		$data = array(
        'city_name' => $this->input->post('cityname'),
        'shipping_charge' => $this->input->post('shippingcharge'),
        'created_date' => date("Y-m-d")
  		);
  		$result['message'] = $this->MasterModel->shippingchargeEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."ShippingCharge/Edit/".$id);
      }
	  else
	  {
		$messge = array('message' => 'Data updated Failed','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."ShippingCharge/Edit/".$id); 
	  }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['shippingcharge']=$this->MasterModel->shippingchargeGet($id);
    $this->load->view('master/shippingcharge/shippingchargeEdit',$result);
    $this->load->view('template/footer');
  }
	public function Delete($id)
  {
    $result = $this->MasterModel->shippingchargeDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."ShippingCharge");
      }
	  else
	  {
		$messge = array('message' => 'Data deleted failed','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."ShippingCharge");  
	  }
  }  
 
}
?>
