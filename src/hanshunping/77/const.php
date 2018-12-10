<?php


	class A{
		//常量在定义的时候，必须给初值.
		//const 关键字前面不要带修饰符号.
		const TAX_RATE=0.08;

		public function payTax($val){
			//常量不能修改.
			//A::TAX_RATE=0.01;
			//return $val*self::TAX_RATE; 【ok】
			return $val*A::TAX_RATE; //【ok】
		}
	}

	$a=new A();
	echo $a->payTax(200);
?>
