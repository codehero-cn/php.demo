<?php
	class Monkey{
		public $age;
		public $name;
		
		public function climbing(){
			echo"猴子会爬树..";
		}
	}
	
	interface iBirdable{
		public function fly();
	}
	
	interface iFishable{
		public function swimming();
	}
	
	class LittleMonkey extends Monkey implements iBirdable,iFishable{
		public function fly(){
			echo "猴子会飞。。。";
		}
		public function swimming(){
			echo "猴子会游...";
		}
	}
	$littleMonkey=new LittleMonkey();
	$littleMonkey->climbing();
	$littleMonkey->fly();
	$littleMonkey->swimming();
	
	
?>
	