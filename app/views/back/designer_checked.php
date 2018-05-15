<style>
.user-table
{
	margin-left: 5px;
}
.user-table th,td
{
	border: 1px solid #ccc;
}
.user-table td
{
	height: 35px;
	text-align:center;
}
.btn-exp,.btn-down
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
			<li class="item item-cur" data-url="/designer/checked">已审核设计师管理</li>
			<li class="item" data-url="/project">项目管理</li>
			<li class="item" data-url="/project/publish">发布管理</li>
			<li class="item" data-url="/project/apply">项目申请</li>
			<li class="item" data-url="/admin">管理员设置</li>
			<li class="item" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<section class="user">
			<table class="user-table">
				<tr>
					<th class="w80">编号</th>
					<th class="w80">姓名</th>
					<th class="w100">联系电话</th>
					<th class="w175">邮箱</th>
					<th class="w80">资料完整度</th>
					<th class="w175">最近登录</th>
					<th class="w150">下载资料</th>
				</tr>
				<?php foreach ($designer_checked_array as $designer): ?>
					<tr>
						<td><?=$designer['id']?></td>
						<td><?=$designer['name']?></td>
						<td><?=$designer['tel']?></td>
						<td><?=$designer['email']?></td>
						<td><?=$designer['degree']?></td>
						<td><?=$designer['last_time']?></td>
						<td><button class="btn-down">下载</button></td>
					</tr>
				<?php endforeach; ?>
			</table>
			<p class="mt20"><a href="/designer/exp/checked"><button class="btn-exp">导出</button></a></p>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>