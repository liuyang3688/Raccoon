<?php
class Service extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('project_model');
	}
	// 消息发送默认页
	public function index()
	{
		$bag['title'] = "设计+--服务";
		$this->show('front/service',$bag);
	}
	// 提交成功页面
	public function success()
	{
		$bag['title'] = "设计+--成功提交";
		$this->show('front/success',$bag);
	}
	// 上传vi
	public function upload_ui_vi()
	{
		if (!empty($_FILES)) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/uploads/vi';
			if(!is_dir($targetPath)) {
				mkdir($targetPath, 0777, true);
			}
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
		
			if ( ! @copy($tempFile, $targetFile))
			{
				@move_uploaded_file($tempFile, $targetFile);
			}
		}
	}
	// 上传线框
	public function upload_ui_xk()
	{
		if (!empty($_FILES)) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/uploads/xk';
			if(!is_dir($targetPath)) {
				mkdir($targetPath, 0777, true);
			}
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
		
			if ( ! @copy($tempFile, $targetFile))
			{
				@move_uploaded_file($tempFile, $targetFile);
			}
		}
	}
	// logo链接处理
	public function logo()
	{
		/*
		if( !isset($_SESSION['user_name']) )
		{
			$data = array(
					'error' => '请先登录',
					'detail' => '服务提交需要用户首先登录系统！',
					'jumpUrl' => '/login',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$data);
			return;
		}*/
		$bag['title'] = "设计+--logo服务";
		$this->show('front/service/logo',$bag);
	}
	
	public function post_logo()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/service',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		if (isset($_SESSION['userid']))
		{
			$ret = array(
					'message' => '请登录后再提交logo服务!',
					'jumpUrl' => '/login',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$num = sprintf("%05d", $this->project_model->count()+1);
		$data['id'] = 'P'.$num;
		$data['type'] = 'LOGO';
		$data['logoIndex'] = $this->input->post('imgIndex');
		$data['prodName'] = $this->input->post('prodName');
		$data['prodForm'] = $this->input->post('prodForm');
		$data['prodType'] = $this->input->post('prodType');
		$data['prodRefer'] = $this->input->post('prodRefer');
		$data['level'] = $this->input->post('desLevel');
		$data['logoDesc'] = $this->input->post('logoDesc');
		$data['prodStyle'] = $this->input->post('logoStyle');
		$data['colIndex'] = $this->input->post('colIndex');
		$data['contComp'] = $this->input->post('contComp');
		$data['contCity'] = $this->input->post('contCity');
		$data['contPerson'] = $this->input->post('contPerson');
		$data['contPhone'] = $this->input->post('contPhone');
		$data['contEmail'] = $this->input->post('contEmail');
		
		$this->project_model->create($data);
		$ret = array(
			'msg' => 'LOGO服务提交成功！！'
		);
		echo json_encode($ret);
	}
	
	public function post_ui()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/service',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		if (isset($_SESSION['userid']))
		{
			$ret = array(
					'message' => '请登录后再提交ui服务!',
					'jumpUrl' => '/login',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		
		$num = sprintf("%05d", $this->project_model->count()+1);
		$data['id'] = 'P'.$num;
		$data['type'] = 'UI';
		$data['prodName'] = $this->input->post('prodName');
		$data['prodForm'] = $this->input->post('prodForm');
		$data['prodType'] = $this->input->post('prodType');
		$data['pageNum'] = $this->input->post('pageNum');
		$data['prodStyle'] = $this->input->post('prodStyle');
		$data['prodRefer'] = $this->input->post('prodRefer');
		$data['level'] = $this->input->post('desLevel');
		$data['contComp'] = $this->input->post('contComp');
		$data['contCity'] = $this->input->post('contCity');
		$data['contPerson'] = $this->input->post('contPerson');
		$data['contPhone'] = $this->input->post('contPhone');
		$data['contEmail'] = $this->input->post('contEmail');
		
		$this->project_model->create($data);
		$ret = array(
			'msg' => 'UI服务提交成功！！'
		);
		echo json_encode($ret);
	}
	
	public function ui()
	{
		/*
		if( !isset($_SESSION['user_name']) )
		{
			$data = array(
					'error' => '请先登录',
					'detail' => '服务提交需要用户首先登录系统！',
					'jumpUrl' => '/login',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$data);
			return;
		}*/
		$bag['title'] = "设计+--ui服务";
		$this->show('front/service/ui',$bag);
	}
	
	// 添加头尾后输出
	private function show($page, $bag=null, $data=null)
	{
		$this->load->view('/front/header',$bag);
		$this->load->view($page, $data);
		$this->load->view('/front/footer');
	}
}