<?php
class FrontModel extends CI_Model {
 function __construct()
    {
	  parent::__construct();
	  $this->load->database();
    }
	function Slider()
	{
	$this->db->where("status", 1);
	$query = $this->db->get('tbl_slider');
	return $query->result();
    }
	function Category()
	{
	$query = $this->db->get('tbl_category');
	return $query->result();
    }
	function ProductDescription($id)
	{
    $this->db->select('*');
    $this->db->from('tbl_product');
    $this->db->where('id',$id);
    $query = $this->db->get();
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
	
	function SingleProuctDetail($product_id) {
        $this->db->select(" * ");
        $this->db->from('tbl_product');
        $this->db->where('id',$product_id);
        $query = $this->db->get();
        return $query->result();
    }
	public function get_list_size()
	{
		$this->db->select(" * ");
		$this->db->from('tbl_size');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_list_color()
	{
		$this->db->select(" * ");
		$this->db->from('tbl_color');
		$query = $this->db->get();
		return $query->result();
	}
	
	function SearchList($cid)
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('category_id',$cid);
		$query = $this->db->get();
		return $query->result();
    }
	function InsertReview($data)
	{
		$this->db->insert("tbl_review", $data);
		return true;
	}
	
}
?>
