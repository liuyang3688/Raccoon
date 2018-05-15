<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>设计+--首页</title>
<base href="<?php echo base_url();?>>">
<link rel="icon" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/common.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="Bookmark" href="favicon.ico">
<style>
.block
{
	margin: auto;
	width: 1280px;
	height: 487.5px;
}
.block-title{
	width: 250px;
	height: 140px;
	margin: auto;
}

.block h2
{
	margin: 0;
	padding-top: 80px;
	text-align: center;
	line-height:2em;
	font-size: 2em;
	font-weight: bold;
}

.head
{
	margin: auto;
	width: 1280px;
	height: 487.5px;
	background: #ADADAD url(assets/img/bg/bg.jpg) no-repeat fixed center;
	color: white;
}

.carousel
{
	width:100%;
	height:425px;
}
p.slogan{
	margin: 0;
	margin-top: 130px;
	margin-bottom:40px;
	text-align: center;
	width: 100%;
	line-height: 125px;
	font-size: 36px;
}
p.button-in
{
	margin: 0;
	text-align: center;
	width: 100%;
}
.btn-access
{
	background-color: #fd037f;
	color: #FFFFFF;
	width: 125px;
	height: 35px;
	font: 14px/20px Microsoft YaHei,SimHei,SimSun,sans-serif;
	border: 0px;
	border-radius: 4px;
	cursor: pointer;
}
.btn-access:hover{
	background-color: #f867af;
}
/*===========关于设计+===========*/
#block-design
{
	background: #F6F6F6 url('assets/img/bg/bg-design.jpg') center;
	height: 487px;
}
.features-box
{
	overflow: hidden;
	width: 690px;
	margin: auto;
	margin-top: 50px;
}
.feature-box
{
	width: 33.33333%;
}
.feature-box-image {
	margin: 0 auto 1em auto;
	width: 50px;
	height: 50px;
	overflow: hidden;
	background-size: cover;
	margin-bottom: 40px;
}
.image-proj
{
	background-image: url('assets/img/proj.png');
}
.image-designer
{
	background-image: url('assets/img/designer.png');
}
.image-clock
{
	background-image: url('assets/img/clock.png');
}
/*===========我们的案例===========*/
#block-case
{
	background: #F6F6F6 url('assets/img/bg/bg-case.jpg') center;
	height: 950px;
}
.btn-group
{
	text-align: center;
}
.btn-design
{
	width: 145px;
	height: 31px;
	color: black;
	background-color: transparent;
	border:1px solid black;
}
.btn-design:hover,.btn-design-cur
{
	border-color: #FF3266;
	color: #FF3266;
}
.case-group
{
	margin: 0 auto;
	margin-top: 30px;
	width: 939px;
	height: 610px;
	padding: 20px 0 0 20px;
}
.case
{
	width: 313px;
	height: 295px;
	overflow: hidden;
	float: left;
	margin-bottom: 20px;
	position:relative;
}
.case-a
{
	width: 293px;
	height: 295px;
	position: relative;
	overflow: hidden;
	display: block;
}
.case-img{
	top: 0;
	height: 295px;
	border: 0;
	z-index: 97;
}
.case .text
{
	background: #ff3366;
  	position: absolute;
  	width: 293px;
  	height: 295px;
  	line-height:295px;
  	top: 300px;
  	left: 0;
  	font-family: '微软雅黑','黑体';
  	filter:alpha(opacity=80); /*IE滤镜，透明度50%*/
	-moz-opacity:0.8; /*Firefox私有，透明度50%*/
	opacity:0.8;/*其他，透明度50%*/
}
.case .text p
{
	color: #fff;
	font-size: 18px;
}
/*===========评价我们的声音===========*/
#block-eval
{
	background: #000000;
	height: 580px;
	color: white;
	position: relative;
}
.color-white
{
	color: white;
}

.text-indent
{
	text-indent: 450px;
}
.assess-author
{
	text-align: right;
	padding-right:250px;
}
.assess-voice-img
{
	position: absolute;
	bottom: 0px;
	width: 100%;
}
/*===========战略合作伙伴===========*/
#block-team
{
	background: #F6F6F6 url('assets/img/bg/bg-team.jpg') center;
	height: 650px;
}
.team-group
{
	margin: 0 auto;
	margin-top: 30px;
	width: 964px;
	height: 350px;
	padding: 27px 0 0 27px;
}
.team
{
	width: 241px;
	height: 150px;
	overflow: hidden;
	float: left;
	margin-bottom: 50px;
}
.team-a
{
	width: 214px;
	height: 150px;
	position: relative;
	overflow: hidden;
	display: block;
}
.team-img{
	top: 0;
	height: 150px;
	border: 0;
	z-index: 97;
}
/*===========关于我们===========*/
#block-about
{
	background: #F6F6F6 url('assets/img/bg/bg-about.jpg') center;
	height: 418px;
	color: #333333;
}
.about-table
{
	width: 640px;
	height: 418px;
	float: left;
}
.about-service
{
	width: 638px;
	height: 418px;
	float: right;
}
.table-1
{
	width: 540px;
	height: 200px;
	margin-top: 100px;
	float: right;
	text-align: center;
}
.table-1 th
{
	font-size: 25px;
	line-height: 55px;
}
.table-1 td
{
	font-size: 15px;
}
p.about-service-title
{
	margin-top: 120px;
	font-size: 25px;
	line-height: 25px;
	font-weight: bold;
}
p.about-service-phone
{
	margin-top: 30px;
	font-size: 40px;
	line-height: 40px;
	color: #EA3B70;
}
p.about-service-time
{
	margin-top: 30px;
	font-size: 16px;
	color: #EA3B70;
}
.hide
{
	display:none;
}
.qq-service
{
	position: fixed;
	bottom:20px;
	right:0px;
}
</style>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery.timers-1.2.js"></script>
<script src="assets/js/main.js"></script>
</head>
<body>
<div class="qq-service">
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1054669945&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1054669945:52" alt="Q我~" title="Q我~"/></a>
</div>
<div class="head">
<header class="bgctr">
<div class="banner-left">
<ul>
<li class="logo"><a href="/"></a><img src="assets/img/logo.png" width="90" height="36"/></></li>
<li class="index"><a href="/">首页</a></li>
<li id="btn-menu" class="menu-1">
<a href="/service">创业设计服务<span class="caret"></span>
</a>
<ul id="menu-1" class="menu-1-ul" style="background-color:transparent;">
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
<div class="carousel">
<p class="slogan">专注中小企业设计服务</p>
<p class="button-in"><button id="btn-assess" class="btn-access">评估你的项目</button></p>
</div>
</div>
<div id="block-design" class="block">
<div class="block-title">
<h2>关于设计+</h2>
<p style="margin:0;text-align:center;line-height:5px;"><img src="assets/img/bar.jpg" width="40" height="2"></p>
</div>
<p style="font-size: 14px; font-weight: bold; margin-top: 30px;">专业、高效的设计服务平台</p>
<div class="features-box row">
<div class="feature-box column">
<div class="feature-box-image image-proj"></div>
<p><span class="c-6 f54 b"><?=$page_about->proj_num?></span><span class="c-3 f26">&nbsp;&nbsp;个</span></p>
<p class="mt20"><span class="c-f36 f16">已完成项目</span></p>
</div>
<div class="feature-box column">
<div class="feature-box-image image-designer"></div>
<p><span class="c-6 f54 b"><?=$page_about->designer_num?></span><span class="c-3 f26">&nbsp;&nbsp;人</span></p>
<p class="mt20"><span class="c-f36 f16">入驻设计师</span></p>
</div>
<div class="feature-box column">
<div class="feature-box-image image-clock"></div>
<p><span class="c-6 f54 b"><?=$page_about->day_num?></span><span class="c-3 f26">&nbsp;&nbsp;天</span></p>
<p class="mt20"><span class="c-f36 f16">平均项目周期</span></p>
</div>
</div>
</div>
<div id="block-case" class="block">
<div class="block-title">
<h2>我们的案例</h2>
<p style="margin:0;text-align:center;line-height:5px;"><img src="assets/img/bar.jpg" width="40" height="2"></p>
</div>
<div class="btn-group mt30">
<button class="btn-design btn-design-cur">VIS设计</button>&nbsp;
<button class="btn-design">UI设计</button>
</div>
<div id="case-vis" class="case-group">
<div class="case"><a href="/" class="case-a"><img src="<?=isset($vis_array[0]['img_url'])?$vis_array[0]['img_url']:'assets/img/case/case-img-1.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($vis_array[0]['name'])?$vis_array[0]['name']:'项目名称一'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($vis_array[1]['img_url'])?$vis_array[1]['img_url']:'assets/img/case/case-img-2.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($vis_array[1]['name'])?$vis_array[1]['name']:'项目名称二'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($vis_array[2]['img_url'])?$vis_array[2]['img_url']:'assets/img/case/case-img-3.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($vis_array[2]['name'])?$vis_array[2]['name']:'项目名称三'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($vis_array[3]['img_url'])?$vis_array[3]['img_url']:'assets/img/case/case-img-4.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($vis_array[3]['name'])?$vis_array[3]['name']:'项目名称四'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($vis_array[4]['img_url'])?$vis_array[4]['img_url']:'assets/img/case/case-img-5.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($vis_array[4]['name'])?$vis_array[4]['name']:'项目名称五'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($vis_array[5]['img_url'])?$vis_array[5]['img_url']:'assets/img/case/case-img-6.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($vis_array[5]['name'])?$vis_array[5]['name']:'项目名称六'?></p></div></div>
</div>
<div id="case-ui" class="case-group hide">
<div class="case"><a href="/" class="case-a"><img src="<?=isset($ui_array[0]['img_url'])?$ui_array[0]['img_url']:'assets/img/case/case-img-1.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($ui_array[0]['name'])?$ui_array[0]['name']:'项目名称一'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($ui_array[1]['img_url'])?$ui_array[1]['img_url']:'assets/img/case/case-img-2.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($ui_array[1]['name'])?$ui_array[1]['name']:'项目名称二'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($ui_array[2]['img_url'])?$ui_array[2]['img_url']:'assets/img/case/case-img-3.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($ui_array[2]['name'])?$ui_array[2]['name']:'项目名称三'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($ui_array[3]['img_url'])?$ui_array[3]['img_url']:'assets/img/case/case-img-4.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($ui_array[3]['name'])?$ui_array[3]['name']:'项目名称四'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($ui_array[4]['img_url'])?$ui_array[4]['img_url']:'assets/img/case/case-img-5.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($ui_array[4]['name'])?$ui_array[4]['name']:'项目名称五'?></p></div></div>
<div class="case"><a href="/" class="case-a"><img src="<?=isset($ui_array[5]['img_url'])?$ui_array[5]['img_url']:'assets/img/case/case-img-6.jpg'?>" class="case-img"/></a><div class="text" style="top:300px;"><p><?=isset($ui_array[5]['name'])?$ui_array[5]['name']:'项目名称六'?></p></div></div>
</div>
</div>
<div id="block-eval" class="block">
<div class="block-title">
<h2>评价我们的声音</h2>
<p style="margin:0;text-align:center;line-height:5px;"><img src="assets/img/bar.jpg" width="40" height="2"></p>
</div>
<div id="assess-content-1" class="f16 mt75">
	<p><span class="c-f36 f25">“</span><?=$assess_array[0]['content']?><span class="c-f36 f25">”</span></p><br><br><br>
	<p class="assess-author"><span class="ml25 c-f36 f25">——</span><?=$assess_array[0]['author']?></p>
</div>
<div id="assess-content-2" class="f16 mt75 hide">
	<p><span class="c-f36 f25">“</span><?=$assess_array[1]['content']?><span class="c-f36 f25">”</span></p><br><br><br>
	<p class="assess-author"><span class="ml25 c-f36 f25">——</span><?=$assess_array[1]['author']?></p>
</div>	
<div id="assess-content-3" class="f16 mt75 hide">
	<p><span class="c-f36 f25">“</span><?=$assess_array[2]['content']?><span class="c-f36 f25">”</span></p><br><br><br>
	<p class="assess-author"><span class="ml25 c-f36 f25">——</span><?=$assess_array[2]['author']?></p>
</div>
<div id="assess-content-4" class="f16 mt75 hide">
	<p><span class="c-f36 f25">“</span><?=$assess_array[3]['content']?><span class="c-f36 f25">”</span></p><br><br><br>
	<p class="assess-author"><span class="ml25 c-f36 f25">——</span><?=$assess_array[3]['author']?></p>
</div>
<div id="assess-content-5" class="f16 mt75 hide">
	<p><span class="c-f36 f25">“</span><?=$assess_array[4]['content']?><span class="c-f36 f25">”</span></p><br><br><br>
	<p class="assess-author"><span class="ml25 c-f36 f25">——</span><?=$assess_array[4]['author']?></p>
</div>
<p class="assess-voice-img"><img src="assets/img/voice.jpg" width="360" height="240"/></p>
</div>
<div id="block-team" class="block">
<div class="block-title">
<h2>战略合作伙伴</h2>
<p style="margin:0;text-align:center;line-height:5px;"><img src="assets/img/bar.jpg" width="40" height="2"></p>
</div>
<div class="team-group">
<div class="team"><a href="http://<?=isset($team_array[0]['url'])?$team_array[0]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[0]['img_url'])?$team_array[0]['img_url']:'assets/img/team/team-img-1.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[1]['url'])?$team_array[1]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[1]['img_url'])?$team_array[1]['img_url']:'assets/img/team/team-img-2.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[2]['url'])?$team_array[2]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[2]['img_url'])?$team_array[2]['img_url']:'assets/img/team/team-img-3.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[3]['url'])?$team_array[3]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[3]['img_url'])?$team_array[3]['img_url']:'assets/img/team/team-img-4.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[4]['url'])?$team_array[4]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[4]['img_url'])?$team_array[4]['img_url']:'assets/img/team/team-img-5.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[5]['url'])?$team_array[5]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[5]['img_url'])?$team_array[5]['img_url']:'assets/img/team/team-img-6.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[6]['url'])?$team_array[6]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[6]['img_url'])?$team_array[6]['img_url']:'assets/img/team/team-img-7.jpg'?>" class="team-img"/></a></div>
<div class="team"><a href="http://<?=isset($team_array[7]['url'])?$team_array[7]['url']:'/'?>" class="team-a"><img src="<?=isset($team_array[7]['img_url'])?$team_array[7]['img_url']:'assets/img/team/team-img-8.jpg'?>" class="team-img"/></a></div>
</div>
</div>
<div id="block-about" class="block">
<div class="about-table">
<table class="table-1 cba" >
<tr>
<th><a href="#">关于设计+</a></th>
<th><a href="#">常见问题</a></th>
</tr>
<tr>
<td><a href="#">关于我们</a></td>
<td><a href="#">常见问题</a></td>
</tr>
<tr>
<td><a href="#">加入我们</a></td>
<td><a href="#">支付帮助</a></td>
</tr>
<tr>
<td><a href="#">联系我们</a></td>
<td><a href="#">开具发票</a></td>
</tr>
<tr>
<td><a href="#">商务合作</a></td>
<td><a href="#">更多服务</a></td>
</tr>
</table>
</div>
<div class="about-service">
<p class="about-service-title">服务支持</p>
<p class="about-service-phone">131-2133-1569</p>
<p class="about-service-time">周一至周五：9:00-21:00 周六至周日：9:00-18:00</p>
</div>
</div>
<footer>
<!--<p class="friend-link">友情链接:</p>-->
<p class="copyright">Copyright © 2015 北京野比浣熊科技有限公司 京ICP备14015576号-4</p>
</footer>
<script>
$(document).ready(function(){
	function sleep(n) { //n表示的毫秒数
        var start = new Date().getTime();
        while (true) if (new Date().getTime() - start > n) break;
    } 
	var count=0;
	window.setInterval(function(){
		if(count%5==4)
		{
			$('#assess-content-5').fadeOut(500);
			sleep(500);
			$('#assess-content-1').fadeIn(1000);
		}
		else
		{
			$('#assess-content-'+(count%5+1)).fadeOut(500);
			sleep(500);
			$('#assess-content-'+(count%5+2)).fadeIn(1000);
		}
		if(count > 100)
		{
			count =0;
		}
		else
		{
			count++;
		}
	},5000);
	$('.case').hover(function(){
		$(this).children(".text").animate({top:0});
	},function(){
		$(this).children(".text").animate({top:300});
	});
	$('.btn-design').click(function(){
		$(".btn-design-cur").removeClass("btn-design-cur");
		$(this).addClass("btn-design-cur");
		$(".case-group:not('.hide')").addClass("hide");
		$(".case-group:eq("+$(this).index()+")").removeClass("hide");
	});
	$("#btn-assess").click(function(){
		window.location.href='/service';        
	});
	$("#btn-menu").hover(function(){
		$("#menu-1").toggle();
	});
});
</script>
</body>
</html>