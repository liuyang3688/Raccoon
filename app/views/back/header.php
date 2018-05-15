<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>设计+--后台管理</title>
<base href="<?php echo base_url();?>>">
<link rel="icon" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/common.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="Bookmark" href="favicon.ico">
<style>
/*****错误提示*****/
.msg-tip
{
	height: 80px;
	line-height:80px;
}

/*==================内容=================*/
header
{
	height: 50px !important;
}
.admin-logo
{
	float: left;
	width: 250px;
	height: 50px;
	background:#333333 url(assets/img/admin-logo.png) no-repeat top;
	cursor: pointer;
}
.admin-info
{
	float: right;
	width: 250px;
	height:50px;
	line-height:50px;
	text-align: center;
	font-size: 13px;
}
.hide 
{
	display: none;
}
.container
{
	margin: auto;
	width: 1280px;
	min-height: 580px;
}
/******左侧菜单******/
.left
{
	float: left;
}
.menu
{
	margin-top: 20px;
	width: 252px;
	border: 1px solid #aaa;
}
.item:hover, .item-cur
{
	background: #5e5e5e;
	color: white;
}
.item
{
	margin-top:-1px;
	float: none;
	width: 252px;
	height: 39px;
	line-height: 38px;
	text-align: center;
	font-size:13px;
	border-top: 1px solid #aaa;
	cursor: pointer;
}
/*****右侧框架*****/
.container .right
{
	float: right;
	padding: 35px;
	min-width: 930px;
}
/*****页面管理*****/
.page input
{
	text-indent:5px;
	width: 200px;
}
.page .left-label
{
	margin-right:20px;
	display: inline-block;
	width: 285px;
	font-size: 16px;
	text-align: right;
}
.page .right-nav
{
	padding-bottom:20px;
}
.page .right-response
{
	padding-top: 30px;
}
.page .page-btn
{
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
}
</style>
<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/main.js"></script>
</head>
<body>
<header>
	<div id="logo" class="admin-logo"></div>
	<div class="admin-info"><?=$this->session->admin_name?>&nbsp;|&nbsp;<a href="/admin/logout">注销</a>&nbsp;</div>
</header>
<script>
$(document).ready(function(){
	$('#logo').click(function(){
		window.location.href='/';
	});
});
</script>
