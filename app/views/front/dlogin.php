<style>
/*==================内容=================*/
.contents
{
	color: #434343;
	width: 1280px;
	height: 555px;
	background-image: url(assets/img/bg/bg-des-logo.jpg);
	background-size: 1280px 555px;
	position: relative;
}
.contents-slogon
{
	width: 650px;
	height: 300px;
	padding: 125px 0 0 125px;
}
button.join-us
{
	width: 180px;
	height: 40px;
	background-color: #FF3366;
	color: white;
	border: none;
	border-radius: 5px;
	font-size: 18px;
	font-weight: bold
}
.contents-login-box
{
	width:280px;
	height:320px;
	position: absolute;
	top:125px;
	right:110px;
	background-color:#CED3D9;
	filter:alpha(opacity=70); /*支持 IE 浏览器*/
	-moz-opacity:0.70; /*支持 FireFox 浏览器*/
	opacity:0.85;
}
.contents-login-box input[type="text"],.contents-login-box input[type="password"]
{
	width:230px;
	height:35px;
	padding-left: 5px;
}
.login-btn
{
	width:240px;
	height: 40px;
	border:none;
	border-radius: 5px;
	background-color: #FF3366;
	color: white;
	font-size: 18px;
	font-weight: bold;
}
</style>
<div class="contents auto">
	<div class="contents-slogon">
		<p class="h55 lh60 tl f48 b">加入设计+</p>
		<p class="h55 lh60 tl f48 b">在线设计服务领域快人一步</p>
		<p class="h25 lh25 tl f20 b cw mt25">我是设计师。入驻设计＋，成为服务者。产能加倍，加倍你的收益！</p>
		<p class="h40 tl mt75"><a href="/dsignup"><button class="join-us">马上加入</button></a></p>
	</div>
	<div class="contents-login-box">
		<form action="designer/login" method="post" id="login-form">
		<div class="mt25 f25 c-5e tc b">设计师登录</div>
		<div class="mt25 tc f13"><input type="text" name="phone" placeholder="请输入注册手机号"></div>
		<div class="mt25 tc f13"><input type="password" name="password" placeholder="请输入密码"></div>
		<div class="mt25 tl f13 ti20"><input type="checkbox" name="login-is-rem" value="是否记住密码" checked="checked" />是否记住密码</div>
		<div class="mt25 tc f18"><button id="login-btn" class="login-btn">立即登录</button></div>
		</form>
	</div>
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
