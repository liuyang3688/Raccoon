<?php
class Projapp_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->dbutil();
	}
	// 查
	public function is_exist($where=null)
	{
		$data = $this->db->get_where('proj_apply', $where);
		return ($data->num_rows() > 0);
	}
	public function set_proj($data)
	{
		$this->db->insert('proj_apply', $data);
	}
	// 查
	public function get_proj($where=null)
	{
		$data = $this->db->get_where('proj_apply',$where);
		return $data->result_array();
	}
	// 获取排重后的项目id
	public function get_norep_proj_id()
	{
		$data = $this->db->query("select distinct proj_id from proj_apply");
		return $data->result_array();
	}
	public function get_proj_desinfo($pid)
	{
		$sql = "select d.id,d.name,d.tel,d.email,d.comp,d.college,d.city,d.isChecked from proj_apply p, designer d where p.designer_id=d.id and p.proj_id='".$pid."'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}
}