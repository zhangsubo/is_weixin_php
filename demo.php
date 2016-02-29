<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>判断是否是安卓微信内置浏览器</title>
</head>
<body>
<p>判断是否是安卓微信内置浏览器的demo</p>
<?php
	if (strpos($_SERVER['HTTP_USER_AGENT'],'MicroMessenger')==true) {
		if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Linux') !== false ) {?>
			<h1>你用的是安卓手机，快去下载我们的软件！！！</h1>
		<?php }
		else  { ?>
			<h1>竟然用的是苹果，你可以滚了！！"</h1>
		<?php }
	}
	else{?>
		<h1>你竟然用的不是微信，快去换成微信！！</h1>
	<?php } ?>
</body>
</html>
