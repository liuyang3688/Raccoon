<?php

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('msg_model');
	}
	//用户中心
	public function profile()
	{
		$data = null;
		if( !isset($_SESSION['user_name']) )
		{
			redirect('/login');
		}
		$data['username'] = $_SESSION['user_name'];
		// 加载消息内容
		$where['to'] = $_SESSION['userid'];
		$where['isRead'] = '1';
		$data['msg_unread_array'] = $this->msg_model->get_msg($where);
		$where['isRead'] = '0';
		$data['msg_read_array'] = $this->msg_model->get_msg($where);
		unset($where);
		$where['id']=$_SESSION['userid'];
		$user_array = $this->user_model->get_user($where);
		$data['user'] = $user_array[0];
		$this->load->view('/front/profile',$data);
		$this->load->view('/front/footer');
	}
	// 修改用户资料
	public function upd_profile()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/user/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['userid'];
		if ($this->user_model->is_exist($where))
		{//验证成功
			$data['email'] = $this->input->post("email");
			$data['name'] = $this->input->post("name");
			$data['industry'] = $this->input->post("indu");
			$data['address'] = $this->input->post("addr");
			$data['province'] = $this->input->post("prov");
			$data['city'] = $this->input->post("city");
			$data['county'] = $this->input->post("county");
			$data['knoway'] = $this->input->post("knoway");
			$this->user_model->update($data, $where);
			$ret['msg'] = '用户资料修改成功！';
			echo json_encode($ret);
		}
		else
		{
			$ret['msg'] = '用户SESSION失效,请重新登录后提交修改！';
			echo json_encode($ret);
		}
	}
	
	// 注销页面
	public function logout()
	{
		if (isset($_SESSION['user_name']))
		{
			unset($_SESSION['userid']);
			unset($_SESSION['user_name']);
			$data = array(
					'error' => '用户注销成功',
					'detail' => '',
					'jumpUrl' => '/login',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$data);
		}
	}
	// 用户提交登陆处理
	public function login()
	{
		if (isset($_SESSION['user_name']))
		{
			redirect('/user/profile');
		}
		$this->form_validation->set_rules('phone', '手机号', 'required|exact_length[11]');
		$this->form_validation->set_rules('password', '密码', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//验证失败
			$this->load->view('/front/header');
			$this->load->view('/front/login');
			$this->load->view('/front/footer');
		}
		else
		{
			$where = array(
					'tel' => $this->input->post('phone'),
					'passwd' => md5($this->input->post('password')),
			);
			if ($this->user_model->is_exist($where))
			{//验证成功
				$res_arr = $this->user_model->get_user($where);
				$this->session->userid =$res_arr[0]['id'];
				$this->session->user_name =$res_arr[0]['name'];
				$data = array(
						'message' => '登录成功',
						'jumpUrl' => '/user/profile',
						'detail' => '',
						'waitSecond' => 1,
				);
				$this->load->view('/tip/dispatch_jump',$data);
			}
			else
			{//验证失败
				$data = array(
						'error' => '登录失败',
						'detail' => '用户名或密码错误！',
						'jumpUrl' => '/login',
						'waitSecond' => 2,
				);
				$this->load->view('/tip/dispatch_jump',$data);
			}
		}
	}
	// 用户提交注册处理
	public function signup()
	{
		$this->form_validation->set_rules('phone', '手机号', 'required|exact_length[11]');
		$this->form_validation->set_rules('email', '邮箱', 'required|valid_email');
		$this->form_validation->set_rules('name', '姓名', 'required');
		$this->form_validation->set_rules('password', '密码', 'required');
		$this->form_validation->set_rules('repass', '确认密码', 'required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{
			//验证失败
			$this->load->view('/front/header');
			$this->load->view('/front/signup');
			$this->load->view('/front/footer');
		}
		else
		{
			$where = array(
					'tel' => $this->input->post('phone'),
			);
			if ($this->user_model->is_exist($where))
			{//该手机号已存在
				$data = array(
						'message' => '注册失败',
						'jumpUrl' => '/signup',
						'detail' => '手机号被占用，请重新填写注册信息！',
						'waitSecond' => 2,
				);
				$this->load->view('/tip/dispatch_jump',$data);
			}
			else
			{//手机号不存在
				$data['tel'] = $this->input->post('phone');
				$data['email'] = $this->input->post('email');
				$data['name'] = $this->input->post('name');
				$data['passwd'] = md5($this->input->post('password'));
				$num = sprintf("%05d", $this->user_model->count()+1);
				$data['id'] = 'U'.$num;
				$this->user_model->set_user($data);
				
				$ret = array(
						'error' => '注册成功',
						'detail' => '恭喜你，加入设计+-family！',
						'jumpUrl' => '/login',
						'waitSecond' => 2,
				);
				$this->load->view('/tip/dispatch_jump',$ret);
			}
		}
	}
	// 修改手机号
	public function upd_passwd()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/user/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['userid'];
		$where['passwd'] = md5($this->input->post("oldPass"));
		if ($this->user_model->is_exist($where))
		{//验证成功
			$data['passwd'] = md5($this->input->post("newPass"));
			$this->user_model->update($data, $where);
			$ret['msg'] = '密码修改成功,请重新登录！';
			unset($_SESSION['userid']);
			unset($_SESSION['user_name']);
			echo json_encode($ret);
		}
		else
		{
			$ret['msg'] = '密码验证失败';
			echo json_encode($ret);
		}
	}
	// 修改手机号
	public function upd_phone()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/user/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['userid'];
		$where['passwd'] = md5($this->input->post("passwd"));
		if ($this->user_model->is_exist($where))
		{//验证成功
			$data['tel'] = $this->input->post("phone");
			$this->user_model->update($data, $where);
			unset($_SESSION['userid']);
			unset($_SESSION['user_name']);
			$ret['msg'] = '手机号修改成功,请重新登录！';
			echo json_encode($ret);
		}
		else 
		{
			$ret['msg'] = '密码验证失败';
			echo json_encode($ret);
		}
	}
	// 用户管理默认页
	public function index()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		 
		$data['user_array'] = $this->user_model->get_user();
		$this->show('back/user',$data);
	}
	// 导出excel功能
	public function exp()
	{
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("jingwen liu")
										->setLastModifiedBy("jingwen liu")
										->setTitle("用户信息导出文档")
										->setSubject("用户信息")
										->setDescription("设计+--后台管理用户信息")
										->setKeywords("设计+")
										->setCategory("设计+");
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setTitle('用户通讯录');
		// 设置列宽
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth("20");
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth("30");
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth("20");
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth("30");
		// 设置sheet标题
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', '编号');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', '姓名');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', '手机号');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', '邮箱');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', '所在城市');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', '公司');
		// 读取数据库 写入excel中
		$user_array = $this->user_model->get_user();
		for($i=0; $i < count($user_array); $i++)
		{
			$j = $i+2;
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $user_array[$i]['id']);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$j, $user_array[$i]['name']);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $user_array[$i]['tel']);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $user_array[$i]['email']);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $user_array[$i]['city']);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$j, $user_array[$i]['comp']);
		}
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="用户通讯录.xls"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header ('Cache-Control: cache, must-revalidate');
		header ('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}
	private function show($page, $data)
	{
		$this->load->view('/back/header');
		$this->load->view($page, $data);
		$this->load->view('/back/footer');
	}
}