<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>用户--消息中心</title>
<base href="<?php echo base_url();?>>">
<link rel="icon" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/common.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="Bookmark" href="favicon.ico">
<style>
/*==================内容=================*/
header .username
{
	width: 150px;
	text-align: center;
	line-height: 62.5px;
	font-size: 14px;
}
.contents
{
	width: 1140px;
	height:585px;
	margin-top:100px;
	margin-bottom:100px;
	overflow: hidden;
	color:#515151;
}

div.left
{
	float: left;
	width:200px;
	height:230px;
	margin-right:20px;
	background-color: #F2F2F2;
}
div.right
{
	float: right;
	width:875px;
	height: 540px;
	background-color: #F2F2F2;
	padding: 20px;
}
div.left-title
{
	width:200px;
	height:100px;
	font-size: 18px;
	text-align: center;
	line-height: 100px;
}
li.left-menu-item
{
	float: none;
	border-top: #ddd 1px solid;
	height:40px;
	line-height: 40px;
	text-align:center;
	font-size:16px;
	cursor: pointer;
}
li.cur-left-menu-item
{
	font-weight:bold;
	border-left: #ff3366 4px solid;
}

div.right-title
{
	font-size: 18px;
}
div.right-menu-bar
{
	width: 870px;
	height:35px;
	line-height: 35px;
	font-size: 14px;
	background-color: #e4e4e4;
}
ul.right-menu
{
	height:35px;
	display: inline-block;
}
li.msg-right-menu-item
{
	width: 100px;
	text-align: center;
	cursor: pointer;
}
li.profile-right-menu-item
{
	width: 100px;
	text-align: center;
	cursor: pointer;
}
li.cur-right-menu-item
{
	background-color: #fff;
}
div.right-menu-btn
{
	display: inline-block;
	float: right;
	cursor: default;
}
img.right-menu-btn-img
{
	width: 24px;
	height: 12px;
	margin: 5px;
	cursor: pointer;
}
div.msg-right-panel
{
	width: 850px;
	padding: 10px;
	background-color: #fff;
}
div.profile-right-panel
{
	width: 850px;
	padding: 10px;
	background-color: #fff;
}
div.order-right-panel
{
	width: 850px;
	padding: 10px;
	background-color: #fff;
}
ul.right-panel-ul
{
	max-height: 400px;
	border-top: #ccc 1px solid;
	overflow: auto;
}
li.right-panel-li
{
	border-bottom: #ccc 1px solid;
	height: 87px;
	width: 830px;
}
img.right-panel-li-img
{
	width: 55px;
	height: 55px;
	margin: 18px 18px 0 18px;
}
div.right-panel-li-m
{
	margin-left: 18px;
	margin-right: 30px;
	width: 550px;
	display: inline-block;
	vertical-align: middle;
}
div.right-panel-li-r
{
	display: inline-block;
	vertical-align: middle;
}
p.right-panel-li-m-title
{
	font-size: 15px;
	text-align: left;
}
p.right-panel-li-m-msg
{
	height:20px;
	line-height: 20px;
	font-size: 13px;
	text-align: left;
}
.hide 
{
	display: none;
}
label.left-label
{
	font-size: 14px;
	width: 135px;
	display: inline-block;
	text-align: right;
	margin-right: 15px;
}
.contents input[type="text"],.contents input[type="password"]
{
	padding-left:5px;
	width: 310px;
	height:25px;
	border: #aaa 1px solid;
	border-top-width: 2px;
}
.contents select
{
	height:30px;
	border: #aaa 1px solid;
	border-top-width: 2px;
}
.address-tip
{
	font-size: 12px;
	color: #ff3366;
	margin-left: 10px;
}
button.btn-save
{
	width: 156px;
	height: 34px;
	background-color: #FF3366;
	color: white;
	border: none;
	border-radius: 5px;
	font-size: 13px;
	font-weight: bold;
	cursor: pointer;
	margin: 10px 0 30px 0;
}
.my-order-ul
{
	width: 100%;
	overflow: hidden;
}
.my-order-li
{
	padding: 30px 40px 10px 40px;
	font-size: 16px;
	font-weight:bold;
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
</style>
<script src="assets/js/area.js"></script>
<script src="assets/js/location.js"></script>
<script src="assets/js/jquery-1.11.3.min.js"></script>
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
			<li class="username">欢迎, <?=isset($username)?$username:''?>&nbsp;|&nbsp;<a href="/user/logout">注销</a>&nbsp;</li>
		</ul>
	</div>
</header>
<div class="contents auto">
	<div class="left">
		<div class="left-title"><?=isset($username)?$username:''?></div>
		<ul class="left-menu">
			<li class="left-menu-item cur-left-menu-item">消息中心</li>
			<li class="left-menu-item">我的资料</li>
			<li class="left-menu-item">我的订单</li>
		</ul>
	</div>
	<div class="right">
		<div class="right-title">最新动态</div>
		<div class="right-menu-bar mt18">
			<ul class="right-menu">
				<li class="msg-right-menu-item cur-right-menu-item">未读</li>
				<li class="msg-right-menu-item">已读</li>
			</ul>
			<div class="right-menu-btn">全部设为已读<img src="assets/img/eye.png" class="right-menu-btn-img" id="btn-read-all"></div>
		</div>
		<div class="msg-right-panel">
			<ul class="right-panel-ul mt20">
				<?php foreach ($msg_unread_array as $msg): ?>
				<li class="right-panel-li">
					<img src="assets/img/logo-msg.png" class="right-panel-li-img"/>
					<div class="right-panel-li-m">
						<p class="right-panel-li-m-title b"><?=isset($msg['title'])?$msg['title']:''?></p>
						<p class="right-panel-li-m-msg"><?=isset($msg['content'])?$msg['content']:''?></p>
					</div>
					<div class="right-panel-li-r">
						<p><img src="assets/img/eye.png" class="right-menu-btn-img btn-eye" data-msgid="<?=isset($msg['id'])?$msg['id']:''?>"></p>
						<p><?=isset($msg['time'])?$msg['time']:''?></p>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<p class="mt20">共<?php echo count($msg_unread_array)?>条</p>
		</div>
		<div class="msg-right-panel hide">
			<ul class="right-panel-ul mt20">
				<?php foreach ($msg_read_array as $msg): ?>
				<li class="right-panel-li">
					<img src="assets/img/logo-msg.png" class="right-panel-li-img"/>
					<div class="right-panel-li-m">
						<p class="right-panel-li-m-title"><?=isset($msg['title'])?$msg['title']:''?></p>
						<p class="right-panel-li-m-msg"><?=isset($msg['content'])?$msg['content']:''?></p>
					</div>
					<div class="right-panel-li-r">
						<p></p>
						<p><?=isset($msg['time'])?$msg['time']:''?></p>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<p class="mt20">共<?php echo count($msg_read_array)?>条</p>
		</div>
	</div>
	<div class="right hide">
		<div class="right-title">我的资料</div>
		<div class="right-menu-bar mt18">
			<ul class="right-menu">
				<li class="profile-right-menu-item cur-right-menu-item">基本资料</li>
				<li class="profile-right-menu-item">修改手机号</li>
				<li class="profile-right-menu-item">修改密码</li>
			</ul>
		</div>
		<div class="profile-right-panel">
			<div class="mt25">
				<label for="phone" class="left-label">手机号</label>
	  			<input type="text" name="phone" disabled="true" value="<?=isset($user['tel'])?$user['tel']:''?>"/>
			</div>
			<div class="mt25">
				<label for="email" class="left-label">常用邮箱</label>
	  			<input type="text" name="email" value="<?=isset($user['email'])?$user['email']:''?>"/>
	  			<span id="email-tip" class="right-part"></span>
			</div>
			<div class="mt25">
				<label for="name" class="left-label">姓名</label>
	  			<input type="text" name="name" value="<?=isset($user['name'])?$user['name']:''?>"/>
	  			<span id="name-tip" class="right-part"></span>
			</div>
			<div class="mt25">
				<label for="industry" class="left-label">所在行业</label>
	  			<select class="w310" name="industry" id="sel-industry" data-val="<?=isset($user['industry'])?$user['industry']:''?>">
	  				<optgroup label="高新科技">
					    <option value ="互联网">互联网</option>
					    <option value ="电子商务">电子商务</option>
					</optgroup>
					<optgroup label="信息传媒">
					    <option value ="出版业">出版业</option>
					    <option value ="电影录音">电影录音</option>
					</optgroup>
				</select>
			</div>
			<div class="mt25">
				<label for="address" class="left-label">邮寄地址</label>
	  			<input type="text" name="address" value="<?=isset($user['address'])?$user['address']:''?>" autocomplete="off"/>
	  			<span class="address-tip">寄送发票等资料时的收件地址</span>
			</div>
			<div class="mt25">
				<label for="location" class="left-label">所在地区</label>
	  			<select id="loc_province" name="province" class="w100"  data-val="<?=isset($user['province'])?$user['province']:''?>"></select>
				<select id="loc_city" name="city" class="w100" data-val="<?=isset($user['city'])?$user['city']:''?>"></select>
				<select id="loc_town" name="county" class="w100" data-val="<?=isset($user['county'])?$user['county']:''?>"></select>
			</div>
			<div class="mt25">
				<label for="know-way" class="left-label">了解途径</label>
				<select id="sel-knoway" class="w310" name="knoway" data-val="<?=isset($user['knoway'])?$user['knoway']:''?>">
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
		<div class="profile-right-panel hide">
			<div class="mt25">
				<label for="passwd" class="left-label">登录密码</label>
	  			<input type="password" name="upd-passwd"/>
	  			<span id="upd-passwd-tip" class="cr">*</span>
			</div>
			<div class="mt25">
				<label for="phone" class="left-label">新手机号</label>
	  			<input type="text" name="upd-phone"/>
	  			<span id="upd-phone-tip" class="cr">*</span>
			</div>
			<div class="mt25">
				<label class="left-label"></label>
				<button id="btn-upd-phone" class="btn-save">修改</button>
			</div>
		</div>
		<div class="profile-right-panel hide">
			<div class="mt25">
				<label for="cur-passwd" class="left-label">当前密码</label>
	  			<input type="password" name="cur-passwd"/>
	  			<span id="cur-passwd-tip" class="cr">*</span>
			</div>
			<div class="mt25">
				<label for="new-passwd" class="left-label">新密码</label>
	  			<input type="password" name="new-passwd"/>
	  			<span id="new-passwd-tip" class="cr">*</span>
			</div>
			<div class="mt25">
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
	<div class="right hide">
		<div class="right-title">我的订单</div>
		
		<div class="order-right-panel mt18">无订单
			<!-- <ul class="my-order-ul">
				<li class="my-order-li">LOGO设计</li>
				<li class="my-order-li">项目开始时间：2015年5月23日</li>
				<li class="my-order-li">项目所处阶段：二稿提交、反馈</li>
			</ul>
			<p class="mt20"><button class="btn-save">进入项目</button></p> -->
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	showLocation($('#loc_province').data('val'),$('#loc_city').data('val'),$('#loc_town').data('val'));
	// 初始化select默认选项
	$('#sel-industray').val($('#sel-industry').data('val'));
	$('#sel-knoway').val($('#sel-knoway').data('val'));
	
	// 基本资料信息修改保存
	$('#btn-profile-save').click(function(){
		var email = $("input[name='email']").val();
		var name = $("input[name='name']").val();
		var indu = $("select[name='industry']").val();
		var addr = $("input[name='address']").val();
		var prov = $("select[name='province']").val();
		var city = $("select[name='city']").val();
		var county = $("select[name='county']").val();
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
		
		/*
		if( email == "")
		{
			$('#email-tip').text("不能为空！");
			return false;
		}
		if( !regMail.test(email))
		{
			$('#email-tip').text("格式错误！");
			return false;
		}
		$('#email-tip').text("√");
		if( name == "")
		{
			$('#name-tip').text("不能为空！");
			return false;
		}
		$('#name-tip').text("√");
		if( addr == "")
		{
			$('#address-tip').text("不能为空！");
			return false;
		}
		$('#address-tip').text("√");*/
		$.ajax({
            type:"POST",
            url:"/user/upd_profile",
            data:{email:email,name:name,indu:indu,addr:addr,prov:prov,city:city,county:county,knoway:knoway},
            dataType: "json",
            success:function(data){
            	alert(data.msg);  
            }         
        });
	});
	
	// 全读操作
	$('#btn-read-all').click(function(){
		alert('该功能禁止使用！');
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
            url:"/user/upd_passwd",
            data:{oldPass:curPasswd,newPass:newPasswd},
            dataType: "json",
            success:function(data){
            	alert(data.msg);    
            	window.location.href="/login";   
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
            url:"/user/upd_phone",
            data:{passwd:$("input[name='upd-passwd']").val(),phone:$("input[name='upd-phone']").val()},
            dataType: "json",
            success:function(data){
            	alert(data.msg);   
            	window.location.href="/login";    
            }         
        });
	});
	$(".btn-eye").click(function(){
		var did = $(this).data("msgid");
		$.ajax({
            type:"POST",
            url:"/msg/read",
            data:{id:did},
            dataType: "json",
            success:function(data){
            	alert(data.msg);
            	window.location.href='/dlogin';         
            }         
        });
	});
	$(".left-menu-item").click(function(){
		$(".left-menu-item.cur-left-menu-item").removeClass("cur-left-menu-item");
		$(this).addClass("cur-left-menu-item");
		$(".right:not('.hide')").addClass("hide");
		$(".right:eq("+$(this).index()+")").removeClass("hide");
	});
	$(".msg-right-menu-item").click(function(){
		$(".msg-right-menu-item.cur-right-menu-item").removeClass("cur-right-menu-item");
		$(this).addClass("cur-right-menu-item");
		$(".msg-right-panel:not('.hide')").addClass("hide");
		$(".msg-right-panel:eq("+$(this).index()+")").removeClass("hide");
	});
	$(".profile-right-menu-item").click(function(){
		$(".profile-right-menu-item.cur-right-menu-item").removeClass("cur-right-menu-item");
		$(this).addClass("cur-right-menu-item");
		$(".profile-right-panel:not('.hide')").addClass("hide");
		$(".profile-right-panel:eq("+$(this).index()+")").removeClass("hide");
	});
});
</script>
