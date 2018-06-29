<?php

class Adminmodel extends CI_Model{

	public function customerList()
	{
		$query = $this->db->get('tbl_customers')->result();
		return $query;
	}
	function CustomerStatus($id,$status)
	{
		$Dstatus = array("status"=>$status);
		$this->db->where("customer_id", $id);
		if($this->db->update("tbl_customers",$Dstatus))
		{
			$Ustatus = array("status"=>$status);
			$this->db->where("custmer_id", $id);
			if($this->db->update("user",$Ustatus))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}

	

	
}
