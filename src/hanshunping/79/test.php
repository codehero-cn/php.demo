<?php
	echo time();
	//输出当前日期 实际
	//默认时期是UTC，我们中国差8小时
	//设置1.页面设置2.在php.ini设置
	date_default_timezone_set("PRC");
	//格式
	echo date("Y-m-d G-i-s");
	
	
?>