<?php

class Customermodel extends CI_Model{

	public function login($email,$password)
	{
	$this->db->select('*');
	$this->db->from('user t1');
	//$this->db->join('tbl_employee t2', 't1.emp_no = t2.id');
	$this->db->where('t1.email',$email);
	$this->db->where('t1.password',$password);
	$this->db->where('t1.user_type','Customer');
	$query=$this->db->get();
	$row_count=$query->num_rows();
	//var_dump($email.'-'.$password.'-'.$row_count);exit();
		if($row_count>0){
			$userdata=$query->row();
			$newdata = array(
				'user_id'  => $userdata->user_id,
				'user_type' => $userdata->user_type,
				'first_name' => $userdata->first_name,
				'last_name' => $userdata->last_name,
				'middle_name' => $userdata->middle_name,
				'email'     => $userdata->email,
				'last_login'     => $userdata->last_login,
				'custmer_id'     => $userdata->custmer_id,
				//'password'     => $userdata->password,
				
				'logged_in' => "TRUE"
				);
			/* $logdata = array(
				'user_id'  => $userdata->user_id,
				'status' => "SUCCESS"
			); */
			$this->session->set_userdata($newdata);
			//$this->setLoginTime($userdata->user_id);
			return true;
            //return $newdata;
		}
	return false;
	}


	function Signup($cdata)
	{
		if($this->db->insert('tbl_customers', $cdata))
		{
			$id_user = $this->db->insert_id();
			$data = array(
			"user_type"=>"Customer",
			"first_name"=>$this->input->post('fname'),
			"last_name"=>$this->input->post('lname'),
			"email"=>$this->input->post('email'),
			"phone_no"=>$this->input->post('phone'),
			"password"=>$this->input->post('pwd'),
			"logged_in"=>"FALSE",
			"custmer_id"=>$id_user
			);
			if($this->db->insert('user',$data))
			{	
				return true;
			}
		}
	}
	
// Customer Details End //

	public function logout($user_id){
	$data['logged_in']="FALSE";
	$this->db->where('user_id',$user_id);
	$this->db->update('user',$data);
	$newdata = array(
	'user_id'   => '',
	'email'     => '',
	'user_type' => '',
	'first_name' => '',
	'last_name' => '',
	'middle_name' => '',
	'custmer_id'     =>''
	//'password'     => '',
	//'logged_in' => "FALSE"
	);
	$this->session->set_userdata($newdata);

	}
	/* public function userregister($data){
	$this->load->database();
	if($this->db->insert('user', $data))
		return true;
	else
		return false;
	} */
	function cProfile()
	{
		$cid = $this->session->userdata('custmer_id');
		$this->db->where('customer_id', $cid);
		$query = $this->db->get('tbl_customers')->result();
		return $query;
	}
	function customerEdit($cdata, $id)
	{
		$this->db->where("customer_id", $id);
		if($this->db->update("tbl_customers", $cdata))
		{
			$udata = array(
			"email"=>$this->input->post('email'),
			"first_name"=>$this->input->post('fname'),
			"last_name"=>$this->input->post('lname'),
			"phone_no"=>$this->input->post('phone')
			);
			$this->db->where("custmer_id", $this->session->userdata('custmer_id'));
			if($this->db->update("user", $udata))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
	function pwdCheck($old_pwd, $id)
	{
		$this->db->where("customer_id", $id);
		$this->db->where("password", $old_pwd);
		$query = $this->db->get("tbl_customers")->result();
		return $query;
	}
	function pwdChange($npassword, $id)
	{
		$this->db->where("customer_id", $id);
		if($this->db->update("tbl_customers", $npassword))
		{
			$udata = array(
			"password"=>$this->input->post('new_password')
			);
			$this->db->where("user_id", $this->session->userdata('user_id'));
			if($this->db->update("user", $udata))
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
