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
.contents .contents-title
{
	margin-top: 50px;
	text-indent: 115px;
	font-size:16px;
}
div.left
{
	float: left;
	width: 525px;
	font-size: 14px;
	margin-top: 10px;
}
div.right
{
	float: right;
	width: 450px;
	margin-top: 28px;
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
.submit-btn
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
	<h2 class="contents-title">快速注册</h2>
	<div class="left">
		<form action="user/signup" method="post" id="signup-form">
		<div class="mt18">
			<label for="phone" class="left-label">手机号码</label>
  			<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" />
		</div>
		<?php echo form_error('phone'); ?>
		<div class="mt18">
			<label for="email" class="left-label">常用邮箱</label>
  			<input type="text" name="email" value="<?php echo set_value('email'); ?>" />
		</div>
		<?php echo form_error('email'); ?>
		<div class="mt18">
			<label for="name" class="left-label">姓名</label>
  			<input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
		</div>
		<?php echo form_error('name'); ?>
		<div class="mt18">
			<label for="password" class="left-label">设置密码</label>
  			<input type="password" name="password"/>
		</div>
		<?php echo form_error('password'); ?>
		<div class="mt18">
			<label for="repass" class="left-label">确认密码</label>
  			<input type="password" name="repass"/>
		</div>
		<?php echo form_error('repass'); ?>
		<div class="mt20 f13 tc">
			<button id="submit-btn" class="submit-btn">提交申请</button>
		</div>
		<div class="mt20 f13 tc">
			<span class="c-bc">点击“立即注册”，表示您同意并愿意遵守</span><a href="#"><span class="c-f36">《设计＋服务协议》</span></a>
		</div>
		</form>
	</div>
	<div class="right">
		<div class="signup-tip f13">
			<!-- <img src="assets/img/login.jpg" /> -->
			<p class="tl f12 mt18 c-bc">已经拥有设计<sup>＋</sup>账号？直接&nbsp;<a href="/login" class="c-f36">登录</a>或使用以下账号登录：</p>
			<div class="mt18">
				<a href="#" class="mr15"><img src="assets/img/logo-sina.jpg" width="32" height="32" alt="使用新浪账号登录"/></a>
				<a href="#" class="mr15"><img src="assets/img/logo-weixin.jpg" width="32" height="32" alt="使用微信账号登录"/></a>
				<a href="#" class="mr15"><img src="assets/img/logo-qq.jpg" width="32" height="32" alt="使用QQ账号登录"/></a>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#submit-btn').click(function(){
		//检查参数合法性
		//密码域加密再提交
		//提交页面
		$('#signup-form').submit();
	});
});
</script>
