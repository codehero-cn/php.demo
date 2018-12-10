<?php
    //父类的什么属性和方法被继承
    class A{
    	public $n1=1;
    	protected $n2="hello";
    	private $n3=11.2;
    	
    	public function test1(){
    		
    		echo "test1()";
    	}
    	protected function test2(){
    		
    		echo "test2()";
    	}
		private function test3(){
			echo "test3()";
			
		}    
    }
    class SubClass extends A{
    	function show(){
    		echo $this->n2;
    		//echo $this->n3;  //测试用
    	}
    }
    //创建SubClass对象
    $Sub1=new SubClass();
    echo $Sub1->n1;
    $Sub1->test1();
    echo $Sub1->show();
        
    
?>