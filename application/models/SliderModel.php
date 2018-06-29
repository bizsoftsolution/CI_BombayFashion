<?php
class SliderModel extends CI_Model {
 function __construct()
    {
              parent::__construct();
              $this->load->database();
    }
    function Add($userData)
	{
      if($this->db->insert('tbl_slider',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function sliderList()
	{
	$query = $this->db->get('tbl_slider');
	return $query->result();
    }
	
	function Get($id)
	{
    $this->db->select('*');
    $this->db->from('tbl_slider');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	
	function Edit($data,$id)
    {
    $this->db->where('id',$id);      //var_dump($id);exit();
	if($this->db->update('tbl_slider',$data))
	{
		return "SUCCESS";
	}
	else 
	{
		return "FAILED";
	}
    }
	public function Get_by_id($id){
        $q = $this->db->query("select * from tbl_slider where id = '".$id."'");
        return $q->row();
    }
	function SliderStatus($id,$status)
	{
		$Dstatus = array("status"=>$status);
		$this->db->where("id", $id);
		if($this->db->update("tbl_slider",$Dstatus))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
