<?php
#[AllowDynamicProperties]
class View {

	function __construct() {
		//this is the main view;; returns all htmls
	}

	public function render($name, $donotAdd = false){
		if ($donotAdd == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			// this option is activated if you want to automatically include the the footer or header
			//require 'views/header.php';
			require 'views/' . $name . '.php';
			//require 'views/footer.php';	
		}
	}

}