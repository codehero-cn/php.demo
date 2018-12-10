<?php

	class  A{

		public function  test1($p){
			echo "接收一个参数";
			echo "<br/>接收到参数是";
			var_dump($p);

		}
		public function  test2($p){
			echo "接收两个参数<br/>";
			var_dump($p);
		}
		//构造函数
		public function __construct(){
			echo "<br/>".__CLASS__;
		}
		
		//这些提供一个__call 
		//__call 是它一个对象调用某个方法，而该方法不存在，则
		//系统会自动调用__call
		function __call($method,$p){
			var_dump($p);
			if($method=="test"){
				if(count($p)==1){
					$this->test1($p);
				}else if(count($p)==2){
					$this->test2($p);
				}
			}
		}

	}

	$a=new A();
	$a->test(1);
	$a->test(56,90);
	
	echo "<br/>".__LINE__;
	echo "<br/>".__FILE__;
	echo "<br/>".__DIR__;
	
?>

