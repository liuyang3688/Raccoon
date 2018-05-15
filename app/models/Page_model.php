<?php
class Page_model extends \CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->dbutil();
	}
	public function set_page_about($data)
	{
		$this->db->update('page_about', $data);
	}
	//查询page_about页面
	public function get_page_about()
	{
		$data = $this->db->get('page_about');
		return $data->row(0);
	}
	//查询page_assess页面
	public function get_page_assess($where=null)
	{
		$this->db->order_by('id','ASC');
		$data = $this->db->get_where('page_assess',$where);
		return $data->result_array();
	}
	public function set_page_assess($data,$where=null)
	{
		$this->db->update('page_assess', $data, $where);
	}
	public function get_page_team($where=null)
	{
		$this->db->order_by('id','ASC');
		$data = $this->db->get_where('page_team',$where);
		return $data->result_array();
	}
	public function set_page_team($data,$where=null)
	{
		$this->db->update('page_team', $data, $where);
	}
	//查询page_case页面
	public function get_page_case($where=null)
	{
		$this->db->order_by('type,id','ASC');
		$data = $this->db->get_where('page_case',$where);
		return $data->result_array();
	}
	public function get_page_vis()
	{
		$this->db->order_by('type,id','ASC');
		$where['type'] = '2';
		$data = $this->db->get_where('page_case',$where);
		return $data->result_array();
	}
	public function get_page_ui()
	{
		$this->db->order_by('type,id','ASC');
		$where['type'] = '1';
		$data = $this->db->get_where('page_case',$where);
		return $data->result_array();
	}
	//设置page_case页面
	public function set_page_case($data, $where=null)
	{
		$this->db->update('page_case', $data, $where);
	}
}
