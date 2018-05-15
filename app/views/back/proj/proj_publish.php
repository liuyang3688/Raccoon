<style>
.publish
{
	
}
.publish select
{
	width: 304px;
	height: 25px;
}
.publish input
{
	text-indent:5px;
	width: 300px;
	font-size: 14px;
}
.publish .left-label
{
	margin-right:50px;
	display: inline-block;
	width: 200px;
	font-size: 16px;
	text-align: right;
}
.publish .tip
{
	color: red;
	margin-left:5px;
}
.btn-publish
{
	margin-left:70px;
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
			<li class="item item-cur" data-url="/project/publish">发布管理</li>
			<li class="item" data-url="/project/apply">项目申请</li>
			<li class="item" data-url="/admin">管理员设置</li>
			<li class="item" data-url="/msg">站内信</li>
		</ul>
	</div>
	<div class="right">
		<section class="publish">
			<div>
				<label for="proj-id" class="left-label">项目编号</label>
				<input type="text" name="proj-id"/>
				<span id="tip_id" class="tip">项目名称格式：P00001</span>
			</div>
			<div class="mt20">
				<label for="proj-type" class="left-label">项目类型</label>
				<select name="proj-type">
					<option value ="LOGO">LOGO</option>
					<option value ="UI">UI</option>
				</select>
				<span id="tip_type" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="startime" class="left-label">开始时间</label>
				<input type="text" name="startime"/>
				<span id="tip_startime" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="estime" class="left-label">预计工期</label>
				<input type="text" name="estime"/>
				<span id="tip_estime" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="level" class="left-label">星级要求</label>
				<select name="level">
					<option value ="一星">一星</option>
					<option value ="二星">二星</option>
					<option value ="三星">三星</option>
					<option value ="四星">四星</option>
					<option value ="五星">五星</option>
				</select>
				<span id="tip_level" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="prod-type" class="left-label">产品类型</label>
				<input type="text" name="prod-type"/>
				<span id="tip_prod_type" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="prod-refer" class="left-label">产品参考</label>
				<input type="text" name="prod-refer"/>
				<span id="tip_prod_refer" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="file-format" class="left-label">文件格式</label>
				<input type="text" name="file-format"/>
				<span id="tip_file_format" class="tip">*</span>
			</div>
			<div class="mt20">
				<label for="proj-wage" class="left-label">项目报酬</label>
				<input type="text" name="proj-wage"/>
				<span id="tip_proj_wage" class="tip">*</span>
			</div>
			<div class="mt20">
				<label class="left-label"></label>
				<button class="btn-publish" id="btn-publish">发布</button>
			</div>
		</section>		
	</div>
</div>
<script>
$(document).ready(function(){
	$('#btn-publish').click(function(){
		var projId = $("input[name='proj-id']").val();
		var projType = $("select[name='proj-type']").val();
		var startime = $("input[name='startime']").val();
		var estime = $("input[name='estime']").val();
		var rlevel = $("select[name='level']").val();
		var prodType = $("input[name='prod-type']").val();
		var prodRefer = $("input[name='prod-refer']").val();
		var fileFormat = $("input[name='file-format']").val();
		var projWage = $("input[name='proj-wage']").val();
		if( projId=='')
		{
			$('#tip_id').text('项目编号不能为空!');
			return false;
		}
		if( projType=='')
		{
			$('#tip_type').text('项目类型不能为空!');
			return false;
		}
		if( startime=='')
		{
			$('#tip_startime').text('开始时间不能为空!');
			return false;
		}
		if( estime=='')
		{
			$('#tip_estime').text('预计工期不能为空!');
			return false;
		}
		if( rlevel=='')
		{
			$('#tip_level').text('星际要求不能为空!');
			return false;
		}
		if( prodType=='')
		{
			$('#tip_prod_type').text('星际要求不能为空!');
			return false;
		}	
		if( prodRefer=='')
		{
			$('#tip_prod_refer').text('星际要求不能为空!');
			return false;
		}
		if( fileFormat=='')
		{
			$('#tip_file_format').text('星际要求不能为空!');
			return false;
		}
		if( projWage=='')
		{
			$('#tip_proj_wage').text('星际要求不能为空!');
			return false;
		}	
		$.ajax({
	        type:"POST",
	        url:"/project/dopublish",
	        data:{id:projId,type:projType,stime:startime,etime:estime,file_format:fileFormat,proj_wage:projWage,level:rlevel,prod_type:prodType,prod_refer:prodRefer},
	        dataType: "json",
	        success:function(data){
	        	alert(data.msg);         
	        }       
	    });
	});
	//左侧导航栏导航
	$('.item').click(function(){
		window.location.href=$(this).attr("data-url");
	});
});
</script>
