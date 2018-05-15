<?php
class Designer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('designer_model');
		$this->load->model('msg_model');
		$this->load->model('projpub_model');
		$this->load->model('projapp_model');
	}
	public function index()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		$this->unchecked();
	}
	// 上传作品集
	public function upload_work()
	{
		$targetFolder = '/assets/uploads/work';
		if (!empty($_FILES)) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			if(!is_dir($targetFolder)) {
				mkdir($targetFolder, 0777, true);
			}
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
		
			// Validate the file type
			$fileTypes = array('zip','rar','jpg','png'); // File extensions
			$fileParts = pathinfo($_FILES['Filedata']['name']);
		
			if (in_array($fileParts['extension'],$fileTypes)) {
				if ( ! @copy($tempFile, $targetFile))
				{
					if ( ! @move_uploaded_file($tempFile, $targetFile))
					{
						echo '文件上传失败';
						return FALSE;
					}
				}
				echo '上传完毕';
			} else {
				echo '文件类型非法！请重新上传';
			}
		}
	}
	// 更新专业技能
	public function upd_tech()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/designer/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['desid'];
		if ($this->designer_model->is_exist($where))
		{//验证成功
		$data['type'] = $this->input->post("type");
		$data['goodat'] = $this->input->post("goodat");
		$data['software'] = $this->input->post("software");
		$data['device'] = $this->input->post("device");
		$this->designer_model->update($data, $where);
		$ret['msg'] = '设计师专业技能修改成功！';
		echo json_encode($ret);
		}
		else
		{
			$ret['msg'] = '设计师SESSION失效,请重新登录后提交修改！';
			echo json_encode($ret);
		}
	}
	// 更新资料
	public function upd_profile()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/designer/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['desid'];
		if ($this->designer_model->is_exist($where))
		{//验证成功
			$data['email'] = $this->input->post("email");
			$data['name'] = $this->input->post("name");
			$data['college'] = $this->input->post("coll");
			$data['comp'] = $this->input->post("comp");
			$data['province'] = $this->input->post("prov");
			$data['city'] = $this->input->post("city");
			$data['county'] = $this->input->post("county");
			$data['workstate'] = $this->input->post("workst");
			$data['knoway'] = $this->input->post("knoway");
			$this->designer_model->update($data, $where);
			$ret['msg'] = '设计师资料修改成功！';
			echo json_encode($ret);
		}
		else
		{
			$ret['msg'] = '设计师SESSION失效,请重新登录后提交修改！';
			echo json_encode($ret);
		}
	}
	// 提交项目申请
	public function apply_proj()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/designer/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['proj_id'] = $this->input->post('projid');
		$where['designer_id'] = $_SESSION['desid'];
		
		if ($this->projapp_model->is_exist($where))
		{//验证成功
			$ret['msg'] = '该项目已申请过！';
			$ret['code'] = '201';
			echo json_encode($ret);
		}
		else
		{
			$this->projapp_model->set_proj($where);
			$ret['msg'] = '申请成功';
			$ret['code'] = '200';
			echo json_encode($ret);	
		}
	}
	// 提交主页链接
	public function upd_link()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/designer/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['desid'];
		$data['link1'] = $this->input->post("link1");
		$data['link2'] = $this->input->post("link2");
		$data['link3'] = $this->input->post("link3");
		$data['link4'] = $this->input->post("link4");
		$data['link5'] = $this->input->post("link5");
		$this->designer_model->update($data, $where);
		$ret['msg'] = '修改成功';
		echo json_encode($ret);
	}
	// 修改手机号
	public function upd_passwd()
	{
		if ($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$ret = array(
					'message' => '该url拒绝直接访问',
					'jumpUrl' => '/designer/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['desid'];
		$where['passwd'] = md5($this->input->post("oldPass"));
		if ($this->designer_model->is_exist($where))
		{//验证成功
			$data['passwd'] = md5($this->input->post("newPass"));
			$this->designer_model->update($data, $where);
			$ret['msg'] = '密码修改成功,请重新登录！';
			unset($_SESSION['desid']);
			unset($_SESSION['designer_name']);
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
					'jumpUrl' => '/designer/profile',
					'detail' => '',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $_SESSION['desid'];
		$where['passwd'] = md5($this->input->post("passwd"));
		if ($this->designer_model->is_exist($where))
		{//验证成功
			$data['tel'] = $this->input->post("phone");
			$this->designer_model->update($data, $where);
			$ret['msg'] = '手机号修改成功,请重新登录!';
			unset($_SESSION['desid']);
			unset($_SESSION['designer_name']);
			echo json_encode($ret);
		}
		else
		{
			$ret['msg'] = '密码验证失败';
			echo json_encode($ret);
		}
	}
	// 消息中心
	public function profile()
	{
		if( !isset($_SESSION['designer_name']) )
		{
			redirect('/dlogin');
		}
		$where['id'] = $_SESSION['desid'];
		$des_array = $this->designer_model->get_designer($where);
		$data['des'] = $des_array[0];
		unset($where);
		$where['to'] = $_SESSION['desid'];
		$data['msg_array'] = $this->msg_model->get_msg($where);
		$data['proj_array'] = $this->projpub_model->get_proj();
		$this->load->view('/front/dprofile',$data);
		$this->load->view('/front/footer');
	}
	// 设计师注销
	public function logout()
	{
		if (isset($_SESSION['designer_name']))
		{
			unset($_SESSION['desid']);
			unset($_SESSION['designer_name']);
			$data = array(
					'error' => '设计师注销成功',
					'detail' => '',
					'jumpUrl' => '/dlogin',
					'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$data);
		}
	}
	// 提交登陆
	public function login()
	{
		if (isset($_SESSION['designer_name']))
		{
			redirect('/designer/profile');
		}
		$this->form_validation->set_rules('phone', '手机号', 'required|exact_length[11]');
		$this->form_validation->set_rules('password', '密码', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//验证失败
			$this->load->view('/front/header');
			$this->load->view('/front/dlogin');
			$this->load->view('/front/footer');
		}
		else
		{
			$where = array(
					'tel' => $this->input->post('phone'),
					'passwd' => md5($this->input->post('password')),
			);
			if ($this->designer_model->is_exist($where))
			{//验证成功
				$res_arr = $this->designer_model->get_designer($where);
				$this->session->designer_name =$res_arr[0]['name'];
				$this->session->desid = $res_arr[0]['id'];
				$data = array(
						'message' => '登录成功',
						'jumpUrl' => '/designer/profile',
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
						'jumpUrl' => '/dlogin',
						'waitSecond' => 2,
				);
				$this->load->view('/tip/dispatch_jump',$data);
			}
		}
	}
	// 提交注册
	public function signup()
	{
		$this->form_validation->set_rules('phone', '手机号', 'required|exact_length[11]');
		$this->form_validation->set_rules('password', '密码', 'required');
		$this->form_validation->set_rules('repass', '确认密码', 'required|matches[password]');
		$this->form_validation->set_rules('username', '姓名', 'required');
		$this->form_validation->set_rules('city', '城市', 'required');
		$this->form_validation->set_rules('college', '院校', 'required');
		$this->form_validation->set_rules('company', '公司', 'required');
		$this->form_validation->set_rules('email', '邮箱', 'required|valid_email');

		if($this->form_validation->run() == FALSE)
		{
			//验证失败
			$this->load->view('/front/header');
			$this->load->view('/front/dsignup');
			$this->load->view('/front/footer');
		}
		else
		{
			$where = array(
					'tel' => $this->input->post('phone'),
			);
			if ($this->designer_model->is_exist($where))
			{//该手机号已存在
				$data = array(
						'message' => '注册失败',
						'jumpUrl' => '/dsignup',
						'detail' => '手机号被占用，请重新填写注册信息！',
						'waitSecond' => 2,
				);
				$this->load->view('/tip/dispatch_jump',$data);
			}
			else
			{//手机号不存在
				$data['tel'] = $this->input->post('phone');
				$data['passwd'] = md5($this->input->post('password'));
				$data['name'] = $this->input->post('username');
				$data['city'] = $this->input->post('city');
				$data['college'] = $this->input->post('college');
				$data['comp'] = $this->input->post('company');
				$data['email'] = $this->input->post('email');
				$data['isChecked'] = '0';
				$data['degree'] = '100';
				$num = sprintf("%05d", $this->designer_model->count()+1);
				$data['id'] = 'D'.$num;
				$this->designer_model->set_designer($data);
		
				$ret = array(
						'error' => '注册成功',
						'detail' => '恭喜你，加入设计+-family！',
						'jumpUrl' => '/dlogin',
						'waitSecond' => 2,
				);
				$this->load->view('/tip/dispatch_jump',$ret);
			}
		}
	}
	// 审核通过
	public function check()
	{
		$where['id'] = $this->input->post('id');
		if ($where['id']=='')
		{
			$data = array(
				'message' => '该url拒绝访问',
				'jumpUrl' => '/back/index',
				'detail' => '',
				'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$data);
			return;
		}
		$data['isChecked'] = '1';
		$this->designer_model->check($data, $where);
		$ret = array(
				'msg' => '审核通过！'
		);
		echo json_encode($ret);
	}
	// 已审核查询
	public function checked()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		$where['isChecked']='1';	
		$data['designer_checked_array'] = $this->designer_model->get_designer($where);
		$this->show('back/designer_checked',$data);
	}
	// 未审核查询
	public function unchecked()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		$where['isChecked']='0';
		$data['designer_unchecked_array'] = $this->designer_model->get_designer($where);
		$this->show('back/designer_unchecked',$data);
	}
	// 设计师信息导出
	public function exp($para='checked')
	{
		if($para=='unchecked')
		{
			$where['isChecked']='0';
		}
		else if($para=='checked')
		{
			$where['isChecked']='1';
		}
		else 
		{
			$where['isChecked']='1';
		}
		
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("jingwen liu")
		->setLastModifiedBy("jingwen liu")
		->setTitle("设计师信息导出文档")
		->setSubject("设计师信息")
		->setDescription("设计+--后台管理设计师信息")
		->setKeywords("设计+")
		->setCategory("设计+");
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setTitle('设计师通讯录');
		// 设置列宽
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth("20");
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth("30");
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth("20");
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth("30");
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth("15");
		// 设置sheet标题
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', '编号');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', '姓名');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', '手机号');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', '邮箱');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', '所在城市');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', '公司');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', '毕业院校');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', '是否审核');
		// 读取数据库 写入excel中
		$des_array = $this->designer_model->get_designer($where);
		for($i=0; $i < count($des_array); $i++)
		{
			$j = $i+2;
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $des_array[$i]['id']);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$j, $des_array[$i]['name']);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $des_array[$i]['tel']);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $des_array[$i]['email']);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $des_array[$i]['city']);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$j, $des_array[$i]['comp']);
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$j, $des_array[$i]['college']);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$j, $des_array[$i]['isChecked']?'是':'否');
		}
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="设计师通讯录.xls"');
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