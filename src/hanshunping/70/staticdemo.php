<?php
	class Student{
		public static $fee;
		public $name;
		//构造函数
		function __construct($name){
			$this->name=$name;
			
		}
		//入学
		public static function  enterSchool($ifee){
			self::$fee+=$ifee;
		}
		//获取总学费
		public static function  getFee(){
			return self::$fee;
		}
	}
	//创建学生
	$stu1=new Student("小倩");
	//1通过类名来调用静态方法
	//Student::enterSchool(340);
	$stu1->enterSchool(340);
	$stu2=new Student("小菜");
	$stu2->enterSchool(30);
	echo "总学费是".Student::getFee();
?>