<?php
	$url="http://v.juhe.cn/toutiao/index?type=".$_GET['type']."&key=c699e89f1577064ecd4ae106e79ba761";
	//服务器代理后端
	$data = file_get_contents($url);
	echo $_GET['callback']."(".$data.")";
?>
