<?php
	//这句话会出客户端发送一个302状态码，告诉浏览器重新访问b.php
	//header 可以向http响应头里写入信息。
	header("Location:b.php");
?>
	