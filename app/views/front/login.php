<style>
/*==================内容=================*/
.contents
{
	width: 980px;
	height:470px;
	color: #434343;
	background-color: #F2F2F2;
	margin: 75px 150px;
	overflow: hidden;
}
div.left
{
	float: left;
	width: 525px;
	font-size: 14px;
	margin-top: 90px;
}
.contents-left-title
{
	font-size: 16px;
	text-indent: 145px;
	margin:0;
}
.contents-right-title
{
	font-size: 16px;
	margin:0;
}
div.right
{
	float: right;
	width: 450px;
	margin-top: 90px;
	border-left: #ccc 1px solid;

}
label.left-label
{
	font-size: 14px;
	width: 175px;
	display: inline-block;
	text-align: right;
	margin-right: 15px;
}
.contents input[type="text"],.contents input[type="password"]
{
	width: 200px;
	height:20px;
	background-color: #F2F2F2;
	border: #aaa 1px solid;
	border-top-width: 2px;
}
.contents input[type="checkbox"]
{
	vertical-align: middle;
}
.login-btn
{
	width:155px;
	height: 30px;
	border:none;
	border-radius: 5px;
	background-color: #FF3366;
	color: white;
	font-size: 13px;
}
div.signup-tip
{
	margin-left:75px;
	padding: 0px 70px 20px 40px;
	width:175px;
	height:175px;
}
</style>

<div class="contents auto">
<form action="user/login" method="post" id="login-form">
	<div class="left">
		<h2 class="contents-left-title">登录</h2>
		<div class="mt40">
			<label for="phone" class="left-label">手机号码</label>
  			<input type="text" name="phone" class="pl5" value="<?php echo set_value('phone'); ?>" />
		</div>
		<?php echo form_error('phone'); ?>
		<div class="mt30">
			<label for="password" class="left-label">密码</label>
  			<input type="password" name="password" class="pl5"/>
		</div>
		<?php echo form_error('password'); ?>
		<div class="mt20 f13">
			<label class="left-label"></label>
			<input type="checkbox" name="password"/><span class="ml5 c-bc poi">一周内自动登录</span><a href="#" class="ml25 c-bc">忘记密码？</a>
		</div>
		<div class="mt30 f13">
			<label class="left-label"></label>
			<button id="login-btn" class="login-btn">立即登录</button>
		</div>	
	</div>
	<div class="right">
		<div class="signup-tip f13">
			<h2 class="contents-right-title">其他账号登录</h2>
			<p class="tl f12 mt40 c-bc">还没有设计<sup>＋</sup>账号？马上去<a href="/signup" class="c-f36">注册</a>或使用以下账号登录：</p>
			<div class="mt18">
				<a href="#" class="mr15"><img src="assets/img/logo-sina.jpg" width="32" height="32" alt="使用新浪账号登录"/></a>
				<a href="#" class="mr15"><img src="assets/img/logo-weixin.jpg" width="32" height="32" alt="使用微信账号登录"/></a>
				<a href="#" class="mr15"><img src="assets/img/logo-qq.jpg" width="32" height="32" alt="使用QQ账号登录"/></a>
			</div>
		</div>
	</div>
</form>
</div>
<script>
$(document).ready(function(){
	$('#login-btn').click(function(){
		//检查参数合法性
		//密码域加密再提交
		//提交页面
		$('#login-form').submit();
	});
});
</script>

