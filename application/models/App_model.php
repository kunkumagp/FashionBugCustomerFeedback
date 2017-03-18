<?php 

class App_model extends CI_Model
{
	public function _construct()
	{
		$this->load->database();
	}
	
	public function location($branchCode)
	{
		$this->db->select('*');
		$this->db->from('branches');
		$this->db->where("branchCode", $branchCode);
		$this->db->where("status", 'active');		
		$this->db->limit(1);			
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
		   return $query->row(); 
		}
		else return false;
	}
	
	public function getNewId($limit=1,$offset=0)
	{
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->order_by("id", "desc");
		$this->db->limit($limit,$offset);  
		$query = $this->db->get();
		if ($query->num_rows() == 0)
		{
		   return 1; 
		}
		return $query->row()->id+1;
	}
	
	
	public function insert($row)
	{
		$this->db->insert('feedback', $row);
		return $this->db->insert_id();
	}
	
	

}

	
