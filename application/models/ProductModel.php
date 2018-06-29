<?php
class ProductModel extends CI_Model 
{
 function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function productList()
    {
		$query = $this->db->get('tbl_product');
		return $query->result();
    }
	function viewSubCategory($category = null)
	{
	 $this->db->select('id, sub_category');
	 
	 if($category != NULL){
	 $this->db->where('category_id', $category);
	 }
	 $query = $this->db->get('tbl_sub_category');
	 
	 $cities = array();
	 
	 if($query->result()){
	 foreach ($query->result() as $city) {
		 $cities[0]="Select Subcategory";
	 $cities[$city->id] = $city->sub_category;
	 }
	 return $cities;
	 }else{
	 return FALSE;
	 }
	}
	function check_existance($code = null) {
        $this->db->where('product_code', $code);
        $query = $this->db->get('tbl_product');
        $result = $query->result_array();
        if (!empty($result)) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }
	function Add($data)
	{
      if($this->db->insert('tbl_product',$data))
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
		$this->db->from('tbl_product');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function Edit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_product',$data))
	   {
		 return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	public function get_product_by_id($id){
        $q = $this->db->query("select * from tbl_product where id = '".$id."' ");
        return $q->row();
    }
	function ProdcutStatus($id,$status)
	{
		$Dstatus = array("status"=>$status);
		$this->db->where("id", $id);
		if($this->db->update("tbl_product",$Dstatus))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function FeatureStatus($id,$status)
	{
		$Dstatus = array("featured_product"=>$status);
		$this->db->where("id", $id);
		if($this->db->update("tbl_product",$Dstatus))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function LatestStatus($id,$status)
	{
		$Dstatus = array("latest_product"=>$status);
		$this->db->where("id", $id);
		if($this->db->update("tbl_product",$Dstatus))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
    /* function Delete($id)
    {
       if($this->db->delete('tbl_product', array('id' => $id)))
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
