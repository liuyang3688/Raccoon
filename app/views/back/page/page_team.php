<style>
.team-table
{
	margin-left: 50px;
}
.team-table th,td
{
	border: 1px solid #ccc;
}
.team-table td
{
	height: 35px;
	text-align:center;
}
.team-table .btn-save
{
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
}
.team-table input[type="submit"]
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
			<li class="item item-cur" data-url="/page">页面管理</li>
			<li class="item" data-url="/user">用户管理</li>
			<li class="item" data-url="/designer/unchecked">未审核设计师管理</li>
			<li class="item" data-url="/designer/checked">已审核设计师管理</li>
			<li class="item" data-url="/project">项目管理</li>
			<li class="item" data-url="/project/publish">发布管理</li>
			<li class="item" data-url="/project/apply">项目申请</li>
			<li class="item" data-url="/admin">管理员设置</li>
			<li class="item" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<section class="page">
			<div class="right-nav">
				<label for="page" class="left-label">选择页面</label>
				<select class="w200" name="page">
					<option value ="/page/index">关于设计+</option>
					<option value ="/page/cases/ui">我们的案例</option>
					<option value ="/page/assess">评价我们的声音</option>
					<option value ="/page/team" selected = "selected">战略合作伙伴</option>
				</select>
			</div>
			<hr style="border: 1px dotted #ccc;">
			<div class="right-response">
				<section class="team">
					<iframe id="upframe" name="upframe" src="" style="display:none;"></iframe>
				<table class="mt20 team-table">
				<tr>
					<th class="w80">图片编号</th>
					<th class="w230">网页链接</th>
					<th class="w230">选择图片</th>
					<th class="w120">操作</th>
					<th class="w150">状态</th>
				</tr>
				<?php 
				for($i=0;$i<8;$i++)
				{
				?>
					<form action="/page/set_page_team/<?=$i?>" enctype="multipart/form-data" method="post" target="upframe">
						<tr>
						<td><?=$mapIdToName[$team_array[$i]['id']]?></td>
						<td><input type='text' name='weblink' value='<?=$team_array[$i]['url']?>'></td>
						<td><input id='file' type='file' name='imagePath'></td>
						<td><input type="submit" value="保存"/></td>
						<td><span id="msg<?=$i?>">图片大小 215*150</span></td>
						</tr>
					</form>
				<?php 
				}
				?>
				</table>
				</section>	
			</div>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	//右侧上部select响应
	$("select[name='page']").change(function(){
		window.location.href=$(this).val();
	});
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
function callback(num, msg)
{
	//document.getElementById("file"+num).outerHTML = document.getElementById("file"+num).outerHTML;
	document.getElementById("msg"+num).innerHTML = "<font color=red>"+msg+"</font>";
}
</script>