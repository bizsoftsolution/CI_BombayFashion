<?php
class Slider extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('SliderModel');
    $this->load->helper('url');
	$this->load->library('session');
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
  function index()
  {
    $data['sliderList']=$this->SliderModel->sliderList();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('slider/sliderList',$data);
    $this->load->view('template/footer');
  }
  public function Add()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_slider'))
		{  
            //Check whether user upload picture
            if(!empty($_FILES['bg_banner']['name'])){
                $config['upload_path'] = './upload/slider/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['bg_banner']['name'];
                
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
            //Prepare array of user data
            $userData = array(
                'slider' => $bg_picture,
                'created_date' => date("Y-m-d H:i:s"),
            );          
			//Pass user data to model
			$result['message'] = $this->SliderModel->Add($userData);
        }		
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('slider/newSlider',$result);
    $this->load->view('template/footer');
  }
  
  public function Edit($id)
  {
		$result = array('message'=>'');
		if($this->input->post('submit_updatebgimage'))
		{  
		if(!empty($_FILES['edit_bg_image']['name'])){
			$config['upload_path'] = './upload/slider/';
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
			$edit_bg_picture = '';
		}
		//Delete file already in path.
		$get_image_name  = $this->input->post('get_image_name');
		if(file_exists('upload/slider/'.$get_image_name))
		{
            unlink('upload/slider/'.$get_image_name);
			$data = array(
                'slider' => $edit_bg_picture,
                'updated_date' => date("Y-m-d H:i:s")
            );
		}
			//Pass user data to model
			$result['message'] = $this->SliderModel->Edit($data, $id);
			if($result['message'] == 'SUCCESS')
			{
			$messge = array('message' => 'Slider details updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Slider");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['slider']=$this->SliderModel->Get($id);
    $this->load->view('slider/updateSlider',$result);
    $this->load->view('template/footer');
}
  public function Delete($id)
  {
	$id  = $this->SliderModel->Get_by_id($id);
   if($id){
		$this->db->query("Delete from tbl_slider where id = '".$id->id."'");
		if(file_exists('upload/slider/'.$id->slider)) 
		{
			unlink('upload/slider/'.$id->slider);
			
        }
		$messge = array('message' => 'Slider details deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
		$base_url=base_url();
		redirect("$base_url"."Slider");
		//echo $_SERVER['DOCUMENT_ROOT'];
		//echo dirname(__FILE__);
		//delete_files(base_url("upload/slider/" .$id->slider));
		//unlink(base_url("upload/slider/".$id->slider));
   }
  }
	function slider_status($id,$status)
	{
	$this->SliderModel->SliderStatus($id,$status);
	$messge = array('message' => 'Slider status successfully updated.','class' => 'alert alert-success fade in');
	$this->session->set_flashdata('notification', $messge);
	$base_url=base_url();
	redirect("$base_url"."Slider");
	}
}
?>
