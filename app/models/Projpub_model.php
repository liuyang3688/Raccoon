<?php
class Projpub_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->dbutil();
	}
	// 查
	public function is_exist($where=null)
	{
		$data = $this->db->get_where('proj_publish', $where);
		return ($data->num_rows() > 0);
	}
	public function set_proj($data)
	{
		$this->db->insert('proj_publish', $data);
	}
	// 查
	public function get_proj($where=null)
	{
		$data = $this->db->get_where('proj_publish',$where);
		return $data->result_array();
	}
}