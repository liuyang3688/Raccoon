<?php
class Admin_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->dbutil();
	}
	//查询管理员是否存在
	public function is_exist($where=null)
	{
		$data = $this->db->get_where('admin', $where);
		return ($data->num_rows() > 0);
	}
	
	// 增
	public function create($data)
	{
		$this->db->insert('admin', $data);
	}
	
	// 删
	public function delete($where=null)
	{
		$this->db->delete('admin', $where);
	}
	
	// 查
	public function select($where=null)
	{
		$data = $this->db->get_where('admin',$where);
		return $data->result_array();
	}
	
	// 查
	public function update($data, $where)
	{
		$this->db->update('admin', $data, $where);
	}
	// 当前记录条数
	public function count()
	{
		return $this->db->count_all('admin');
	}
}

?>