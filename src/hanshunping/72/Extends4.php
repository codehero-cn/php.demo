<?php
class A{
	public $n1=90;
		//构造方法
		public function __construct(){
			
			echo "A __construct";
		}
	}

	class B extends A{

		function __construct(){
			echo "B __construct";
			//显式的调用父类的构造方法
			//A::__construct(900);
			parent::__construct();
	}

}

//创建B对象实例

$b=new B();
?>