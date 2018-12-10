<?php
//test1
/* 	class Person{
 	public static $a=90;
	 }
 	echo Person::$a;    //输出为90
 */


	class Person{
			public static $a=900;
			public function __construct(){
				//this->a=45;
				echo self::$a."--".Person::$a;
				
			}
			
	}
	echo  Person::$a;//还没写完。
	$p1=new Person();

?>