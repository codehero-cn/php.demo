<html>
<head>
<title>我的计算器</title>
<script type="text/javascript">
	//js的内容....
	function check(){
		var num1Val=document.getElementById("num1").Value;
		var num2Val=document.getElementById("num2").Value;

		window.alert("test")
		if(isNaN(num1Val)||isNaN(num2Val)){
				window.alert("num1和num2必须是数");
				//如果返回false就返回false
				return false;
			}
		
		}

</script>


</head>
<h1>我的计算器</h1>
<form action="CalProcess.php" method="post" onsubmit="return check()">
num1:<input type="text" id="num1" name="num1"><br/>
num2:<input type="text" id="num2" name="num2"><br/>
oper:
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select> 

<input type="submit" value="揭交">

</form>
</html>
