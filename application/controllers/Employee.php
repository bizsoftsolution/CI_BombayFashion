<?php
class Employee extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('EmployeeModel');
    $this->load->helper('url');
	$this->load->library('session');
  }
  public function addNew()
  {
    $result = array('message'=>'');
	
	if($this->input->post('submit_employee'))
		{  
 
            //Prepare array of user data
            $userData = array(
				'ename' => $this->input->post('name'),
                'dob' => $this->input->post('dob'),
                'designation' => $this->input->post('designation'),
                'branch_no' => $this->input->post('branch_no'),
                'scope' => $this->input->post('scope'),
                'street1' => $this->input->post('street1'),
                'street2' => $this->input->post('street2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'phone_number' => $this->input->post('phone_number'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );   
			
		$data_user = array(
          'first_name' => $this->input->post('name'),
          'user_type' => $this->input->post('designation'),
          'email' => $this->input->post('email'),
          'password' => $this->input->post('password')

        );
			
			//Pass user data to model
			$result['message'] = $this->EmployeeModel->addNew($userData,$data_user);
        }
	$result['branchList']=$this->EmployeeModel->selectbranch();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('employee/newEmployee',$result);
    $this->load->view('template/footer');
  }
  function EmployeeList()
  {
	 $branch_no = $this->session->userdata('branch_no');
    $data['employeeList']=$this->EmployeeModel->employeeList($branch_no);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('employee/employeeList',$data);
    $this->load->view('template/footer');
  }

  public function editData($id)
  {
    $result = array('message'=>'');

	if($this->input->post('update_employee'))
		{  
			$data = array(
                'ename' => $this->input->post('name'),
                'dob' => $this->input->post('dob'),
                'designation' => $this->input->post('designation'),
                'branch_no' => $this->input->post('branch_no'),
				'scope' => $this->input->post('scope'),
                'street1' => $this->input->post('street1'),
                'street2' => $this->input->post('street2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'phone_number' => $this->input->post('phone_number'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );          
			//Pass user data to model
			$result['message'] = $this->EmployeeModel->updateData($data, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."Employee/employeeList");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
	$result['branchList']=$this->EmployeeModel->selectbranch();
    $result['getEditdata']=$this->EmployeeModel->getEditdata($id);
    $this->load->view('Employee/updateEmployee',$result);
    $this->load->view('template/footer');
	}
  public function deleteData($id)
  {
    $this->EmployeeModel->deleteData($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
	$branch_no = $this->session->userdata('branch_no');
    $data['employeeList']=$this->EmployeeModel->EmployeeList($branch_no);
    $this->load->view('employee/employeeList',$data);
    $this->load->view('template/footer');
  }

}
?>
