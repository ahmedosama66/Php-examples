<?php
	class Hello {
		//properties (variables - constant)
		public $color = 'red';

		//method (functions)
		public function isSecured (){
			echo ' hello';
		}
	}



	$obj = new Hello;

	echo $obj -> color;
	$obj -> isSecured();
?>