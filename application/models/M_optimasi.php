<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_optimasi extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function getKanWhereId($where)
	{
		$this->db->select('*');
		$this->db->from('bmt');
		$this->db->where_in('id', $where);
		$query = $this->db->get();
		return $query->result_array();
	}

	function getKebWhereId($where){
		$this->db->select('*');
		$this->db->from('kebutuhan');
		$this->db->where('id', $where);
		$query = $this->db->get();
        return $query->result();
	}	
}
?>