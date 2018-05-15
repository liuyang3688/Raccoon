<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px;color:red;}
</style>
</head>
<body>
<div class="system-message">
	<?php if (isset($message)): ?>
		<h1>:)</h1>
		<p class="success"><?=$message?>&nbsp;<span class="detail"><?=$detail?></span></p>
	<?php else: ?>
		<h1>:(</h1>
		<p class="error"><?=$error?>&nbsp;<span class="detail"><?=$detail?></span></p>
	<?php endif; ?>
	<p class="jump">页面&nbsp;<b id="wait"><?=$waitSecond?></b>秒&nbsp;后自动 <a id="href" style="color:red;" href="<?=$jumpUrl?>">跳转</a></p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait');
var href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>
<!-- 
	$data['message'] = '登录成功';
	$data['error'] = '登录失败';
	$data['jumpUrl'] = '/back/login';
	$data['waitSecond'] = 3;

	$this->load->view('/tip/success', $data);
-->