<style>
.apply-top
{
	margin-bottom: 20px;
}
.apply-top select
{
	width: 100px;
}
.apply-top-label
{
	font-size: 16px;
	margin-left:5px;
	margin-right:20px;
}
.apply-table
{
	margin-left: 5px;
}
.apply-table th,td
{
	border: 1px solid #ccc;
}
.apply-table td
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
			<li class="item" data-url="/project">项目管理</li>
			<li class="item" data-url="/project/publish">发布管理</li>
			<li class="item item-cur" data-url="/project/apply">项目申请</li>
			<li class="item" data-url="/admin">管理员设置</li>
			<li class="item" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<section class="apply">
			<div class="apply-top">
				<span class="apply-top-label">项目编号</span>
				<select name="proj_id">
					<?php 
					for ($i=0; $i<count($projid_array); $i++)
					{
						$proj = $projid_array[$i];
						if ($i==0)
						{
					?>
							<option value="<?=$proj['proj_id']?>" selected = "selected"><?=$proj['proj_id']?></option>
					<?php
						}
						else 
						{
					?>
							<option value="<?=$proj['proj_id']?>"><?=$proj['proj_id']?></option>
					<?php		
						}
					}
					?>
				</select>
				<hr style="border: 1px dotted #ccc;">
			</div>
			
			<table id="apply-table" class="apply-table">
				<tr>
					<th class="w80">编号</th>
					<th class="w80">姓名</th>
					<th class="w100">联系电话</th>
					<th class="w175">邮箱</th>
					<th class="w175">公司</th>
					<th class="w120">学校</th>
					<th class="w80">所在地</th>
					<th class="w80">操作</th>
				</tr>
				<?php foreach ($des_array as $des): ?>
				<tr>
					<td><?=$des['id']?></td>
					<td><?=$des['name']?></td>
					<td><?=$des['tel']?></td>
					<td><?=$des['email']?></td>
					<td><?=$des['comp']?></td>
					<td><?=$des['college']?></td>
					<td><?=$des['city']?></td>
					<td><a href="/project/exp_desinfo/1/<?=$des['id']?>"><button class="btn-down">下载</button></a></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<p id="p-exp" class="mt20"><a href="/project/exp_desinfo/2/<?=$projid_array[0]['proj_id']?>"><button class="btn-exp">导出</button></a></p>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	$("select[name='proj_id']").change(function(){
		var pid = $(this).val();
		$.ajax({
            type:"GET",
            url:"/project/get_desinfo_of_proj",
            data:{pid:pid},
            dataType: "json",
            success:function(data){
            	var des_array = data.des_array;
            	var html = "<tr><th class='w80'>编号</th><th class='w80'>姓名</th><th class='w100'>联系电话</th><th class='w175'>邮箱</th><th class='w175'>公司</th><th class='w120'>学校</th><th class='w80'>所在地</th><th class='w80'>操作</th></tr>";
				for(var i in des_array){
					html += "<tr><td>"+des_array[i].id+"</td>";
					html += "<td>"+des_array[i].name+"</td>";
					html += "<td>"+des_array[i].tel+"</td>";
					html += "<td>"+des_array[i].email+"</td>";
					html += "<td>"+des_array[i].comp+"</td>";
					html += "<td>"+des_array[i].college+"</td>";
					html += "<td>"+des_array[i].city+"</td>";
					html += "<td><a href='/project/exp_desinfo/1/"+des_array[i].id+"'><button class='btn-down' data-id="+des_array[i].id+">下载</button></a></td></tr>";
				}
            	// 清空旧表内容
            	$("#apply-table").empty();
            	// 写入新表内容         
                $("#apply-table").append(html);
                $("#p-exp").empty();
                $("#p-exp").append("<a href='/project/exp_desinfo/2/"+data.pid+"'><button class='btn-exp'>导出</button></a>");
            }         
        });
	});
	$('.btn-down').click(function(){
		// to-do list
	});
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>