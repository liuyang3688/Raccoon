<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>设计师--消息中心</title>
<base href="<?php echo base_url();?>>">
<link rel="icon" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/common.css">
<link rel="stylesheet" href="assets/import/uploadify.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="Bookmark" href="favicon.ico">
<style>
header .username
{
	width: 150px;
	text-align: center;
	line-height: 62.5px;
	font-size: 14px;
}
/*****左侧栏目******/
.container
{
	width: 1140px;
	margin-top:77px;
	margin-bottom:100px;
	overflow: hidden;
	color:#515151;
}
.container .left
{
	float: left;
	width: 353px;
	border: 1px solid #ddd;
	margin-right: 20px;
	background-color: #fafafa;
}
.left .base-info
{
	overflow: hidden;
	padding: 22px 28px;
	border-bottom: 1px solid #ddd;
}
.left .name
{
	text-align: left;
	font-size: 20px;
	font-weight:bold;
	margin-bottom: 10px;
}
.left .avatar
{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 20px;
}
.left .pseud
{

}
.left .detail-info
{
	overflow: hidden;
	padding: 22px 28px;
	border-bottom: 1px solid #ddd;
}
.left .goodat-info
{
	padding: 22px 28px;
	border-bottom: 1px solid #ddd;
}
.left .mainpage-info
{
	padding: 22px 28px;
}
.left .mainpage-img
{
	width: 20px;
	height: 20px;
	border-radius: 5px;
}
/*****右侧栏目*****/
.container .right
{
	float: right;
	width: 763px;
	border: 1px solid #ddd;
}
.container .menu-bar
{
	background-color: #f2f2f2;
}
.container .menu-ul
{
	margin: 0 auto;
	width: 265px;
	overflow: hidden;
}
.container .menu
{
	width: 30px;
	height: 50px;
	line-height: 50px;
	margin: 0 18px 0 18px;
	cursor: pointer;
	text-align: center;
}
.container .menu:hover
{
	height: 48px;
	border-bottom: 2px solid #ff3366;
}
.container .cur-menu
{
	height: 48px;
	border-bottom: 2px solid #ff3366;
}
.container .box
{
	width: 763px;
}
/*****消息菜单*****/
.container .msg-box
{
	margin-bottom: 30px;
}
.container .msg
{ 
	width: 630px;
	height: 84px;
	border-bottom: 1px solid #ddd;
	margin: 0 70px;
}
.container .msg-img
{
	float: left;
	width: 48px;
	height: 48px;
	margin: 18px;
}
.container .msg-content
{
	float: left;
	width: 530px;
	margin: 22px 5px 15px 5px;
}
/*****资料菜单*****/
.container .profile-menu-bar
{
	background-color: #E4E4E4;
}
.container .profile-menu-ul
{
	margin: 0 auto;
	width: 400px;
	overflow: hidden;
}
.container .profile-menu
{
	width: 50px;
	height: 30px;
	font-size: 9px;
	line-height: 30px;
	margin: 0 15px;
	cursor: pointer;
	text-align: center;
}
.container .profile-menu:hover,.container .cur-profile-menu
{
	color: #ff3366;
}
.container label.left-label
{
	font-size: 12px;
	width: 220px;
	display: inline-block;
	text-align: right;
	margin-right: 15px;
}
.container input[type="text"],input[type="password"]
{
	padding-left:5px;
	width: 230px;
	height:20px;
	border: #aaa 1px solid;
	border-top-width: 2px;
}
.container select
{
	height:24px;
	border: #aaa 1px solid;
	border-top-width: 2px;
}
.container button.btn-save
{
	width: 70px;
	height: 28px;
	background-color: #FF3366;
	color: white;
	border: none;
	border-radius: 5px;
	font-size: 13px;
	font-weight: bold;
	cursor: pointer;
	margin: 10px 0 30px 50px;
}
.container .btn-upload
{
	width: 70px;
	height: 24px;
	color: #ff3366;
	border: 1px solid #ff3366;
	border-radius: 5px;
	background-color: #fff;
}
/*****fake-input*****/
.fake-input
{
	width: 360px;
	display: inline-block;
  	margin: 5px 0;
  	border-width: 1px;
  	border-style: solid;
  	padding: 5px;
  	_zoom: 1;
  	position: relative;
  	border-color: #e6e6e6;
  	background-color: #ffffff;
}
.fake-input .tag-name
{
	white-space: nowrap;
	display: inline-block;
	height: 20px;
	line-height: 20px;
	color: white;
	font-size: 12px;
	background-color: #ff3366;
	margin-left: 8px;
	border-radius: 5px;
	padding: 0 2px 0 5px;
	cursor: pointer;
}
.fake-input .tag-name .text
{
	font-style: normal;
}
.fake-input .icon-close
{
	display: inline-block;
	width: 10px;
	height: 10px;
	margin: 2px 0px 2px 5px;
	cursor: pointer;
	color: gray;
}
.fake-input .icon-close:hover
{
	background-color: white;
}
.fake-input .tag-input
{
	width: 80px !important;
	border: 0 !important;
}
/*****订单块*****/
.order-box .order-menu-bar
{
	background-color: #E4E4E4;
}
.order-box .order-menu-ul
{
	margin-left: 345px;
	width: 140px;
	overflow: hidden;
}
.order-box .order-menu
{
	width: 50px;
	height: 30px;
	line-height: 30px;
	margin: 0 10px;
	cursor: pointer;
	text-align: center;
}
.order-box .order-menu:hover,.order-box .cur-order-menu
{
	color: #ff3366;
}
.order-box .order-div
{
	margin: 30px 60px 65px 60px;
	font-style: bold;
}
.order-box .table-sln
{
	width: 600px;
	border-bottom: 1px solid #eee;
	font-weight: bold;
	text-align: center;
	margin: 0 auto;
	margin-bottom: 20px;
}
.table-sln td
{
	width: 220px;
	padding-bottom: 15px;
}
.hide
{display: none;}
.btn-assess
{
	width: 70px;
	height: 28px;
	background-color: #FF3366;
	color: white;
	border: none;
	border-radius: 5px;
	font-size: 12px;
	cursor: pointer;
}

/*****项目块*****/
.sln-box .table-sln
{
	width: 600px;
	border-bottom: 1px solid #eee;
	font-weight: bold;
	margin: 0 auto;
	margin-bottom: 30px;
	margin-top: 30px;
}
.qq-service
{
	position: fixed;
	bottom:20px;
	right:0px;
}
.right-part
{	
	width: 120px;
	height: 30px;
	line-height: 30px;
	color: red;
}
#file_queue{
	margin-left: 160px;
}
</style>
<script src="assets/js/area.js"></script>
<script src="assets/js/location.js"></script>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/import/jquery.uploadify.min.js"></script>
<script src="assets/js/main.js"></script>
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
				<a href="/service">创业设计服务<span class="caret"></span>
				</a>
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
			<li class="username">欢迎, <?=isset($des['name'])?$des['name']:''?>&nbsp;|&nbsp;<a href="/designer/logout">注销</a>&nbsp;</li>
		</ul>
	</div>
</header>
<div class="container auto">
	<div class="left">
		<div class="base-info">
			<p class="name"><?=isset($des['name'])?$des['name']:''?></p>
			<div>
				<img class="avatar" src="assets/img/avatar.png"/>
				<div class="pseud">
					<p class="college tl mt5"><?=isset($des['college'])?$des['college']:''?></p>
					<p class="major tl mt5"><?=isset($des['comp'])?$des['comp']:''?></p>
					<p id="p-location" class="location tl mt5">
						<input name="prov" type="hidden" value="<?=isset($des['province'])?$des['province']:''?>" />
						<input name="city" type="hidden" value="<?=isset($des['city'])?$des['city']:''?>"/>
						<input name="county" type="hidden" value="<?=isset($des['county'])?$des['county']:''?>"/>
					</p>	
				</div>
			</div>
		</div>
		<div class="detail-info">
			<p class="tl">职业等级<span class="r f20"><!-- ★★★ --></span></p>
			<p class="tl mt10">完成项目<span class="r f16"><!-- 10--></span></p>
			<p class="tl mt10">好评率<span class="r f16"><!-- 99.8%--></span></p>
		</div>
		<div class="goodat-info">
			<p class="tl b c-3">擅长</p>
			<p class="tl mt10 c-6"><?=isset($des['goodat'])?$des['goodat']:''?></p>
		</div>
		<div class="mainpage-info">
			<p class="tl b c-3">主页</p>
			<p class="tl mt10">
				<a href="<?=isset($des['link1'])?$des['link1']:''?>" target="_blank"><img src="assets/img/mainpage-1.png" class="mainpage-img" alt="站酷"></a>
				<a href="<?=isset($des['link2'])?$des['link2']:''?>" target="_blank"><img src="assets/img/mainpage-2.png" class="mainpage-img" alt="视觉中国"></a>
				<a href="<?=isset($des['link3'])?$des['link3']:''?>" target="_blank"><img src="assets/img/mainpage-1.png" class="mainpage-img" alt="Dribble"></a>
				<a href="<?=isset($des['link4'])?$des['link4']:''?>" target="_blank"><img src="assets/img/mainpage-2.png" class="mainpage-img" alt="Benance"></a>
				<a href="<?=isset($des['link5'])?$des['link5']:''?>" target="_blank"><img src="assets/img/mainpage-1.png" class="mainpage-img" alt="其他"></a>
			</p>
		</div>
	</div>
	<div class="right">
		<div class="menu-bar">
			<ul class="menu-ul">
				<li class="menu cur-menu">消息</li>
				<li class="menu">资料</li>
				<li class="menu">订单</li>
				<li class="menu">项目</li>
			</ul>
		</div>
		<div class="box msg-box">
			<?php foreach ($msg_array as $msg):?>
			<div class="msg">
				<img class="msg-img" src="assets/img/cross.png"/>
				<div class="msg-content">
					<p class="tl"><span class="f13 b"><?=isset($msg['title'])?$msg['title']:''?></span><span class="cga r"><?=isset($msg['time'])?$msg['time']:''?></span></p>
					<p class="mt5 tl"><?=isset($msg['content'])?$msg['content']:''?></p>
				</div>
			</div>
			<?php endforeach;?>
		</div>
		<div class="box profile-box hide">
			<div class="profile-menu-bar">
				<ul class="profile-menu-ul">
					<li class="profile-menu cur-profile-menu">基本资料</li>
					<li class="profile-menu">设计作品</li>
					<li class="profile-menu">专业技能</li>
					<li class="profile-menu">修改手机号</li>
					<li class="profile-menu">修改密码</li>
				</ul>
			</div>
			<div class="profile-subbox profile-base-info">
				<div class="mt40">
					<label for="phone" class="left-label">手机号</label>
		  			<input type="text" name="phone" disabled="true" value="<?=isset($des['tel'])?$des['tel']:''?>"/>
				</div>
				<div class="mt18">
					<label for="email" class="left-label">常用邮箱</label>
		  			<input type="text" name="email" value="<?=isset($des['email'])?$des['email']:''?>"/>
		  			<span id="email-tip" class="right-part"></span>
				</div>
				<div class="mt18">
					<label for="name" class="left-label">姓名</label>
		  			<input type="text" name="name" value="<?=isset($des['name'])?$des['name']:''?>"/>
		  			<span id="name-tip" class="right-part"></span>
				</div>
				<div class="mt18">
					<label for="college" class="left-label">毕业院校</label>
		  			<input type="text" name="college" value="<?=isset($des['college'])?$des['college']:''?>"/>
		  			<span id="college-tip" class="right-part"></span>
				</div>
				<div class="mt18">
					<label for="company" class="left-label">现任公司</label>
		  			<input type="text" name="company" value="<?=isset($des['comp'])?$des['comp']:''?>"/>
		  			<span id="company-tip" class="right-part"></span>
				</div>
				<div class="mt18">
					<label for="location" class="left-label">所在地区</label>
		  			<select id="loc_province" name="province" class="w80" data-val="<?=isset($des['province'])?$des['province']:''?>"></select>
					<select id="loc_city" name="city" class="w80" data-val="<?=isset($des['city'])?$des['city']:''?>"></select>
					<select id="loc_town" name="county" class="w100" data-val="<?=isset($des['county'])?$des['county']:''?>"></select>
				</div>
				<div class="mt18">
					<label for="work-state" class="left-label">工作状态</label>
					<select id="sel-workstate" class="w230" name="workstate" data-val="<?=isset($des['workstate'])?$des['workstate']:''?>">
					    <option>请选择</option>
					    <option value ="全职SOHO">全职SOHO</option>
					    <option value ="兼职(工作日空余时间+周末)">兼职(工作日空余时间+周末)</option>
					    <option value ="兼职(仅工作日空余时间或周末)">兼职(仅工作日空余时间或周末)</option>
					</select>
				</div>
				<div class="mt18">
					<label for="know-way" class="left-label">了解途径</label>
					<select id="sel-knoway" class="w230" name="knoway" value="请选择" data-val="<?=isset($des['knoway'])?$des['knoway']:''?>">
		  				<option>您是如何了解设计<sup>+</sup></option>
					    <option value ="媒体报道">媒体报道</option>
					    <option value ="搜索引擎">搜索引擎</option>
					    <option value ="线下活动">线下活动</option>
					    <option value ="微信微博">微信微博</option>
					    <option value ="朋友推荐">朋友推荐</option>
					</select>
				</div>
				<div class="mt25">
					<label class="left-label"></label>
					<button id="btn-profile-save" class="btn-save">保存</button>
				</div>
			</div>
			<div class="profile-subbox profile-design-work hide">
				<div class="mt40">
					<label for="phone" class="left-label">上传作品集</label>
		  			<!-- <button class="btn-upload">点击上传</button> -->
		  			<input id="uploadify" name="uploadify" type="file" multiple="true">
		  			<span class="ml15">(仅限zip, rar,jpg,png格式文件)</span>
				</div>
				<div id="file_queue"></div>
				<div class="mt18">
					<span class="b f12 ml240">个人主页链接</span>
				</div>
				<div class="mt18">
					<label for="zhanku" class="left-label">站酷</label>
		  			<input type="text" name="zhanku" value="<?=isset($des['link1'])?$des['link1']:''?>"/>
		  			<span id="zhanku-tip" class="cr"></span>
				</div>
				<div class="mt18">
					<label for="vchina" class="left-label">视觉中国</label>
		  			<input type="text" name="vchina" value="<?=isset($des['link2'])?$des['link2']:''?>"/>
		  			<span id="vchina-tip" class="cr"></span>
				</div>
				<div class="mt18">
					<label for="Dribbble" class="left-label">Dribbble</label>
		  			<input type="text" name="dribbble" value="<?=isset($des['link3'])?$des['link3']:''?>"/>
		  			<span id="dribbble-tip" class="cr"></span>
				</div>
				<div class="mt18">
					<label for="Behance" class="left-label">Behance</label>
		  			<input type="text" name="behance" value="<?=isset($des['link4'])?$des['link4']:''?>"/>
		  			<span id="behance-tip" class="cr"></span>
				</div>
				<div class="mt18">
					<label for="other" class="left-label">其他</label>
		  			<input type="text" name="other" value="<?=isset($des['link5'])?$des['link5']:''?>"/>
		  			<span id="other-tip" class="cr"></span>
				</div>
				<div class="mt25">
					<label class="left-label"></label>
					<button id="btn-link" class="btn-save">保存</button>
				</div>
			</div>
			<div class="profile-subbox profile-major-tech hide">
				<div class="mt40">
					<label for="designer-type" class="left-label">设计师类型</label>
					<select id="sel-type" class="w230" name="type" data-val="<?=isset($des['type'])?$des['type']:''?>">
		  				<option>请选择</option>
		  				<option value ="视觉设计">视觉设计</option>
					    <option value ="UI设计">UI设计</option>
					    <option value ="产品设计">产品设计</option>
					</select>
				</div>
				<div class="mt18">
					<label for="goodat" class="left-label">擅长领域</label>
					<input type="text" name="goodat" placeholder="可填写多个，逗号分开" autocomplete="off" value="<?=isset($des['goodat'])?$des['goodat']:''?>"/>
		  			<span id="goodat-tip" class="cr"></span>
				</div>
				<div class="mt18">
					<label for="software" class="left-label">常用软件</label>
					<input type="text" name="software" placeholder="可填写多个，逗号分开" autocomplete="off" value="<?=isset($des['software'])?$des['software']:''?>"/>
		  			<span id="software-tip" class="cr"></span>
				</div>
				<div class="mt18">
					<label for="device" class="left-label">所用设备</label>
					<select id="sel-device" class="w230" name="device" data-val="<?=isset($des['device'])?$des['device']:''?>">
		  				<option>请选择</option>
					    <option value ="PC">PC</option>
					    <option value ="MAC">MAC</option>
					    <option value ="其他">其他</option>
					</select>
				</div>
				<div class="mt25">
					<label class="left-label"></label>
					<button id="btn-tech-save" class="btn-save">保存</button>
				</div>
			</div>
			<div class="profile-subbox profile-phonen-num hide">
				<div class="mt40">
					<label for="passwd" class="left-label">登录密码</label>
		  			<input type="password" name="upd-passwd"/>
		  			<span id="upd-passwd-tip" class="cr">*</span>
				</div>
				<div class="mt18">
					<label for="new-phone-num" class="left-label">新手机号</label>
		  			<input type="text" name="upd-phone"/>
		  			<span id="upd-phone-tip" class="cr">*</span>
				</div>
				<div class="mt25">
					<label class="left-label"></label>
					<button id="btn-upd-phone" class="btn-save">修改</button>
				</div>
			</div>
			<div class="profile-subbox profile-login-passwd hide">
				<div class="mt40">
					<label for="passwd" class="left-label">登录密码</label>
		  			<input type="password" name="cur-passwd"/>
		  			<span id="cur-passwd-tip" class="cr">*</span>
				</div>
				<div class="mt18">
					<label for="new-passwd" class="left-label">新密码</label>
		  			<input type="password" name="new-passwd"/>
		  			<span id="new-passwd-tip" class="cr">*</span>
				</div>
				<div class="mt18">
					<label for="renew-passwd" class="left-label">确认新密码</label>
		  			<input type="password" name="renew-passwd"/>
		  			<span id="renew-passwd-tip" class="cr">*</span>
				</div>
				<div class="mt25">
					<label class="left-label"></label>
					<button id="btn-upd-passwd" class="btn-save">修改</button>
				</div>
			</div>
		</div>
		<div class="box order-box hide">
			<div class="order-menu-bar">
				<ul class="order-menu-ul">
					<li class="order-menu cur-order-menu">进行中</li>
					<li class="order-menu">已完成</li>
				</ul>
			</div>
			
			<div class="order-div">
				无订单
				<!-- <table class="table-sln">
					<tr>
						<td rowspan="2">项目名称：XXXLOGO设计</td>
						<td>开始时间：2015年5月23日</td>
						<td>预计周期：14天</td>
					</tr>
					<tr>
						<td>状态：初稿提交</td>
						<td>剩余时间：10天</td>
					</tr>
				</table> -->
			</div>
			
			 
			<div class="order-div hide">无订单
				<!-- <table class="table-sln">
					<tr>
						<td>项目名称：XXXLOGO设计</td>
						<td>开始时间：2015年5月23日</td>
						<td>预计周期：14天</td>
					</tr>
					<tr>
						<td class="tc" colspan="3"><button class="btn-assess">查看评价</button></td>
					</tr>
				</table>
				<table class="table-sln">
					<tr>
						<td>项目名称：XXXLOGO设计</td>
						<td>开始时间：2015年5月23日</td>
						<td>预计周期：14天</td>
					</tr>
					<tr>
						<td class="tc" colspan="3"><button class="btn-assess">查看评价</button></td>
					</tr>
				</table>
				<table class="table-sln">
					<tr>
						<td>项目名称：XXXLOGO设计</td>
						<td>开始时间：2015年5月23日</td>
						<td>预计周期：14天</td>
					</tr>
					<tr>
						<td class="tc" colspan="3"><button class="btn-assess">查看评价</button></td>
					</tr>
				</table> -->
			</div>
		</div>
		<div class="box sln-box hide">
			<?php 
			if (isset($proj_array))
			{
				foreach ($proj_array as $proj): ?>
					<table class="table-sln">
						<tr>
							<td rowspan="2" class="tc"><?=isset($proj['type'])?$proj['type']:''?>设计</td>
							<td class="col-2">开始时间：<?php echo substr(isset($proj['startime'])?$proj['startime']:'',0,11);?></td>
							<td class="col-3">预计工期：<?=isset($proj['estime'])?$proj['estime']:''?></td>
							<td class="col-4">呈现方式：<?=isset($proj['file_format'])?$proj['file_format']:''?></td>
						</tr>
						<tr>
							<td class="col-2">产品类型：<?=isset($proj['prod_type'])?$proj['prod_type']:''?></td>
							<td class="col-3">产品参考：<?=isset($proj['prod_refer'])?$proj['prod_refer']:''?></td>
							<td class="col-4">设计师要求：<?=isset($proj['level'])?$proj['level']:''?></td>
						</tr>
						<tr>
							<td class="tc" colspan="4"><button id="btn-proj-apply" data-id="<?=isset($proj['id'])?$proj['id']:''?>" class="btn-proj-apply">申请项目</button></td>
						</tr>
					</table>		
			<?php endforeach; }?>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	showLocation($('#loc_province').data('val'),$('#loc_city').data('val'),$('#loc_town').data('val'));
	// 初始化select默认选项
	var loc	= new Location();
	var provId = parseInt($("input[name='prov']").val());
	var cityId = parseInt($("input[name='city']").val());
	var countyId = parseInt($("input[name='county']").val());
	var provName = loc.items[0][provId];
	var cityName = loc.items['0,'+provId][cityId];
	var countyName = loc.items['0,'+provId+','+cityId][countyId];
	$('#p-location').text(provName+'/'+cityName+'/'+countyName);
	$('#sel-workstate').val($('#sel-workstate').data('val'));
	$('#sel-knoway').val($('#sel-knoway').data('val'));
	$('#sel-type').val($('#sel-type').data('val'));
	$('#sel-device').val($('#sel-device').data('val'));
	
	// 设计师上传作品集
	$("#uploadify").uploadify({
		//指定swf文件
		'swf': 'assets/import/uploadify.swf',
		//后台处理的页面
		'uploader': '/designer/upload_work',
		//按钮显示的文字
		'buttonText': '上传',
		//显示的高度和宽度，默认 height 30；width 120
		//'height': 15,
		//'width': 80,
		//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
		//在浏览窗口底部的文件类型下拉菜单中显示的文本
		'fileTypeDesc': 'Work Files',
		//允许上传的文件后缀
		'fileTypeExts': '*.zip; *.rar; *.jpg; *.png',
		//发送给后台的其他参数通过formData指定
		//'formData': { 'someKey': 'someValue', 'someOtherKey': 1 },
		//上传文件页面中，你想要用来作为文件队列的元素的id, 默认为false  自动生成,  不带#
		'queueID': 'file_queue',
		//选择文件后自动上传
		'auto': true,
		//设置为true将允许多文件上传
		'multi': true
	});
	
	// 专业技能提交
	$('#btn-tech-save').click(function(){
		var type = $("select[name='type']").val();
		var goodat = $("input[name='goodat']").val();
		var software = $("input[name='software']").val();
		var device = $("select[name='device']").val();
		
		$.ajax({
            type:"POST",
            url:"/designer/upd_tech",
            data:{type:type,goodat:goodat,software:software,device:device},
            dataType: "json",
            success:function(data){
            	alert(data.msg);  
            }         
        });
	});
	
	// 基本资料信息修改保存
	$('#btn-profile-save').click(function(){
		var email = $("input[name='email']").val();
		var name = $("input[name='name']").val();
		var coll = $("input[name='college']").val();
		var comp = $("input[name='company']").val();
		var prov = $("select[name='province']").val();
		var city = $("select[name='city']").val();
		var county = $("select[name='county']").val();
		var workst = $("select[name='workstate']").val();
		var knoway = $("select[name='knoway']").val();
		var regMail = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
		
		if( email !="" && !regMail.test(email))
		{
			$('#email-tip').text("格式错误！");
			return false;
		}
		else if(email!=="")
		{
			$('#email-tip').text("√");
		}
		
		$.ajax({
            type:"POST",
            url:"/designer/upd_profile",
            data:{email:email,name:name,coll:coll,comp:comp,prov:prov,city:city,county:county,workst:workst,knoway:knoway},
            dataType: "json",
            success:function(data){
            	alert(data.msg);  
            }         
        });
	});
	
	// 申请项目
	$('.btn-proj-apply').click(function(){
		var projid = $(this).data('id');
		$.ajax({
            type:"POST",
            url:"/designer/apply_proj",
            data:{projid:projid},
            dataType: "json",
            success:function(data){
            	alert(data.msg);
            }         
        });
	});
	//提交个人主页
	$('#btn-link').click(function(){
		// 获取input内容
		var link1 = $("input[name='zhanku']").val();
		var link2 = $("input[name='vchina']").val();
		var link3 = $("input[name='dribbble']").val();
		var link4 = $("input[name='behance']").val();
		var link5 = $("input[name='other']").val();
		// 检查输入url格式是否正确
		var regUrl = /http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
		if( link1 != "" && !regUrl.test(link1))
		{
			$('#zhanku-tip').text('url非法');
			return false;
		}
		$('#zhanku-tip').text('');
		if( link2 != "" && !regUrl.test(link2))
		{
			$('#vchina-tip').text('url非法');
			return false;
		}
		$('#vchina-tip').text('');
		if( link3 != "" && !regUrl.test(link3))
		{
			$('#dribbble-tip').text('url非法');
			return false;
		}
		$('#dribbble-tip').text('');
		if( link4 != "" && !regUrl.test(link4))
		{
			$('#behance-tip').text('url非法');
			return false;
		}
		$('#behance-tip').text('');
		if( link5 != "" && !regUrl.test(link5))
		{
			$('#other-tip').text('url非法');
			return false;
		}
		$('#other-tip').text('');
		// 提交写库
		$.ajax({
            type:"POST",
            url:"/designer/upd_link",
            data:{link1:link1,link2:link2,link3:link3,link4:link4,link5:link5},
            dataType: "json",
            success:function(data){
            	alert(data.msg);   
            }         
        });
	});
	$('#btn-upd-passwd').click(function(){
		var curPasswd = $("input[name='cur-passwd']").val();
		var newPasswd = $("input[name='new-passwd']").val();
		var renewPasswd = $("input[name='renew-passwd']").val();
		if( curPasswd == "")
		{
			$('#cur-passwd-tip').text("不能为空！");
			return false;
		}
		$('#cur-passwd-tip').text("√");
		if( newPasswd == "")
		{
			$('#new-passwd-tip').text("不能为空！");
			return false;
		}
		if( newPasswd == curPasswd)
		{
			$('#new-passwd-tip').text("修改密码不能与原密码一致！");
			return false;
		}
		$('#new-passwd-tip').text("√");
		
		if( renewPasswd == "")
		{
			$('#renew-passwd-tip').text("不能为空！");
			return false;
		}
		if( newPasswd != renewPasswd)
		{
			$('#renew-passwd-tip').text("两次密码不一致！");
			return false;
		}
		$('#renew-passwd-tip').text("√");
		$.ajax({
            type:"POST",
            url:"/designer/upd_passwd",
            data:{oldPass:curPasswd,newPass:newPasswd},
            dataType: "json",
            success:function(data){
            	alert(data.msg); 
            	window.location.href="/designer/profile";      
            }         
        });
	});
	$('#btn-upd-phone').click(function(){
		if($("input[name='upd-passwd']").val() == "")
		{
			$('#upd-passwd-tip').text("不能为空！");
			return false;
		}
		$('#upd-passwd-tip').text("√");
		var regPhone =/^1[3|4|5|8][0-9]\d{4,8}$/;
		var phone = $("input[name='upd-phone']").val();
		if( phone == "")
		{
			$('#upd-phone-tip').text("不能为空！");
			return false;
		}
		if(!regPhone.test(phone))
		{
			$('#upd-phone-tip').text("格式错误！");
			return false;
		}
		$('#upd-phone-tip').text("√");
		$.ajax({
            type:"POST",
            url:"/designer/upd_phone",
            data:{passwd:$("input[name='upd-passwd']").val(),phone:$("input[name='upd-phone']").val()},
            dataType: "json",
            success:function(data){
            	alert(data.msg);
            	window.location.href="/designer/profile";       
            }         
        });
	});
	$(".menu").click(function(){
		$(".menu.cur-menu").removeClass("cur-menu");
		$(this).addClass("cur-menu");
		$(".box:not('.hide')").addClass("hide");
		$(".box:eq("+$(this).index()+")").removeClass("hide");
	});
	$(".profile-menu").click(function(){
		$(".profile-menu.cur-profile-menu").removeClass("cur-profile-menu");
		$(this).addClass("cur-profile-menu");
		$(".profile-subbox:not('.hide')").addClass("hide");
		$(".profile-subbox:eq("+$(this).index()+")").removeClass("hide");
	});
	$(".order-menu").click(function(){
		$(".order-menu.cur-order-menu").removeClass("cur-order-menu");
		$(this).addClass("cur-order-menu");
		$(".order-div:not('.hide')").addClass("hide");
		$(".order-div:eq("+$(this).index()+")").removeClass("hide");
	});
});
</script>
</body>
</html>
