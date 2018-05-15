<style>
/*==================内容=================*/
.contents
{
	color: #434343;
}
.contents-title
{
	height: 30px;
	padding-top: 110px;
	text-align: center;
	font-size: 25px;
	font-weight: bold;
}
.contents-type
{
	padding-top: 50px;
	height: 150px;
	text-align: center;
}
.contents-type-ul
{
	width: 330px;
	overflow: auto;
	margin: 0 auto;
}
.contents-type-li
{
	margin: 5px 20px;
	width: 120px;
	height: 120px;
	line-height: 120px;
	font-size: 30px;
	font-weight: bold;
	cursor: pointer;
	text-align: center;
	/*background-color: #eee;*/
}
.contents-type-li-cur,.contents-type-li:hover
{
	/*background-color: #ccc;*/
	color: #f60d80;
}
.contents-features
{
	height: 15px;
	padding-top: 55px;
	text-align: center;
}
.contents-features-font
{
	font-size: 13px;
	padding-right: 40px;
	padding-left: 20px;
	background: url(/resource/img/circle.png) no-repeat;
}
.contents-next
{
	padding-top: 75px;
	padding-bottom: 75px;
	height: 34px;
	text-align: center;
}
.hide
{
	display:none;
}
</style>
<div class="contents">
	<div class="contents-title">你需要哪种设计服务？</div>
	<div class="contents-type">
		<ul class="contents-type-ul">
			<li id="menu-logo" class="contents-type-li contents-type-li-cur">LOGO</li>
			<li id="menu-ui" class="contents-type-li">UI</li>
		</ul>
		<input type="checkbox" name="logo" hidden="hidden"/>
		<input type="checkbox" name="ui" hidden="hidden"/>
	</div>
	<div id="menu-logo-features" class="contents-features">
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>LOGO设计包括产品LOGO设计和产品ICON设计</span>
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>BAT视觉设计师亲自操刀</span>
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>三版初稿选择</span>
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>一周输出AI文件</span>
	</div>
	<div id="menu-ui-features" class="contents-features hide">
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>专业PM帮助梳理产品功能及流程</span>
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>BAT视觉设计师亲自操刀</span>
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>三版初稿选择</span>
		<span class="contents-features-font"><span class="f20 c-f36 mr5 b">·</span>平均项目周期14天</span>
	</div>
	<div class="contents-next">
		<button id="btn-next" class="btn">下一步</button>
	</div>
</div>

<script>
$(document).ready(function(){
	$("input[name='logo']").attr('checked',true);
	$("input[name='ui']").removeAttr("checked");
	
	$('#btn-next').click(function(){
		if($("input[name='logo']").is(':checked')){
			window.location.href='/service/logo';
		}else{
			window.location.href='/service/ui';
		}
	});
	$("#menu-logo").click(function(){
		$('#menu-ui').removeClass("contents-type-li-cur");
		$(this).addClass("contents-type-li-cur");
		$("#menu-logo-features").show();
		$("#menu-ui-features").hide();
		//选中logo,去掉ui
		$("input[name='logo']").prop("checked",true);
		$("input[name='ui']").prop("checked",false);
	});
	$("#menu-ui").click(function(){
		$('#menu-logo').removeClass("contents-type-li-cur");
		$(this).addClass("contents-type-li-cur");
		$("#menu-ui-features").show();
		$("#menu-logo-features").hide();
		//选中ui,去掉logo
		$("input[name='logo']").prop("checked",false);
		$("input[name='ui']").prop("checked",true);
	});
});
</script>