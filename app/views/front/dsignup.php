<style>
/*==================内容=================*/
.contents
{
	width: 980px;
	/*height:470px;*/
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
	margin-top: 60px;
}
div.right
{
	float: right;
	width: 450px;
	margin-top: 78px;
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
	padding: 65px 50px 20px 50px;
	width:200px;
	height:175px;
	background-color: #E4E4E4;
}
</style>

<div class="contents auto">
	<form action="designer/signup" method="post" id="signup-form">
	<div class="left">
		<p class="b">设计师注册</p>
		<div class="mt18">
			<label for="phone" class="left-label">手机</label>
  			<input type="text" name="phone" value="<?php echo set_value('phone'); ?>"/>
		</div>
		<?php echo form_error('phone'); ?>
		<div class="mt18">
			<label for="phone" class="left-label">密码</label>
  			<input type="password" name="password"/>
		</div>
		<?php echo form_error('password'); ?>
		<div class="mt18">
			<label for="phone" class="left-label">确认密码</label>
  			<input type="password" name="repass"/>
		</div>
		<?php echo form_error('repass'); ?>
		<div class="mt18">
			<label for="username" class="left-label">姓名</label>
  			<input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
		</div>
		<?php echo form_error('username'); ?>
		<div class="mt18">
			<label for="city" class="left-label">现居城市</label>
  			<input type="text" name="city" value="<?php echo set_value('city'); ?>"/>
		</div>
		<?php echo form_error('city'); ?>
		<div class="mt18">
			<label for="college" class="left-label">毕业院校</label>
  			<input type="text" name="college" value="<?php echo set_value('college'); ?>"/>
		</div>
		<?php echo form_error('college'); ?>
		<div class="mt18">
			<label for="company" class="left-label">就职公司</label>
  			<input type="text" name="company" value="<?php echo set_value('company'); ?>"/>
		</div>
		<?php echo form_error('company'); ?>
		<div class="mt18">
			<label for="email" class="left-label">常用邮箱</label>
  			<input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
		</div>
		<?php echo form_error('email'); ?>
		<div class="mt20 f13 tc">
			<input type="checkbox" name="radio-agree" checked><span class="c-bc">我已知晓并同意</span><a href="#"><span class="c-f36">《设计＋设计师须知》</span></a>
		</div>
		<div class="mt25 mb35 f13 tc">
			<button id="submit-btn" class="submit-btn">提交申请</button>
		</div>
	</div>
	</form>
	<div class="right">
		<div class="signup-tip f13">
			不收取任何费用<BR><BR>
			提交申请一个工作日内，迅速反馈<BR><BR>
			您必须是设计师，拥有设计专业知识和经验，了解产品设计流程，并且有丰富的设计产品经验
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
