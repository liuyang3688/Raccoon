<?php

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
        //>>form
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        //<<form
    }
    
    
    //
    public function logout()
    {
    	if (isset($_SESSION['admin_name']))
    	{
    		unset($_SESSION['admin_name']);
    	}
    	redirect('/admin/index');
    }
    public function index()
    {
    	//判断是否有登录session
    	if (!isset($_SESSION['admin_name']))
    	{
    		redirect('/admin/login');
    	}	
    	$data['page_about'] = $this->admin_model->get_page_about();
    	$data['admin_array'] = $this->admin_model->get_admin();
    	$data['admin_name'] = $this->session->admin_name;
    	$this->load->view('admin/header');
    	$this->load->view('admin/main',$data);
    	$this->load->view('admin/footer');
    }
	public function login()
	{
		if ( ! file_exists(APPPATH.'/views/admin/login.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		else 
		{
			if (isset($_SESSION['admin_name']))
			{
				redirect('/admin/index');
				return;
			}
			$this->load->view('admin/login');
		}
	}
	public function login_submit()
	{
		if (isset($_SESSION['admin_name']))
		{
			redirect('/admin/index');
			return;
		}
		//$this->load->view('welcome_message');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//验证失败
			redirect('/admin/login');
		}
		else 
		{
			if ($this->admin_model->is_exist())
			{//验证成功
				$this->session->admin_name = $this->input->post('email');
				redirect('/admin/index');
			}
			else 
			{//验证失败
				$data['errmsg'] = '用户名或密码错误,请重试！';
				redirect('/admin/login');
			}
		}
	}
	public function set_page_about()
	{
		$this->admin_model->set_page_about();
		$ret = array(
			'msg' => '保存成功',
			'code' => '402'
		);
		echo json_encode($ret);
	}
	//查询管理员
	public function get_admin()
	{
		$data['admin_array'] = $this->admin_model->get_admin();
		$this->load->view('admin/header');
		$this->load->view('admin/main',$data);
		$this->load->view('admin/footer');
	}
	//添加管理员
	public function set_admin()
	{
	
	}
}

?>