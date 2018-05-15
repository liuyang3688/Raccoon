<style>
/*****管理员设置*****/
.admin-table
{
	margin-left:30px;
}
.admin th,td
{
	border: 1px solid #ccc;
}
.admin td
{
	text-align:center;
}
.admin input
{
	width: 180px;
	text-indent:5px;
}
.admin button
{
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
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
			<li class="item item-cur" data-url="/admin">管理员设置</li>
			<li class="item" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<section class="admin">
			<p class="f20 b p10">管理员设置</p>
			<table class="admin-table">
				<caption class="tl f16 p10">>>已有管理员</caption>
				<tr>
					<th class="w200">编号</th>
					<th class="w200">邮箱</th>
					<th class="w200">最近登录</th>
					<th class="w150">操作</th>
				</tr>
				<?php foreach ($admin_array as $admin): ?>
					<tr>
						<td><?=$admin['id']?></td>
						<td><?=$admin['email']?></td>
						<td><?=$admin['last_time']?></td>
						<td><button class="btn-admin-del">删除</button></td>
					</tr>
				<?php endforeach; ?>
			</table>
			<table class="mt40 admin-table">
				<caption class="tl f16 p10">>>添加管理员</caption>
				<tr>
					<th class="w200">邮箱</th>
					<th class="w200">密码</th>
					<th class="w200">确认密码</th>
					<th class="w150">操作</th>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="请输入邮箱..."/></td>
					<td><input type="password" name="passwd" placeholder="请输入密码..."/></td>
					<td><input type="password" name="repasswd" placeholder="请确认输入的密码..."/></td>
					<td><button id="btn-admin-create">添加</button></td>
				</tr>
			</table>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	$(".btn-admin-del").click(function(){
		//获取该tr的id
		var _id = $(this).parent().prevAll().eq(2).text();
		if(_id == '')
		{
			alert('删除id为null！');
			return false;
		}
		//执行删除操作
		$.ajax({
            type:"POST",
            url:"/admin/delete",
            data:{id:_id},
            dataType: "json",
            success:function(data){
            	alert(data.msg); 
            	window.location.href='/admin';        
            }         
        });
	});
	$('#btn-admin-create').click(function(){
		//ajax提交
		var data_email = $("input[name='email']").val();
		var data_pass = $("input[name='passwd']").val();
		var data_repass = $("input[name='repasswd']").val();
		//注册信息不能为空
		if(data_email == '' || data_pass == '' || data_repass == '')
		{
			alert('注册信息不完整，请检查！');
			return false;
		}
		//判断邮箱格式
		if (data_email != '') {//判断
		   var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
		   if (!reg.test(data_email)) {
		       alert('邮箱格式不正确，请重新填写!');
		       return false;
		   }
		}
		if(data_pass !== data_repass)
		{
			alert("两次输入密码不一致");
			return false;
		}
		$.ajax({
            type:"POST",
            url:"/admin/create",
            data:{email:data_email, pass:data_pass},
            dataType: "json",
            success:function(data){
            	alert(data.msg);   
				window.location.href='/admin';
            }         
        });
	});
	
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>