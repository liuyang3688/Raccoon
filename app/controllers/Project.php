<?php
class Project extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('designer_model');
		$this->load->model('project_model');
		$this->load->model('projpub_model');
		$this->load->model('projapp_model');
	}
	public function index()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		$data['proj_array'] = $this->project_model->get_proj();
		$this->show('/back/proj/proj_manage',$data);
	}
	// 导出单个设计师信息
	// $type=1:导出单个设计师 $type=2:导出该申请项目所有的设计师
	public function exp_desinfo($type=1,$id)
	{
		$where = null;
		if ($type==1)
		{
			$where['id'] = $id;
		}
		
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("jingwen liu")
		->setLastModifiedBy("jingwen liu")
		->setTitle("申请项目的设计师导出文档")
		->setSubject("设计师信息")
		->setDescription("设计+--后台管理申请项目设计师信息")
		->setKeywords("设计+")
		->setCategory("设计+");
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setTitle('申请项目设计师导出文档');
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
		if($type==1)
		{
			$des_array = $this->designer_model->get_designer($where);
		}
		else
		{
			$des_array = $this->projapp_model->get_proj_desinfo($id);
		}
		
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
		header('Content-Disposition: attachment;filename="设计师通讯录'.$id.'.xls"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header ('Cache-Control: cache, must-revalidate');
		header ('Pragma: public'); // HTTP/1.0
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}
	public function get_desinfo_of_proj()
	{
		// 获取第一个项目编号对应所有设计师信息
		$pid = $this->input->get('pid');
		$data['des_array'] = $this->projapp_model->get_proj_desinfo($pid);
		$data['pid'] = $pid;
		echo json_encode($data);
	}
	public function apply()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		// 查询申请表 获取排重后所有项目编号
		$projid_array = $this->projapp_model->get_norep_proj_id();
		$data['projid_array'] =  $projid_array;
		// 获取第一个项目编号对应所有设计师信息
		$pid = $projid_array[0]['proj_id'];
		$data['des_array'] = $this->projapp_model->get_proj_desinfo($pid);
		$this->show('/back/proj/proj_apply', $data);
	}
	public function publish()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		$this->show('/back/proj/proj_publish');
	}
	public function dopublish()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/admin/login');
		}
		if ($this->input->post('id') == '')
		{
			$ret = array(
				'message' => '该url拒绝访问',
				'jumpUrl' => '/back/index',
				'detail' => '',
				'waitSecond' => 2,
			);
			$this->load->view('/tip/dispatch_jump',$ret);
			return false;
		}
		$where['id'] = $this->input->post('id');
		//判断是否有同一用户同一消息
		if($this->projpub_model->is_exist($where))
		{
			$ret['msg'] = '该项目编号已发布过信息！！！';
			echo json_encode($ret);
			return false;
		}
		$data['id']=$this->input->post('id');
		$data['type']=$this->input->post('type');
		$data['startime']=$this->input->post('stime');
		$data['estime']=$this->input->post('etime');
		$data['level']=$this->input->post('level');
		$data['prod_type']=$this->input->post('prod_type');
		$data['prod_refer']=$this->input->post('prod_refer');
		$data['file_format']=$this->input->post('file_format');
		$data['proj_wage']=$this->input->post('proj_wage');
		$this->projpub_model->set_proj($data);
		$ret['msg'] = '项目发布成功！';
		echo json_encode($ret);
	}
	public function exp($id=null)
	{
		if ($id != null)
		{
			$where['id'] = $id;
		}
		else 
		{
			$where = null;
		}	
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("jingwen liu")
		->setLastModifiedBy("jingwen liu")
		->setTitle("项目管理导出文档")
		->setSubject("项目信息")
		->setDescription("设计+--后台管理项目信息")
		->setKeywords("设计+")
		->setCategory("设计+");
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setTitle('项目导出文档');
		// 设置列宽
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth("15");
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth("15");
		// 设置sheet标题
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('I1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('J1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('K1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('L1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('M1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('N1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('O1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('P1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('Q1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', '编号');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', '类型');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', '产品名称');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', '产品形式');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', '产品类型');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', '竞品链接');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', '产品风格');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', '星级要求');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', '公司名称');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', '所在城市');
		$objPHPExcel->getActiveSheet()->setCellValue('K1', '联系人');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', '手机号');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', '电子邮箱');
		$objPHPExcel->getActiveSheet()->setCellValue('N1', '页面数量');
		$objPHPExcel->getActiveSheet()->setCellValue('O1', 'logo索引');
		$objPHPExcel->getActiveSheet()->setCellValue('P1', 'logo描述');
		$objPHPExcel->getActiveSheet()->setCellValue('Q1', '颜色索引');
		// 读取数据库 写入excel中
		$proj_array = $this->project_model->get_proj($where);
		for($i=0; $i < count($proj_array); $i++)
		{
			$j = $i+2;
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $proj_array[$i]['id']);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$j, $proj_array[$i]['type']);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $proj_array[$i]['prodName']);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $proj_array[$i]['prodForm']);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $proj_array[$i]['prodType']);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$j, $proj_array[$i]['prodRefer']);
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$j, $proj_array[$i]['prodStyle']);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$j, $proj_array[$i]['level']);
			$objPHPExcel->getActiveSheet()->setCellValue('I'.$j, $proj_array[$i]['contComp']);
			$objPHPExcel->getActiveSheet()->setCellValue('J'.$j, $proj_array[$i]['contCity']);
			$objPHPExcel->getActiveSheet()->setCellValue('K'.$j, $proj_array[$i]['contPerson']);
			$objPHPExcel->getActiveSheet()->setCellValue('L'.$j, $proj_array[$i]['contPhone']);
			$objPHPExcel->getActiveSheet()->setCellValue('M'.$j, $proj_array[$i]['contEmail']);
			$objPHPExcel->getActiveSheet()->setCellValue('N'.$j, $proj_array[$i]['pageNum']);
			$objPHPExcel->getActiveSheet()->setCellValue('O'.$j, $proj_array[$i]['logoIndex']);
			$objPHPExcel->getActiveSheet()->setCellValue('P'.$j, $proj_array[$i]['logoDesc']);
			$objPHPExcel->getActiveSheet()->setCellValue('Q'.$j, $proj_array[$i]['colIndex']);
		}
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="项目信息导出'.$id.'.xls"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header ('Cache-Control: cache, must-revalidate');
		header ('Pragma: public'); // HTTP/1.0
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}
	private function show($page, $data=null)
	{
		$this->load->view('/back/header');
		$this->load->view($page, $data);
		$this->load->view('/back/footer');
	}
}