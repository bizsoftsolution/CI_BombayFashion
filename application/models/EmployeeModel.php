<?php
class EmployeeModel extends CI_Model {
 function __construct()
    {
	  parent::__construct();
	  $this->load->database();
    }
    function addNew($userData,$data_user)
	{
      if($this->db->insert('tbl_employee',$userData))
      {
		$data_user['emp_no']=$this->db->insert_id();
		if($this->db->insert('user', $data_user))
		{
			return "SUCCESS";
		 }
		  else
		  {
			return "FAILED";
		  }
	  }

	}
	function employeeList($branch_no)
	{
	 $this->db->from('tbl_employee');
	 $this->db->where('branch_no',$branch_no);
	 $query = $this->db->get();
	return $query->result();
    }
	
	function getEditdata($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('tbl_employee');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	function updateData($data,$id)
    {
    $this->db->where('id',$id);      //var_dump($id);exit();
	if($this->db->update('tbl_employee',$data))
	{
     return "SUCCESS";
	}
	else 
	{
		return "FAILED";
	}
    }
 function deleteData($id)
    {
       $this->db->delete('tbl_employee', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }
	public function selectBranch()
	{
		$this->db->from('tbl_branch');
	
        $query = $this->db->get();
        return $query->result();
	}
}
?>
