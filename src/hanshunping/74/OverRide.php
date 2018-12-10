<?php
	//抽象一个Animal类
	class Animal{
		public $name;
		protected $price;
		
		function cry(){
			echo "不知道动物怎么叫..";
		}
	}
	
	class Dog extends Animal{
		//覆盖，是逻辑上的覆盖。
		function cry(){
			echo"小狗汪汪叫";
			parent::cry();
		}	
	}
	
	class Pig extends Animal{
		//覆盖
		function cry(){
			echo "哼哼叫..";
		}
	}
	
	//创建一只狗
	$dog1=new Dog();
	$dog1->cry();
	$pig1=new Pig();
	$pig1->cry();
?>