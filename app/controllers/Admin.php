<?php

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    // 管理员管理默认页
    public function index()
    {
    	if (!isset($_SESSION['admin_name']))
    	{
    		redirect('/admin/login');
    	}
    	
    	$data['admin_array'] = $this->select();
    	$data['admin_name'] = $this->session->admin_name;
    	$bag['title'] = '后台管理--首页';
    	$this->show('back/admin',$bag, $data);
    }
    
    // 增加管理员
    public function create()
    {
    	$data = array(
    			'email' => $_POST['email']
    	);
    	//判断下该用户email是否存在
    	if($this->admin_model->is_exist($data))
    	{
    		$ret = array(
    				'msg' => '该用户名已存在！'
    		);
    		echo json_encode($ret);
    		return false;
    	}
    	$data['passwd'] = md5($_POST['pass']);
    	$num = sprintf("%05d", $this->admin_model->count()+1);
    	$data['id'] = 'A'.$num;
    	$this->admin_model->create($data);
    	$ret = array(
    			'msg' => '添加管理员成功！'
    	);
    	echo json_encode($ret);
    }
    
    // 删除管理员
    public function delete()
    {
    	$data = array(
    		'id' => $this->input->post('id')
    	);
    	$this->admin_model->delete($data);
    	$ret = array(
    			'msg' => '删除管理员成功！'
    	);
    	echo json_encode($ret);
    }
    
    // 查询管理员
    public function select()
    {
    	return $this->admin_model->select();
    }
    
    // 修改管理员
    public function update()
    {
    	//return $this->admin_model->update();
    }
    
    // 登录管理员:登录逻辑处理，而非登录页面显示
    public function login()
    {
    	if (isset($_SESSION['admin_name']) && $_SESSION['admin_name']==$this->input->post('email'))
    	{
    		$page_url = isset($_SESSION['src_page'])?$_SESSION['src_page']:'/back/index';
    		redirect($page_url);
    		return;
    	}
    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    	$this->form_validation->set_rules('password', 'Password', 'required');
    	if($this->form_validation->run() == FALSE)
    	{
    		//验证失败
    		$this->load->view('/back/login');
    	}
    	else
    	{
    		$where = array(
    			'email' => $this->input->post('email'),
    			'passwd' => md5($this->input->post('password')),
    		);
    		if ($this->admin_model->is_exist($where))
    		{//验证成功
    			$this->session->admin_name = $this->input->post('email');
    			$data = array(
    				'message' => '登录成功',
    				'jumpUrl' => isset($_SESSION['src_page'])?$_SESSION['src_page']:'/back/index',
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
    				'jumpUrl' => '/back/login',
    				'waitSecond' => 2,
    			);
    			$this->load->view('/tip/dispatch_jump',$data);
    		}
    	}
    }
    
    // 登出管理员
    public function logout()
    {
    	if (isset($_SESSION['admin_name']))
    	{
    		unset($_SESSION['admin_name']);
    	}
    	$bag['title'] = '后台管理--首页';
    	redirect('/back/index',$bag);
    }
    
    // 添加头尾后输出
    private function show($page, $bag=null, $data=null)
    {
    	$this->load->view('/back/header',$bag);
    	$this->load->view($page, $data);
    	$this->load->view('/back/footer');
    }
}