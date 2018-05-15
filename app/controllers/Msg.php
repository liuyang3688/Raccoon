<?php
class Msg extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('msg_model');
		$this->load->model('user_model');
		$this->load->model('designer_model');
	}
	// 消息发送默认页
	public function index()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		$data['user_array'] = $this->user_model->get_user();
		$data['des_array'] = $this->designer_model->get_designer();
		$this->show('back/msg',$data);
	}
	// 发送消息
	public function create()
	{
		$data['to'] = $this->input->post('userid');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		//判断是否有同一用户同一消息
		if($this->msg_model->is_exist($data))
		{
			$ret = array(
					'error' => '发送失败',
					'jumpUrl' => '/msg',
					'detail' => '（同一用户发送过相同的消息）',
					'waitSecond' => 10,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		
		$data['isRead']='1';
		$this->msg_model->create($data);
		$ret = array(
			'message' => '发送成功',
			'jumpUrl' => '/msg',
			'detail' => '（当前用户消息已送达至用户）',
			'waitSecond' => 2,
		);
		$this->load->view('/tip/dispatch_jump',$ret);
	}
	public function read()
	{
		$where['id'] = $this->input->post('id');
		if ($where['id']=='')
		{
			$data = array(
					'message' => '该url拒绝访问',
					'jumpUrl' => '/',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$data);
			return;
		}
		$data['isRead'] = '0';
		$this->msg_model->read($data, $where);
		$ret = array(
			'msg' => '消息设为已读！'
		);
		echo json_encode($ret);
	}
	
	// 添加头尾后输出
	private function show($page, $data)
	{
		$this->load->view('/back/header');
		$this->load->view($page, $data);
		$this->load->view('/back/footer');
	}
}