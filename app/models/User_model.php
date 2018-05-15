<?php
class User_model extends \CI_Model {
	public function __construct()
	{
		//$this->load->database();
		parent::__construct();
		$this->load->dbutil();
	}
	// 查
	public function get_user($where=null)
	{
		$data = $this->db->get_where('user',$where);
		return $data->result_array();
	}
	
	// 增
	public function set_user($data)
	{
		$this->db->insert('user', $data);
	}
	
	//查询管理员是否存在
	public function is_exist($where=null)
	{
		$data = $this->db->get_where('user', $where);
		return ($data->num_rows() > 0);
	}
	// 当前记录条数
	public function count()
	{
		return $this->db->count_all('user');
	}
	// 修改
	public function update($data, $where=null)
	{
		$this->db->update('user', $data, $where);
	}
}