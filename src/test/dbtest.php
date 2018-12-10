
<meta charset="utf-8">
<?php
//下面的参数换成yourself      
$conn=mysqli_connect("localhost:3306","root","123456","mr");
 if($conn){
 echo "连接mysql数据库ok";
 }else{
        echo "连接数据库失败";
 }
?>
