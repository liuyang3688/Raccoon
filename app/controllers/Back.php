<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class Back extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }
    
    // 后台默认页面
	public function index()
	{
		if (!isset($_SESSION['admin_name']))
		{
			redirect('/back/login');
		}
		$bag['title'] = '后台管理--首页';
		$this->show('/back/index',$bag);
	}
	
	// 后台登录页面
	public function login()
	{
		if ( ! file_exists(APPPATH.'/views/back/login.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		else
		{
			if (isset($_SESSION['admin_name']))
			{
				redirect('/back/index');
			}
			else
			{
				$_SESSION['src_page'] = $_SERVER['HTTP_REFERER'];
				$this->load->view('back/login');
			}
		}
	}
	
	// 私有:自动加载页头页尾
	private function show($page,$bag=null, $data=null)
	{
		$this->load->view('back/header.php',$bag);
		$this->load->view($page,$data);
		$this->load->view('back/footer.php');
	}
}