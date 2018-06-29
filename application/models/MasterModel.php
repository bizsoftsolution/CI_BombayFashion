<?php
class MasterModel extends CI_Model 
{
 function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function categoryList()
    {
		$query = $this->db->get('tbl_category');
		return $query->result();
    }
	function Add($data)
	{
      if($this->db->insert('tbl_category',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function Get($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function Edit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_category',$data))
	   {
		 return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function Delete($id)
    {
       if($this->db->delete('tbl_category', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    

	// Color Section
	
	function colorList()
    {
		$query = $this->db->get('tbl_color');
		return $query->result();
    }
	function colorAdd($data)
	{
      if($this->db->insert('tbl_color',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function colorGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_color');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function colorEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_color',$data))
	   {
		 return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function colorDelete($id)
    {
       if($this->db->delete('tbl_color', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	
	
	// Size Section
	
	function sizeList()
    {
		$query = $this->db->get('tbl_size');
		return $query->result();
    }
	function sizeAdd($data)
	{
      if($this->db->insert('tbl_size',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function sizeGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_size');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function sizeEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_size',$data))
	   {
		 return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function sizeDelete($id)
    {
       if($this->db->delete('tbl_size', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	
	// Sub category Section
	
	function subcategoryList()
    {
		$query = $this->db->get('tbl_sub_category');
		return $query->result();
    }
	function subcategoryAdd($data)
	{
      if($this->db->insert('tbl_sub_category',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function subcategoryGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_sub_category');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function subcategoryEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_sub_category',$data))
	   {
		 return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function subcategoryDelete($id)
    {
       if($this->db->delete('tbl_sub_category', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	
	
	// Shipping Charge Section
	
	function shippingchargeList()
    {
		$query = $this->db->get('tbl_shipping_charge');
		return $query->result();
    }
	function shippingchargeAdd($data)
	{
      if($this->db->insert('tbl_shipping_charge',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function shippingchargeGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_shipping_charge');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function shippingchargeEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_shipping_charge',$data))
	   {
		 return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function shippingchargeDelete($id)
    {
       if($this->db->delete('tbl_shipping_charge', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	
}
?>
