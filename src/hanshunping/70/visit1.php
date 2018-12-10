<?php
	class Person{
		public $name;
		protected   $age;
		private  $salary;

		function __construct($name,$age,$salary){
			$this->name=$name;
			$this->age=$age;
			$this->salary=$salary;
		}
		//成员方法
		function showInfo(){
			//这里说明在本类中可以使用public protected和private西欧
			echo $this->name."||".$this->age."||".$this->salary;
		}
		//我们可以通过方法来访问protected或者private变量
		//猎取这个人的薪水
		public function getSalary($user,$pass){
			if($user=="shunping"&& $pass=="123"){
				return $this->salary;
			}else{
				return "sorry,你无法看";
			}
			
		}
	
		//修改年龄，对输入的值，进行校验。
		public function setAge($age){
			if($age>1 && $age<120){
			$this->age=$age;
		 	}else{
			echo "年龄范围不对";
			}
		}
		//查看年龄
		public function getAge(){
			return $this->age;
		}
		function test11(){
			$this-> test12();			
		}
		protected function test12(){
			echo "test12 hello";
		}
		
	}
	//创建一个人
	$p1=new Person("孙悟空",30,1000);
	
	//看看孙悟空的薪水
	echo $p1->name;
	//echo $p1->age;  直接访问不可以。
	echo $p1->getSalary("shunping","123");
	
	
	//echo $p1->age;这个是访问不到的
	//修改年龄
	$p1->setAge(-23);
	echo $p1->getAge();
	$p1->test11();
?>
