<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>设计+——后台登录</title>
<base href="<?php echo base_url();?>>">
<link rel="icon" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/common.css">
<style>
/*==================内容=================*/
.login-box
{
	width: 360px;
	margin: 0 auto;
	margin-top: 100px;
	padding: 20px;
}
.login-box .title
{
	font-size: 20px;
}

.login-box label
{
	font-size: 14px;
	width: 50px;
	display: inline-block;
	text-align: right;
	margin-right: 40px;
}
.login-box input
{
	padding-left:5px;
	width: 200px;
	height:20px;
	border: #aaa 1px solid;
	border-top-width: 2px;
}
.login-box .btn-login
{
	width:100px;
	height: 30px;
	border:none;
	border-radius: 5px;
	background-color: #FF3366;
	color: white;
	font-size: 13px;
}
</style>
<script src="assets/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<form action="admin/login" method="post" id="login-form" class="login-box">
	<p class="title">管理员登录</p>
	<div class="mt55">
		<label for="email">邮箱</label>
		<input type="text" name="email" value="<?php echo set_value('email'); ?>" />
	</div>
	<?php echo form_error('email'); ?>
	<div class="mt30">
		<label for="password">密码</label>
		<input type="password" name="password"  value="<?php echo set_value('password'); ?>" />
	</div>
	<?php echo form_error('password'); ?>
	<div class="mt55 tc">
		<button id="btn-login" class="btn-login">登录</button>
	</div>	
</form>
<script>
$(document).ready(function(){
	$('#btn-login').click(function(){
		//检查参数合法性
		//密码域加密再提交
		//提交页面
		$('#login-form').submit();
	});
});
</script>
</body>
</html>
