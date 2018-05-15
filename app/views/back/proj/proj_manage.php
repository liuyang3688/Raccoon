<style>
.proj-table
{
	margin-left: 5px;
}
.proj-table th,td
{
	border: 1px solid #ccc;
}
.proj-table td
{
	height: 35px;
	text-align:center;
}
.btn-down,.btn-exp
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
			<li class="item item-cur" data-url="/project">项目管理</li>
			<li class="item" data-url="/project/publish">发布管理</li>
			<li class="item" data-url="/project/apply">项目申请</li>
			<li class="item" data-url="/admin">管理员设置</li>
			<li class="item" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<section class="proj">
			<table class="proj-table">
				<tr>
					<th class="w80">编号</th>
					<th class="w80">服务类型</th>
					<th class="w80">水平要求</th>
					<th class="w120">联系人</th>
					<th class="w175">联系电话</th>
					<th class="w175">邮箱</th>
					<th class="w150">操作</th>
				</tr>
				<?php foreach ($proj_array as $proj): ?>
					<tr>
						<td><?=$proj['id']?></td>
						<td><?=$proj['type']?></td>
						<td><?=$proj['level']?></td>
						<td><?=$proj['contPerson']?></td>
						<td><?=$proj['contPhone']?></td>
						<td><?=$proj['contEmail']?></td>
						<td><a href="/project/exp/<?=$proj['id']?>"><button class="btn-down">下载</button></a></td>
					</tr>
				<?php endforeach; ?>
			</table>
			<p class="mt20"><a href="/project/exp"><button class="btn-exp">导出</button></a></p>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	$('.btn-down').click(function(){
		// to-do list
	});
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>