<?php

class Front extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('page_model');
	}
	// 默认首页
	public function index()
	{
		$data['page_about'] = $this->page_model->get_page_about();
		$data['assess_array'] = $this->page_model->get_page_assess();
		$data['vis_array'] = $this->page_model->get_page_vis();
		$data['ui_array'] = $this->page_model->get_page_ui();
		$data['team_array'] = $this->page_model->get_page_team();
		$this->load->view('index',$data);
	}
	// 登录页面
	public function login()
	{
		if (isset($_SESSION['user_name']))
		{
			redirect('/user/profile');
		}
		$bag['title'] = '设计+--登录页面';
		$this->show('front/login',$bag);
	}
	// 注册页面
	public function signup()
	{
		$bag['title'] = '设计+--注册页面';
		$this->show('front/signup',$bag);
	}
	// 设计师登录页面
	public function dlogin()
	{
		if (isset($_SESSION['designer_name']))
		{
			redirect('/designer/profile');
		}
		$bag['title'] = '设计+--设计师登录';
		$this->show('front/dlogin',$bag);
	}
	// 设计师注册页面
	public function dsignup()
	{
		$bag['title'] = '设计+--设计师注册';
		$this->show('front/dsignup',$bag);
	}
	// 服务页面
	public function service()
	{
		$bag['title'] = '设计+--服务';
		$this->show('front/service',$bag);
	}
	
	public function show($page, $bag=null, $data=null)
	{
		$this->load->view('/front/header',$bag);
		$this->load->view($page, $data);
		$this->load->view('/front/footer');
	}
}

