<style>
.assess-table
{
	margin-left: 150px;
}
/*
.assess-table th,td
{
	border: 1px solid #ccc;
}*/
.assess-table td
{
	height: 40px;
	text-align:center;
}
.assess-table .btn-save
{
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
}
.assess .btn-save
{
	margin-left:350px;
	width: 45px;
	height:20px;
	border: 1px solid #ff3366;
	color: #ff3366;
	border-radius: 3px;
	background-color: transparent;
}
.assess input[type="text"]
{
	height: 20px;
}
input.content
{
	width: 200px;
}
input.author
{
	width: 100px;
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
					<option value ="/page/cases">我们的案例</option>
					<option value ="/page/assess" selected = "selected">评价我们的声音</option>
					<option value ="/page/team">战略合作伙伴</option>
				</select>
			</div>
			<hr style="border: 1px dotted #ccc;">
			<div class="right-response">
				<section class="assess">
					<table class="mt20 assess-table">
						<tr>
							<th class="w100">编号</th>
							<th class="w230">给予的评价</th>
							<th class="w150">评价者</th>
						</tr>
						<tr>
							<td>1</td>
							<td><input type="text" name="assess1" class="content" value="<?=isset($assess_array[0]['content'])?$assess_array[0]['content']:'未设置'?>"/></td>
							<td><input type="text" name="author1" class="author" value="<?=isset($assess_array[0]['author'])?$assess_array[0]['author']:'未设置'?>"/></td>
						</tr>
						<tr>
							<td>2</td>
							<td><input type="text" name="assess2" class="content" value="<?=isset($assess_array[1]['content'])?$assess_array[1]['content']:'未设置'?>"/></td>
							<td><input type="text" name="author2" class="author" value="<?=isset($assess_array[1]['author'])?$assess_array[1]['author']:'未设置'?>"/></td>
						</tr>
						<tr>
							<td>3</td>
							<td><input type="text" name="assess3" class="content" value="<?=isset($assess_array[2]['content'])?$assess_array[2]['content']:'未设置'?>"/></td>
							<td><input type="text" name="author3" class="author" value="<?=isset($assess_array[2]['author'])?$assess_array[2]['author']:'未设置'?>"/></td>
						</tr>
						<tr>
							<td>4</td>
							<td><input type="text" name="assess4" class="content" value="<?=isset($assess_array[3]['content'])?$assess_array[3]['content']:'未设置'?>"/></td>
							<td><input type="text" name="author4" class="author" value="<?=isset($assess_array[3]['author'])?$assess_array[3]['author']:'未设置'?>"/></td>
						</tr>
						<tr>
							<td>5</td>
							<td><input type="text" name="assess5" class="content" value="<?=isset($assess_array[4]['content'])?$assess_array[4]['content']:'未设置'?>"/></td>
							<td><input type="text" name="author5" class="author" value="<?=isset($assess_array[4]['author'])?$assess_array[4]['author']:'未设置'?>"/></td>
						</tr>
					</table>
					<div class="mt20"><button class="btn-save" id="btn-save">保存</button></div>
				</section>	
			</div>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#btn-save').click(function(){
		var content1 = $("input[name='assess1']").val();
		var author1  = $("input[name='author1']").val();
		var content2 = $("input[name='assess2']").val();
		var author2  = $("input[name='author2']").val();
		var content3 = $("input[name='assess3']").val();
		var author3  = $("input[name='author3']").val();
		var content4 = $("input[name='assess4']").val();
		var author4  = $("input[name='author4']").val();
		var content5 = $("input[name='assess5']").val();
		var author5  = $("input[name='author5']").val();
		$.ajax({
	        type:"POST",
	        url:"/page/set_page_assess",
	        data:{c1:content1, a1:author1, c2:content2, a2:author2,c3:content3, a3:author3,
		        c4:content4, a4:author4,c5:content5, a5:author5},
	        dataType: "json",
	        success:function(data){
	        	alert(data.msg);         
	        }        
	    });
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
