<?php
class Designer_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	// 查
	public function get_designer($where=null)
	{
		$this->db->order_by('id','ASC');
		$data = $this->db->get_where('designer',$where);
		return $data->result_array();
	}
	// 
	public function check($data, $where=null)
	{
		$this->db->update('designer', $data, $where);
	}
	//查询设计师是否存在
	public function is_exist($where=null)
	{
		$data = $this->db->get_where('designer', $where);
		return ($data->num_rows() > 0);
	}
	// 当前记录条数
	public function count()
	{
		return $this->db->count_all('designer');
	}
	// 增
	public function set_designer($data)
	{
		$this->db->insert('designer', $data);
	}
	// 修改
	public function update($data, $where=null)
	{
		$this->db->update('designer', $data, $where);
	}
}