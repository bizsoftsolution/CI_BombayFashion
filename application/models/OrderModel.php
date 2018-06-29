<?php
class OrderModel extends CI_Model 
{
 function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
	
	// order Section
	
	function orderList()
    {
		$this->db->where('status','PROCESSING');
		$query = $this->db->get('tbl_order');
		return $query->result();
    }
	function deliveredList()
    {
		$this->db->where('status','DELIVERED');
		$query = $this->db->get('tbl_order');
		return $query->result();
    }

	function orderGet($id)
	{
		
		$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function orderEdit($data,$id)
    {
      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_order',$data))
	   {
		   $this->db->where("order_id", $id);
		   if($this->db->update('tbl_order_details',$data))
		   {
			   return "SUCCESS";
		   }
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
/*     function sizeDelete($id)
    {
       if($this->db->delete('tbl_size', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    } */
	
	
	
}
?>
