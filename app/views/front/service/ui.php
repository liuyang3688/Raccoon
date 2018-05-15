<style>
/*==================内容=================*/
.contents
{
	color: #434343;
}
.contents-title
{
	height: 30px;
	line-height: 30px;
	padding-top: 80px;
	text-align: center;
	font-size: 25px;
	font-weight: bold;
}
.contents-steps
{
	padding-top: 35px;
}
.contents-steps-img
{
	width: 175px;
	height: 35px;
	margin: 0 auto;
}
.contents-steps-img-1
{
	background: url(assets/img/step1of3.png) no-repeat;
	background-size: 175px 30px;
}
.contents-steps-img-2
{
	background: url(assets/img/step2of3.png) no-repeat;
	background-size: 175px 30px;
}
.contents-steps-img-3
{
	background: url(assets/img/step3of3.png) no-repeat;
	background-size: 175px 30px;
}
.contents-next
{
	padding-top: 55px;
	padding-bottom: 80px;
	height: 34px;
	text-align: center;
}

#step-1 .contents-product
{
	width: 750px;
	margin: 0 auto;
	margin-top: 55px;
}
#step-1 .contents-product-div
{
	margin-bottom: 40px;
	height: 30px;
	overflow: hidden;
}
#step-1 .contents-product-refer
{
	height: 30px;
}
#step-1 .left-part
{
	float: left;
	text-align: right;
	width: 180px;
	padding-right: 50px;
	height: 30px;
	line-height: 30px;
	font-weight: bold;
	font-size: 16px;
}
#step-1 .mid-part
{
	float: left;
	width: 335px;
	height: 30px;
	padding-right: 20px;
	position: relative;
}
#step-1 .mid-part input
{
	margin-top: 2px;
	padding-left: 5px;
	width: 328px;
	height: 20px;
	border-width: 1px;
	border-top: #BAB3B3 solid 2px;
}
#step-1 .mid-part select
{
	margin-top: 2px;
	width: 335px;
	height: 26px;
	border-width: 1px;
	border-top: #BAB3B3 solid 2px;
}
#step-1 .right-part
{	
	float: left;
	width: 120px;
	height: 30px;
	line-height: 30px;
	color: red;
}
#step-1 .btn-refer-add
{
	/*position: absolute;
	top: 0px;
	right: 20px;
	font-size: 25px;
	line-height: 28px;
	color: #333;
	cursor: pointer;*/
	position: absolute;
	top: 0px;
	right: 22px;
	font-size: 22px;
	line-height: 26px;
	color: #333;
	cursor: pointer;
}
#step-1 .contents-product-designer-intro
{
	padding-left: 230px;
	margin-top: -30px;
	color: #FF3366;
	font-size: 13px;
}

#step-2 .contents-product
{
	/*width: 360px;*/
	width: 400px;
	margin: 0 auto;
	margin-top: 55px;
}
#step-2 .contents-product-div
{
	margin-bottom: 40px;
	/*height: 55px;*/
	overflow: hidden;
}
#step-2 .left-part
{
	float: left;
	width: 250px;
	height: 55px;
	line-height: 25px;
	font-weight: bold;
	font-size: 16px;
}
#step-2 .mid-part
{
	float: left;
	width: 110px;
	height: 55px;
	position: relative;
}

#step-2 button.btn-upload
{
	width: 107px;
	height: 34px;
	color: #FF3366;
	border: #FF3366 1px solid;
	border-radius: 5px;
	font-size: 13px;
	cursor: pointer;
}

#step-3 .contents-contact
{
	width: 750px;
	margin: 0 auto;
	margin-top: 55px;
}
#step-3 .contents-contact-div
{
	margin-bottom: 30px;
	height: 30px;
	overflow: hidden;
}
#step-3 .left-part
{
	float: left;
	text-align: right;
	width: 180px;
	padding-right: 50px;
	height: 30px;
	line-height: 30px;
	font-weight: bold;
	font-size: 16px;
}
#step-3 .mid-part
{
	float: left;
	width: 335px;
	height: 30px;
	padding-right: 50px;
	position: relative;
}
#step-3 .mid-part input
{
	margin-top: 2px;
	padding-left: 5px;
	width: 328px;
	height: 20px;
	border-width: 1px;
	border-top: #BAB3B3 solid 2px;
}
#step-3 .mid-part select
{
	margin-top: 2px;
	width: 335px;
	height: 26px;
	border-width: 1px;
	border-top: #BAB3B3 solid 2px;
}
#step-3 .right-part
{	
	float: left;
	width: 120px;
	height: 30px;
	line-height: 30px;
	color: red;
}

.hide
{
	display:none;
}
</style>
<link rel="stylesheet" href="assets/import/uploadify.css">
<script src="assets/import/jquery.uploadify.min.js"></script>
<section id="step-1">
<div class="contents">
	<div class="contents-title">描述你的产品</div>
	<div class="contents-steps">
		<div class="contents-steps-img contents-steps-img-1"></div>
	</div>
	<div class="contents-product">
		<div class="contents-product-div">
			<div class="left-part">产品名称</div>
			<div class="mid-part"><input name="product-name" type="text" /></div>
			<div id="product-name-tip" class="right-part">*</div>
		</div>
		<div class="contents-product-div">
			<div class="left-part">产品形式</div>
			<div class="mid-part">
				<select name="product-form" class="contents-product-form-select">
					<option value="web">网页</option>
					<option value="app">App</option>
					<option value="h5">H5</option>
				</select>	
			</div>
			<div id="product-form-tip" class="right-part">*</div>
		</div>
		<div class="contents-product-div">
			<div class="left-part">产品类型</div>
			<div class="mid-part">
				<select name="product-type" class="contents-product-type-select">
					<option value="social">社交</option>
					<option value="education">教育</option>
					<option value="finance">金融</option>
					<option value="ecommerce">电子商务</option>
					<option value="game">游戏</option>
					<option value="tool">工具</option>
					<option value="service">企业服务</option>
					<option value="tourism">旅游</option>
					<option value="medical">医疗健康</option>
					<option value="o2o">O2O</option>
					<option value="harware">智能硬件</option>
					<option value="other">其他</option>
				</select>	
			</div>
			<div id="product-type-tip" class="right-part">*</div>
		</div>
		<div class="contents-product-div">
			<div class="left-part">页面数量</div>
			<div class="mid-part"><input name="product-pagenum" type="text" /></div>
			<div id="product-pagenum-tip" class="right-part">*</div>
		</div>
		<div class="contents-product-div">
			<div class="left-part">风格描述</div>
			<div class="mid-part"><input name="product-style" type="text" placeholder="例：商务、简洁、科技感"/></div>
			<div id="product-style-tip" class="right-part">*</div>
		</div>
		<div class="contents-product-refer">
			<div class="left-part">产品竞品或参考产品</div>
			<div class="mid-part">
				<input name="product-refer" type="text" placeholder="竞品链接"/>
				<div  id="btn-refer-add" class="btn-refer-add">+</div>
			</div>
			<div id="product-refer-tip" class="right-part">url以www开始</div>
		</div>
		<style>
			.prod-refer-list
			{
				margin-left: 230px;
				width: 335px;
				margin-bottom: 30px;
			}
			.prod-refer-list .refer-line
			{
				position: relative;
				padding-left:5px;
				height: 25px;
				line-height: 25px;
				border: 1px solid #aaa;
				margin-top:-1px;
			}
			.prod-refer-list .btn-refer-remove
			{
				position: absolute;
				top: 0px;
				right: 5px;
				font-size: 25px;
				line-height: 25px;
				color: #333;
				cursor: pointer;
			}
			.prod-refer-list .refer-link
			{
				font-size: 13px;
			}
		</style>
		<div id="product-refer-list"  class="prod-refer-list">
			<!-- <div class="refer-line"><span class="refer-link">www.baidu.com</span><div id="btn-refer-remove" class="btn-refer-remove">-</div></div> -->
		</div>
		<div class="contents-product-div">
			<div class="left-part">期望设计师水平</div>
			<div class="mid-part">
				<select name="designer-level" class="contents-product-designer-select">
					<option value="five-star">五星</option>
					<option value="four-star">四星</option>
					<option value="three-star">三星</option>
				</select>
			</div>
			<div id="designer-level-tip" class="right-part">*</div>
		</div>
		<div class="contents-product-designer-intro">设计师水平分为三级，分别为三星，四星，五星级，星级根据<BR>设计师工作经历、作品质量、甲方评价综合评定</div>
	</div>
	<div class="contents-next">
		<button id="btn-step-1-next" class="btn">下一步</button>
	</div>
</div>
</section>
<section id="step-2" class="hide">
<div class="contents">
	<div class="contents-title">上传相关附件</div>
	<div class="contents-steps">
		<div class="contents-steps-img contents-steps-img-2"></div>
	</div>
	<div class="contents-product">
		<div class="contents-product-div">
			<div class="left-part">上传产品VI图片<BR><span class="f12 c-bc n">包括但不限于产品LOGO,VI手册</span></div>
			<div class="mid-part"><input id="upload_vi" name="uploadify" type="file"></div>
			<div id="file_queue_vi"></div>
		</div>
		<div class="contents-product-div">
			<div class="left-part">上传产品线框图<BR><span class="f12 c-bc n">包括但不限于产品页面功能、布局、跳转</span></div>
			<div class="mid-part"><input id="upload_xk" name="uploadify" type="file"></div>
			<div id="file_queue_xk"></div>
		</div>	
	</div>
	<div class="contents-next">
		<button id="btn-step-2-prev" class="btn">上一步</button>
		<button id="btn-step-2-next" class="btn">下一步</button>
	</div>
</div>
</section>
<section id="step-3" class="hide">
<div class="contents">
	<div class="contents-title">联系信息</div>
	<div class="contents-steps">
		<div class="contents-steps-img contents-steps-img-3"></div>
	</div>
	<div class="contents-contact">
		<div class="contents-contact-div">
			<div class="left-part">公司名称</div>
			<div class="mid-part"><input name="contact-company" type="text" /></div>
			<div id="contact-company-tip" class="right-part">*</div>
		</div>
		<div class="contents-contact-div">
			<div class="left-part">所在城市</div>
			<div class="mid-part"><input name="contact-city" type="text" /></div>
			<div id="contact-city-tip" class="right-part">*</div>
		</div>
		<div class="contents-contact-div">
			<div class="left-part">联系人</div>
			<div class="mid-part"><input name="contact-person" type="text" /></div>
			<div id="contact-person-tip" class="right-part">*</div>
		</div>
		<div class="contents-contact-div">
			<div class="left-part">手机号</div>
			<div class="mid-part"><input name="contact-phone" type="text" /></div>
			<div id="contact-phone-tip" class="right-part">*</div>
		</div>
		<div class="contents-contact-div">
			<div class="left-part">邮箱</div>
			<div class="mid-part"><input name="contact-email" type="text" /></div>
			<div id="contact-email-tip" class="right-part">*</div>
		</div>
	</div>
	<div class="contents-next">
		<button id="btn-step-3-prev" class="btn">上一步</button>
		<button id="btn-submit" class="btn">提交</button>
	</div>
</div>
</section>
<script>
$(document).ready(function(){
	// 添加产品参考连接
	$('#btn-refer-add').click(function(){
		var link = $('input[name="product-refer"]').val();
		var regUrl = /([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
		$('#product-refer-tip').text("");
		if(link == "")
		{
			$('#product-refer-tip').text('url不能为空');
			return false;
		}
		if(!regUrl.test(link))
		{
			$('#product-refer-tip').text('url非法');
			return false;
		}
		$('#product-refer-tip').text('url以www开始');
		var html = '<div class="refer-line"><span class="refer-link">'+link+'</span><div id="btn-refer-remove" class="btn-refer-remove">-</div></div>';
		$('#product-refer-list').append(html);
		$('input[name="product-refer"]').val("");
	});
	// 删除产品参考连接
	$(document).on('click','#btn-refer-remove',function(){
		$(this).parent().remove();
	});
	// 上传vi附件
	$("#upload_vi").uploadify({
		'swf': 'assets/import/uploadify.swf',
		'uploader': '/service/upload_ui_vi',
		'buttonText': '点击上传',
		'queueID': 'file_queue_vi',
		'auto': true,
		'multi': true
	});
	// 上传线框附件
	$("#upload_xk").uploadify({
		'swf': 'assets/import/uploadify.swf',
		'uploader': '/service/upload_ui_xk',
		'buttonText': '点击上传',
		'queueID': 'file_queue_xk',
		'auto': true,
		'multi': true
	});
	$('#btn-submit').click(function(){
		if($("input[name='contact-company']").val() == "")
		{
			$('#contact-company-tip').text("请填写公司名称！");
			return false;
		}
		$('#contact-company-tip').text("√");
		if($("input[name='contact-city']").val() == "")
		{
			$('#contact-city-tip').text("请填写所在城市！");
			return false;
		}
		$('#contact-city-tip').text("√");
		if($("input[name='contact-person']").val() == "")
		{
			$('#contact-person-tip').text("请填写联系人！");
			return false;
		}
		$('#contact-person-tip').text("√");
		var regPhone =/^1[3|4|5|8][0-9]\d{4,8}$/;
		var regMail = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
		var phone = $("input[name='contact-phone']").val();
		var email = $("input[name='contact-email']").val();
		if( phone == "")
		{
			$('#contact-phone-tip').text("不能为空！");
			return false;
		}
		if(!regPhone.test(phone))
		{
			$('#contact-phone-tip').text("格式错误！");
			return false;
		}
		$('#contact-phone-tip').text("√");
		if( email == "")
		{
			$('#contact-email-tip').text("不能为空！");
			return false;
		}
		if( !regMail.test(email))
		{
			$('#contact-email-tip').text("格式错误！");
			return false;
		}
		$('#contact-email-tip').text("√");
		// 提取已输入内容
		var links='';
		var k=0;
		$("#product-refer-list .refer-link").each(function(){
			if(k==0)
			{
				links+= $(this).text();
			}
			else
			{
				links+= ',' + $(this).text();
			}
			k++;
		});
		$.ajax({
            type:"POST",
            url:"/service/post_ui",
            data:{
            	prodName:$("input[name='product-name']").val(),
            	prodForm:$("select[name='product-form']").val(),
            	prodType:$("select[name='product-type']").val(),
            	pageNum:$("input[name='product-pagenum']").val(),
            	prodStyle:$("input[name='product-style']").val(),
            	prodRefer:links,
            	desLevel:$("select[name='designer-level']").val(),
            	contComp:$("input[name='contact-company']").val(),
            	contCity:$("input[name='contact-city']").val(),
            	contPerson:$("input[name='contact-person']").val(),
            	contPhone:$("input[name='contact-phone']").val(),
            	contEmail:$("input[name='contact-email']").val(),
            	token:'20151017'
            },
            dataType: "json",
            success:function(data){
            	alert(data.msg); 
            	window.location.href='/service/success';        
            },
            error: function(){
            	alert("ajax提交失败");
            }         
        });
		
	});
	$('#btn-step-1-next').click(function(){
		// 检查参数
		if($("input[name='product-name']").val() == "")
		{
			$('#product-name-tip').text("请填写产品名称！");
			return false;
		}
		$('#product-name-tip').text("√");
		if($("input[name='product-pagenum']").val() == "")
		{
			$('#product-pagenum-tip').text("请填写页面数量！");
			return false;
		}
		$('#product-pagenum-tip').text("√");
		if($("input[name='product-style']").val() == "")
		{
			$('#product-style-tip').text("请填写风格描述！");
			return false;
		}
		$('#product-style-tip').text("√");
		$('#step-1').hide();
		$('#step-2').show();
	});
	$('#btn-step-2-prev').click(function(){
		$('#step-2').hide();
		$('#step-1').show();
	});
	$('#btn-step-2-next').click(function(){
		$('#step-2').hide();
		$('#step-3').show();
	});
	$('#btn-step-3-prev').click(function(){
		$('#step-3').hide();
		$('#step-2').show();
	});
});
</script>