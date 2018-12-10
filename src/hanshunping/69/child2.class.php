
<?php
	class child{
		public $name;
		//这里定义并初始化一个静态变量 $nums
		public static $nums=0;
		function __construct($name){
			$this->name=$name;
		}
		public function join_game(){
			//self::$nums
			self::$nums+=1;  //等同child::$nums+=1;
			
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
echo"<br/>有这".child::$nums;


?>