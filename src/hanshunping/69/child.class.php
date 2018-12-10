
<?php
/*演示全局变量
 	//定义了一个全局变量
	global  $a;
	//给全局变量$a赋值
	$a=9;
	function test1(){
		global  $a;
		$a=90;
	}
	//调用了函数
	test1();
	echo $a;
*/
	//定义,玩游戏的全局变量
	global $global_nums;  
	$global_nums=90;
	
	class child{
		public $name;
		function __construct($name){
			$this->name=$name;
		}
		public function join_game(){
			//声明一下使用全局变量
			global $global_nums;
			
			$global_nums+=1;
			echo $this->name."加入堆雪人游戏";
	}
}
//创建三个小孩
$child1=new child("李愧");
$child1->join_game();
$child2=new child("张飞");
$child2->join_game();
$child3=new child("唐僧");
$child3->join_game();
//看看有多少人玩游戏。
echo"<br/>".$global_nums;


?>