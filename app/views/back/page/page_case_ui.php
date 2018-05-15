<style>
.ui-table
{
	margin-left: 50px;
}
.ui-table th,td
{
	border: 1px solid #ccc;
}
.ui-table td
{
	height: 35px;
	text-align:center;
}
.ui-table .btn-save
{
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
}
.ui-table input[type="submit"]
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
					<option value ="/page/cases/ui" selected = "selected">我们的案例</option>
					<option value ="/page/assess">评价我们的声音</option>
					<option value ="/page/team">战略合作伙伴</option>
				</select>
			</div>
			<hr style="border: 1px dotted #ccc;">
			<div class="right-response">
				<section class="case">
					<label for="case-type" class="left-label">选择类型</label>
					<select class="w200" name="case-type">
						<option value ="/page/cases/ui" selected = "selected">UI</option>
						<option value ="/page/cases/vis">VIS</option>
					</select>	
				</section>
				
				<iframe id="upframe" name="upframe" src="" style="display:none;"></iframe>
				<table class="mt40 ui-table">
				<tr>
					<th class="w80">图片编号</th>
					<th class="w230">项目名称</th>
					<th class="w230">选择图片</th>
					<th class="w120">操作</th>
					<th class="w150">状态</th>
				</tr>
				<form action="/page/set_cases/ui/1" enctype="multipart/form-data" method="post" target="upframe">
				<tr>
					<td><?=$mapIdToName[$case_array[0]['id']]?></td>
					<td><input type='text' name='projName' value='<?=$case_array[0]['name']?>'></td>
					<td><input id='file' type='file' name='imagePath'></td>
					<td><input type="submit" value="保存"/></td>
					<td><span id="msg1">图片大小 295*295</span></td>
				</tr>
				</form>
				<form action="/page/set_cases/ui/2" enctype="multipart/form-data" method="post" target="upframe">
				<tr>
					<td><?=$mapIdToName[$case_array[1]['id']]?></td>
					<td><input type='text' name='projName' value='<?=$case_array[1]['name']?>'></td>
					<td><input type='file' name='imagePath'></td>
					<td><input type="submit" value="保存"/></td>
					<td><span id="msg2">图片大小 295*295</span></td>
				</tr>
				</form>
				<form action="/page/set_cases/ui/3" enctype="multipart/form-data" method="post" target="upframe">
				<tr>
					<td><?=$mapIdToName[$case_array[2]['id']]?></td>
					<td><input type='text' name='projName' value='<?=$case_array[2]['name']?>'></td>
					<td><input type='file' name='imagePath'></td>
					<td><input type="submit" value="保存"/></td>
					<td><span id="msg3">图片大小 295*295</span></td>
				</tr>
				</form>
				<form action="/page/set_cases/ui/4" enctype="multipart/form-data" method="post" target="upframe">
				<tr>
					<td><?=$mapIdToName[$case_array[3]['id']]?></td>
					<td><input type='text' name='projName' value='<?=$case_array[3]['name']?>'></td>
					<td><input type='file' name='imagePath'></td>
					<td><input type="submit" value="保存"/></td>
					<td><span id="msg4">图片大小 295*295</span></td>
				</tr>
				</form>
				<form action="/page/set_cases/ui/5" enctype="multipart/form-data" method="post" target="upframe">
				<tr>
					<td><?=$mapIdToName[$case_array[4]['id']]?></td>
					<td><input type='text' name='projName' value='<?=$case_array[4]['name']?>'></td>
					<td><input type='file' name='imagePath'></td>
					<td><input type="submit" value="保存"/></td>
					<td><span id="msg5">图片大小 295*295</span></td>
				</tr>
				</form>
				<form action="/page/set_cases/ui/6" enctype="multipart/form-data" method="post" target="upframe">
				<tr>
					<td><?=$mapIdToName[$case_array[5]['id']]?></td>
					<td><input type='text' name='projName' value='<?=$case_array[5]['name']?>'></td>
					<td><input type='file' name='imagePath'></td>
					<td><input type="submit" value="保存"/></td>
					<td><span id="msg6">图片大小 295*295</span></td>
				</tr>
				</form>
				</table>
			</div>
		</section>
	</div>
</div>
<script>
function callback(num, msg)
{
	//document.getElementById("file"+num).outerHTML = document.getElementById("file"+num).outerHTML;
	document.getElementById("msg"+num).innerHTML = "<font color=red>"+msg+"</font>";
}
$(document).ready(function(){
	//case页select响应
	$("select[name='case-type']").change(function(){
		window.location.href=$(this).val();
	});
	//右侧上部select响应
	$("select[name='page']").change(function(){
		window.location.href=$(this).val();
	});
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>
