<style>
/*****消息设置*****/
#msg-form
{
	margin:5px 100px;
}
.msg .btn-send
{
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
}
.msg .left-label
{
	display: inline-block;
	width: 100px;
	margin-right: 20px;
	text-align:right;
	font-size: 18px;
}
.msg input
{
	width: 200px;
}
</style>
<div class="container">
	<div class="left">
		<ul class="menu">
			<li class="item" data-url="/page">页面管理</li>
			<li class="item" data-url="/user">用户管理</li>
			<li class="item" data-url="/designer/unchecked">未审核设计师管理</li>
			<li class="item" data-url="/designer/checked">已审核设计师管理</li>
			<li class="item" data-url="/project">项目管理</li>
			<li class="item" data-url="/project/publish">发布管理</li>
			<li class="item" data-url="/project/apply">项目申请</li>
			<li class="item" data-url="/admin">管理员设置</li>
			<li class="item item-cur" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<form action="msg/create"  method="post" id="msg-form" class="msg">
			<div class="mt55">
				<label for="userid" class="left-label">用户编号</label>
				<select name="userid">
					<?php foreach ($user_array as $user): ?>
						<option value ="<?=$user['id']?>"><?=$user['id']?></option>
					<?php endforeach; ?>
					<?php foreach ($des_array as $designer): ?>
						<option value ="<?=$designer['id']?>"><?=$designer['id']?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mt30">
				<label for="title" class="left-label">消息标题</label>
				<input name="title" type="text" placeholder="请填写标题"/>
			</div>
			<div class="mt30">
				<label for="content" class="left-label">消息内容</label>
				<textarea name="content" style="width:400px;height:80px;" placeholder="请填写消息内容"></textarea>
			</div>
			<div class="mt20">
				<label class="left-label"></label>
				<button id="btn-send" class="btn-send">发送</button>
			</div>	
		</form>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#btn-send').click(function(){
		var userid = $("select[name='userid']").val();
		var title = $("input[name='title']").val();
		var content = $("textarea[name='content']").val();
		//检查参数合法性
		if( userid == '')
		{
			alert('请选择用户编号！');
			return false;
		}
		if( content == '')
		{
			alert('请填写消息内容！');
			return false;
		}
		//提交页面
		$('#msg-form').submit();
	});
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>