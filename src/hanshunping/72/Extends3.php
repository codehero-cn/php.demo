<?php
	class A{
		public $n1=90;
	}
	class B extends A{
		public $n2="hello";
	}
	class C extends B{
	}
	$c=new C();
	echo $c->n1;

?>