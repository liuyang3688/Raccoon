<?php

class Page extends CI_Controller {
	private $mapCase = array(
    	'1' => '上一',
    	'2' => '上二',
    	'3' => '上三',
    	'4' => '下一',
    	'5' => '下二',
    	'6' => '下三',
    );
	private $mapTeam = array(
		'1' => '上一',
		'2' => '上二',
		'3' => '上三',
		'4' => '上四',
		'5' => '下一',
		'6' => '下二',
		'7' => '下三',
		'8' => '下四',
	);
	// 构造函数
	public function __construct()
    {
        parent::__construct();
        $this->load->model('page_model');
        $this->load->library('upload');
    }
    // 管理员管理默认页
    public function index()
    {
    	if (!isset($_SESSION['admin_name']))
    	{
    		redirect('/admin/login');
    	}
    	$data['page_about'] = $this->page_model->get_page_about();
    	$this->show('back/page/page_about',$data);
    }
    
    public function cases($type='ui')
    {
    	$data['mapIdToName'] = $this->mapCase;
    	if($type=='ui')
    	{
    		$where['type']=1;
    		$data['case_array'] = $this->page_model->get_page_case($where);
    		if (!isset($_SESSION['admin_name']))
    		{
    			redirect('/admin/login');
    		}
    		$this->show('back/page/page_case_ui',$data);
    	}
    	else if($type=='vis')
    	{
    		$where['type']=2;
    		$data['case_array'] = $this->page_model->get_page_case($where);
    		if (!isset($_SESSION['admin_name']))
    		{
    			redirect('/admin/login');
    		}
    		$this->show('back/page/page_case_vis',$data);
    	}
    }
    public function assess()
    {
    	if (!isset($_SESSION['admin_name']))
    	{
    		redirect('/admin/login');
    	}
    	$data['assess_array'] = $this->page_model->get_page_assess();
    	$this->show('back/page/page_assess',$data);
    }
    public function set_page_assess()
    {
    	//循环更新数据
    	for($i=1; $i<=5;$i++)
    	{
    		$where['id']=$i;
    		$data['content']=$this->input->post('c'.$i);
    		$data['author']=$this->input->post('a'.$i);
    		$this->page_model->set_page_assess($data,$where);
    	}
    	$ret = array(
    			'msg' => '保存成功',
    	);
    	echo json_encode($ret);
    }
    public function team()
    {
    	if (!isset($_SESSION['admin_name']))
    	{
    		redirect('/admin/login');
    	}
    	$data['mapIdToName'] = $this->mapTeam;
    	$data['team_array'] = $this->page_model->get_page_team();
    	$this->show('back/page/page_team',$data);
    }
    public function set_page_team($num)
    {
    	if (!$this->upload->do_upload('imagePath'))
		{
			echo "<script>parent.callback('".$num."', '".$this->upload->display_errors()."')</script>";
		}
		else
		{
			//图片上传成功，保存图片路径及项目名称
			$where['id']=$num+1;
			$data['url'] = $this->input->post('weblink');
			$data['img_url'] = 'assets\uploads\\'.$_FILES['imagePath']['name'];
			$this->page_model->set_page_team($data,$where);
			echo "<script>parent.callback('".$num."','上传成功！')</script>";
		}
    }
	public function set_page_about()
	{
		$data['proj_num'] = $this->input->post('projNum');
		$data['designer_num'] = $this->input->post('designerNum');
		$data['day_num'] = $this->input->post('dayNum');
		$this->page_model->set_page_about($data);
		$ret = array(
				'msg' => '修改成功',
		);
		echo json_encode($ret);
	}
	public function set_cases($type='ui',$num='1')
	{
		if($type=='ui')
		{
			if (!$this->upload->do_upload('imagePath'))
			{
				echo "<script>parent.callback('".$num."', '".$this->upload->display_errors()."')</script>";
			}
			else
			{
				//图片上传成功，保存图片路径及项目名称
				$where['type']='1';
				$where['id']=$num;
				$data['name'] = $this->input->post('projName');
				$data['img_url'] = 'assets\uploads\\'.$_FILES['imagePath']['name'];
				$this->page_model->set_page_case($data,$where);
				echo "<script>parent.callback('".$num."','上传成功！')</script>";
			}
		}
		else if($type=='vis')
		{
			if (!$this->upload->do_upload('imagePath'))
			{
				echo "<script>parent.callback('".$num."', '".$this->upload->display_errors()."')</script>";
			}
			else
			{
				//图片上传成功，保存图片路径及项目名称
				$where['type']='2';
				$where['id']=$num;
				$data['name'] = $this->input->post('projName');
				$data['img_url'] = 'assets\uploads\\'.$_FILES['imagePath']['name'];
				$this->page_model->set_page_case($data,$where);
				echo "<script>parent.callback('".$num."','上传成功！')</script>";
			}
		}
	}
	// 添加头尾后输出
    private function show($page, $data=null)
    {
    	$this->load->view('/back/header');
    	$this->load->view($page, $data);
    	$this->load->view('/back/footer');
    }
}