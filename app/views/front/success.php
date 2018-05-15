<style>
/*==================内容=================*/
.contents
{
	color: #434343;
}
.info-tip
{
	margin-top: 192px;
	font-size: 25px;
	font-weight: bold;
	height: 30px;
	line-height: 30px;
}
.contents-return
{
	padding-top: 100px;
	padding-bottom: 216px;
	height: 34px;
	text-align: center;
}
</style>
<div class="contents">
	<p class="info-tip">项目估价中...</p>
	<div class="contents-return"><button id="btn-ret" class="btn">返回首页</button></div>
</div>
<script>
$(document).ready(function(){
	$('#btn-ret').click(function(){
		window.location.href="/";
	});
});
</script>

