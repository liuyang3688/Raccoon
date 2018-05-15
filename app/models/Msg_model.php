<?php
class Msg_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->dbutil();
	}
	//查询同一用户同一消息是否存在
	public function is_exist($where=null)
	{
		$data = $this->db->get_where('msg', $where);
		return ($data->num_rows() > 0);
	}
	// 增
	public function create($data)
	{
		$this->db->insert('msg', $data);
	}
	// 查
	public function get_msg($where=null)
	{
		$this->db->order_by('id','ASC');
		$data = $this->db->get_where('msg',$where);
		return $data->result_array();
	}
	// 修改
	public function read($data, $where=null)
	{
		$this->db->update('msg', $data, $where);
	}
}