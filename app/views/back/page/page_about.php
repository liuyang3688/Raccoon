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
					<option value ="/page/index" selected = "selected">关于设计+</option>
					<option value ="/page/cases">我们的案例</option>
					<option value ="/page/assess">评价我们的声音</option>
					<option value ="/page/team">战略合作伙伴</option>
				</select>
			</div>
			<hr style="border: 1px dotted #ccc;">
			<div class="right-response">
				<section class="about">
					<div class="mt20">
						<label for="proj-num" class="left-label">已完成项目数</label>
						<input type="text" name="proj-num" value="<?=$page_about->proj_num?>"/>
						<span class="f13 ml15">人</span>
					</div>
					<div class="mt30">
						<label for="designer-num" class="left-label">入驻设计师</label>
						<input type="text" name="designer-num" value="<?=$page_about->designer_num?>"/>
						<span class="f13 ml15">人</span>
					</div>
					<div class="mt30">
						<label for="day-num" class="left-label">平均项目周期</label>
						<input type="text" name="day-num" value="<?=$page_about->day_num?>"/>
						<span class="f13 ml15">天</span>
					</div>
					<div class="mt20">
						<label class="left-label"></label>
						<button class="page-btn" id="page-about-mod">修改</button>
					</div>
				</section>	
			</div>
		</section>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#page-about-mod').click(function(){
		var proj_num = $("input[name='proj-num']").val();
		var designer_num = $("input[name='designer-num']").val();
		var day_num = $("input[name='day-num']").val();
		$.ajax({
	        type:"POST",
	        url:"/page/set_page_about",
	        data:{projNum:proj_num, designerNum:designer_num, dayNum:day_num},
	        dataType: "json",
	        success:function(data){
	        	alert(data.msg);         
	        },
	        error: function(msg){
	        	alert("ajax提交失败:"+msg);
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