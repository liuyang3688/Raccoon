<?php
class Project_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->dbutil();
	}
	// 增
	public function create($data)
	{
		$this->db->insert('proj', $data);
	}
	// 查
	public function get_proj($where=null)
	{
		$data = $this->db->get_where('proj',$where);
		return $data->result_array();
	}
	// 当前记录条数
	public function count()
	{
		return $this->db->count_all('proj');
	}
}