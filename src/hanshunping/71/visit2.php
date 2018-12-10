<?php
	class A{
		private $n1;
		private $n2;
		private $n3;
		
		//使用__set方法来管理所有的属性。
		public function __set($pro_name,$pro_val){
			$this->pro_name=$pro_val;
		}
		//使用__get可以获取所有的属性值
		public function __get($pro_name){
			
			if(isset($pro_name)){
				return $this->pro_name;
				
			}else{
			return null;
			}
		
		}
	}
	$a1=new A();
	$a1->n1="hello";
	echo $a1->n1;
	$a1->n2=890;
	echo "||".$a1->n2;


?>