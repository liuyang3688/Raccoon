<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title><?=$title?></title>
<base href="<?php echo base_url();?>">
<link rel="icon" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/common.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="Bookmark" href="favicon.ico">
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/main.js"></script>
<style>
.qq-service
{
	position: fixed;
	bottom:20px;
	right:0px;
}
</style>
</head>
<body>
<div class="qq-service">
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1054669945&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1054669945:52" alt="Q我~" title="Q我~"/></a>
</div>
<header>
	<div class="banner-left">
		<ul>
			<li class="logo"><a href="/"><img src="assets/img/logo.png" width="90" height="36"/></a></li>
			<li class="index"><a href="/">首页</a></li>
			<li id="btn-menu" class="menu-1">
				<a href="/service">创业设计服务<span class="caret"></span></a>
				<ul id="menu-1" class="menu-1-ul">
					<li><a href="/service/logo">LOGO设计</a></li>
					<li><a href="/service/ui">UI设计</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="banner-right">
		<ul>
			<li class="phone"><span class="phone-icon">+86-131-2133-1569</span></li>
			<?php if(isset($_SESSION['user_name'])):?>
				<li class="login"><a href="/user/profile">欢迎,<?=$_SESSION['user_name']?></a></li>
				<li class=designer-login><a href="/logout">登出</a></li>
			<?php elseif(isset($_SESSION['designer_name'])):?>
				<li class="designer-login"><a href="/designer/profile">欢迎,<?=$_SESSION['designer_name']?></a></li>
				<li class=designer-login><a href="/dlogout">登出</a></li>
			<?php else:?>
				<li class="login"><a href="/login">登录</a></li>
				<li class=designer-login><a href="/dlogin">设计师登录</a></li>
			<?php endif; ?>
		</ul>
	</div>
</header>